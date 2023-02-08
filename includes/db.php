<?php
// Verbinde mit mySQL, mit Hilfe eines PHP PDO Object
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);

// Setze den Fehlermodus für Web Devs
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// QUERY FUNCTIONS ---------------------------------------------------------------------

function fetchQuestionById($id, $dbConnection) {
    $sqlStatementAwnser = $dbConnection->query("SELECT * FROM `answers` WHERE `question_id` = $id");
    $rowA = $sqlStatementAwnser->fetchAll(PDO::FETCH_ASSOC);

    $sqlStatementQuestion = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
    $rowQ = $sqlStatementQuestion->fetch(PDO::FETCH_ASSOC);

    // print_r($rowQ);

    /*
        Gibt Zeilendaten als assoziativer Array zu genau einer Frage zurück.
        Beispiel: $rowQ = array('id' => 9999, 'topic' => geography, ...)
    */
    return $rowQ; 
}

function fetchQuestionIdSequence($topic, $questionNum, $dbConnection) {
    // SELECT * FROM TableName ORDER BY RAND() LIMIT N;
    $query = "SELECT `id` FROM `questions` WHERE `topic`= '$topic' ORDER BY RAND() LIMIT $questionNum";
    $sqlStatementQuestion = $dbConnection->query($query);
    $rowQs = $sqlStatementQuestion->fetchAll(PDO::FETCH_COLUMN, 0); // `id` ist Spalte (column) 0.

    // print_r($rowQs);

    return $rowQs;
}

?>