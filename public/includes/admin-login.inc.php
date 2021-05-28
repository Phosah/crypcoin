<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if(emptyAdminLogin($username, $pwd) !== false) {
        header("location: ../admin/login.php?error=emptyinput");
        exit();
    }
    
    loginAdmin($conn, $username, $pwd);
}
else {
    header("location: ../index.php");
    exit();
}