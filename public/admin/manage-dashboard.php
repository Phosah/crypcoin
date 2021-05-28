<?php
    session_start();
    // include 'includes/dbh.inc.php';
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
    <section class="mx-20 py-20 ">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-4xl lg:text-5xl font-bold mb-12">Manage Dashboard</h1>
            <form action="" method="POST">
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Username</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="username" placeholder="Full name">
                </div>
                <!-- GENERAL PORTFOLIO VALUE -->
                <h2 class="my-8 text-3xl text-gray-500">PORTFOLIO INFO</h2>      
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Portfolio value</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="portfolio-value" placeholder="e.g 100,250">
                </div>
    
                <!-- BTC -->
                <h2 class="my-8 text-3xl text-gray-500">BITCOIN INFO</h2>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total bought BTC</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="btc-bought" placeholder="e.g 0.90889078">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total earnings BTC</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="btc-earning" placeholder="e.g 0.90889078">
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
                 <h2 class="my-8 text-3xl text-gray-500">LITECOIN INFO</h2>
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total bought LTC</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="ltc-bought" placeholder="e,g 0.90889078">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total earnings LTC</label>
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
                 <h2 class="my-8 text-3xl text-gray-500">ETHEREUM INFO</h2>
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total bought ETH</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="eth-bought" placeholder="e.g 0.90889078">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total earnings ETH</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="eth-earning" placeholder="e.g 0.90889078">
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
                 <h2 class="my-8 text-3xl text-gray-500">BITCOINCASH INFO</h2>
                 <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total bought BCH</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="bch-bought" placeholder="e.g 5.90889078">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Total earnings BCH</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="bch-earning" placeholder="e.g 0.90889078">
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
    include('../includes/dbh.inc.php');    

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $btcBought = $_POST['btc-bought'];
        $btcEarnings = $_POST['btc-earning'];
        $portfolioValue = $_POST['portfolio-value'];
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

        $sql = "INSERT INTO tbl_dashboard (username, btcBought, btcEarnings, portfolioValue, btcPortfolio, btcPortfolioValue, ltcBought, ltcEarnings, ltcPortfolio, ltcPortfolioValue, ethBought, ethEarnings, ethPortfolio, ethPortfolioValue, bchBought, bchEarnings, bchPortfolio, bchPortfolioValue) 
                VALUES ('$username', '$btcBought', '$btcEarnings', '$portfolioValue', '$btcPortfolio', '$btcPortfolioValue', '$ltcBought', '$ltcEarnings', '$ltcPortfolio', '$ltcPortfolioValue', '$ethBought', '$ethEarnings', '$ethPortfolio', '$ethPortfolioValue', '$bchBought', '$bchEarnings', '$bchPortfolio', '$bchPortfolioValue');
                ";

        $res = mysqli_query($conn, $sql);
        if($res==true) {
            $_SESSION['dashboard'] = "<div class='font-body font-bold'>Dashboard modified</div>";
        } else {
            $_SESSION['dashboard'] = "<div class='text-red-600 font-bold font-body'>Failed to update dashboard</div>";
        }
    } else {

    }
?>