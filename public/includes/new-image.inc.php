<?php
session_start();
include_once 'dbh.inc.php';

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

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    // include_once 'dbh.inc.php';
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 1500000) {
            $em = "Sorry your file is too large";
            header("Location: ../deposit?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png", "pdf");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).".".$img_ex_lc;
                $img_upload_path = '../uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO tbl_receipts_img(userid, image_url) VALUES('$id', '$new_img_name')";
                $result = mysqli_query($conn, $sql);
                header("Location: ../upload-receipt.php");
            }
        }
    } else {
        $em = "unknown error occurred!";
        // header("Location: ../deposit.php?error=$em");
    }

} else {
    header("Location: ../deposit.php");
}