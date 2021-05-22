<?php
    if(isset($_POST['submit'])) {

        $question_email = $_POST['email'];
        $question_content = $_POST['message'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputQuestion($question_email, $question_content) !== false) {
            header('location: ../faq.php?error=passwordsdontmatch');
            exit();
        }
        if(invalidEmail($question_email) !== false) {
            header('location: ../faq.php?error=invalidemail');
            exit();
        }
        createQuestion($conn, $question_email, $question_content);
    } else {
        header('location: ../faq.php');
        exit();
    }