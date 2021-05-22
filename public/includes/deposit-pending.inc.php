<?php
session_start();
include('dbh.inc.php');
include 'functions.inc.php';

$userid = $_SESSION["userid"];

if(isset($_POST['submit'])) {
    $userDeposit = $_POST['amount'];

    if (emptyDeposit($userDeposit) !== false ) {
        header("location: ../deposit.php?error=emptyinput");
        exit();
    }

    $sql = "INSERT INTO tbl_pending_deposit SET 
        userid = '$userid',
        amount = '$userDeposit'
    ";

    $res = mysqli_query($conn, $sql);

    if($res==true) {
    $_SESSION['deposit-pending'] = "<div class='font-body font-bold'>Deposit pending completed</div>";
    header('location: ../deposit.php');
    // echo $_SESSION['deposit'];
    } else {
        $_SESSION['deposit-pending'] = "<div class='text-red-600 font-bold font-body'>Failed to deposit</div>";
    }
}