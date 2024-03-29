<?php
    include('api.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/chart/ethereum.js"></script>
    <script src="js/api/ethereum.js"></script>
</head>
<body class="font-body">
    <?php 
        include("dashboard-header.php");
    ?>

    <div id="deposit-overlay" class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
        <div class="bg-gray-200 rounded shadow-xl text-gray-800">
        <?php 
            include('deposit-form.php');
        ?>
        </div>
    </div>

    <div id="withdraw-overlay"class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
        <div class="bg-gray-200 rounded shadow-xl text-gray-800">
        <?php 
            include('withdraw-form.php');
        ?>
        </div>
    </div>
    <?php
        $username = $_SESSION['name'];
        $sql = "SELECT ethBought, ethEarnings, portfolioValue, btcPortfolio, btcPortfolioValue, ltcPortfolio, ltcPortfolioValue, ethPortfolio, ethPortfolioValue, bchPortfolio, bchPortfolioValue FROM tbl_dashboard WHERE username='$username';";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $ethBought = $row['ethBought'];
                $ethEarnings = $row['ethEarnings'];
                $portfolioValue = $row['portfolioValue'];
                $btcPortfolio = $row['btcPortfolio'];
                $btcPortfolioValue = $row['btcPortfolioValue'];
                $ltcPortfolio = $row['ltcPortfolioValue'];
                $ltcPortfolioValue = $row['ltcPortfolioValue'];
                $ethPortfolio = $row['ethPortfolio'];
                $ethPortfolioValue = $row['ethPortfolioValue'];
                $bchPortfolio = $row['bchPortfolio'];
                $bchPortfolioValue = $row['bchPortfolioValue'];
            }
        }   else {
            $ethBought = '0.00000000';
            $ethEarnings = '0.00000000';
            $portfolioValue = '0.00';
            $btcPortfolio = '0.00';
            $btcPortfolioValue = '0.00000000';
            $ltcPortfolio = '0.00';
            $ltcPortfolioValue = '0.00000000';
            $ethPortfolio = '0.00';
            $ethPortfolioValue = '0.00000000';
            $bchPortfolio = '0.00';
            $bchPortfolioValue = '0.00000000';
        }
    ?>

    <main class="bg-brand-blue-light-1">
        <div class="max-w-6xl mx-auto lg:flex items-stretch lg:space-x-8 px-6">
            <section class="lg:w-9/12 py-20">
                <div class="sm:flex items-center justify-between mb-8">           
                    <div>
                        <h2 class="font-bold text-brand-gray-dark-1 text-2xl sm:text-lg mb-8 sm:mb-0">Dashboard</h2>
                    </div>
                    <div class="flex space-x-4">
                        <div id="deposit-btn" class="py-2 px-6 bg-blue-700 text-white rounded-md cursor-pointer">Deposit</div>

                        <div id="withdraw-btn" class="py-2 px-6 bg-white border border-blue-700 rounded-md cursor-pointer text-blue-700">Withdraw</div>
                    </div>
                </div>
                <div class="bg-white border border-brand-gray-light-3 border-opacity-50 rounded-md shadow-lg">
                    <div class="flex items-center justify-between border-b border-opacity-50 p-4 border-brand-gray-light-4">
                        <div class="sm:flex sm:space-x-6 text-brand-gray-light-1 font-semibold">
                            <div class="space-x-6">
                                <a class="hover:text-blue-500" href="dashboard.php">Bitcoin</a>
                                <a class="hover:text-blue-500" href="dashboard-1.php">Litecoin</a>
                            </div>
                            <div class="space-x-6">
                                <a class="text-blue-700 hover:text-blue-500" href="dashboard-2.php">Ethereum</a>
                                <a class="hover:text-blue-500" href="dashboard-3.php">Bitcoincash</a>
                            </div>
                        </div>
                        <!-- <div class="flex items-center space-x-4 px-2 py-1 border rounded-md border-brand-gray-light-4 border-opacity-50 text-brand-gray-light-1"> 
                            <img src="img/calendar-outline.png" alt="Calendar">
                            <p>January</p>
                            <img src="img/down-arrow.png" alt="down arrow">
                        </div> -->
                    </div>
                    <div class="sm:flex sm:space-x-4 p-4">
                        <div class="flex flex-1 items-center space-x-4 mb-4 sm:mb-0 p-5 border rounded-md bg-brand-blue-light-1 border-brand-border-1 border-opacity-50">
                            <div class="flex items-center justify-center p-2 bg-blue-700 rounded-full">
                                <img src="img/money-tag.png" alt="Price tag">
                            </div>
                            <div>
                                <h2 class="text-brand-gray-dark-1 text-sm font-bold"><?php echo '$'. $eth_price; ?></h2>
                                <p class="text-brand-gray-light-1 text-sm">Current price</p>
                            </div>
                        </div>
                        <div class="flex flex-1 items-center space-x-4 mb-4 sm:mb-0 p-5 border rounded-md bg-brand-blue-light-1 border-brand-border-1 border-opacity-50">
                            <div class="flex items-center justify-center p-2 bg-blue-700 rounded-full">
                                <img src="img/cart.png" alt="Buy cart">
                            </div>
                            <div>
                                <h2 class="text-brand-gray-dark-1 text-sm font-bold"><?php echo $ethBought. ' ETH'; ?></h2>
                                <p class="text-brand-gray-light-1 text-sm">Total bought</p>
                            </div>
                        </div>
                        <div class="flex flex-1 items-center space-x-4 mb-4 sm:mb-0 p-5 border rounded-md bg-brand-blue-light-1 border-brand-border-1 border-opacity-50">
                            <div class="flex items-center justify-center p-2 bg-blue-700 rounded-full">
                                <img src="img/earnings.png" alt="Earnings">
                            </div>
                            <div>
                                <h2 class="text-brand-gray-dark-1 text-sm font-bold"><?php echo '$' .$ethEarnings; ?></h2>
                                <p class="text-brand-gray-light-1 text-sm">Total earnings</p>
                            </div>
                        </div>              
                    </div>
                    <!-- <div class="p-4">
                        <img src="img/dashboard-graph.png" alt="Dashboard crypto graph">
                    </div> -->
                    <div id="chart"></div>
                </div>
            </section>
            <section class="lg:w-3/12 mx-auto py-20">
                <div class="sm:flex items-center justify-center lg:flex-col sm:space-x-12 lg:space-x-0">               
                    <div class="mb-12 sm:mb-0 lg:mb-16 bg-blue-700 rounded-xl text-white">
                        <div class="flex space-x-12 items-center justify-between p-4 mb-6 border-b border-white border-opacity-25">
                            <h3 class="">Portfolio value</h3>
                            <img class="w-24" src="img/logo-white.png" alt="Logo">
                        </div>
                        <h2 class="mb-4 px-4 text-2xl font-bold"><?php echo '$'.$portfolioValue; ?></h2>
                        <p class="px-4">Portfolio owner</p>
                        <p class="pb-4 px-4 text-xl"><?php echo $_SESSION["name"]; ?></p>
                    </div>
                    <div class="flex-col bg-white border border-brand-gray-light-3 border-opacity-50 rounded-lg shadow-lg">
                        <h3 class="py-4 px-3 border-b border-brand-gray-light-3 border-opacity-50 text-brand-gray-dark-1 font-bold">Portfolio</h3>
                        <div class="">
                            <div class="flex justify-between space-x-12 px-3 lg:px-1 py-3 border-b border-brand-gray-light-3 border-opacity-50">
                                <div class="flex items-center space-x-3">                       
                                    <img src="img/bitcoin-icon.png" alt="Bitcoin icon">
                                    <h3 class="font-bold lg:text-sm text-brand-gray-dark-1">Bitcoin</h3>
                                </div>
                                <div>
                                    <h3 class="lg:text-sm font-bold text-brand-gray-dark-1"><?php echo "$". $btcPortfolio ;?></h3>
                                    <p class="text-brand-gray-light-1 lg:text-sm"><?php echo $btcPortfolioValue. ' BTC' ?></p>
                                </div>
                            </div>
                            <div class="flex justify-between space-x-12 px-3 lg:px-1 py-3 border-b border-brand-gray-light-3 border-opacity-50">
                                <div class="flex items-center space-x-3">                       
                                    <img src="img/litecoin-icon.png" alt="Litecoin icon">
                                    <h3 class="font-bold lg:text-sm text-brand-gray-dark-1">Litecoin</h3>
                                </div>
                                <div>
                                    <h3 class="lg:text-sm font-bold text-brand-gray-dark-1"><?php echo "$". $ltcPortfolio ;?></h3>
                                    <p class="text-brand-gray-light-1 lg:text-sm"><?php echo $ltcPortfolioValue. ' LTC' ?></p>
                                </div>
                            </div>
                            <div class="flex justify-between space-x-12 px-3 lg:px-1 py-3 border-b border-brand-gray-light-3 border-opacity-50">
                                <div class="flex items-center space-x-3">                       
                                    <img src="img/ethereum-icon.png" alt="Ethereum icon">
                                    <h3 class="font-bold lg:text-sm text-brand-gray-dark-1">Ethereum</h3>
                                </div>
                                <div>
                                    <h3 class="lg:text-sm font-bold text-brand-gray-dark-1"><?php echo "$". $ethPortfolio ;?></h3>
                                    <p class="text-brand-gray-light-1 lg:text-sm"><?php echo $ethPortfolioValue. ' ETH' ?></p>
                                </div>
                            </div>
                            <div class="flex justify-between space-x-12 px-3 lg:px-1 py-3 border-b border-brand-gray-light-3 border-opacity-50">
                                <div class="flex items-center space-x-3">                       
                                    <img src="img/bitcoincash-icon.png" alt="Bitcoincash icon">
                                    <h3 class="font-bold lg:text-xs text-brand-gray-dark-1">Bitcoincash</h3>
                                </div>
                                <div>
                                    <h3 class="font-bold text-brand-gray-dark-1"><?php echo "$". $bchPortfolio ;?></h3>
                                    <p class="text-brand-gray-light-1"><?php echo $bchPortfolioValue. ' BCH' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="js/dashboard.js"></script>
</body>
</html>