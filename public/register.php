<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <section class="min-h-screen md:flex px-6 md:px-0">         
            <div class="md:w-1/2 min-h-screen flex flex-col">
                <div class="flex items-end h-20 pb-6">
                    <div class="flex space-x-4 w-80 lg:w-96 mx-auto text-brand-gray-light-1 hover:text-blue-700">
                        <i>&LeftArrow;</i>
                        <div class="font-semibold">
                            <a href="index.php">Back Home</a>
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex items-center justify-center pb-12">
                    <div class="w-80 lg:w-96 mx-auto">
                        <h2 class="text-3xl text-brand-gray-dark-1 font-bold mb-3">Log into your account</h2>
                        <p class="mb-20 text-brand-gray-light-1">Already have an account? <span class="text-blue-700 font-semibold hover:text-blue-800"><a href="login.php">Login</a></span></p>
                        <div>
                            <form action="includes/register.inc.php" method="POST">
                                <div class="flex space-x-3 mb-8 border-b border-brand-gray-light-1 focus-within:ring-2 ring-blue-700 focus-within:border-transparent rounded-t-lg">     
                                    <div>                              
                                        <img class="w-6" src="img/user-dark.png" alt="User icon">                         
                                    </div>                   
                                    <input class="w-full bg-transparent pb-4 focus:outline-none" type="text" name="name" id="" placeholder="Fullname">
                                </div>
                                <div class="flex space-x-3 mb-8 border-b border-brand-gray-light-1 focus-within:ring-2 ring-blue-700 focus-within:border-transparent rounded-t-lg">     
                                    <div>                              
                                        <img class="w-6" src="img/mail-dark.png" alt="Email icon">                         
                                    </div>                   
                                    <input class="w-full bg-transparent pb-4 focus:outline-none" type="email" name="email" id="" placeholder="Email address">
                                </div>
                                <div class="flex space-x-3 mb-8 border-b border-brand-gray-light-1 focus-within:ring-2 ring-blue-700 focus-within:border-transparent rounded-t-lg">     
                                    <div>                              
                                        <img class="w-6" src="img/password-dark.png" alt="Password icon">                         
                                    </div>                     
                                    <input class="w-full bg-transparent pb-4  focus:outline-none" type="password" name="pwd" id="" placeholder="Password">
                                    <div>                              
                                        <img class="w-6" src="img/password-show-dark.png" alt="Password icon">                         
                                    </div>
                                </div>
                                <div class="flex space-x-3 mb-12 border-b border-brand-gray-light-1 focus-within:ring-2 ring-blue-700 focus-within:border-transparent rounded-t-lg">     
                                    <div>                              
                                        <img class="w-6" src="img/password-dark.png" alt="Password icon">                         
                                    </div>                     
                                    <input class="w-full bg-transparent pb-4  focus:outline-none" type="password" name="pwdrepeat" id="" placeholder="Confirm Password">
                                    <div>                              
                                        <img class="w-6" src="img/password-show-dark.png" alt="Password icon">                         
                                    </div>
                                </div>
                                
                                <button class="px-6 py-2 bg-blue-700 rounded-md text-white hover:bg-blue-800" type="submit" name="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 hidden md:block object-cover bg-blue-300" style="background-position: top center; background-size: cover; background-image: url('img/createpassword-photo.png')">           
            </div>
        </section>

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
    </main>
</body>
</html>