<?php require ('./includes/data-collector.php'); // Muss zuerst sein wegen start_session()
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="shortcut icon" href="assets/images/logos/logo-white-on-transp.png" type="image/x-icon">
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
                        if($achievedPoints < 0){
                            $achievedPoints = 0;
                        }
                    }
                }
                if (isset($value['result'])) { 
                    $points_multiple = floatval($value['result']);
                    $total_multiple = $total_multiple + $points_multiple; // Kurzform: $totalPoints += $points;
                }
            }
        }


        $resultPercent = (100 / $maxPoints) * $achievedPoints;
        //echo $resultPercent;
       

        $text_result;
        if ($resultPercent <= 30) {
            $text_result = $rowC['24']['englisch'];
            $img = $rowI['2']['pfad'];
        } elseif ($resultPercent > 30 && $resultPercent <= 60) {
            $text_result = $rowC['19']['englisch'];
            $img = $rowI['3']['pfad'];
        } elseif ($resultPercent > 60 && $resultPercent <= 80) {
            $text_result = $rowC['20']['englisch'];
            $img = $rowI['4']['pfad'];
        } elseif ($resultPercent > 80 && $resultPercent <= 95) {
            $text_result = $rowC['21']['englisch'];
            $img = $rowI['5']['pfad'];
        } elseif ($resultPercent > 95 && $resultPercent <= 100) {
            $text_result = $rowC['22']['englisch'];
            $img = $rowI['6']['pfad'];
        }

        // test
        
         $pfad ='/assets/images/resultPageImages/'. $img;

    ?>


<div class="pre-cont">
    <div class="cont-result">
            <div class='result-text' style='padding: 20px;'>
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
                    <?php echo $text_result ?>
                </p>

            </div>
            <div class="result-img">
                <img src='<?php echo $pfad ?>'  alt="owl gif">
            </div>

    <div class='row' style='padding: 20px;'>
        <div class='col-sm-8'>
            <!-- Bilanz -->
            <p>&nbsp;</p>

            <h3>
                <?php
                    $text1 = $rowC['16']['englisch'];
                    $text2 = $rowC['17']['englisch'];
                    $text3 = $rowC['18']['englisch'];

                ?>
            </h3>
        </div>
        
        <p>
            
        </p>
        

    </div>
</div>
    
            <?php require('includes/footer.php')?>
    
</body>
</html>