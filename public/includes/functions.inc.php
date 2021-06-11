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

function emptyWalletAddress($wallet) {
    $result = true;
    
    if (empty($wallet)) {
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
        var_dump($row['userPwd']);

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
    // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $sql2 = "SELECT * FROM tbl_users WHERE userEmail='$email'";
    $result = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $userid = $row['userId'];
            $username = $row['userName'];
            $sql3 = "INSERT INTO tbl_profileimage (userid, status)
            VALUES ('$userid', 1)";
            mysqli_query($conn, $sql3);

            $sql4 = "INSERT INTO tbl_dashboard (username, portfolioValue, btcBought, btcEarnings, btcPortfolio, btcPortfolioValue, ltcBought, ltcEarnings, ltcPortfolio, ltcPortfolioValue, ethBought, ethEarnings, ethPortfolio, ethPortfolioValue, bchBought, bchEarnings, bchPortfolio, bchPortfolioValue) 
            VALUES ('$username', '0.00', '0.0000', '0.00', '0.00', '0.0000', '0.0000', '0.00', '0.00', '0.0000', '0.0000', '0.00', '0.00', '0.0000', '0.000', '0.00', '0.00', '0.0000');
            ";
            mysqli_query($conn, $sql4);
        }
    }   else {
        echo "You have an error";
    }
    header("location: ../index.php?error=none");
    exit();
}

// function createUser($conn, $name, $email, $pwd) {
//     $sql = "INSERT INTO tbl_users (userName, userEmail, userPwd) VALUES (?, ?, ?);";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("location: ../register.php?error=stmtfailed");
//         exit();
//     }
//     $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
//     mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     header("location: ../index.php?error=none");
//     exit();
//     // 
//     $sql2 = "SELECT * FROM tbl_users WHERE userEmail='$email'";
//     $result = mysqli_query($conn, $sql2);
//     if ($result == true ) {
//         $row = mysqli_fetch_assoc($result);
//         $userid = $row['userId'];
//     } else {
//         echo "You have an error";
//     }

//     $sql3 = "INSERT INTO tbl_profileimage (userid, status, path_extension) VALUES ('$userid', 1, 'png');";
//     $res = mysqli_query($conn, $sql3);
//     if ($res == true) {
//         header("location: ../index.php?error=none");
//         exit();
//     }    
// }

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
    // $hashedPwd = $uidExists["userPwd"];
    // $checkedPwd = password_verify($pwd, $hashedPwd);
    $pwdCorrect = $uidExists["userPwd"];

    if($pwd !== $pwdCorrect) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($pwd === $pwdCorrect) {
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
    header("location: ../contact.php?error=messagesent");
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
    header("location: ../faq.php?error=questionsent");
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

// ADMIN FUNCTIONS //
function emptyAdminSignUp($fullname, $username, $email, $pwd, $pwdRepeat) {
    $result = true;
    
    if (empty($fullname) || empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function createAdmin($conn, $fullname, $username, $email, $pwd) {
    $sql = "INSERT INTO tbl_admin (fullname, username, email, pwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admin/signup.php?error=stmtfailed");
        exit();
    }
    // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $username, $email, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../admin/signup.php?error=none");
}

function loginAdmin($conn, $username, $pwd) {
    $adminExists = adminExists($conn, $username);

    if($adminExists === false) {
        header("location: ../admin/login.php");
        exit();
    }

    // $hashedPwd = $userExists["pwd"];
    // $checkedPwd = password_verify($pwd, $hashedPwd);
    $pwdCorrect = $adminExists["pwd"];

    if($pwdCorrect !== $pwd) {
        header("location: ../admin/login.php?error=wronglogin");
        exit();
    }
    else if ($pwdCorrect === $pwd) {
        session_start();
        $_SESSION["userid"] = $adminExists["id"];
        $_SESSION["username"] = $adminExists["username"];
        $_SESSION["email"] = $adminExists["email"];
        header("location: ../admin.php");
        exit();
    }
}

function emptyAdminLogin($username, $pwd) {
    $result = true;
    
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function adminExists($conn, $username) {
    $sql = "SELECT * FROM tbl_admin WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admin/login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $res = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($res)) {
        return $row; 
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function emptyAdminDeposit($username, $plan, $coin, $amount, $value, $status) {
    $result = true;
    
    if (empty($username) || empty($plan) || empty($coin) || empty($amount) || empty($value) || empty($status)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyAdminWithdraw($username, $amount, $value, $receivingWallet, $status) {
    $result = true;
    
    if (empty($username) || empty($amount) || empty($value) || empty($receivingWallet) || empty($status)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}