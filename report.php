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
        /*
            Bestimme die Anzahl der erreichten Punkte. Dazu wird das
            'value'-Attribut des Feldes 'anwser' ausgewertet.

            Wichtig: Sämtliche $_SESSION-Werte müssen fertig gesetzt sein,
                     bevor die Punktzahlen gesammelt werden dürfen.
        */
        $totalPoints = 0;

        foreach ($_SESSION as $name => $value) {
            if (str_contains($name, 'question-')) {
                // Falls keine Antwort gewählt wurde fehlt 'anwser' im $_POST.
                if (isset($value['anwser'])) { 
                    $points = intval($value['anwser']);
                    $totalPoints = $totalPoints + $points; // Kurzform: $totalPoints += $points;
                }
            }
        }

        // Maximal mögliche Punkte
        $maxPoints = $_SESSION['quiz']['questionNum'];
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

                    echo "$text1 $totalPoints $text2 $maxPoints $text3";
                ?>
            </h3>
        </div>
        <p>&nbsp;</p>
        
    </div>
    <?php require('includes/footer.php')?>
    
</body>
</html>