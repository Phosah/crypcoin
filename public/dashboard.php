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


    <main class="bg-brand-blue-light-1">
        <div class="max-w-6xl mx-auto flex items-stretch space-x-8 px-6">
            <section class="w-9/12 py-20">
                <div class="flex items-center justify-between mb-8">           
                    <div>
                        <h2 class="font-bold text-brand-gray-dark-1 text-lg">Dashboard</h2>
                    </div>
                    <div class="flex space-x-4">
                        <div id="deposit-btn" class="py-2 px-6 bg-blue-700 text-white rounded-md cursor-pointer">Deposit</div>

                        <div id="withdraw-btn" class="py-2 px-6 bg-white border border-blue-700 rounded-md cursor-pointer text-blue-700">Withdraw</div>
                    </div>
                </div>
                <div class="bg-white border border-brand-gray-light-3 border-opacity-50 rounded-md shadow-lg">
                    <div class="flex items-center justify-between border-b border-opacity-50 p-4 border-brand-gray-light-4">
                        <div class="space-x-6 text-brand-gray-light-1 font-semibold">
                            <a class="text-blue-700" href="dashboard.php">Bitcoin</a>
                            <a href="dashboard-1.php">Litecoin</a>
                            <a href="dashboard-2.php">Ethereum</a>
                            <a href="dashboard-3.php">Bitcoincash</a>
                        </div>
                        <div class="flex items-center space-x-4 px-2 py-1 border rounded-md border-brand-gray-light-4 border-opacity-50 text-brand-gray-light-1"> 
                            <img src="img/calendar-outline.png" alt="Calendar">
                            <p>January</p>
                            <img src="img/down-arrow.png" alt="down arrow">
                        </div>
                    </div>
                    <div class="flex space-x-4 p-4">
                        <div class="flex flex-1 items-center space-x-4 p-5 border rounded-md bg-brand-blue-light-1 border-brand-border-1 border-opacity-50">
                            <div class="flex items-center justify-center p-2 bg-blue-700 rounded-full">
                                <img src="img/money-tag.png" alt="Price tag">
                            </div>
                            <div>
                                <h2 class="text-brand-gray-dark-1 text-lg font-bold"><?php echo '$'. $btc_price; ?></h2>
                                <p class="text-brand-gray-light-1 text-sm">Current price</p>
                            </div>
                        </div>
                        <div class="flex flex-1 items-center space-x-4 p-5 border rounded-md bg-brand-blue-light-1 border-brand-border-1 border-opacity-50">
                            <div class="flex items-center justify-center p-2 bg-blue-700 rounded-full">
                                <img src="img/cart.png" alt="Buy cart">
                            </div>
                            <div>
                                <h2 class="text-brand-gray-dark-1 text-lg font-bold">1.00399 BTC</h2>
                                <p class="text-brand-gray-light-1 text-sm">Total bought</p>
                            </div>
                        </div>
                        <div class="flex flex-1 items-center space-x-4 p-5 border rounded-md bg-brand-blue-light-1 border-brand-border-1 border-opacity-50">
                            <div class="flex items-center justify-center p-2 bg-blue-700 rounded-full">
                                <img src="img/earnings.png" alt="Earnings">
                            </div>
                            <div>
                                <h2 class="text-brand-gray-dark-1 text-lg font-bold">1.0005 BTC</h2>
                                <p class="text-brand-gray-light-1 text-sm">Total earnings</p>
                            </div>
                        </div>              
                    </div>
                    <div class="p-4">
                        <img src="img/dashboard-graph.png" alt="Dashboard crypto graph">
                    </div>
                </div>
            </section>
            <section class="w-3/12 py-20">
                <div class="">               
                    <div class="mb-16 bg-blue-700 rounded-xl text-white">
                        <div class="flex items-center justify-between p-4 mb-6 border-b border-white border-opacity-25">
                            <h3 class="">Portfolio value</h3>
                            <img class="w-24" src="img/logo-white.png" alt="Logo">
                        </div>
                        <h2 class="mb-4 px-4 text-2xl font-bold">$365,000.00</h2>
                        <p class="px-4">Portfolio owner</p>
                        <p class="pb-4 px-4"><?php echo $_SESSION["name"]; ?></p>
                    </div>
                    <div class="flex-col bg-white border border-brand-gray-light-3 border-opacity-50 rounded-lg shadow-lg">
                        <h3 class="py-4 px-3 border-b border-brand-gray-light-3 border-opacity-50 text-brand-gray-dark-1 font-bold">Portfolio</h3>
                        <div class="">
                            <div class="flex justify-between px-3 py-3 border-b border-brand-gray-light-3 border-opacity-50">
                                <div class="flex items-center space-x-3">                       
                                    <img src="img/bitcoin-icon.png" alt="Bitcoin icon">
                                    <h3 class="font-bold text-sm text-brand-gray-dark-1">Bitcoin</h3>
                                </div>
                                <div>
                                    <h3 class="text-sm font-bold text-brand-gray-dark-1">$100,400.00</h3>
                                    <p class="text-brand-gray-light-1 text-sm">2.6900 BTC</p>
                                </div>
                            </div>
                            <div class="flex justify-between px-3 py-3 border-b border-brand-gray-light-3 border-opacity-50">
                                <div class="flex items-center space-x-3">                       
                                    <img src="img/litecoin-icon.png" alt="Litecoin icon">
                                    <h3 class="font-bold text-sm text-brand-gray-dark-1">Litecoin</h3>
                                </div>
                                <div>
                                    <h3 class="text-sm font-bold text-brand-gray-dark-1">$100,400.00</h3>
                                    <p class="text-brand-gray-light-1 text-sm">4045.005 LTH</p>
                                </div>
                            </div>
                            <div class="flex justify-between px-3 py-3 border-b border-brand-gray-light-3 border-opacity-50">
                                <div class="flex items-center space-x-3">                       
                                    <img src="img/bitcoincash-icon.png" alt="Bitcoincash icon">
                                    <h3 class="font-bold text-sm text-brand-gray-dark-1">Bitcoincash</h3>
                                </div>
                                <div>
                                    <h3 class="text-sm font-bold text-brand-gray-dark-1">$100,400.00</h3>
                                    <p class="text-brand-gray-light-1 text-sm">503.908 BTC</p>
                                </div>
                            </div>
                            <div class="flex justify-between px-3 py-3">
                                <div class="flex items-center space-x-3">                       
                                    <img src="img/ethereum-icon.png" alt="Ethereum icon">
                                    <h3 class="font-bold text-sm text-brand-gray-dark-1">Ethereum</h3>
                                </div>
                                <div>
                                    <h3 class="text-sm font-bold text-brand-gray-dark-1">$100,400.00</h3>
                                    <p class="text-brand-gray-light-1 text-sm">70.7570 ETH</p>
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