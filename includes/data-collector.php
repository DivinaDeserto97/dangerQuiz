<?php
/*
    session_start() Muss vor dem Gebrauch von $_SESSION ausgeführt werden.
    Dazu muss das data-collector.php ganz am Anfang einer Hauptseite per 
    'include' oder 'require' referenziert werden.
*/
session_start();

// Hilfswerkzeuge laden
include 'tools.php';
include 'db.php';

// Falls verfügbar, hole die Quiz-Daten aus der Session.
if (isset($_SESSION['quiz'])) $quiz = $_SESSION['quiz'];
else $quiz = null;

/*
    Hole die Indexnummer der letzten Frage aus $_POST 'lastQuestionIndex'.
    $lastQuestionIndex wird für question.php und report.php verwendet, jedoch
    nicht für index.php.
*/
if (isset($_POST['lastQuestionIndex'])) {
    // https://www.php.net/manual/en/function.intval.php
    $lastQuestionIndex = intval($_POST['lastQuestionIndex']);
}
else {
    // -1 soll bedeuten, dass das Quiz noch nicht gestartet wurde.
    $lastQuestionIndex = -1;
}

// Abhängig von der aktuellen Hauptseite: Bereite die benötigten Seitendaten vor.
$scriptName = $_SERVER['SCRIPT_NAME']; // https://www.php.net/manual/en/reserved.variables.server.php

// index.php (Startseite) ----------------------------------------------------------------
if (str_contains($scriptName, 'index')) { // https://www.php.net/manual/en/function.str-contains.php
    // Lösche die Daten, inklusive bestehende Quiz-Daten in der $_SESSION.
    session_unset();

    // Setze explizit auch $quiz zurück (Konsistenz gegenüber Session).
    $quiz = null;
}
// question.php (Frageseite) -------------------------------------------------------------
else if (str_contains($scriptName, 'question')) {
    if ($lastQuestionIndex === -1) { // -1 bedeutet, dass das Quiz noch nicht gestartet wurde.
        // Starte ein neues Quiz ...
        $questionNum = intval($_POST['questionNum']);

        $questionIdSequence = fetchQuestionIdSequence(
            $_POST['topic'], 
            $questionNum, 
            $dbConnection
        );

        // Berechne die wirklich mögliche Anzahl von Fragen
        $questionNum = min(count($questionIdSequence), $questionNum);
        
        $quiz = array(
            'topic' => $_POST['topic'], 
            'questionNum' => $questionNum,
            'lastQuestionIndex' => $lastQuestionIndex,
            'currentQuestionIndex' => -1,
            'questionIdSequence' => $questionIdSequence
        );
    }

    /*
        Variable für den index-Schritt. Die Richtung dieses 'indexStep'
        kann die folgenden Werte einnehmen:

        -1 bedeutet 'vorangehender Frage-Index'.
         0 bedeutet 'bei der aktuellen Frage bleiben'.
         1 bedeutet 'nächster Frage-Index'.

        Der 'indexStep' wird durch JavaScript in main.js per
        setElementValue('indexStep', indexStep) in das Hidden Field
        mit dem gleichen Namen gesetzt. PHP holt dann diesen Wert im
        $_POST ab.

        Hinweis: 'Frage-Index' steht hier für den Index im 
                 'questionIdSequence'-Array, NICHT für die 
                 'id' der Frage in der Tabelle.
    */
    $indexStep = 1;

    if (isset($_POST['indexStep'])) {
        // https://www.php.net/manual/en/function.intval.php
        $indexStep = intval($_POST['indexStep']);
    }

    // Index der aktuellen Frage, sowie für das Quiz setzen.
    $currentQuestionIndex = $lastQuestionIndex + $indexStep;

    /*
        JavaScript entscheidet beim Klicken auf die 'previous' oder 'next'
        Buttons, welche Zielseite angesprungen wird. 

        Siehe main.js, function navigate(direction)
        
        PHP führt keine Checks und Redirects durch. Grund: Die Redirects 
        sind knifflig mit Header-Manipulationen umzusetzen (aufpassen darauf, 
        wann session_start() ausgelöst wird).

        if ($currentQuestionIndex < 0) {
            // Navigation von der 1. Frage zur Startseite: Redirect zur Startseite
        }
        else if ($currentQuestionIndex < $quiz['questionNum']) {
            // Fragestellung anzeigen 
        }
        else { // $currentQuestionIndex >= $quiz['questionNum']
            // Redirect zur Auswertungsseite
        }
    */
    if ($currentQuestionIndex + 1 < $quiz['questionNum']) {
        // Fragestellung anzeigen 
        $actionUrl = 'question.php';
    }
    else { // $currentQuestionIndex >= $quiz['questionNum']
        // Redirect zur Auswertungsseite
        $actionUrl = 'report.php';
    }
}
// report.php (Auswertungsseite) ---------------------------------------------------------
else if (str_contains($scriptName, 'report')) {
    // Die Reportseite ist ausserhalb der Fragesequenz.
    $currentQuestionIndex = -1;
}
else {
    // Unbekannte URL
}

// Speichere Quizparameter und Post-Daten der letzten Frage in der Session.
if (isset($quiz) && $currentQuestionIndex >= 0) {
    $_SESSION['quiz'] = $quiz;
    $_SESSION['quiz']['lastQuestionIndex'] = $lastQuestionIndex;
    $_SESSION['quiz']['currentQuestionIndex'] = $currentQuestionIndex;
}

if ($lastQuestionIndex >= 0) { // Achtung: Nur für gültige Fragenindexe speichern.
    $questionName = 'question-' . $lastQuestionIndex;
    $_SESSION[$questionName] = $_POST;
}

// DEVONLY: Gib die aktuelle $_SESSION in die Seite aus.
// prettyPrint($_SESSION, '$_SESSION = ');
?>




