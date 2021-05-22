<?php 
function emptyInputRegister($name, $email, $pwd, $pwdRepeat) {
    $result = true;
    
    if (empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyPersonalDetails($fullname, $email, $number) {
    $result = true;
    
    if (empty($fullname) || empty($email) || empty($number)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyAccountDetails($bank, $accountName, $accountNumber) {
    $result = true;
    
    if (empty($bank) || empty($accountName) || empty($accountNumber)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyDeposit($amount) {
    $result = true;
    
    if (empty($amount)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emptyWithdrawal($amount) {
    $result = true;
    
    if (empty($amount)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyAddressDetails($street, $city, $state, $country) {
    $result = true;
    
    if (empty($street) || empty($city) || empty($state) || empty($country)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result = true;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result = true;

    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $email) {
    $sql = "SELECT * FROM tbl_users WHERE userEmail = ?;";
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
    $sql = "INSERT INTO tbl_users (userName, userEmail, userPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $sql2 = "SELECT * FROM tbl_users WHERE userEmail='$email'";
    $result = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $userid = $row['userId'];
            $sql3 = "INSERT INTO tbl_profileimage (userid, status)
            VALUES ('$userid', 1)";
            mysqli_query($conn, $sql3);
        }
    }   else {
        echo "You have an error";
    }
    header("location: ../index.php?error=none");
    // header("location: ../index.php");
    exit();
}

function emptyInputLogin($email, $pwd) {
    $result = true;
    
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

    $hashedPwd = $uidExists["userPwd"];
    $checkedPwd = password_verify($pwd, $hashedPwd);

    if($checkedPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkedPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["email"] = $uidExists["userEmail"];
        $_SESSION["name"] = $uidExists["userName"];
        header("location: ../dashboard.php");
        exit();
    }
}

function createSubscriber($conn, $subscriberEmail) {
    $sql = "INSERT INTO tbl_subscribers (subscriber_email) VALUES (?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $subscriberEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

function createSubscriber2($conn, $subscriberEmail) {
    $sql = "INSERT INTO tbl_subscribers (subscriber_email) VALUES (?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../about.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $subscriberEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../about.php?error=none");
    exit();
}

function createEnquiry($conn, $message_name, $message_email, $message_content) {
    $sql = "INSERT INTO tbl_enquiry (message_name, message_email, message_content) VALUES (?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../contact.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $message_name, $message_email, $message_content);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../contact.php?error=none");
    exit();
}

function emptyInputEnquiry($name, $email, $message) {
    $result = true;
    
    if (empty($name) || empty($email) || empty($message)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function createQuestion($conn, $question_email, $question_content) {
    $sql = "INSERT INTO tbl_question (question_email, question_content) VALUES (?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../faq.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $question_email, $question_content);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../faq.php?error=none");
    exit();
}

function emptyInputQuestion($email, $message) {
    $result = true;
    
    if (empty($email) || empty($message)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// function createPersonalDetails($conn, $userid, $name, $email, $number) {
//     $sql = "INSERT INTO tbl_personal_details (userid, name, email, number) VALUES ('$id', ?, ?, ?);";

//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("location: ../contact.php?error=stmtfailed");
//         exit();
//     }

//     mysqli_stmt_bind_param($stmt, "ss", $question_email, $question_content);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     header("location: ../contact.php?error=none");
//     exit();
// }
