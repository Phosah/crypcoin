<?php
session_start();
include 'dbh.inc.php';
include 'functions.inc.php';

$userid = $_SESSION["userid"];

if(isset($_POST['submit'])) {
    $amount = $_POST['amount'];

    if (emptyWithdrawal($amount) !== false ) {
        header("location: ../withdraw.php?error=emptyinput");
        exit();
    }

    $sql = "INSERT INTO tbl_withdrawal (userid, amount) VALUES ('$userid','$amount')
        -- userid = '$userid',
    ";

    $res = mysqli_query($conn, $sql);
    if($res==true) {
    $_SESSION['withdraw-pending'] = "<div class='font-body font-bold text-yellow-600'>withdraw pending</div>";
    header('Location: ../withdraw2.php');
    } else {
        $_SESSION['withdraw-pending'] = "<div class='text-red-600 font-bold font-body'>Withdraw failed</div>";
        echo "Failed to withdraw";
    }
}