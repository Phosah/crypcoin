<?php
    session_start();
    include 'includes/dbh.inc.php';

    if(!isset($_SESSION["userid"])) {
        header("location: index.php");
        exit();
    } else {
        echo $_SESSION["userid"];
        echo $_SESSION["email"];
        echo $_SESSION["name"];
    }
    $id = $_SESSION["userid"];
    echo $id
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Receipt</title>
    <link rel=stylesheet href="css/styles.css">
</head>
<body>
    <section class="py-20 bg-brand-gray-light-6">
        <div class="max-w-xl mx-auto pb-10 bg-white rounded-md">
            <div class="flex justify-between px-4 py-6">
                <div>       
                    <h1 class="font-body font-bold text-brand-gray-dark-1 text-xl">Upload image of paymet</h1>
                    <p>The image uploaded would be used to verify transaction</p>
                </div>
                <div></div>
            </div>
            <div class="mb-8 border-t border-brand-gray-light-7"></div>
            <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
                <div class="w-full mx-auto space-x-4 mb-8 px-6 items-center focus:border-brand-blue-light-1">
                    <div class="border border-dashed px-8 py-12 text-center bg-brand-gray-light-6">  
                        <!-- <div class="flex justify-center ">
                            <img src="img/upload-photo.png" alt="Upload photo">
                        </div>
                        <div class="w-1/2 mx-auto">Click here to image or drop and drop image here.</div> -->
                        <?php
                            $sql = "SELECT * FROM tbl_receipts_img WHERE userid=1 ORDER BY ID DESC LIMIT 1";
                            $res = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($res) > 0) {
                                echo mysqli_num_rows($res);

                                while ($images = mysqli_fetch_assoc($res)) { ?>

                                <div>
                                    <img src="uploads/<?=$images['image_url']?>" alt="">
                                </div>

                            <?php   }
                            }
                        ?>
                    </div>
                    <div class="my-4">
                        <input type="file" name="my_image">
                        <button class="bg-blue-700 text-white text-md rounded-md px-6 py-2" type="submit" name="submit" value="upload">Upload</button>                     
                    </div>
                </div>
            </form>
            <div class="px-6">   
                <button id="upload-btn" class="bg-blue-700 text-white text-md rounded-md px-6 py-2" type="submit" name="submit" value="save">Save</button>
            </div>
        </div>
    </section>

    <script>
        const uploadBtn = document.getElementById('upload-btn');
        uploadBtn.onclick = function () {
            window.location.href = "deposit.php";
        }             
    </script>
</body>
</html>