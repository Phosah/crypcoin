<?php 
    session_start();
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
<body>
    <section class="mx-20 py-20 bg-red-200">
        <h1>Manage Deposit</h1>
        <form action="" method="POST">
            <div class="flex space-x-4 mb-4">
                <label for="">User id</label>
                <input type="text" name="userid">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Plan</label>
                <input type="text" name="plan">
            </div>
            <div class="flex space-x-4 mb-4">
                <label for="">Coin</label>
                <input type="text" name="coin">
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
        $userId = $_POST['userid'];
        $plan = $_POST['plan'];
        $coin = $_POST['coin'];
        $amount = $_POST['amount'];
        $value = $_POST['value'];
        $date = $_POST['date'];
        $status = $_POST['status'];

        $sql = "INSERT INTO tbl_deposits SET
            userid = '$userId',
            plan = '$plan',
            coin = '$coin',
            amount = '$amount',
            value = '$value',
            date = '$date',
            status = '$status'
        ";

        $res = mysqli_query($conn, $sql);

        if($res==true) {
            $_SESSION['deposit'] = "<div class='font-body font-bold text-green-600'>Deposit completed</div>";
            header('location: ../deposit.php');
            // echo $_SESSION['deposit'];
        } else {
            $_SESSION['deposit'] = "<div class='text-red-600 font-bold font-body'>Deposit failed!</div>";
        }
    }
?>