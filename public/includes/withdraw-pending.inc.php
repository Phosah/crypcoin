<?php

session_start();
include 'dbh.inc.php';
include 'functions.inc.php';

$userid = $_SESSION["userid"];

if(isset($_POST['submit'])) {
    $userWithdraw = $_POST['amount'];

    if (emptyWithdrawal($userWithdraw) !== false ) {
        header("location: ../withdraw.php?error=emptyinput");
        exit();
    }

    $sql = "INSERT INTO tbl_pending_withdraw SET 
        userid = '$userid',
        amount = '$userWithdraw'
    ";

    $res = mysqli_query($conn, $sql);
    if($res==true) {
    $_SESSION['withdraw-pending'] = "<div class='font-body font-bold'>withdraw pending completed</div>";
    header('Location: ../withdraw2.php');
    } else {
        $_SESSION['withdraw-pending'] = "<div class='text-red-600 font-bold font-body'>Failed to deposit</div>";
        echo "Failed to withdraw";
    }
}