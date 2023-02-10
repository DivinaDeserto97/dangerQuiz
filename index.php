<!-- huhu! -->

<?php require ('./includes/data-collector.php'); // Muss zuerst sein wegen start_session()
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Home</title>

    <?php require('./includes/srcUp.php'); ?>

</head>
<body>
    <?php require('includes/header.php');?>
    <!-- FORMULAR 'Themenwahl' -->
    <div style='padding: 20px;'>
        <form id='quiz-form' action='question.php' method='post' onsubmit="return navigate('next');">
            <!-- Themenwahl -->
            <label for='quiz-topic' class='form-label'>Quiz Thema - bitte auswählen!</label>
            <select id='topic' name='topic' class='form-select' aria-label='Default select example'>
            <option value='music'>Music</option>
                <option value='ch-norris'>Chuck Norris</option>
                <option value='animals'>Animals</option>
                <option value='movies'>Movies</option>
                <option value='d-n-d'>Dungeons & Dragons</option>
                <option value='astronautics'>Astronautics</option>
                <!-- option value='technology'>Technology</option -->
                <!-- option value='ai'>Artificial Intelligence</option -->
                <option value='geography'>Geography</option>
                <!-- option value='sports'>Sports</option-->
                <option value='science'>Science</option>
                <option value='informatics'>Informatics</option>
                <option value='gen-knowledge'>General Knowledge</option>
                <option value='basketball'>Basketball</option>
            </select>

            <!-- Anzahl Fragen -->
            <label for='questionNum' style='margin-top:20px;' class='form-label'>Number of questions:</label>
            <input id='questionNum' name='questionNum' type='number' 
                   min='2' max='40' value='10'
                   style='width:100px'  class='form-control'>

            <!-- Zeit Pro Frage -->
            <label for='timerQuestion' style='margin-top:20px;' class='form-label'>Time per question:</label>
            <input id='timerQuestion' name='timerQuestion' type='number' 
                   min='10' max='90' value='30'
                   style='width:100px'  class='form-control'>      

            <!-- 
                input type='hidden'
                    lastQuestionIndex: mit PHP gesetzt
                    indexStep: mit JavaScript setIntValue(fieldId, value) verändert
            -->
            <input id='lastQuestionIndex' name='lastQuestionIndex' type='hidden'  value='-1'>
            <input id='indexStep' name='indexStep' type='hidden' value='1'>

            <!-- Validierungswarnung -->
            <p id='validation-warning' class='warning'></p>


            <?php require('includes/footer.php'); ?>
        </form>
    </div>

</body>
</html>