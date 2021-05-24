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

    $bank = $_POST["bank"];
    $accountName = $_POST["account-name"];
    $accountNumber = $_POST["account-number"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyAccountDetails($bank, $accountName, $accountNumber) !== false ) {
        header("location: ../withdraw2.php?error=emptyinput");
        exit();
    }

    $sql = "INSERT INTO tbl_account_details (userid, bank, accountName, accountNumber) VALUES ('$id', ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['withdraw-processing'] = "<div class='text-red-600 font-bold font-body mb-4'>Withdraw failed</div>";
        header("location: ../profile.php?error=stmtfailed");
        exit();
    } else {
        $_SESSION['withdraw-processing'] = "<div class='font-body font-bold text-yellow-600 mb-4'>Withdraw pending</div>";
        header('Location: ../withdraw.php');
    }

    mysqli_stmt_bind_param($stmt, "sss", $bank, $accountName, $accountNumber);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../withdraw.php?error=none");
    exit();

} else {
    header("location: ../dashboard.php");
    exit();
}