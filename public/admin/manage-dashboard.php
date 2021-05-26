<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Withdrawals</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <section class="mx-20 py-20 bg-red-200">
        <h1>Manage Dashboard</h1>
        <form action="" method="POST">
            <div class="flex space-x-4 mb-4">
                <label for="">User id</label>
                <input type="text" name="userid">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Total bought BTC</label>
                <input type="text" name="btc-bought" placeholder="e,g 0.90889078">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Total earnings BTC</label>
                <input type="text" name="btc-earning">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value</label>
                <input type="text" name="portfolio-value">
            </div>

            <!-- BTC -->
            <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value ($)</label>
                <input type="text" name="btc-portfolio">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value (BTC)</label>
                <input type="text" name="btc-portfolio-value">
            </div>
             <!-- LITECOIN -->
             <div class="flex space-x-4 mb-4">
                <label for="">Total bought LTC</label>
                <input type="text" name="ltc-bought" placeholder="e,g 0.90889078">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Total earnings LTC</label>
                <input type="text" name="ltc-earning">
            </div>

             <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value ($)</label>
                <input type="text" name="ltc-portfolio">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value (LTC)</label>
                <input type="text" name="ltc-portfolio-value">
            </div>
             <!-- ETHEREUM -->
             <div class="flex space-x-4 mb-4">
                <label for="">Total bought ETH</label>
                <input type="text" name="eth-bought" placeholder="e,g 0.90889078">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Total earnings ETH</label>
                <input type="text" name="eth-earning">
            </div>

             <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value ($)</label>
                <input type="text" name="eth-portfolio">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value (ETH)</label>
                <input type="text" name="eth-portfolio-value">
            </div>
             <!-- BITCOINCASH -->
             <div class="flex space-x-4 mb-4">
                <label for="">Total bought BCH</label>
                <input type="text" name="bch-bought" placeholder="e,g 0.90889078">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Total earnings BCH</label>
                <input type="text" name="bch-earning">
            </div>

             <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value ($)</label>
                <input type="text" name="bch-portfolio">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Portfolio value (BCH)</label>
                <input type="text" name="bch-portfolio-value">
            </div>
            <!--  -->
            <div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit">
            </div>
        </form>
    </section>
</body>
</html>

<?php 
    include('../includes/dbh.inc.php');    

    if(isset($_POST['submit'])) {
        $userId = $_POST['userid'];
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

        $sql = "INSERT INTO tbl_dashboard (userid, btcBought, btcEarnings, portfolioValue, btcPortfolio, btcPortfolioValue, ltcBought, ltcEarnings, ltcPortfolio, ltcPortfolioValue, ethBought, ethEarnings, ethPortfolio, ethPortfolioValue, bchBought, bchEarnings, bchPortfolio, bchPortfolioValue) 
                VALUES ('$userId', '$btcBought', '$btcEarnings', '$portfolioValue', '$btcPortfolio', '$btcPortfolioValue', '$ltcBought', '$ltcEarnings', '$ltcPortfolio', '$ltcPortfolioValue', '$ethBought', '$ethEarnings', '$ethPortfolio', '$ethPortfolioValue', '$bchBought', '$bchEarnings', '$bchPortfolio', '$bchPortfolioValue');
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