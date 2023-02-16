<?php

// include database connection
include('inc/database.php');

// migrate answers from question to answers table
$get_questions = $conn->query("SELECT * FROM questions");
$all_questions = $get_questions->fetchAll(PDO::FETCH_ASSOC);


for ($i = 0; $i < count($all_questions); $i++) {

    // get question id
    $question_id = $all_questions[$i]['id'];

    // insert answers
    for ($j = 0; $j < 5; $j++) {
        // get answer
        $answer = $all_questions[$i]['answer-' . ($j + 1)];
        // get correct
        $is_correct = $all_questions[$i]['correct'];
        // check if correct
        if ($is_correct == $j + 1) {
            $is_correct = 1;
        } else {
            $is_correct = 0;
        }
        // REPLACE answer
        $insert_answer = $conn->prepare("REPLACE INTO answers (question_id, answer, is_correct) VALUES (:question_id, :answer, :is_correct)");
        $insert_answer->bindParam(':question_id', $question_id);
        $insert_answer->bindParam(':answer', $answer);
        $insert_answer->bindParam(':is_correct', $is_correct);
        $insert_answer->execute();

        echo 'Inserted answer: ' . $answer . ' for question: ' . $question_id . ' with is_correct: ' . $is_correct . ' <br>';
    }
}