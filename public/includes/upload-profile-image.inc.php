<?php
session_start();
include_once 'dbh.inc.php';

if(!isset($_SESSION["userid"])) {
    header("location: ../deposit.php");
    exit();
} else {
    echo $_SESSION["userid"];
    echo $_SESSION["email"];
    echo $_SESSION["name"];
}
$id = $_SESSION["userid"];


if(isset($_POST['submit'])) {
    $file = $_FILES['file'];
    
    $img_name = $_FILES['file']['name'];
    echo $img_name;
    $tmp_name = $_FILES['file']['tmp_name'];
    $img_size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    echo $img_ex;
    $img_ex_lc = strtolower($img_ex);

    $allowed_exs = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($img_ex_lc, $allowed_exs)) {
        if($error === 0) {
            if($img_size < 1000000) {
                $new_img_name = "profile".$id.".".$img_ex_lc;
                echo $new_img_name;
                $img_upload_path  = '../uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                $sql = "UPDATE tbl_profileimage SET status=0, path_extension = '$img_ex_lc' WHERE userid='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: ../profile.php?uploadsuccess");
            } else {
                echo "Your file is too big";
            }

        } else {
            echo "There was an error uploading your file!";
        }

    } else {
        header("Location: ../profile.php?uploadfailed");
    }
}

$sql1 = "INSERT INTO tbl_profileimage (path_extension) VALUE ('$img_ex_lc') WHERE userid='$id';";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql1)) {
    header("location: ../profile.php?error=stmtfailed");
    exit();
}