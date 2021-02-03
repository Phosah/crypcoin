<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <section class="min-h-screen flex">
             <div class="w-1/2 flex flex-col">
                <div class=" flex items-end h-20 pb-6">
                    <div class="flex space-x-4 w-96 mx-auto">
                        <i>&LeftArrow;</i>
                        <div class="text-brand-gray-light font-semibold">
                            <a href="index.php">Back Home</a>
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex items-center justify-center pb-12">
                    <div class="w-96 mx-auto">
                        <h2 class="text-3xl text-brand-gray-dark-1 font-bold mb-3">Log into your account</h2>
                        <p class="mb-20 text-brand-gray-light">Do not have an account? <span class="text-blue-700 font-semibold"><a href="register.php">Sign Up</a></span></p>
                        <div>
                            <form action="">
                                <div class="flex space-x-3 mb-8 border-b border-brand-gray-light ">     
                                    <div>                              
                                        <img class="w-6" src="img/mail-dark.png" alt="Email icon">                         
                                    </div>                   
                                    <input class="w-full bg-transparent pb-4" type="email" name="" id="" placeholder="Email address">
                                </div>
                                <div class="flex space-x-3 mb-8 border-b border-brand-gray-light ">     
                                    <div>                              
                                        <img class="w-6" src="img/password-dark.png" alt="Password icon">                         
                                    </div>                     
                                    <input class="w-full bg-transparent pb-4" type="password" name="" id="" placeholder="Password">
                                    <div>                              
                                        <img class="w-6" src="img/password-show-dark.png" alt="Password icon">                         
                                    </div>
                                </div>
                                <div class="flex justify-between mb-12">
                                    <div class="text-xs text-brand-gray-light">
                                        <input type="checkbox" name="" id="rem">
                                        <label for="rem">Remember me</label>
                                    </div>
                                    <div class="text-xs text-brand-gray-light">
                                        <a class="text-blue-700" href="forgotpassword.php">Forgot password?</a>
                                    </div>
                                </div>
                                <button class="px-6 py-2 bg-blue-700 rounded-md text-white">Log In</button>
                            </form>
                        </div>
                    </div>
                </div>
             </div>
             <div class="w-1/2 object-cover bg-blue-300" style="background-position: center center; background-size: cover; background-image: url('img/login-photo.png')">
             
             </div>
        </section>
    </main>
</body>
</html>