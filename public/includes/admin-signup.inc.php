<?php

if(isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyAdminSignUp($fullname, $username, $email, $pwd, $pwdRepeat) !== false ) {
        header("location: ../admin/signup.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false ) {
        header("location: ../admin/signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false ) {
        header("location: ../admin/signup.php?error=passwordsdontmatch");
        exit();
    }
    if (adminExists($conn, $email) !== false ) {
        header("location: ../admin/signup.php?error=emailexists");
        exit();
    }
    createAdmin($conn, $fullname, $username, $email, $pwd);
    
} else {
    
    header("location: ../admin.php");
    exit();

}