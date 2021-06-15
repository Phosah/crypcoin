<?php
    session_start();
    include '../includes/functions.inc.php';

    if(!isset($_SESSION["username"])) {
        header("location: signup.php");
        exit();
    } else {
        echo $_SESSION["username"];
        echo $_SESSION["email"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="font-body text-white bg-gray-800">
    <section class="md:mx-10 py-20 hidden md:block">
        <div class="max-w-5xl mx-auto px-6 text-xs sm:text-sm">
            <div class="flex items-end pb-16">
                <div class="flex space-x-4 w-80 mx-auto text-brand-gray-light-1 hover:text-blue-700">
                    <i>&LeftArrow;</i>
                    <div class="font-bold font-body">
                        <a href="../admin.php">Back to Admin Panel</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="flex items-center justify-center py-6 px-6">
                    <div class="flex-1">Name</div>
                    <div class="flex-1">Email</div>
                    <div class="flex-1">Password</div>
                </div>
                <div class="border-b border-brand-gray-dark-3"></div>
                
                <?php
                    include('../includes/dbh.inc.php');
                    $username = $_SESSION["name"];
                    $sql = "SELECT userName, userEmail, userPwd FROM tbl_users";

                    $res = mysqli_query($conn, $sql);
                    if($res==true) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            $userName = $row['userName'];
                            $userEmail = $row['userEmail'];
                            $userPwd = $row['userPwd'];
                            ?>

                            <div class="flex space-x-8 items-center justify-center py-6 px-6 font-bold text-sm">
                                <div class="flex-1"><?php echo $userName; ?></div>
                                <div class="flex-1"><?php echo $userEmail; ?></div>
                                <div class="flex-1 text-xs"><?php echo $userPwd; ?></div>
                            </div>
                            <div class="border-b border-brand-gray-dark-3"></div>
                            <?php
                        }                       
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- Mobile version -->
    <section class="py-10 block md:hidden">
        <div class="max-w-5xl mx-auto px-6 text-xs sm:text-sm">
            <div class="flex items-end pb-16">
                <div class="flex space-x-4 w-80 mx-auto text-brand-gray-light-1 hover:text-blue-700">
                    <i>&LeftArrow;</i>
                    <div class="font-bold font-body">
                        <a href="../admin.php">Back to Admin Panel</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div>
                    <div class="border-b border-brand-gray-dark-3"></div>
                    <?php
                        include('../includes/dbh.inc.php');
                        $username = $_SESSION['name'];
                        $sql = "SELECT userName, userEmail, userPwd FROM tbl_users";
                        $res = mysqli_query($conn, $sql);

                        if($res==true) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                $userName = $row['userName'];
                                $userEmail = $row['userEmail'];
                                $userPwd = $row['userPwd'];
                                ?>
                                <div class="py-6 px-6">
                                    <div class="flex mb-4 border-b border-gray-200">
                                        <div  class="flex-1 mb-4">Name</div>
                                        <div class="flex-1"><?php echo $userName; ?></div>
                                    </div>
                                    <div class="flex mb-4 border-b border-gray-200">
                                        <div  class="flex-1 mb-4">Email</div>
                                        <div class="flex-1"><?php echo $userEmail; ?></div>
                                    </div>
                                    <div class="flex mb-4 border-b border-gray-200">
                                        <div  class="flex-1 mb-4">Password</div>
                                        <div class="flex-1"><?php echo $userPwd; ?></div>
                                    </div>
                                </div>
                                <?php
                            }                       
                        }
                    ?>            
                </div>
            </div>
        </div>
    </section>
</body>
</html>