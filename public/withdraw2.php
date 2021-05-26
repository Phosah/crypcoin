<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-body">
    <?php include("dashboard-header.php") ?>
    <div id="withdraw-overlay"class="bg-black bg-opacity-50 absolute inset-0 flex justify-center items-center">
        <div class="bg-gray-200 rounded shadow-xl text-gray-800">
        <?php 
            include('account-details.php');
        ?>
        </div>
    </div>
    <main class="bg-brand-blue-light-1">
        <section class="py-20">       
            <div class="max-w-6xl mx-auto px-6 bg-white">
            <div class="flex justify-between items-center">
                <h2 class="mb-2 px-4 py-6 font-bold text-brand-gray-dark-1 text-xl">Withdraw</h2>
                <div id="withdraw-btn" class="bg-blue-700 text-white px-6 py-3 rounded-md cursor-pointer">Withdraw</div>
            </div>

            <?php
                if(isset($_SESSION['withdraw'])) {
                    echo $_SESSION['withdraw'];
                    unset($_SESSION['withdraw']);
                }
            ?>
                <div>
                    <div class="flex items-center justify-center py-6 px-6 bg-brand-gray-light-6">
                        <div  class="flex-1">Amount</div>
                        <div  class="flex-1">Value</div>
                        <div  class="flex-1">Bank</div>
                        <div  class="flex-1">Account Number</div>
                        <div  class="flex-1">Date</div>
                        <div  class="flex-1">Status</div>
                    </div>
                    <div class="border-b border-brand-gray-dark-3"></div>

                    <?php
                        include('includes/dbh.inc.php');
                        $username = $_SESSION["name"];
                        $sql = "SELECT * FROM tbl_withdrawals WHERE username='$username';";

                        $res = mysqli_query($conn, $sql);
                        if($res==true) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                $amount = $row['amount'];
                                $value = $row['value'];
                                $bank = $row['bank'];
                                $accountNumber = $row['accountNumber'];
                                $date = $row['date'];
                                $status = $row['status'];
                                ?>

                                <div class="flex items-center justify-center py-6 px-6 font-bold">
                                    <div class="flex-1"><?php echo $amount. 'BTC'; ?></div>
                                    <div class="flex-1"><?php echo '$'.$value; ?></div>
                                    <div class="flex-1"><?php echo $bank; ?></div>
                                    <div class="flex-1"><?php echo $accountNumber; ?></div>
                                    <div class="flex-1"><?php echo $date; ?></div>
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
                                <div class="border-b border-brand-gray-dark-3"></div>
                                <?php
                            }                       
                        }
                    ?>            
                </div>
            </div>
        </section>
    </main>

    <script src="js/withdraw.js"></script>
</body>
</html>