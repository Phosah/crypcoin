<?php
    if(isset($_POST['submit'])) {

        $message_name = $_POST['name'];
        $message_email = $_POST['email'];
        $message_content = $_POST['message'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputEnquiry($message_name, $message_email, $message_content) !== false) {
            header('location: ../contact.php?error=passwordsdontmatch');
            exit();
        }
        if(invalidEmail($message_email) !== false) {
            header('location: ../contact.php?error=invalidemail');
            exit();
        }
        createEnquiry($conn, $message_name, $message_email, $message_content);
    } else {
        header('location: ../index.php');
        exit();
    }