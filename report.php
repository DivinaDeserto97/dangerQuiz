<?php require ('./includes/data-collector.php'); // Muss zuerst sein wegen start_session()
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>report</title>

    <?php require('includes/srcUp.php'); ?>


</head>
<body>

    <?php require('includes/header.php')?>
    <?php

    /* rechne total mögliche punktezahl aus (maxPoints) */

    // Maximal mögliche Punkte
    $maxPoints = $_SESSION['quiz']['questionNum'];

    $maxPoints = 0;
    $achievedPoints = 0;

        /*
            Bestimme die Anzahl der erreichten Punkte. Dazu wird das
            'value'-Attribut des Feldes 'single-choice' ausgewertet.

            Wichtig: Sämtliche $_SESSION-Werte müssen fertig gesetzt sein,
                     bevor die Punktzahlen gesammelt werden dürfen.
        */
        
        

        // extract question data
        foreach ($_SESSION as $name => $value) {
            if (str_contains($name, "question-")) {
                // $value contains question-data
                foreach ($value as $key => $val) {
                    // depending upon $key decide and act.
                    if ($key === 'correct') { 
                        // number of possible correct answers.
                        $maxPoints += intval($val); 
                    } elseif ($key === 'answer') { 
                        // radio button wert zu radio button bisher erreichten Punkten addieren
                        $achievedPoints += intval($val);
                    // multiple choice
                    } elseif (str_contains($key, 'answer-')) {
                        // add checkbox value to sum of checkbox values
                        $achievedPoints += intval($val);
                    }
                }
            }
        }

        $resultPercent = (100 / $maxPoints) * $achievedPoints;
        echo "$resultPercent<br>";


        if ($resultPercent <= 30) {

        } elseif ($resultPercent > 30 && $resultPercent <= 60) {
            echo '30%';

        } elseif ($resultPercent > 60 && $resultPercent <= 80) {
            echo '60%';

        } elseif ($resultPercent > 80 && $resultPercent <= 95) {
            echo '60%';

        } elseif ($resultPercent > 95 && $resultPercent <= 100) {
            echo '80%';

        } else {
            // mehr als 100 %.
            echo '95%';
        }

        // test
        
        
    ?>

    <div class='row' style='padding: 20px;'>
        <div class='col-sm-8'>
            <!-- Bilanz -->
            <p>&nbsp;</p>
            <h3>
                <?php
                    $text1 = $rowC['16']['englisch'];
                    $text2 = $rowC['17']['englisch'];
                    $text3 = $rowC['18']['englisch'];

                    echo "$text1 $achievedPoints $text2 $maxPoints $text3";
                ?>
            </h3>
        </div>
        
        <p>
            <?php echo $rowC['2']['englisch']; ?>
        </p>
        
    </div>
    <?php require('includes/footer.php')?>
    
</body>
</html>