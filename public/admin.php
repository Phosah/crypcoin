<?php
    session_start();
    // include 'includes/dbh.inc.php';
    include 'includes/functions.inc.php';

    if(!isset($_SESSION["username"])) {
        header("location: admin/login.php");
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
    <title>Admin</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="font-body bg-gray-600 text-brand-gray-dark-3">
    <main class="">
        <section class="py-20 px-6 max-w-3xl mx-auto bg-gray-200">
            <h1 class="mb-4 text-3xl">Admin Panel</h1>
            <p class="mb-8 text-xl">Welcome to Crypcoin Binary Trade Panel </p>
            <div class="flex space-x-10 justify-center mb-8">
                <div>
                    <a class="hover:text-blue-500" href="admin/manage-deposit.php">Manage Deposit</a>
                </div>
                <div>
                    <a class="hover:text-blue-500" href="admin/manage-withdraw.php">Manage Withdrawal</a>
                </div>
                <div>
                    <a class="hover:text-blue-500" href="admin/manage-dashboard.php">Manage Dashboard</a>
                </div>
                <div>
                    <a class="hover:text-blue-500" href="admin/manage-users.php">Manage Users</a>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="text-red-500 hover:text-red-800"><a href="includes/admin-logout.inc.php">Logout</a></div>
            </div>
        </section>
    </main>
</body>
</html>