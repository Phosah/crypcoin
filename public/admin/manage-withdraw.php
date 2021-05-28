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
    <title>Manage Withdrawal</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="font-body text-white bg-gray-800">
    <section class="md:mx-20 py-20">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-4xl lg:text-5xl font-bold mb-12">Manage Withdrawal</h1>
            <form action="" method="POST">
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Username</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="username" placeholder="Fullname">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Amount <span>(BTC)</span></label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="amount" placeholder="e.g 9.74837489">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Value <span>($)</span></label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="value" placeholder="e.g 50,000">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Bank</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="bank" placeholder="e.g Bank of America">
                </div>
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Account number</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="account_number" placeholder="0102030403">
                </div>
                <!-- <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Date</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="date">
                </div> -->
                <div class="flex space-x-4 items-center mb-6 rounded-lg">
                    <label for="">Status</label>
                    <input class="w-full text-gray-800 rounded-md py-3 px-4 focus:outline-none" type="text" name="status" placeholder="e.g Success">
                </div>
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
        $amount = $_POST['amount'];
        $value = $_POST['value'];
        $bank = $_POST['bank'];
        $accountNumber = $_POST['account_number'];
        $date = $_POST['date'];
        $status = $_POST['status'];

        $sql = "INSERT INTO tbl_withdrawals (username, amount, value, bank, accountNumber, date, status) VALUES ('$username', '$amount', '$value', '$bank', '$accountNumber', NOW(), '$status');";
        $res = mysqli_query($conn, $sql);

        if($res==true) {
            $_SESSION['withdraw'] = "<div class='font-body font-bold text-green-600 mb-8'>withdraw completed</div>";
            header('location: ../withdraw.php');
        } else {
            $_SESSION['withdraw'] = "<div class='text-red-600 font-bold font-body mb-8'>Failed to deposit</div>";
        }
    }
?>