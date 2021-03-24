<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="font-body">
    <?php include("dashboard-header.php") ?>
    <main class="bg-brand-blue-light-1">
        <section class="pt-20 pb-10">       
            <div class="max-w-6xl px-6 mx-auto">
                <h2 class="mb-2 font-bold text-brand-gray-dark-1 text-xl">Deposit</h2>
                <p class="mb-4 text-brand-gray-dark-4">Select one of the deposit plans listed below to make payments</p>
                <div class="flex items-center justify-center space-x-4 max-w-6xl">                   
                    <div class="w-1/4 mb-3 border border-brand-gray-light-7 rounded-md bg-blue-100">
                        <div class="flex py-3 px-4">
                            <div class="">
                                <h2 class="mb-2 text-brand-gray-dark-1 font-bold text-lg">Starter</h2>
                                <p class="mb-4 text-brand-gray-dark-4"><span class="font-bold">50%</span> profit / week</p>
                                <p class="text-brand-gray-dark-4 text-sm">Trade: <span class="font-bold">$200 - $4,999</span></p>
                            </div>
                            <div class="flex justify-center items-center bg-blue-200 rounded-full h-16 w-16 mx-auto mb-4">
                                <img class="w-8" src="img/starter.png" alt="Starter tag">
                            </div>
                        </div>
                        <div class="border-b border-brand-gray-light-7"></div>
                        <div class="flex py-3 px-4 space-x-4 w-80 lg:w-96 mx-auto text-brand-blue-dark-1 hover:text-blue-700">
                            <div class="font-bold font-body">
                                <a href="index.php">Deposit here</a>
                            </div>
                            <i>&rightarrow;</i>
                        </div>
                    </div>
                    <div class="w-1/4 mb-3 border border-brand-gray-light-7 rounded-md bg-gray-100">
                        <div class="flex py-3 px-4">
                            <div class="">
                                <h2 class="mb-2 text-brand-gray-dark-1 font-bold text-lg">Silver</h2>
                                <p class="mb-4 text-brand-gray-dark-4"><span class="font-bold">50%</span> profit / week</p>
                                <p class="text-brand-gray-dark-4 text-sm">Trade: <span class="font-bold">$2000 - $4,999</span></p>
                            </div>
                            <div class="flex justify-center items-center bg-gray-200 rounded-full h-16 w-16 mx-auto mb-4">
                                <img class="w-8" src="img/silver.png" alt="Silver tag">
                            </div>
                        </div>
                        <div class="border-b border-brand-gray-light-7"></div>
                        <div class="flex py-3 px-4 space-x-4 w-80 lg:w-96 mx-auto text-brand-gray-dark-3 hover:text-blue-700">
                            <div class="font-bold font-body">
                                <a href="index.php">Deposit here</a>
                            </div>
                            <i>&rightarrow;</i>
                        </div>
                    </div>
                    <div class="w-1/4 mb-3 border border-brand-gray-light-7 rounded-md bg-yellow-100">
                        <div class="flex py-3 px-4">
                            <div class="">
                                <h2 class="mb-2 text-brand-gray-dark-1 font-bold text-lg">Gold</h2>
                                <p class="mb-4 text-brand-gray-dark-4"><span class="font-bold">50%</span> profit / week</p>
                                <p class="text-brand-gray-dark-4 text-sm">Trade: <span class="font-bold">$10000 - $49,999</span></p>
                            </div>
                            <div class="flex justify-center items-center bg-yellow-200 rounded-full h-16 w-16 mx-auto mb-4">
                                <img class="w-8" src="img/gold.png" alt="Gold tag">
                            </div>
                        </div>
                        <div class="border-b border-brand-gray-light-7"></div>
                        <div class="flex py-3 px-4 space-x-4 w-80 lg:w-96 mx-auto text-yellow-600 hover:text-blue-700">
                            <div class="font-bold font-body">
                                <a href="index.php">Deposit here</a>
                            </div>
                            <i>&rightarrow;</i>
                        </div>
                    </div>
                    <div class="w-1/4 mb-3 border border-brand-gray-light-7 rounded-md bg-gray-100">
                        <div class="flex py-3 px-4">
                            <div class="">
                                <h2 class="mb-2 text-brand-gray-dark-1 font-bold text-lg">Platinum</h2>
                                <p class="mb-4 text-brand-gray-dark-4"><span class="font-bold">50%</span> profit / week</p>
                                <p class="flex flex-shrink-0 text-brand-gray-dark-4 text-sm">Trade: <span class="font-bold">$50000 - $100,000</span></p>
                            </div>
                            <div class="flex justify-center items-center bg-gray-200 rounded-full h-16 w-16 mx-auto mb-4">
                                <img class="w-8" src="img/platinum.png" alt="Platinum tag">
                            </div>
                        </div>
                        <div class="border-b border-brand-gray-light-7"></div>
                        <div class="flex py-3 px-4 space-x-4 w-80 lg:w-96 mx-auto text-brand-gray-dark-3 hover:text-blue-700">
                            <div class="font-bold font-body">
                                <a href="index.php">Deposit here</a>
                            </div>
                            <i>&rightarrow;</i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-10">       
            <div class="max-w-6xl mx-auto px-6 bg-white">
                <h2 class="mb-2 px-4 py-6 font-bold text-brand-gray-dark-1 text-xl">Deposit history</h2>
                <div>
                    <div class="flex items-center justify-center py-6 px-6 bg-brand-gray-light-6">
                        <div  class="flex-1">Plan</div>
                        <div  class="flex-1">Coin</div>
                        <div  class="flex-1">Amount</div>
                        <div  class="flex-1">Value</div>
                        <div  class="flex-1">Date</div>
                        <div  class="flex-1">Status</div>
                        <div  class="flex-1">Proof of Payment</div>
                    </div>
                    <div class="border-b border-brand-gray-dark-3"></div>
                    <div class="flex items-center justify-center py-6 px-6 font-bold">
                        <div class="flex-1">Silver</div>
                        <div class="flex-1">BTC</div>
                        <div class="flex-1">0.0123BTC</div>
                        <div class="flex-1">$200</div>
                        <div class="flex-1">25 / 05 / 2020</div>
                        <div class="flex-1 text-yellow-400">Pending</div>
                        <div class="flex-shrink-0 text-blue-600"><button class="border border-blue-600 py-2 px-3 rounded-md">Update payment slip</button></div>
                    </div>
                    <div class="border-b border-brand-gray-dark-3"></div>
                    <div class="flex items-center justify-center py-6 px-6 font-bold">
                        <div class="flex-1">Gold</div>
                        <div class="flex-1">LTC</div>
                        <div class="flex-1">0.923BTC</div>
                        <div class="flex-1">$200</div>
                        <div class="flex-1">25 / 05 / 2020</div>
                        <div class="flex-1 text-yellow-400">Pending</div>
                        <div class="flex-shrink-0 text-blue-600"><button class="border border-blue-600 py-2 px-3 rounded-md">Update payment slip</button></div>
                    </div>
                    <div class="border-b border-brand-gray-dark-3"></div>
                    <div class="flex items-center justify-center py-6 px-6 font-bold">
                        <div class="flex-1">Platinum</div>
                        <div class="flex-1">BTC</div>
                        <div class="flex-1">0.0323BTC</div>
                        <div class="flex-1">$2000</div>
                        <div class="flex-1">25 / 05 / 2020</div>
                        <div class="flex-1 text-green-700">Successful</div>
                        <div class="flex-shrink-0 text-blue-600"><button class="border border-blue-600 py-2 px-3 rounded-md">Update payment slip</button></div>
                    </div>
                    <div class="border-b border-brand-gray-dark-3"></div>
                    <div class="flex items-center justify-center py-6 px-6 font-bold">
                        <div class="flex-1">Diamond</div>
                        <div class="flex-1">BTC</div>
                        <div class="flex-1">0.0623BTC</div>
                        <div class="flex-1">$900</div>
                        <div class="flex-1">25 / 05 / 2020</div>
                        <div class="flex-1 text-red-500">Failed</div>
                        <div class="flex-shrink-0 text-blue-600"><button class="border border-blue-600 py-2 px-3 rounded-md">Update payment slip</button></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>