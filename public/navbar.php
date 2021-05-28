<?php 
    session_start();
?>

<nav class="hidden md:flex justify-between items-center mb-10 py-8 text-white">
    <div class="mb-4 md:mb-0">
        <a href="index.php"><img src="img/logo.png" class="w-6/12" alt="Logo"></a>
    </div>

    <div id="" class="font-semibold hidden md:block">
        <a class="block md:inline-block mb-4 md:mb-0 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2" href="index.php">Home</a>
        <a class="block md:inline-block mb-4 md:mb-0 ml-0 md:ml-4 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2" href="about.php">About us</a>
        <a class="block md:inline-block mb-4 md:mb-0 ml-0 md:ml-4 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2" href="contact.php">Contact us</a>
        
        <?php 
            if(isset($_SESSION["userid"])) {
                echo "<a class='block md:inline-block mb-4 md:mb-0 ml-0 md:ml-4 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2' href='includes/logout.inc.php'>Logout</a>";
            } else {
                echo "<a class='block md:inline-block mb-4 md:mb-0 ml-0 md:ml-4 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2' href='login.php'>Login</a>";
            }
        ?>
        <button class="block md:inline-block mb-4 md:mb-0 ml-0 md:ml-4 px-7 py-2 bg-blue-700 hover:bg-white hover:text-blue-700 rounded-md">
            <a class="" href="register.php">Sign Up</a>
        </button>
    </div>
</nav>

<nav class="md:hidden mb-10 py-8 text-white">
    <div class="flex justify-between items-center">
        <div class="mb-4 md:mb-0">
            <a href="index.php"><img src="img/logo.png" class="w-6/12" alt="Logo"></a>
        </div>
    
        <label for="menu-toggle" class="cursor-pointer block">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
    </div>

    <input type="checkbox" class="hidden" id="menu-toggle">
    <div id="menu" class="font-semibold hidden">
        <a class="block md:inline-block mb-4 md:mb-0 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2" href="index.php">Home</a>
        <a class="block md:inline-block mb-4 md:mb-0 ml-0 md:ml-8 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2" href="about.php">About us</a>
        <a class="block md:inline-block mb-4 md:mb-0 ml-0 md:ml-8 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2" href="contact.php">Contact us</a>

        <?php 
            if(isset($_SESSION["userid"])) {
                echo "<a class='block md:inline-block mb-4 md:mb-0 ml-0 md:ml-8 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2' href='includes/logout.inc.php'>Logout</a>";
            } else {
                echo "<a class='block md:inline-block mb-4 md:mb-0 ml-0 md:ml-8 border-b-2 border-transparent hover:border-2 md:hover:border-blue-700 pb-2' href='login.php'>Login</a>";
            }
        ?>
        
        <button class="block md:inline-block mb-4 md:mb-0 ml-0 md:ml-8 px-7 py-2 bg-blue-700 hover:bg-white hover:text-blue-700 rounded-md">
            <a class="" href="register.php">Sign Up</a>
        </button>
    </div>
</nav>