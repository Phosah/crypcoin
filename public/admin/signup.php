<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypcoin - home</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body class="bg-gray-500 font-body">
    <header class="min-h-screen py-30 text-white">
        <div class="flex items-center min-h-screen max-w-6xl mx-auto px-6">
                <div class="max-w-md mx-auto ">
                    <h1 class="text-2xl mb-8">Admin Signup Portal</h1>
                    <div class="py-10 px-6 border-2 bg-transparent rounded-3xl">
                        <form action="../includes/admin-signup.inc.php" method="POST">
                            <div class="flex space-x-3 mb-4 border-b pb-3 focus-within:border-transparent border-brand-gray-light-1 focus-within:border-b focus-within:border-white rounded-t-lg ring-white">
                                <div class="">                              
                                    <img class="w-6" src="../img/user.png" alt="User icon">                         
                                </div>
                                <input class="w-full bg-transparent focus:outline-none" type="text" name="fullname" placeholder="Full name">
                            </div>
                            <div class="flex space-x-3 mb-4 border-b pb-3 focus-within:border-transparent border-brand-gray-light-1 focus-within:border-b focus-within:border-white rounded-t-lg ring-white">
                                <div class="">                              
                                    <img class="w-6" src="../img/user.png" alt="User icon">                         
                                </div>
                                <input class="w-full bg-transparent focus:outline-none" type="text" name="username" placeholder="Username">
                            </div>
                            <div class="flex space-x-3 mb-4 border-b pb-3 border-brand-gray-light-1 focus-within:border-transparent focus-within:border-b focus-within:border-white rounded-t-lg ring-white">     
                                <div>                              
                                    <img class="w-6" src="../img/mail.png" alt="Email icon">                         
                                </div>                   
                                <input class="w-full bg-transparent focus:outline-none" type="email" name="email" placeholder="Email address">
                            </div>
                            <div class="flex space-x-3 mb-4 border-b pb-3 border-brand-gray-light-1 focus-within:border-transparent focus-within:border-b focus-within:border-white rounded-t-lg ring-white">     
                                <div>                              
                                    <img class="w-6" src="../img/password.png" alt="Password icon">                         
                                </div>                     
                                <input id="pass" class="w-full bg-transparent focus:outline-none" type="password" name="pwd" placeholder="Password">
                                <div>                              
                                    <img id="pwd-icon" class="w-6 cursor-pointer" src="../img/password-show.png" alt="Password icon">                         
                                </div>
                            </div>
                            <div class="flex space-x-3 mb-8 border-b pb-3 border-brand-gray-light-1 focus-within:border-transparent focus-within:border-b focus-within:border-white rounded-t-lg ring-white">     
                                <div>                              
                                    <img class="w-6" src="../img/password.png" alt="Password icon">                         
                                </div>                     
                                <input id="confirm-pass" class="w-full bg-transparent focus:outline-none" type="password" name="pwdrepeat" placeholder="Confirm Password">
                                <div>                              
                                    <img id="confirm-pwd-icon" class="w-6 cursor-pointer" src="../img/password-show.png" alt="Password icon">                         
                                </div>
                            </div>
                            <button class="mb-4 px-6 py-2 bg-blue-600 rounded-md hover:bg-blue-700" type="submit" name="submit">Sign Up</button>
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
    </header>

    <script src="../js/password.js"></script>
</body>
</html>