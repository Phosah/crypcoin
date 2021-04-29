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
        <h1>Manage Withdrawals</h1>
        <form action="" method="POST">
            <div class="flex space-x-4 mb-4">
                <label for="">User id</label>
                <input type="text" name="user_id">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Amount</label>
                <input type="text" name="amount">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Value</label>
                <input type="text" name="value">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Bank</label>
                <input type="text" name="bank">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Account number</label>
                <input type="text" name="account_number">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Date</label>
                <input type="text" name="date">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Status</label>
                <input type="text" name="status">
            </div>
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
        $userId = $_POST['user_id'];
        $amount = $_POST['amount'];
        $value = $_POST['value'];
        $bank = $_POST['bank'];
        $accountNumber = $_POST['account_number'];
        $date = $_POST['date'];
        $status = $_POST['status'];

        $sql = "INSERT INTO tbl_withdrawals SET
            user_id = '$userId',
            amount = '$amount',
            value = '$value',
            bank = '$bank',
            accountNumber = '$accountNumber',
            date = '$date',
            status = '$status'
        ";

        $res = mysqli_query($conn, $sql);

        if($res==true) {
            $_SESSION['withdraw'] = "<div class='font-body font-bold'>withdraw completed</div>";
            header('location: ../withdraw.php');
            // echo $_SESSION['withdraw'];
        } else {
            $_SESSION['withdraw'] = "<div class='text-red-600 font-bold font-body'>Failed to deposit</div>";
        }
    }
?>