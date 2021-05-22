<?php

    if(isset($_POST['submit'])) {
        $subscriberEmail = $_POST['email'];

        include('dbh.inc.php');
        include('functions.inc.php');

        if (invalidEmail($subscriberEmail) !== false ) {
            header("location: ../about.php?error=invalidemail");
            exit();
        }
        createSubscriber($conn, $subscriberEmail);
    } else {    
        header("location: ../about.php?error=none");
        exit();   
    }
