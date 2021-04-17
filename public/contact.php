<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="bg-black">
    <header class="max-w-6xl mx-auto px-6">
        <?php include("navbar.php") ?>
    </header>
    <main>
        <section class="py-10 md:py-28">
            <div class="max-w-2xl mx-auto mb-8 px-6 text-center">
                <h2 class="text-white text-4xl lg:text-5xl font-body font-bold mb-8">Contact us</h2>
                <p class="text-brand-gray-light-1 text-xl lg:text-2xl">It doesnt matter where you are or the time of the day, we are always here to answer you</p>
            </div>
        </section>
        <section class="py-10 md:py-28">
            <div class="md:flex items-center md:space-x-12 max-w-6xl mx-auto px-6">               
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h3 class="max-w-sm mb-12 text-white text-4xl lg:text-5xl font-body font-bold">Want to make more enquires?</h3>
                    <h4 class="mb-6 text-brand-gray-dark-1 text-xl font-bold">Want a direct reach?</h4>
                    <p class="mb-6 text-brand-gray-light-1 text-xl">crypcoinsupport@gmail.com</p>
                    <p class="mb-6 text-brand-gray-light-1 text-xl">+091123930400</p>
                    <p class="text-brand-gray-light-1 text-xl w-3/4">2345A Kent mac hall avenue, Manchester, London</p>
                </div>
                <div class="md:w-1/2">

                    <form action="includes/message.inc.php" method="POST">
                        <div class="flex items-center mb-6 px-3 border-b rounded-lg focus-within:ring-2 ring-blue-700 bg-white">
                            <span class=""><img src="img/user-dark.png" alt="User icon"></span>
                            <input class=" w-full rounded-md py-3 px-4 focus:outline-none" type="text" name="name" id="" placeholder="Fullname">
                        </div>
                        <div class="flex items-center mb-12 px-3 border-b rounded-lg focus-within:ring-2 ring-blue-700 bg-white">
                        <span class=""><img src="img/mail-dark.png" alt="Mail icon"></span>
                            <input class="w-full rounded-md py-3 px-4 focus:outline-none" type="email" name="email" id="" placeholder="Email address">
                        </div>
                        <div class="mb-12 rounded-md border focus-within:ring-2 ring-blue-700 bg-white">
                            <textarea class="w-full rounded-md py-3 px-4 focus:outline-none" name="message" id="" cols="30" rows="10" placeholder="Type a description"></textarea>
                        </div>
                        <button class="bg-blue-700 px-8 py-4 text-white font-semibold rounded-md border border-blue-700 hover:bg-white hover:text-blue-700 hover:border-blue-700" type="submit" name="submit">Send message</button>
                    </form>

                </div>
            </div>
        </section>
    </main>
    <?php include("footer.php") ?>
</body>
</html>