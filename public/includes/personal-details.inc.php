<?php
session_start();
if(!isset($_SESSION["userid"])) {
    header("location: ../dashboard.php");
    exit();
} else {
    echo $_SESSION["userid"];
    echo $_SESSION["email"];
    echo $_SESSION["name"];
}

$id = $_SESSION['userid'];
echo $id;

if(isset($_POST["submit"])) {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $number = $_POST["number"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyPersonalDetails($fullname, $email, $number) !== false ) {
        header("location: ../profile.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false ) {
        header("location: ../profile.php?error=invalidemail");
        exit();
    }

    $sql = "INSERT INTO tbl_personal_details (userid, fullname, email, number) VALUES ('$id', ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../profile.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $number);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../profile.php?error=none");
    exit();

} else {
    
    header("location: ../register.php");
    exit();

}