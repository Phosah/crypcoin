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
        <div class="min-h-screen flex flex-col max-w-6xl mx-auto px-6">
            <?php include("navbar.php") ?>
            <div class=" flex-1 md:flex md:items-center md:justify-between pb-8">
                <div class="md:w-1/2 w-full mb-12 md:mb-0">
                    <div class="md:w-9/12">
                        <h2 class="text-3xl font-semibold mb-4">Crypto Trade Made Easy</h2>
                        <p class="font-extralight">Investing in cryptocurrencies simplified and made accessible at lightening speed with Crypcoin</p>
                    </div>
                </div>
                <div class="md:w-1/2 w-full md:flex md:justify-end">
                    <div class="md:w-9/12 py-10 px-6 border-2 bg-transparent rounded-3xl">
                        <h3 class="pb-10 text-lg font-semibold">Start earning with <br> Crypcoin binary trade</h3>
                        <form action="">
                            <div class="flex space-x-3 mb-4 border-b pb-3 focus-within:border-transparent border-brand-gray-light focus-within:ring-2 rounded-t-lg ring-white">
                                <div class="">                              
                                    <img class="w-6" src="img/user.png" alt="User icon">                         
                                </div>
                                <input class="w-full bg-transparent focus:outline-none" type="text" name="" id="" placeholder="Full name">
                            </div>
                            <div class="flex space-x-3 mb-4 border-b pb-3 border-brand-gray-light focus-within:border-transparent focus-within:ring-2 rounded-t-lg ring-white">     
                                <div>                              
                                    <img class="w-6" src="img/mail.png" alt="Email icon">                         
                                </div>                   
                                <input class="w-full bg-transparent focus:outline-none" type="email" name="" id="" placeholder="Email address">
                            </div>
                            <div class="flex space-x-3 mb-8 border-b pb-3 border-brand-gray-light focus-within:border-transparent focus-within:ring-2 rounded-t-lg ring-white">     
                                <div>                              
                                    <img class="w-6" src="img/password.png" alt="Password icon">                         
                                </div>                     
                                <input class="w-full bg-transparent focus:outline-none" type="password" name="" id="" placeholder="Password">
                                <div>                              
                                    <img class="w-6" src="img/password-show.png" alt="Password icon">                         
                                </div>
                            </div>
                            <button class="px-6 py-2 bg-blue-600 rounded-md hover:bg-blue-700">Register</button>
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