<?php

if(isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputRegister($name, $email, $pwd, $pwdRepeat) !== false ) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false ) {
        header("location: ../index.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false ) {
        header("location: ../index.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $email) !== false ) {
        header("location: ../index.php?error=emailexists");
        exit();
    }
    createUser($conn, $name, $email, $pwd);
    
} else {
    
    header("location: ../index.php");
    exit();

}