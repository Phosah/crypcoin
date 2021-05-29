<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="font-body">
    <header>
    <?php 
        include("dashboard-header.php");
    ?>
    </header>
    <main class="bg-brand-blue-light-1">
        <section class="py-16 md:py-28">
            <div class="max-w-6xl mx-auto px-6 ">
                <div class="flex-1 bg-white shadow-md">
                    <div class="sm:flex border-b border-gray-100 pt-6 pb-4 px-6 mb-8">
                        <div class="sm:mr-12">                            
                            <a href="profile.php">Personal Details</a>
                        </div>
                        <div class="sm:mr-12">                            
                            <a href="address.php">Address</a>
                        </div>
                        <div class="text-blue-700 font-bold">                           
                            <a href="change-password.php">Change Password</a>
                        </div>
                    </div>
                    <div class="max-w-4xl mx-auto px-6">
                        <form action="includes/change-password.inc.php" method="POST">       
                            <div class="sm:flex sm:space-x-6 sm:mb-8">                       
                                <div class="flex-1 items-center border-b border-gray-500 pl-6 focus-within:border-blue-600">
                                    <input class="w-full bg-transparent py-4 focus-within:outline-none" type="text" name="Old password" placeholder="Old password">
                                </div>
                                <div class="flex-1 items-center border-b border-gray-500 pl-6 focus-within:border-blue-600">
                                    <input class="w-full bg-transparent py-4 focus-within:outline-none" type="text" name="New Password" placeholder="New Password">
                                </div>
                            </div>
                            <div class="flex space-x-6 mb-8">
                                <div class="w-full sm:w-1/2 items-center border-b border-gray-500 pl-6 focus-within:border-blue-600">
                                    <input class="w-full bg-transparent py-4 focus-within:outline-none" type="text" name="Confirm password" placeholder="Confirm password">
                                </div>
                            </div>
                            <button class="mb-8 px-8 py-3 bg-blue-700 rounded-md text-white hover:bg-blue-800" type="submit" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>