<?php 
    include('api.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypcoin - home</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>Crypcoin - Home</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body class="bg-gray-900 font-body">
    <header class="home-header min-h-screen pb-30 text-white">
        <div class="min-h-screen flex flex-col max-w-6xl mx-auto px-6">
            <?php include("navbar.php") ?>
            <div class=" flex-1 md:flex md:items-center md:justify-between pb-8">
                <div class="md:w-1/2 w-full mb-12 md:mb-0">
                    <div class="md:w-10/12">
                        <h2 class="text-4xl md:text-5xl font-body mb-8">Crypto Trade Made Easy</h2>
                        <p class="text-xl opacity-60">Investing in cryptocurrencies simplified and made accessible at lightening speed with Crypcoin</p>
                    </div>
                </div>
                <div class="md:w-1/2 w-full md:flex md:justify-end">
                    <div class="md:w-9/12 py-10 px-6 border-2 bg-transparent rounded-3xl wow b">
                        <h3 class="pb-10 text-2xl font-body">Start earning with <br> Crypcoin binary trade</h3>

                        <form action="includes/index-register.inc.php" method="POST">
                            <div class="flex space-x-3 mb-4 border-b pb-3 focus-within:border-transparent border-brand-gray-light-1 focus-within:border-b focus-within:border-white rounded-t-lg ring-white">
                                <div class="">                              
                                    <img class="w-6" src="img/user.png" alt="User icon">                         
                                </div>
                                <input class="w-full bg-transparent focus:outline-none" type="text" name="name" placeholder="Full name">
                            </div>
                            <div class="flex space-x-3 mb-4 border-b pb-3 border-brand-gray-light-1 focus-within:border-transparent focus-within:border-b focus-within:border-white rounded-t-lg ring-white">     
                                <div>                              
                                    <img class="w-6" src="img/mail.png" alt="Email icon">                         
                                </div>                   
                                <input class="w-full bg-transparent focus:outline-none" type="email" name="email" placeholder="Email address">
                            </div>
                            <div class="flex space-x-3 mb-4 border-b pb-3 border-brand-gray-light-1 focus-within:border-transparent focus-within:border-b focus-within:border-white rounded-t-lg ring-white">     
                                <div>                              
                                    <img class="w-6" src="img/password.png" alt="Password icon">                         
                                </div>                     
                                <input id="pass" class="w-full bg-transparent focus:outline-none" type="password" name="pwd" placeholder="Password">
                                <div>                              
                                    <img id="pwd-icon" class="w-6 cursor-pointer" src="img/password-show.png" alt="Password icon">                         
                                </div>
                            </div>
                            <div class="flex space-x-3 mb-8 border-b pb-3 border-brand-gray-light-1 focus-within:border-transparent focus-within:border-b focus-within:border-white rounded-t-lg ring-white">     
                                <div>                              
                                    <img class="w-6" src="img/password.png" alt="Password icon">                         
                                </div>                     
                                <input id="confirm-pass" class="w-full bg-transparent focus:outline-none" type="password" name="pwdrepeat" placeholder="Confirm Password">
                                <div>                              
                                    <img id="confirm-pwd-icon" class="w-6 cursor-pointer" src="img/password-show.png" alt="Password icon">                         
                                </div>
                            </div>
                            <button class="mb-4 px-6 py-2 bg-blue-600 rounded-md hover:bg-blue-700" type="submit" name="submit">Register</button>
                            <?php 
                                if(isset($_GET["error"])) {
                                    if($_GET["error"] == "emptyinput") {
                                        echo "<p>Fill in all fields</p>";
                                    }
                                    else if($_GET["error"] == "invalidemail") {
                                        echo "<p>Choose a proper email</p>";
                                    }
                                    else if($_GET["error"] == "passwordsdontmatch") {
                                        echo "<p>Passwords don't match</p>";
                                    }
                                    else if($_GET["error"] == "stmtfailed") {
                                        echo "<p>Fill in all fields</p>";
                                    }
                                    else if($_GET["error"] == "emailexists") {
                                        echo "<p>This email is already used!</p>";
                                    }
                                    else if($_GET["error"] == "none") {
                                        echo "<p>You have signed up!</p>";
                                    }
                                }
                            ?>     
                        </form>
                    </div>
                </div>             
            </div>
        </div>  
    </header>
    <main>
        <?php include("section/coinlist.php") ?>
        <?php include("section/why-us.php") ?>
        <?php include("section/video.php") ?>
        <?php include("section/investment.php") ?>
        <?php include("section/about-us.php") ?>
        <?php include("section/traffic-info.php") ?>
        <?php include("section/dashboard.php") ?>
        <?php include("section/graph.php") ?>
        <?php include("section/user.php") ?>
        <?php include("section/update.php") ?>
    </main>
    <?php include("footer.php") ?>

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
    <script src="js/password.js"></script>
</body>
</html>