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
$username = $_SESSION['name'];
echo $id;
echo $username;

if(isset($_POST["submit"])) {
    $wallet = $_POST["wallet-address"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyWalletAddress($wallet) !== false ) {
        header("location: ../withdraw2.php?error=emptyinput");
        exit();
    }

    $sql = "INSERT INTO tbl_receiving_wallet (id, username, walletAddress) VALUES ($id, '$username' , ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['withdraw-processing'] = "<div class='text-red-600 font-bold font-body mb-4'>Withdraw failed</div>";
        header("location: ../withdraw.php?error=stmtfailed");
        exit();
    } else {
        $_SESSION['withdraw-processing'] = "<div class='font-body font-bold text-yellow-600 mb-4'>Withdraw pending</div>";
        header('Location: ../withdraw.php');
    }

    mysqli_stmt_bind_param($stmt, "s", $wallet);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../withdraw.php?error=none");
    exit();

} else {
    header("location: ../dashboard.php");
    exit();
}