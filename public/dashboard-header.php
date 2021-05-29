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

<header class="hidden md:block max-w-6xl mx-auto py-3 px-6 bg-white">   
    <nav class="flex justify-between items-center space-x-8 text-brand-gray-dark-1">
        <div class="flex space-x-12 justify-between">
            <div class="flex-shrink-0 mr-4">
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
            <!-- <img src="img/notification bell.png" alt="Notification"> -->
            <?php
                $currentUser = $_SESSION['userid'];
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
        <div class="px-3 py-2 text-red-600 hover:text-red-800"><a href="includes/logout.inc.php">Logout</a></div>
    </div>
</div>

<!-- Mobile Responsive nav -->
<nav class="md:hidden mb-4 py-4 px-6 text-brand-gray-dark-1">
    <div class="flex justify-between items-center">
        <div class="mb-4 md:mb-0">
            <a href="dashboard.php"><img src="img/footer-logo.png" class="w-6/12" alt="Logo"></a>
        </div>
        <!--  -->
        <!-- <label for="menu-toggle" class="cursor-pointer block">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label> -->
        
        <div id="menu-toggle">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </div>
    </div>

    <!-- <input type="checkbox" class="hidden" id="menu-toggle"> -->
    <div id="menu" class="font-medium hidden flex-col">
        <p class="mb-4 text-brand-gray-dark-1 font-bold"><?php echo $_SESSION["name"]; ?></p>
        <div class="">
            <a class="mb-4 block hover:text-blue-600" href="dashboard.php">Dashboard</a>
            <a class="mb-4 block hover:text-blue-600" href="withdraw.php">Withdrawals</a>
            <a class="mb-4 block hover:text-blue-600" href="deposit.php">Deposits</a>
            <div class="mb-4 flex items-center space-x-2">              
                <img class="h-4" src="img/referral-crown.png" alt="">
                <a class="hover:text-blue-600" href="referral.php">Referrals</a>
            </div>
        </div>
        <div class="mb-4 hover:text-blue-600"><a href="profile.php">Profile</a></div>
        <div class="text-red-600 hover:text-red-800"><a href="includes/logout.inc.php">Logout</a></div>
    </div>
</nav>

<!-- JS -->
<script src="js/dropdown.js"></script>
<!-- Dashboard menu toggle -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    function toggleMenu () {
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    }
    menuToggle.addEventListener('click', toggleMenu);
</script>