<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-body">   
    <?php include("dashboard-header.php") ?>
        <!-- Deposit overlay  -->
    <div id="deposit-overlay" class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
        <div class="bg-gray-200 rounded shadow-xl text-gray-800">
            <?php  include 'deposit-form.php';?>
        </div>
    </div>
    <main class="bg-brand-blue-light-1">
        <section class="pt-20 pb-10">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="mb-2 font-bold text-brand-gray-dark-1 text-xl">Deposit</h2>
                <p class="mb-4 text-brand-gray-dark-4">Select one of the deposit plans listed below to make payments</p>
                <div class="md:flex md:items-center md:justify-center md:space-x-4 px-6 py-6">
                    <div>                   
                        <div class="w-76 sm:w-64 mx-auto mb-3 border border-brand-gray-light-7 rounded-md bg-blue-100">
                            <div class="flex py-3 px-4">
                                <div class="flex-1">
                                    <h2 class="mb-2 text-brand-gray-dark-1 font-bold text-lg">Starter</h2>
                                    <p class="mb-4 text-brand-gray-dark-4"><span class="font-bold">400%</span> profit / week</p>
                                    <p class="text-brand-gray-dark-4 text-sm">Trade: <span class="font-bold">$200 - $9,999</span></p>
                                </div>
                                <div class="flex justify-center items-center bg-blue-200 rounded-full h-16 w-16 mx-auto mb-4">
                                    <img class="w-8" src="img/starter.png" alt="Starter tag">
                                </div>
                            </div>
                            <div class="border-b border-brand-gray-light-7"></div>
                            <div class="deposit-btn flex py-3 px-4 space-x-4 w-80 lg:w-96 mx-auto text-brand-blue-dark-1 hover:text-blue-700 cursor-pointer">
                                <div id="" class="font-bold font-body">
                                    Deposit here
                                </div>
                                <i>&rightarrow;</i>
                            </div>
                        </div>
                        <div class="w-76 sm:w-64 mx-auto mb-3 border border-brand-gray-light-7 rounded-md bg-gray-100">
                            <div class="flex py-3 px-4">
                                <div class="flex-1">
                                    <h2 class="mb-2 text-brand-gray-dark-1 font-bold text-lg">Silver</h2>
                                    <p class="mb-4 text-brand-gray-dark-4"><span class="font-bold">500%</span> profit / week</p>
                                    <p class="text-brand-gray-dark-4 text-sm">Trade: <span class="font-bold">$10,000 - $99,999</span></p>
                                </div>
                                <div class="flex justify-center items-center bg-gray-200 rounded-full h-16 w-16 mx-auto mb-4">
                                    <img class="w-8" src="img/silver.png" alt="Silver tag">
                                </div>
                            </div>
                            <div class="border-b border-brand-gray-light-7"></div>
                            <div class="deposit-btn flex py-3 px-4 space-x-4 w-80 lg:w-96 mx-auto text-brand-gray-dark-3 hover:text-blue-700 cursor-pointer">
                                <div id="" class="font-bold font-body">
                                    Deposit here
                                </div>
                                <i>&rightarrow;</i>
                            </div>
                        </div>
                    </div>
                    <div>                  
                        <div class="w-76 sm:w-64 mx-auto mb-3 border border-brand-gray-light-7 rounded-md bg-yellow-100">
                            <div class="flex py-3 px-4">
                                <div class="flex-1">
                                    <h2 class="mb-2 text-brand-gray-dark-1 font-bold text-lg">Gold</h2>
                                    <p class="mb-4 text-brand-gray-dark-4"><span class="font-bold">600%</span> profit / week</p>
                                    <p class="text-brand-gray-dark-4 text-sm">Trade: <span class="font-bold">$100,000 - $499,999</span></p>
                                </div>
                                <div class="flex justify-center items-center bg-yellow-200 rounded-full h-16 w-16 mx-auto mb-4">
                                    <img class="w-8" src="img/gold.png" alt="Gold tag">
                                </div>
                            </div>
                            <div class="border-b border-brand-gray-light-7"></div>
                            <div class="deposit-btn flex py-3 px-4 space-x-4 w-80 lg:w-96 mx-auto text-yellow-600 hover:text-blue-700 cursor-pointer">
                                <div id="" class="font-bold font-body">
                                    Deposit here
                                </div>
                                <i>&rightarrow;</i>
                            </div>
                        </div>
                        <div class="w-76 sm:w-64 mx-auto mb-3 border border-brand-gray-light-7 rounded-md bg-gray-100">
                            <div class="flex py-3 px-4">
                                <div class="flex-1">
                                    <h2 class="mb-2 text-brand-gray-dark-1 font-bold text-lg">Platinum</h2>
                                    <p class="mb-4 text-brand-gray-dark-4"><span class="font-bold">700%</span> profit / week</p>
                                    <p class="flex flex-shrink-0 text-brand-gray-dark-4 text-sm">Trade: <span class="font-bold">$500,000 - $1,000,000</span></p>
                                </div>
                                <div class="flex justify-center items-center bg-gray-200 rounded-full h-16 w-16 mx-auto mb-4">
                                    <img class="w-8" src="img/platinum.png" alt="Platinum tag">
                                </div>
                            </div>
                            <div class="border-b border-brand-gray-light-7"></div>
                            <div class="deposit-btn flex py-3 px-4 space-x-4 w-80 lg:w-96 mx-auto text-brand-gray-dark-3 hover:text-blue-700 cursor-pointer">
                                <div id="" class="font-bold font-body">
                                    Deposit here
                                </div>
                                <i>&rightarrow;</i>
                            </div>
                        </div>
                    </div>        
                </div>
                <?php 
                if(isset($_SESSION['deposit'])) {
                    echo $_SESSION['deposit'];
                    unset($_SESSION['deposit']);
                }
                if(isset($_SESSION['deposit-pending'])) {
                    echo $_SESSION['deposit-pending'];
                    unset($_SESSION['deposit-pending']);
                }
                ?>
            </div>
        </section>
        <!-- End section -->

        <section class="hidden md:block py-10">       
            <div class="max-w-6xl mx-auto px-6 bg-white">
                <h2 class="mb-2 px-4 py-6 font-bold text-brand-gray-dark-1 text-xl">Deposit history</h2>
                <div>
                    <div class="flex items-center justify-center py-6 px-6 bg-brand-gray-light-6">
                        <div class="flex-1">Plan</div>
                        <div class="flex-1">Coin</div>
                        <div class="flex-1">Amount</div>
                        <div class="flex-1">Value</div>
                        <div class="flex-1">Date</div>
                        <div class="flex-1">Status</div>
                        <div class="flex-1">Proof of Payment</div>
                    </div>
                    <div class="border-b border-brand-gray-dark-3"></div>
                   
                    <?php
                        include('includes/dbh.inc.php');
                        $username = $_SESSION["name"];
                        $sql = "SELECT * FROM tbl_deposits WHERE username='$username';";

                        $res = mysqli_query($conn, $sql);
                        if($res==true) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                $plan = $row['plan'];
                                $coin = $row['coin'];
                                $amount = $row['amount'];
                                $value = $row['value'];
                                $date = $row['date'];
                                $status = $row['status'];
                                ?>

                                <div class="flex items-center justify-center py-6 px-6 font-bold text-sm">
                                    <div class="flex-1"><?php echo $plan; ?></div>
                                    <div class="flex-1"><?php echo $coin; ?></div>
                                    <div class="flex-1 text-xs"><?php echo $amount; ?></div>
                                    <div class="flex-1"><?php echo '$'.$value; ?></div>
                                    <div class="flex-1"><?php echo $date; ?></div>
                                    <?php
                                        switch($status) {
                                            case "Success":
                                                echo "<div class='flex-1 text-green-600'>$status</div>";
                                                    break;
                                            case "Pending":
                                                echo "<div class='flex-1 text-yellow-600'>$status</div>";
                                                    break;
                                            case "Failed":
                                                echo "<div class='flex-1 text-red-500'>$status</div>";
                                                    break;
                                        }
                                    ?>
                                    <div class="flex-shrink-0 text-blue-600"><button class="border border-blue-600 py-2 px-3 rounded-md"><a href="upload-receipt.php">Update payment slip</a></button></div>
                                </div>
                                <div class="border-b border-brand-gray-dark-3"></div>
                                <?php
                            }                       
                        }
                    ?>
                </div>
            </div>
        </section>

        <!-- Mobile View -->
        <section class="block md:hidden py-10">
            <div class="max-w-6xl mx-auto px-6 bg-white">
                <div class="px-3">
                    <h2 class="mb-2 px-4 py-6 font-bold text-brand-gray-dark-1 text-xl">Deposit history</h2>
                </div>
                <div>
                    <div>
                        <div class="border-b border-brand-gray-dark-3"></div>
                        <?php
                            include('includes/dbh.inc.php');
                            $username = $_SESSION['name'];
                            $sql = "SELECT * FROM tbl_deposits WHERE username='$username' ORDER BY DEPOSIT_ID DESC;";
                            $res = mysqli_query($conn, $sql);
    
                            if($res==true) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $plan = $row['plan'];
                                    $coin = $row['coin'];
                                    $amount = $row['amount'];
                                    $value = $row['value'];
                                    $date = $row['date'];
                                    $status = $row['status'];
                                    ?>
                                    <div class="py-6 px-6 bg-brand-gray-light-6">
                                        <div class="flex mb-4 border-b border-gray-200">
                                            <div  class="flex-1 mb-4">Plan</div>
                                            <div class="flex-1"><?php echo $plan; ?></div>
                                        </div>
                                        <div class="flex mb-4 border-b border-gray-200">
                                            <div  class="flex-1 mb-4">Coin</div>
                                            <div class="flex-1"><?php echo $coin; ?></div>
                                        </div>
                                        <div class="flex mb-4 border-b border-gray-200">
                                            <div  class="flex-1 mb-4">Amount</div>
                                            <div class="flex-1"><?php echo $amount; ?></div>
                                        </div>
                                        <div class="flex mb-4 border-b border-gray-200">
                                            <div  class="flex-1 mb-4">Value</div>
                                            <div class="flex-1"><?php echo '$'. $value; ?></div>
                                        </div>
                                        <div class="flex mb-4 border-b border-gray-200">
                                            <div  class="flex-1 mb-4">Date</div>
                                            <div class="flex-1"><?php echo $date; ?></div>
                                        </div>
                                        <div class="flex mb-4 border-b border-gray-200">
                                            <div  class="flex-1 mb-4">Status</div>
                                            <?php
                                                if ($status == "Success") {
                                                    echo "<div class='flex-1 text-green-600'>$status</div>";
                                                } else if ($status == "Pending") {
                                                    echo "<div class='flex-1 text-yellow-600'>$status</div>";
                                                } else if ($status == "Failed") {
                                                    echo "<div class='flex-1 text-red-600'>$status</div>";
                                                }
                                            ?>
                                        </div>
                                        <div class="flex space-x-1 mb-4 border-b border-gray-200">
                                            <div  class="flex-1 mb-4">Proof of Payment</div>
                                            <div class="flex-1 text-blue-600 text-xs"><button class="border border-blue-600 py-2 px-3 rounded-md"><a href="upload-receipt.php">Update payment slip</a></button></div>
                                        </div>
                                    </div>
                                    <div class="border-b border-brand-gray-light-3"></div>
                                    <?php
                                }                       
                            }
                        ?>            
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="js/deposit.js"></script>
</body>
</html>