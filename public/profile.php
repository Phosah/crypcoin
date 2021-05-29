<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-body">
    <?php include 'dashboard-header.php';?>
    <main class="bg-brand-blue-light-1">
        <section class="py-16 md:py-28">       
            <div class="max-w-6xl px-6 mx-auto">
                <div class="md:flex md:space-x-8 items-start">            
                    <div class="md:w-1/3 mb-12 sm:mx-auto sm:px-6">
                        <div class="mb-10">
                        <?php
                            $currentUser = $_SESSION['userid'];
                            // echo $currentUser;
                            $sql = "SELECT $currentUser FROM tbl_users";
                            $result = mysqli_query($conn, $sql);
                            $sqlImg = "SELECT * FROM tbl_profileimage WHERE userid='$currentUser'";
                            $resultImg = mysqli_query($conn, $sqlImg);
                            while($rowImg = mysqli_fetch_assoc($resultImg)) {
                                echo "<div>";
                                if ($rowImg['status'] == 0) {
                                    echo "<div class='max-w-xs mx-auto'><img src='uploads/profile".$currentUser.".png'></div>";
                                } else {    
                                    echo "<div class='max-w-xs mx-auto'><img src='uploads/default-profile-photo.png'></div>";      
                                }
                            }
                            echo "</div>";
                        ?>
                        </div>

                        <form action="includes/upload-profile-image.inc.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-8">
                                <div class="mb-3"><input class="w-56" type="file" name="file"></div>
                                <button class="px-6 py-2 bg-blue-700 rounded-md text-white hover:bg-blue-800" type="submit" name="submit">Upload</button>
                            </div>
                        </form>

                        <div class="flex space-x-4 items-center">
                            <img src="img/delete-icon.png" alt="Delete icon">
                            <p class="text-red-600">Delete account</p>
                        </div>
                    </div>
                    <div class="md:flex-1 bg-white shadow-md">
                        <div class="sm:flex border-b border-gray-100 pt-6 pb-4 px-6 mb-8">
                            <div class="sm:mr-12 text-blue-700 font-bold">                            
                                <a href="profile.php">Personal Details</a>
                            </div>
                            <div class="sm:mr-12">                            
                                <a href="address.php">Address</a>
                            </div>
                            <div>                           
                                <a href="change-password.php">Change Password</a>
                            </div>
                        </div>
                        <form action="includes/personal-details.inc.php" method="POST">    
                            <div class="md:max-w-2xl px-6">     
                                <div class="sm:flex sm:space-x-6 mb-8">                       
                                    <div class="sm:flex-1 flex items-center space-x-4 border-b border-gray-500 pl-6 focus-within:border-blue-500 mb-8 sm:mb-0">
                                        <div>
                                            <img src="img/user-dark.png" alt="User icon">
                                        </div>
                                        <input class="sm:w-full bg-transparent py-4 focus-within:outline-none" type="text" name="fullname" placeholder="fullname">
                                    </div>
                                    <div class="sm:flex-1 flex items-center space-x-4 border-b border-gray-500 pl-6 focus-within:border-blue-500">
                                        <div>                                    
                                            <img src="img/mail-dark.png" alt="Mail icon">
                                        </div>
                                        <input class="sm:w-full bg-transparent py-4 focus-within:outline-none" type="email" name="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="w-1/2 mb-24 border-b border-gray-500 px-6 focus-within:border-blue-500">
                                    <img src="" alt="">
                                    <input class="sm:w-full bg-transparent py-4 focus-within:outline-none" type="number" name="number" placeholder="phone number">
                                </div>
                                <button class="mb-8 px-8 py-3 bg-blue-700 rounded-md text-white hover:bg-blue-800" name="submit" type="submit">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>