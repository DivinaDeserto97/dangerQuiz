<?php require ('./includes/data-collector.php'); // Muss ganz am Anfang der Hauptseite sein, enthält start_session().
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="shortcut icon" href="assets/images/logos/logo-white-on-transp.png" type="image/x-icon">
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
    <div class="pre-cont">
    <div class='cont-question'>
        <div class='cont-formular'>
            <!-- Fragestellung -->
            <?php
                $Question = $rowC['14']['englisch'];
                $index = $currentQuestionIndex + 1;
                $von = $rowC['15']['englisch'];
                $all = $quiz['questionNum'];
                echo "<h7>$Question $index $von $all</h7>";
            ?>
            <p>&nbsp;</p>
            <h3><?php echo $question['question']; ?></h3>
            <p>&nbsp;</p>

            <form id='quiz-form' action='<?php echo $actionUrl; ?>' method='post' onsubmit="return navigate('next')">
                <?php 
                    $sqlStatementQuestion = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
                    $rowQ = $sqlStatementQuestion->fetch(PDO::FETCH_ASSOC);
                    
                    $sqlStatementAwnser = $dbConnection->query("SELECT * FROM `answers` WHERE `question_id` = $id");
                    $rowA = $sqlStatementAwnser->fetchAll(PDO::FETCH_ASSOC);
                    $img = $rowQ['image'];
                    

                    $img = $rowQ['image'];
                    $path = 'assets/images/topic/'. $img;
                    
                    $img_dark = $rowQ['img-dark'];
                    $path_dark = 'assets/images/topic/'. $img_dark;

                    if((isset($rowQ)) && (isset($rowA))){
                        if($rowQ['type'] === 'SINGLE'){

                            $tot = 1;

                            foreach($rowA as $value){
                                $awserID = 'awnser' . $value['id'];

                                $text = $value['text'];
                                $correct = $value['is_correct'];


                                $tot = $tot + min(0, intval($correct));

                                echo "<div class='form-check'>
                                        <input id='$awserID' name='answer' type='radio' value='$correct' class='form-check-input'>
                                        <label class='form-check-label' for='$awserID'>

                                            $text
                                        </label>
                                      </div>";
                            }
                        } elseif ($rowQ['type'] === 'MULTIPLE'){
                            $tot= 0;

                            foreach($rowA as $value){
                                $awserID = $value['id'];

                                $text = $value['text'];
                                $correct = $value['is_correct'];
                                $intCorrect = intval($correct);
                                if ($intCorrect < 0) {
                                    $minCorrect = 0;
                                } else {
                                    $minCorrect = 1;
                                }
                                $tot = $tot + $minCorrect;
                                echo "<div class='form-check'>
                                        <input id='$awserID' name='answer-$awserID' type='checkbox' value='$correct' class='form-check-input'>
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

                <input id='correct' name='correct' type='hidden' value='<?php echo $tot; ?>'>

                <input id='lastQuestionIndex' name='lastQuestionIndex' type='hidden' value='<?php echo $currentQuestionIndex; ?> '>
                <input id='indexStep' name='indexStep' type='hidden' value='1'>

                <?php $maxCount = formMaxCount();?>
                <input id='timerQuestion' name='timerQuestion' type='hidden' value='<?php echo $maxCount; ?>'>

                <!-- Validierungswarnung -->
                <p id='validation-warning' class='warning'></p>

                <p class='spacer'></p>

                <?php require('includes/footer.php'); ?>
                <!-- <script>checkbox();</script> -->
            </form>
        </div>

        <div class='cont-img'>
                <img src='<?php echo $path; ?>' class='d-none d-lg-block' alt='owl gif'>
        </div>
        <div class='cont-img' style='display:none;'>
                <img src='<?php echo $path_dark; ?>' class='d-none d-lg-block' alt='owl gif'>
        </div>

    </div>

    </div>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>