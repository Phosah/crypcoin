<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypcoin - home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <header class="home-header min-h-screen pb-30 text-white">
        <div class="max-w-4xl mx-auto px-8">
            <?php include("navbar.php") ?>
            <div class="flex items-center justify-between">
                <div class="w-1/2">
                    <div class="w-9/12">
                        <h2 class="text-3xl">Crypto Trade Made</h2>
                        <h2 class="text-3xl mb-4">Easy</h2>
                        <p>Investing in cryptocurrencies simplified and made accessible at lightening speed with Crypcoin</p>
                        <!-- <button>Get started</button>
                        <button>Know more</button> -->
                    </div>
                </div>
                <div class="w-1/2 flex justify-end">
                    <div class="w-9/12 py-10 px-6 bg-gray-600 rounded-3xl">
                        <h3 class="pb-10 text-lg">Start earning with <br> Crypcoin binary trade</h3>
                        <form action="">
                            <input class="block w-full mb-4" type="text" name="" id="" placeholder="Full name">
                            <input class="block w-full mb-4" type="email" name="" id="" placeholder="email address">
                            <input class="block w-full mb-4" type="password" name="" id="" placeholder="password">
                            <button class="px-6 py-2 bg-blue-600 rounded-md">Register</button>
                        </form>
                    </div>
                </div>             
            </div>
        </div>       
    </header>
    <main>
        <?php include("section/coinlist.php") ?>
        <?php include("section/why-us.php") ?>
        <?php include("section/about-us.php") ?>
        <?php include("section/traffic-info.php") ?>
        <?php include("section/dashboard.php") ?>
        <?php include("section/graph.php") ?>
        <?php include("section/video.php") ?>
        <?php include("section/user.php") ?>
        <?php include("section/investment.php") ?>
        <?php include("section/update.php") ?>
    </main>
    <?php include("footer.php") ?>
</body>
</html>