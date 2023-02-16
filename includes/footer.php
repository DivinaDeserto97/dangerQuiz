
<footer class='row footer-light fixed-bottom px-2 py-1'>
    <div class='col-1'>
        <?php
        if (str_contains($scriptName, 'question')) {
            echo "<button id='showSession' type='button' class='btn-next'>
                    <i class='fa-solid fa-timer' id='next-icon'></i>
                  </button>";
        } elseif (str_contains($scriptName, 'report')) {
            echo "<button class='btn-next w-100' onclick='document.location=`/index.php`;'
                  style='position:fixed; bottom:1rem;'>
                    <i class='fa-solid fa-arrows-rotate' id='next-icon'></i>
                  </button>";
        }
        ?>
    </div>
    <div class='col d-flex justify-content-end d-none d-sm-block'>
        <h5 id='showSession' class='btn btn-light'>Show Important Array</h5>
    </div>
    <div class='col d-flex justify-content-end'>
        <?php
        if (str_contains($scriptName, 'index')) {
            echo "<button type='submit' class='btn-next' value='Start'>
                    <i class='fa-solid fa-circle-play' id='next-icon'></i>
                  </button>";
        } elseif (str_contains($scriptName, 'question')) {
            echo "<button id='nextQuestion' type='submit' class='btn-next'>
                    <i class='fa-solid fa-circle-chevron-right' id='next-icon'></i>
                  </button>";
        }
        ?>
    </div>
</footer>

<!-- modal Container -->
<div id="session" class="modal">
        <!-- modal Header -->
        <div class='modal-header' style='background-color:red'>
            <p>Wichtige Array</p>
        </div>
        <!-- modal Body -->
        <div class="modal-body">
            <p>
                <div id='display'>00</div>
                <?php

                    if (isset($quiz['questionIdSequence'])) {
                        //$id = $quiz['questionIdSequence'][$currentQuestionIndex];
                    }
                    
                    /* $sqlStatementAwnser = $dbConnection->query("SELECT * FROM `answers` WHERE `question_id` = $id");
                    $rowA = $sqlStatementAwnser->fetchAll(PDO::FETCH_ASSOC);
                    
                    $sqlStatementQuestion = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
                    $row = $sqlStatementQuestion->fetch(PDO::FETCH_ASSOC); */
                    
                    if(isset($_POST)){
                        prettyPrint($_POST, '$_POST =');
                    } else {
                        echo '$_POST = not divined.<br>';
                    }
                
                    if(isset($_SESSION)){
                        prettyPrint($_SESSION, '$_SESSION =');
                    } else {
                        echo '$_SESSION = not divined.<br>';
                    }
                
                    if (isset($rowQ)) {
                        prettyPrint($rowQ, '$rowQ =');
                    } else {
                        echo '$row = not divined.<br>';
                    }
                
                    if (isset($rowA)) {
                        prettyPrint($rowA, '$rowA =');
                    } else {
                        echo '$rowA = not divined.<br>';
                    }
                
                    if (isset($rowC)) {
                        prettyPrint($rowC, '$rowC =');
                    } else {
                        echo '$rowC = not divined.<br>';
                    }
                        
                ?>
            </p>
        </div>
</div>
