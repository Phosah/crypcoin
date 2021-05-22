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

    $street = $_POST["street"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $country = $_POST["country"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyAddressDetails($street, $city, $state, $country) !== false ) {
        header("location: ../profile.php?error=emptyinput");
        exit();
    }

    $sql = "INSERT INTO tbl_addresses (userid, street, city, state, country) VALUES ('$id', ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../profile.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $street, $city, $state, $country);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../profile.php?error=none");
    exit();

} else {
    
    header("location: ../register.php");
    exit();

}