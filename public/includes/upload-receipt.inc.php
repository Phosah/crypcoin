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

$id = $_SESSION['userid'];
echo $id;

if(isset($_POST['submit-receipt'])) {
    $file = $_FILES['file'];
    print_r($file);
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize > 1000000) {
                $fileNameNew = "receipt".$id.".".$fileActualExt;
                $fileDestination  = '../uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                // $sql = "UPDATE tbl_profileimage SET status=0 WHERE userid='$id';";
                // $result = mysqli_query($conn, $sql);
                header("Location: ../upload-image.php?uploadsuccess");
            } else {
                echo "Your file is too big";
            }

        } else {
            echo "There was an error uploading your file!";
        }

    } else {
        echo "You cannot upload files of this type";
    }
}