<?php
    session_start();
    include("includes/functions.inc.php");

    if(!isset($_SESSION["usersid"])) {
        header("location: index.php");
        exit();
    } else {
        echo $_SESSION["usersid"];
        echo $_SESSION["email"];
        echo $_SESSION["name"];
    }
?>


<header class="max-w-6xl mx-auto py-3 px-6">   
    <nav class="flex justify-between items-center space-x-8 text-brand-gray-dark-1">
        <div class="w-2/3 flex justify-between">
            <div>
                <a href="dashboard.php"><img class="w-24" src="img/footer-logo.png" alt="Logo"></a>
            </div>
            <div class="flex space-x-6 font-medium">
                <a href="dashboard.php">Dashboard</a>
                <a href="withdraw.php">Withdrawals</a>
                <a href="deposit.php">Deposits</a>
                <div class="flex items-center space-x-2">              
                    <img class="h-4" src="img/referral-crown.png" alt="">
                    <a href="referral.php">Referrals</a>
                </div>
                <a href="includes/logout.inc.php">Logout</a>
            </div>
        </div>
        <div class="w-1/3 flex items-center justify-end space-x-4"> 
            <img src="img/notification bell.png" alt="Notification">
            <div>
                <img src="img/dashboard-profile.png" alt="Profile image">
            </div>
            <p class="text-brand-gray-dark-1 font-semibold"><?php echo $_SESSION["name"]; ?></p>
            <img src="img/down-arrow.png" alt="down arrow">
        </div>
    </nav>
</header>
