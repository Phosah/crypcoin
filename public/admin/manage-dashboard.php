<?php
    session_start();
    include '../includes/functions.inc.php';

    if(!isset($_SESSION["username"])) {
        header("location: signup.php");
        exit();
    } else {
        echo $_SESSION["username"];
        echo $_SESSION["email"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="font-body text-white bg-gray-800">
    <section class="md:mx-10 py-20 ">
        <div class="flex items-end pb-16">
            <div class="flex space-x-4 w-80 mx-auto text-brand-gray-light-1 hover:text-blue-700">
                <i>&LeftArrow;</i>
                <div class="font-bold font-body">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>
            </div>
        </div>
        <div class="max-w-5xl mx-auto px-6 text-xs sm:text-sm">
            <h1 class="text-lg sm:text-4xl lg:text-5xl font-bold mb-12">Manage Dashboard</h1>
            <form action="" method="POST">
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Full name</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="fullname" placeholder="Full name">
                </div>
                <!-- GENERAL PORTFOLIO VALUE -->
                <h2 class="my-8 text-md md:text-3xl text-gray-500">PORTFOLIO INFO</h2>      
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="portfolio-value" placeholder="e.g 100,250">
                </div>
    
                <!-- BTC -->
                <h2 class="my-8 text-md md:text-3xl text-gray-500">BITCOIN INFO</h2>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total bought BTC</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="btc-bought" placeholder="e.g 0.90889078">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total earnings ($)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="btc-earning" placeholder="e.g 1,250">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value ($)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="btc-portfolio" placeholder="e.g 35,000">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value (BTC)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="btc-portfolio-value" placeholder="e.g 0.90889078">
                </div>
                 <!-- LITECOIN -->
                 <h2 class="my-8 text-md md:text-3xl text-gray-500">LITECOIN INFO</h2>
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total bought LTC</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="ltc-bought" placeholder="e,g 0.90889078">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total earnings ($)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="ltc-earning" placeholder="e.g 7,500">
                </div>
    
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value ($)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="ltc-portfolio" placeholder="e.g 150,000">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value (LTC)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="ltc-portfolio-value" placeholder="e.g 0.90889078">
                </div>
                 <!-- ETHEREUM -->
                 <h2 class="my-8 text-md md:text-3xl text-gray-500">ETHEREUM INFO</h2>
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total bought ETH</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="eth-bought" placeholder="e.g 0.90889078">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total earnings ($)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="eth-earning" placeholder="e.g 1,235">
                </div>
    
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value ($)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="eth-portfolio" placeholder="e.g 597,800">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value (ETH)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="eth-portfolio-value" placeholder="e,g 17.94299078">
                </div>
                 <!-- BITCOINCASH -->
                 <h2 class="my-8 text-md md:text-3xl text-gray-500">BITCOINCASH INFO</h2>
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total bought BCH</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="bch-bought" placeholder="e.g 5.90889078">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total earnings ($)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="bch-earning" placeholder="e.g 1,250">
                </div>
    
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value ($)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="bch-portfolio" placeholder="e.g 8,950">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value (BCH)</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="bch-portfolio-value" placeholder="e.g 0.90889078">
                </div>
                <!--  -->
                <div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button class="bg-blue-700 px-8 py-3 text-white font-semibold rounded-md border border-blue-700 hover:bg-white hover:text-blue-700 hover:border-blue-700" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

<?php
    include '../includes/dbh.inc.php';
    if(isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        // var_dump($fullname);
        $portfolioValue = $_POST['portfolio-value'];
        $btcBought = $_POST['btc-bought'];
        $btcEarnings = $_POST['btc-earning'];
        $btcPortfolio = $_POST['btc-portfolio'];
        $btcPortfolioValue = $_POST['btc-portfolio-value'];
        $ltcBought = $_POST['ltc-bought'];
        $ltcEarnings = $_POST['ltc-earning'];
        $ltcPortfolio = $_POST['ltc-portfolio'];
        $ltcPortfolioValue = $_POST['ltc-portfolio-value'];
        $ethBought = $_POST['eth-bought'];
        $ethEarnings = $_POST['eth-earning'];
        $ethPortfolio = $_POST['eth-portfolio'];
        $ethPortfolioValue = $_POST['eth-portfolio-value'];
        $bchBought = $_POST['bch-bought'];
        $bchEarnings = $_POST['bch-earning'];
        $bchPortfolio = $_POST['bch-portfolio'];
        $bchPortfolioValue = $_POST['bch-portfolio-value'];
        
        $sql = "SELECT * FROM tbl_dashboard WHERE username='$fullname';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                // var_dump($row);
                $sql2 = "UPDATE tbl_dashboard SET portfolioValue ='$portfolioValue', btcBought = '$btcBought', btcEarnings = '$btcEarnings', btcPortfolio = '$btcPortfolio', btcPortfolioValue = '$btcPortfolioValue', ltcBought = '$ltcBought', ltcEarnings = '$ltcEarnings', ltcPortfolio = '$ltcPortfolio', ltcPortfolioValue = '$ltcPortfolioValue', ethBought = '$ethBought', ethEarnings = '$ethEarnings', ethPortfolio = '$ethPortfolio', ethPortfolioValue = '$ethPortfolioValue', bchBought = '$bchBought', bchEarnings = '$bchEarnings', bchPortfolio = '$bchPortfolio', bchPortfolioValue = '$bchPortfolioValue' WHERE username = '$fullname'; ";
                // $res = mysqli_query($conn, $sql)  or die(mysqli_error($conn));

                $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                echo $res2;

                if($res2 == true) {
                    $_SESSION['dashboard'] = "<div class='font-body font-bold'>Dashboard modified</div>";
                } else {
                    echo "Update failed";
                }
            }
        } else {
            echo "Update not working";
        }
    } else {
        echo "An error occured";
    }
?>


<?php
    // include '../includes/dbh.inc.php';
    // if(isset($_POST['submit'])) {
    //     $username = $_POST['username'];
    //     echo $username;
    //     $portfolioValue = $_POST['portfolio-value'];
    //     $btcBought = $_POST['btc-bought'];
    //     $btcEarnings = $_POST['btc-earning'];
    //     $btcPortfolio = $_POST['btc-portfolio'];
    //     $btcPortfolioValue = $_POST['btc-portfolio-value'];
    //     $ltcBought = $_POST['ltc-bought'];
    //     $ltcEarnings = $_POST['ltc-earning'];
    //     $ltcPortfolio = $_POST['ltc-portfolio'];
    //     $ltcPortfolioValue = $_POST['ltc-portfolio-value'];
    //     $ethBought = $_POST['eth-bought'];
    //     $ethEarnings = $_POST['eth-earning'];
    //     $ethPortfolio = $_POST['eth-portfolio'];
    //     $ethPortfolioValue = $_POST['eth-portfolio-value'];
    //     $bchBought = $_POST['bch-bought'];
    //     $bchEarnings = $_POST['bch-earning'];
    //     $bchPortfolio = $_POST['bch-portfolio'];
    //     $bchPortfolioValue = $_POST['bch-portfolio-value'];

    //     $sql = "SELECT userName FROM tbl_users;";
    //     $result = mysqli_query($conn, $sql);
    //     if (mysqli_num_rows($result) > 0) {
    //         while ($row = mysqli_fetch_assoc($result)) {
    //             $fullname = $row['userName'];
    //             var_dump($fullname);

    //             $sql2 = "UPDATE tbl_dashboard SET
    //             portfolioValue ='$portfolioValue', 
    //             btcBought = '$btcBought', 
    //             btcEarnings = '$btcEarnings', 
    //             btcPortfolio = '$btcPortfolio', 
    //             btcPortfolioValue = '$btcPortfolioValue', 
    //             ltcBought = '$ltcBought', 
    //             ltcEarnings = '$ltcEarnings', 
    //             ltcPortfolio = '$ltcPortfolio', 
    //             ltcPortfolioValue = '$ltcPortfolioValue', 
    //             ethBought = '$ethBought', 
    //             ethEarnings = '$ethEarnings', 
    //             ethPortfolio = '$ethPortfolio', 
    //             ethPortfolioValue = '$ethPortfolioValue', 
    //             bchBought = '$bchBought', 
    //             bchEarnings = '$bchEarnings', 
    //             bchPortfolio = '$bchPortfolio', 
    //             bchPortfolioValue = '$bchPortfolioValue')  
    //             WHERE username='$username';";
    //             mysqli_query($conn, $sql2);

    //             $res = mysqli_query($conn, $sql2);
    //             if($res == true) {
    //                 $_SESSION['dashboard'] = "<div class='font-body font-bold'>Dashboard modified</div>";
    //             } else {
    //                 echo "Update not working";
    //             }
    //         }
    //     } else {
    //         header("location: ../admin/manage-dashboard.php?error=stmtfailed");
    //         exit();
    //     }
    // } else {
    //     echo "An error occured";
    // }
?>

<?php
    // include '../includes/dbh.inc.php';
    // if(isset($_POST['submit'])) {
    //     $fullname = $_POST['fullname'];
    //     var_dump($fullname);
    //     $portfolioValue = $_POST['portfolio-value'];
    //     $btcBought = $_POST['btc-bought'];
    //     $btcEarnings = $_POST['btc-earning'];
    //     $btcPortfolio = $_POST['btc-portfolio'];
    //     $btcPortfolioValue = $_POST['btc-portfolio-value'];
    //     $ltcBought = $_POST['ltc-bought'];
    //     $ltcEarnings = $_POST['ltc-earning'];
    //     $ltcPortfolio = $_POST['ltc-portfolio'];
    //     $ltcPortfolioValue = $_POST['ltc-portfolio-value'];
    //     $ethBought = $_POST['eth-bought'];
    //     $ethEarnings = $_POST['eth-earning'];
    //     $ethPortfolio = $_POST['eth-portfolio'];
    //     $ethPortfolioValue = $_POST['eth-portfolio-value'];
    //     $bchBought = $_POST['bch-bought'];
    //     $bchEarnings = $_POST['bch-earning'];
    //     $bchPortfolio = $_POST['bch-portfolio'];
    //     $bchPortfolioValue = $_POST['bch-portfolio-value'];
        
    //     $sql = "UPDATE tbl_dashboard SET
    //     portfolioValue ='$portfolioValue', 
    //     btcBought = '$btcBought', 
    //     btcEarnings = '$btcEarnings', 
    //     btcPortfolio = '$btcPortfolio', 
    //     btcPortfolioValue = '$btcPortfolioValue',
    //     ltcBought = '$ltcBought', 
    //     ltcEarnings = '$ltcEarnings', 
    //     ltcPortfolio = '$ltcPortfolio', 
    //     ltcPortfolioValue = '$ltcPortfolioValue', 
    //     ethBought = '$ethBought', 
    //     ethEarnings = '$ethEarnings', 
    //     ethPortfolio = '$ethPortfolio', 
    //     ethPortfolioValue = '$ethPortfolioValue', 
    //     bchBought = '$bchBought', 
    //     bchEarnings = '$bchEarnings', 
    //     bchPortfolio = '$bchPortfolio', 
    //     bchPortfolioValue = '$bchPortfolioValue')  
    //     WHERE username='$fullname;";

    //     $res = mysqli_query($conn, $sql);
    //     if($res == true) {
    //         $_SESSION['dashboard'] = "<div class='font-body font-bold'>Dashboard modified</div>";
    //     } else {
    //         echo "Update not working";
    //     }
    // } else {
    //     echo "An error occured";
    // }
?>
