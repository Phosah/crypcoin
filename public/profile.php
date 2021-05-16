<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-body ">
    <?php include("dashboard-header.php") ?>

    <main class="bg-brand-blue-light-1">
        <section class="pt-20 pb-10">       
            <div class="max-w-6xl px-6 mx-auto">
                <div class="flex space-x-8 items-start">               
                    <div class="">

                        <!-- <form action="upload.php" method="$_POST" enctype="multipart/form-data">
                            <input type="file" name="file">
                            <button type="submit" name="submit">Upload</button>
                        </form> -->


                        <div class="mb-8">                       
                            <img src="img/profile-photo.png" alt="Profile photo">
                        </div>
                        <div class="flex space-x-4 items-center">
                            <img src="img/delete-icon.png" alt="Delete icon">
                            <p class="text-red-600">Delete account</p>
                        </div>
                    </div>
                    <div class="flex-1 bg-white shadow-md">
                        <div class="border-b border-gray-100 pt-6 pb-4 pl-6 mb-8">
                            <a class="mr-12 text-blue-700 font-bold" href="personal-details.php">Personal Details</a>
                            <a class="mr-12" href="address.php">Address</a>
                            <a href="change-password.php">Change Password</a>
                        </div>
                        <div class="max-w-2xl pl-6">     
                            <div class="flex space-x-6 mb-8">                       
                                <div class="flex-1 flex items-center space-x-4 border-b border-gray-500 pl-6">
                                    <div>
                                        <img src="img/user-dark.png" alt="User icon">
                                    </div>
                                    <input class="w-full bg-transparent py-4" type="text" name="fullname" placeholder="fullname">
                                </div>
                                <div class="flex-1 flex items-center space-x-4 border-b border-gray-500 pl-6">
                                    <div>                                    
                                        <img src="img/mail-dark.png" alt="Mail icon">
                                    </div>
                                    <input class="w-full bg-transparent py-4" type="email" name="email" placeholder="email">
                                </div>
                            </div>
                            <div class="w-1/2 mb-24 border-b border-gray-500 pl-6">
                                <img src="" alt="">
                                <input class="w-full bg-transparent py-4" type="number" name="phone-number" placeholder="phone number">
                            </div>
                            <button class="mb-8 px-8 py-3 bg-blue-700 rounded-md text-white hover:bg-blue-800" type="submit">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>