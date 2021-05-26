<?php
    session_start();
    include 'includes/dbh.inc.php';
    include("includes/functions.inc.php");

    if(!isset($_SESSION["userid"])) {
        header("location: index.php");
        exit();
    } else {
        echo $_SESSION["userid"];
        echo $_SESSION["email"];
        echo $_SESSION["name"];
    }
?>


<header class="max-w-6xl mx-auto py-3 px-6 bg-white">   
    <nav class="flex justify-between items-center space-x-8 text-brand-gray-dark-1">
        <div class="w-2/3 flex justify-between">
            <div>
                <a href="dashboard.php"><img class="w-24" src="img/footer-logo.png" alt="Logo"></a>
            </div>
            <div class="flex space-x-6 font-medium">
                <a class="hover:text-blue-600" href="dashboard.php">Dashboard</a>
                <a class="hover:text-blue-600" href="withdraw.php">Withdrawals</a>
                <a class="hover:text-blue-600" href="deposit.php">Deposits</a>
                <div class="flex items-center space-x-2">              
                    <img class="h-4" src="img/referral-crown.png" alt="">
                    <a class="hover:text-blue-600" href="referral.php">Referrals</a>
                </div>
            </div>
        </div>
        <div class="w-1/3 flex items-center justify-end space-x-4"> 
            <img src="img/notification bell.png" alt="Notification">
            <?php
                $currentUser = $_SESSION['userid'];
                // echo $currentUser;
                $sql = "SELECT $currentUser FROM tbl_users";
                $result = mysqli_query($conn, $sql);
                $sqlImg = "SELECT * FROM tbl_profileimage WHERE userid='$currentUser'";
                $resultImg = mysqli_query($conn, $sqlImg);
                while($rowImg = mysqli_fetch_assoc($resultImg)) {
                    echo "<div>";
                    if ($rowImg['status'] == 0) {
                        echo "<div class='w-10 mx-auto'><img src='uploads/profile".$currentUser.".png'></div>";
                    } else {    
                        echo "<div class='w-10 mx-auto'><img src='uploads/default-profile-photo.png'></div>";      
                    }
                }
                echo "</div>";
            ?>
            <p class="text-brand-gray-dark-1 font-semibold"><?php echo $_SESSION["name"]; ?></p>

            <div class="">
                <div class="" id="menu-btn">               
                    <button class="focus:outline-none"><img src="img/down-arrow.png" alt="down arrow"></button>
                </div>
            </div>
        </div>
    </nav>
</header>

<div id="dropdown" class="max-w-6xl mx-auto hidden justify-end">
    <div class="w-20">
        <div class="px-3 py-2 hover:text-blue-600"><a href="profile.php">Profile</a></div>
        <div class="px-3 py-2 hover:text-blue-600"><a href="includes/logout.inc.php">Logout</a></div>
    </div>
</div>
<script src="js/dropdown.js"></script>

