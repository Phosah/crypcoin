<?php 

function emptyInputRegister($name, $email, $pwd, $pwdRepeat) {
    $result;
    
    if (empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;

    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $email) {
    $sql = "SELECT * FROM tbl_users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row; 

    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $pwd) {
    $sql = "INSERT INTO tbl_users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=none");
    exit();
}

function emptyInputLogin($email, $pwd) {
    $result;
    
    if (empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd) {
    $uidExists = uidExists($conn, $email);

    if($uidExists === false) {
        header("location: ../login.php");
        exit();
    }

    $hashedPwd = $uidExists["usersPwd"];
    $checkedPwd = password_verify($pwd, $hashedPwd);

    if($checkedPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkedPwd === true) {
        session_start();
        $_SESSION["usersid"] = $uidExists["usersId"];
        $_SESSION["email"] = $uidExists["usersEmail"];
        header("location: ../dashboard.php");
        exit();

    }
}