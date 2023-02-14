<?php require ('./includes/data-collector.php');?> <!-- Muss zuerst sein wegen start_session() -->
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
            <label for='<?php echo $rowC['0']['tag']; ?>' class='form-label'><?php echo $rowC['0']['englisch']; ;?></label>
            <select id='<?php echo $rowC['0']['tag']; ?>' name='<?php echo $rowC['0']['tag']; ?>' class='form-select' aria-label='Default select example'>
                
                <?php
                    for ($i= 3; $i < 14; $i++) {
                        $tag = $rowC[$i]['tag'];
                        $content = $rowC[$i]['englisch'];
                        echo "<option value='$tag'>$content</option>";
                    }
                ?>
            </select>

            <!-- Anzahl Fragen -->
            <label for='<?php echo $rowC['1']['tag']; ?>' style='margin-top:20px;' class='form-label'><?php echo $rowC['1']['englisch']; ;?></label>
            <input id='<?php echo $rowC['1']['tag']; ?>' name='<?php echo $rowC['1']['tag']; ?>' type='number' 
                   min='2' max='40' value='10'
                   style='width:100px'  class='form-control'>

            <!-- Zeit Pro Frage -->
            <label for='<?php echo $rowC['2']['tag']; ?>' style='margin-top:20px;' class='form-label'><?php echo $rowC['2']['englisch']; ;?></label>
            <input id='<?php echo $rowC['2']['tag']; ?>' name='<?php echo $rowC['2']['tag']; ?>' type='number' 
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