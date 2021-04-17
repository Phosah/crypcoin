<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title> 
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="bg-black">
    <header class="max-w-6xl mx-auto px-6">
        <?php include("navbar.php") ?>
    </header>
    <main>
        <section class="py-28">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-4xl lg:text-5xl font-body font-bold text-white mb-8">About us</h2>
                <p class="max-w-2xl mx-auto text-brand-gray-light-1 text-xl lg:text-2xl">Crypcoin Binary Trade  is a private crypto trading company that deals in investments in crypto currency to yield amazing turnovers. Established in 2016 </p>
            </div>
        </section>
        <section class="py-28">
            <div class="md:flex items-center md:space-x-12 max-w-6xl mx-auto px-6">
                <div class="md:w-1/2 mb-20 md:mb-0">
                    <h3 class="mb-8 text-white text-4xl lg:text-5xl font-body font-bold">Our values</h3>
                    <p class="mb-12 text-brand-gray-light-1 text-xl">We are guided by our values which represent us as a company  and these values have formed our foundation for the over 4 years and counting</p>
                    <button class="bg-blue-700 py-3 px-8 rounded-md text-white border-blue-700 hover:bg-white hover:text-blue-700 border hover:border-blue-700">Get started</button>
                </div>
                <div class="md:w-1/2">
                    <div class="flex mb-8">                 
                        <div class="flex flex-1 items-center space-x-4">
                            <div class="flex-shrink-0 bg-blue-200 p-2">
                                <img class="w-6" src="img/trust.png" alt="Trust">
                            </div>
                            <p class="text-white font-body font-bold text-xl">Trust & Respect</p>
                        </div>
                        <div class="flex flex-1 items-center space-x-4">
                            <div class="flex-shrink-0 bg-blue-200 p-2">
                                <img class="w-6" src="img/transparency.png" alt="Transparency">
                            </div>
                            <p class="text-white font-body font-bold text-xl">Transparency</p>
                        </div>
                    </div>
                    <div class="flex">                  
                        <div class="flex flex-1 items-center space-x-4">
                            <div class="flex-shrink-0 bg-blue-200 p-2">
                                <img class="w-6" src="img/bulb.png" alt="Innovation">
                            </div>
                            <p class="text-white font-body font-bold text-xl">Innovation</p>
                        </div>
                        <div class="flex flex-1 items-center space-x-4">
                            <div class="flex-shrink-0 bg-blue-200 p-2">
                                <img class="w-6" src="img/crown.png" alt="Simplicity">
                            </div>
                            <p class="text-white font-body font-bold text-xl">Simplicity</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-28">
            <div class="md:flex items-center max-w-6xl mx-auto md:space-x-12 px-6">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img class="md:h-full mx-auto md:w-full" src="img/about.png" alt="Who are we">
                </div>
                <div class="md:w-1/2">
                    <h2 class="mb-8 text-center md:text-left text-5xl text-white font-body font-bold">Our mission</h2>
                    <p class="mb-8 text-brand-gray-light-1">The banks have given limited growth to funds over the last couple of years, hence its necessary to secure a better source of earning . By so doing we have designed a system that can help you invest greately in a safe environment. We drive to a point where by everyone gains in the trading of their funds </p>
                    <p class="mb-8 text-brand-gray-light-1">The mission that motivated our founders to journey in this path was to create an environment where everyone can understand how lucrative it is to earn through investing in crypto. The Company's dream was to make available the lucrative benefits of the financial world without being intimidated by its dynamic and volatile nature. We are looking to build a world were investing is simple and it benefit are long lasting.</p> 
                </div>
            </div>
        </section>
        <?php include("section/why-us.php") ?>
        <?php include("section/user.php") ?>
        <?php include("section/update.php") ?>
    </main>
    <?php include("footer.php") ?>
</body>
</html>