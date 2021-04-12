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
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <section class="mx-20 py-20 bg-red-200">
        <h1>Manage Deposit</h1>
        <form action="" method="POST">
        <div class="flex space-x-4 mb-4">
                <label for="">User id</label>
                <input type="text" name="user_id">
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
    // $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    // $db_select = mysqli_select_db($conn, 'crypcoin') or die(mysqli_error());
    

    if(isset($_POST['submit'])) {
        $plan = $_POST['plan'];
        $coin = $_POST['coin'];
        $amount = $_POST['amount'];
        $value = $_POST['value'];
        $date = $_POST['date'];
        $status = $_POST['status'];

        $sql = "INSERT INTO tbl_deposits SET
            plan = '$plan',
            coin = '$coin',
            amount = '$amount',
            value = '$value',
            date = '$date',
            status = '$status'
        ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res==true) {
            $_SESSION['deposit'] = "<div class='font-body font-bold'>Deposit completed</div>";
            header('location: ../deposit.php');
            // echo $_SESSION['deposit'];
        } else {
            $_SESSION['deposit'] = "<div class='text-red-300 font-bold font-body'>Failed to deposit</div>";
        }

        $id=$_GET['id'];
        $sql2 = "SELECT * FROM tbl_deposits WHERE users_id=$id";
        $res = mysqli_query($conn, $sql2);

        if($res==true) {
            $count = mysqli_num_rows($res);
            if($count==1) {
                $row = mysqli_fetch_assoc($res);
                $plan = $row['plan'];
                $coin = $row['coin'];
                $amount = $row['amount'];
                $value = $row['value'];
                $date = $row['date'];
                $status = $row['status'];
            } else {
                echo 'Not retrieving data from database';
                // header('location: admin/manage-admin.php');
            }
        }
    }
?>