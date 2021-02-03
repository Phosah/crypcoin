<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title> 
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body class="">
    <header class="max-w-5xl mx-auto">
        <?php include("navbar-light.php") ?>
    </header>
    <main>
        <section class="py-16">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-brand-gray-dark-1 mb-3">About Us</h2>
                <p class="max-w-md mx-auto text-brand-gray-light">Crypcoin Binary Trade  is a private crypto trading company that deals in investments in crypto currency to yield amazing turnovers. Established in 2016 </p>
            </div>
        </section>
        <section class="py-16">
            <div class="flex space-x-12 max-w-5xl mx-auto">
                <div class="w-1/2">
                    <h3 class="mb-4 text-brand-gray-dark-1 text-2xl font-bold">Our values</h3>
                    <p class="mb-6 text-brand-gray-light">We are guided by our values which represent us as a company  and these values have formed our foundation for the over 4 years and counting</p>
                    <button class="bg-blue-700 py-2 px-6 rounded-md text-white">Get started</button>
                </div>
                <div class="w-1/2">
                    <div class="flex mb-8">                 
                        <div class="flex flex-1 items-center space-x-4">
                            <div class="bg-blue-200 p-2">
                                <img class="w-6" src="img/trust.png" alt="Trust">
                            </div>
                            <p class="text-brand-gray-dark-1 font-semibold text-lg">Trust & Respect</p>
                        </div>
                        <div class="flex flex-1 items-center space-x-4">
                            <div class="bg-blue-200 p-2">
                                <img class="w-6" src="img/transparency.png" alt="Transparency">
                            </div>
                            <p class="text-brand-gray-dark-1 font-semibold text-lg">Transparency</p>
                        </div>
                    </div>
                    <div class="flex">                  
                        <div class="flex flex-1 items-center space-x-4">
                            <div class="bg-blue-200 p-2">
                                <img class="w-6" src="img/bulb.png" alt="Innovation">
                            </div>
                            <p class="text-brand-gray-dark-1 font-semibold text-lg">Innovation</p>
                        </div>
                        <div class="flex flex-1 items-center space-x-4">
                            <div class="bg-blue-200 p-2">
                                <img class="w-6" src="img/crown.png" alt="Simplicity">
                            </div>
                            <p class="text-brand-gray-dark-1 font-semibold text-lg">Simplicity</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="flex items-center max-w-5xl mx-auto space-x-12 px-6">
                <div class="w-1/2">
                    <img src="img/about.png" alt="Who are we">
                </div>
                <div class="w-1/2">
                    <h2 class="text-3xl text-brand-gray-dark-1 font-bold mb-8">Our mission</h2>
                    <p class="mb-6 text-brand-gray-light">The banks have given limited growth to funds over the last couple of years, hence its necessary to secure a better source of earning . By so doing we have designed a system that can help you invest greately in a safe environment. We drive to a point where by everyone gains in the trading of their funds </p>
                    <p class="mb-6 text-brand-gray-light">The mission that motivated our founders to journey in this path was to create an environment where everyone can understand how lucrative it is to earn through investing in crypto. The Company's dream was to make available the lucrative benefits of the financial world without being intimidated by its dynamic and volatile nature. We are looking to build a world were investing is simple and it benefit are long lasting.</p> 
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