<footer class='row footer-light'>
    <div class='col-1'>
        <?php
        if (str_contains($scriptName, 'question')) {
            echo "<button type='button' onclick='deleteAllCookies();' class='btn btn-light'>
                    <i class='fa-solid fa-ban'></i>
                  </button>";
        } elseif (str_contains($scriptName, 'report')) {
            echo "<button class='btn btn-light' onclick='document.location=`/index.php`;'
                  style='position:fixed;bottom:150px;'>Neues Quiz</button>";
        }
        ?>
    </div>
    <div class='col d-flex justify-content-end'>

        <h5 id='showSession' class='btn btn-light'>Show Important Array</h5>


        
    </div>
    <div class='col d-flex justify-content-end'>
        <?php
        if (str_contains($scriptName, 'index')) {
            echo "<button type='submit' class='btn btn-light' value='Start'>
                    <i class='fa-solid fa-circle-play'></i>
                  </button>";
        } elseif (str_contains($scriptName, 'question')) {
            echo "<button id='nextQuestion' type='submit' class='btn btn-light'>
                    <i class='fa-solid fa-circle-chevron-right'></i>
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

                    if (isset($row)) {
                        prettyPrint($row, '$row =');
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
</div>
