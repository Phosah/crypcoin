<?php
    session_start();
    include '../includes/functions.inc.php';

    if(!isset($_SESSION["username"])) {
        header("location: login.php");
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
    <title>Manage Deposits</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="font-body text-white bg-gray-800">
    <section class="md:mx-10 py-20">
        <div class="max-w-5xl mx-auto px-6 text-xs sm:text-sm">
            <div class="flex items-end pb-16">
                <div class="flex space-x-4 w-80 mx-auto text-brand-gray-light-1 hover:text-blue-700">
                    <i>&LeftArrow;</i>
                    <div class="font-bold font-body">
                        <a href="../admin.php">Back to Admin Panel</a>
                    </div>
                </div>
            </div>
            <h1 class="text-lg sm:text-4xl lg:text-5xl font-bold mb-12">Manage Deposit</h1>
            <form action="" method="POST">
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label class="" for="">Username</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="username" placeholder="Fullname">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Plan</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="plan" placeholder="e.g Starter">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Coin</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="coin" placeholder="e.g BTC">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Amount</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="amount" placeholder="e.g 0.87009807">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Value</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="value" placeholder="789,900">
                </div>
                <!-- <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Date</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="date">
                </div> -->
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Status</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="status" placeholder="e.g Pending">
                </div>
                <div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button class="bg-blue-700 px-8 py-3 text-white font-semibold rounded-md border border-blue-700 hover:bg-white hover:text-blue-700 hover:border-blue-700" type="submit" name="submit">Submit</button>
                </div>
            </form>
            <?php 
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput") {
                        echo "<p class='text-white'>Fill in all fields</p>";
                    }
                    else if($_GET["error"] == "none") {
                        echo "<p class='text-white'>Deposit status updated!</p>";
                    }
                }
            ?>
        </div>
    </section>
</body>
</html>

<?php 
    include '../includes/dbh.inc.php';   

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $plan = $_POST['plan'];
        $coin = $_POST['coin'];
        $amount = $_POST['amount'];
        $value = $_POST['value'];
        // $date = $_POST['date'];
        $status = $_POST['status'];

        if(emptyAdminDeposit($username, $plan, $coin, $amount, $value, $status)) {
            header("location: manage-deposit.php?error=emptyinput");
            exit();
        }

        $sql = "INSERT INTO tbl_deposits (username, plan, coin, amount, value, date, status) VALUES ('$username', '$plan', '$coin', '$amount', '$value', NOW(), '$status');";
        $res = mysqli_query($conn, $sql);

        if($res==true) {
            $_SESSION['deposit'] = "<div class='font-body font-bold text-green-600'>Deposit completed</div>";
            header('location: manage-deposit.php?error=none');
        } else {
            $_SESSION['deposit'] = "<div class='text-red-600 font-bold font-body'>Deposit failed!</div>";
        }
    }
?>