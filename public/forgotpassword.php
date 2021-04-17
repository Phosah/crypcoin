<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-black">
    <main>
        <section class="min-h-screen md:flex px-6 md:px-0">
             <div class="md:w-1/2 flex flex-col min-h-screen">
                <div class=" flex items-end h-20 pb-6">
                    <div class="flex space-x-4 w-80 lg:w-96 mx-auto text-brand-gray-light-1 hover:text-blue-700">
                        <i>&LeftArrow;</i>
                        <div class="font-semibold font-body">
                            <a href="login.php">Back to Login</a>
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex items-center justify-center pb-12">
                    <div class="w-80 lg:w-96 mx-auto">
                        <h2 class="text-3xl text-white font-body font-bold mb-3">Forgot Password</h2>
                        <p class="mb-20 text-brand-gray-light-1">Input OTP sent to your phone (******6871) or email address
                        to reset your password</p>
                        <div class="flex justify-start space-x-4 mb-8 text-brand-gray-dark-1 font-semibold">
                            <p class="px-4 py-2 border-b border-brand-gray-light-1">1</p>
                            <p class="px-4 py-2 border-b border-brand-gray-light-1">8</p>
                            <p class="px-4 py-2 border-b border-brand-gray-light-1">1</p>
                            <p class="px-4 py-2 border-b border-brand-gray-light-1">8</p>
                        </div>
                        <p class="mb-8 text-brand-gray-light-1">Wait for <span class="text-blue-700 font-semibold">5:00</span> to resend OTP</p>
                        <button class="px-8 py-3 bg-blue-700 rounded-md text-white hover:bg-blue-800">Submit</button>
                    </div>
                </div>
             </div>
             <div class="md:w-1/2 hidden md:block object-cover bg-blue-300" style="background-position: top center; background-size: cover; background-image: url('img/forgotpassword-photo.png')">
             
             </div>
        </section>
    </main>
</body>
</html>