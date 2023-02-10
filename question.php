<?php require ('./includes/data-collector.php'); // Muss ganz am Anfang der Hauptseite sein, enthält start_session().
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Question</title>

    <?php require('./includes/srcUp.php'); ?>

</head>
<body>
    <?php require('includes/header.php');?>

    <?php
        // Bestimme die Anzahl der verfügbaren Fragen
        if (isset($quiz['questionIdSequence'])) {
            $id = $quiz['questionIdSequence'][$currentQuestionIndex];
        } 

        // Hole alle Datenfelder zur Frage mit $id von der Datenbank
        $question = fetchQuestionById($id, $dbConnection);
    ?>

    <!-- FORMULAR 'Fragestellung' -->
    <div class='rowQ' style='padding: 20px;'>
        <div class='col-sm-8'>
            <!-- Fragestellung -->
            <h7>Frage <?php echo ($currentQuestionIndex + 1); ?> von <?php echo $quiz['questionNum']; ?></h7>
            <p>&nbsp;</p>
            <h3><?php echo $question['question']; ?></h3>
            <p>&nbsp;</p>

            <form id='quiz-form' action='<?php echo $actionUrl; ?>' method='post' onsubmit="return navigate('next');">
                <?php 
                    $sqlStatementAwnser = $dbConnection->query("SELECT * FROM `answers` WHERE `question_id` = $id");
                    $rowA = $sqlStatementAwnser->fetchAll(PDO::FETCH_ASSOC);
                    
                    $sqlStatementQuestion = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
                    $rowQ = $sqlStatementQuestion->fetch(PDO::FETCH_ASSOC);

                    if(isset($rowQ) && isset($rowA)){
                        
                        if($rowQ['type'] === 'SINGLE'){
                            $tot = 0;
                            foreach($rowA as $value){
                                $awserID = 'awnser' . $value['id'];
                                $text = $value['text'];
                                $correct = $value['is_correct'];
                                $tot = $tot + intval($correct);
                                echo "<div class='form-check'>
                                        <input id='$awserID' name='single-choice' type='radio' value='$correct' class='form-check-input'>
                                        <label class='form-check-label' for='$awserID'>
                                            $text
                                        </label>
                                      </div>";
                            }
                        } elseif ($rowQ['type'] === 'MULTIPLE'){
                            $tot= 0;
                            foreach($rowA as $value){
                            $awserID = 'awnser' . $value['id'];
                                $text = $value['text'];
                                $correct = $value['is_correct'];
                                $tot = $tot + intval($correct);
                                echo "<div class='form-check'>
                                        <input id='$awserID' name='multiple-choice-$awserID' type='checkbox' value='$correct' class='form-check-input'>
                                        <label class='form-check-label' for='$awserID'>
                                            $text
                                        </label>
                                      </div>";
                            }
                        } else {
                            print "Error 1 by Tipe";
                        }
                    }
                ?>

                <!-- 
                    input type='hidden'
                        questionNum, lastQuestionIndex: mit PHP gesetzt
                        indexStep: mit JavaScript setIntValue(fieldId, value) verändert
                -->

                <input id='questionNum' type='hidden' value="<?php echo $quiz['questionNum']; ?>">
                <input id='correct' name='correct' type='hidden' value="<?php echo $tot; ?>">
                <input id='lastQuestionIndex' name='lastQuestionIndex' type='hidden' value='<?php echo $currentQuestionIndex; ?> '>
                <input id='indexStep' name='indexStep' type='hidden' value='1'>
                <?php $maxCount = formMaxCount();?>
                
                <input id='timerQuestion' name='timerQuestion' type='hidden' value='<?php echo $maxCount; ?>'>

                <!-- Validierungswarnung -->
                <p id='validation-warning' class='warning'></p>

                <p class='spacer'></p>

                <?php require('includes/footer.php'); ?>
                <script>startCountdown();</script>
            </form>
        </div>
    </div>

</body>
</html>