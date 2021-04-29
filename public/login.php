<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-gray-900">
    <main>
        <section class="min-h-screen md:flex px-6 md:px-0">
            <div class="md:w-1/2 flex flex-col min-h-screen">
                <div class="flex items-end h-20 pb-6">
                    <div class="flex space-x-4 w-80 lg:w-96 mx-auto text-brand-gray-light-1 hover:text-blue-700">
                        <i>&LeftArrow;</i>
                        <div class="font-bold font-body">
                            <a href="index.php">Back Home</a>
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex items-center justify-center pb-12">
                    <div class="w-80 lg:w-96 mx-auto">
                        <h2 class="text-3xl text-white font-body font-bold mb-3">Log into your account</h2>
                        <p class="mb-20 text-brand-gray-light-1">Do not have an account? <span class="text-blue-700 font-semibold hover:text-blue-800"><a href="register.php">Sign Up</a></span></p>

                        <?php 
                            // if(isset($_SESSION['error'])) {
                            //     echo $_SESSION['error'];
                            //     unset ($_SESSION['error']);
                            // }
                        ?>

                        <div>
                            <form action="includes/login.inc.php" method="POST">
                                <div class="flex space-x-3 mb-8 border-b border-brand-gray-light-1 focus-within:ring-2 ring-blue-700 focus-within:border-transparent rounded-t-lg">     
                                    <div>                              
                                        <img class="w-6" src="img/mail-dark.png" alt="Email icon">                         
                                    </div>                   
                                    <input class="w-full pb-4 text-white bg-transparent focus:outline-none" type="email" name="email" id="" placeholder="Email address">
                                </div>
                                <div class="flex space-x-3 mb-8 border-b border-brand-gray-light-1 focus-within:ring-2 ring-blue-700 focus-within:border-transparent rounded-t-lg">     
                                    <div>                              
                                        <img class="w-6" src="img/password-dark.png" alt="Password icon">                         
                                    </div>                     
                                    <input class="w-full pb-4 text-white bg-transparent focus:outline-none" type="password" name="pwd" id="" placeholder="Password">
                                    <div>                              
                                        <img class="w-6" src="img/password-show-dark.png" alt="Password icon">                         
                                    </div>
                                </div>
                                <div class="flex justify-between mb-12">
                                    <div class="text-xs text-brand-gray-light-1">
                                        <input type="checkbox" name="" id="rem">
                                        <label for="rem">Remember me</label>
                                    </div>
                                    <div class="text-xs text-brand-gray-light-1">
                                        <a class="text-blue-700 hover:text-blue-800" href="forgotpassword.php">Forgot password?</a>
                                    </div>
                                </div>
                                <button class="px-8 py-3 bg-blue-700 rounded-md text-white hover:bg-blue-800" type="submit" name="submit">Log In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 hidden md:block object-cover bg-blue-300" style="background-position: center center; background-size: cover; background-image: url('img/login-photo.png')">
             
            </div>
        </section>
        <?php 
            if(isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                }
                else if($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login information</p>";
                }
            }
        ?>
    </main>
</body>
</html>