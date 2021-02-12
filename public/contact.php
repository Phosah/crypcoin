<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <header class="max-w-6xl mx-auto px-6">
        <?php include("navbar-light.php") ?>
    </header>
    <main>
        <section class="py-10 md:py-20">
            <div class="max-w-6xl mx-auto mb-8 px-6 text-center">
                <h2 class="text-brand-gray-dark-1 text-3xl font-bold mb-4">Contact US</h2>
                <p class="text-brand-gray-light-1 ">It doesnt matter where you are or the time of the day, we are always here to answer you</p>
            </div>
        </section>
        <section class="py-10 md:py-20">
            <div class="md:flex items-center md:space-x-12 max-w-6xl mx-auto px-6">               
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h3 class="max-w-sm mb-6 text-brand-gray-dark-1 text-3xl font-bold">Want to make more enquires?</h3>
                    <h4 class="mb-6 text-brand-gray-dark-1 font-bold">Want a direct reach?</h4>
                    <p class="mb-4 text-brand-gray-light-1 ">crypcoinsupport@gmail.com</p>
                    <p class="mb-4 text-brand-gray-light-1 ">+091123930400</p>
                    <p class="mb-
                     text-brand-gray-light-1 ">2345A Kent mac hall avenue, Manchester, London</p>
                </div>
                <div class="md:w-1/2">
                    <form action="">
                        <div class="mb-6 rounded-md shadow-md border focus-within:ring-2 ring-blue-700">
                            <input class="w-full rounded-md py-3 px-4 focus:outline-none" type="text" name="" id="" placeholder="Fullname">
                        </div>
                        <div class="mb-6 rounded-md shadow-md border focus-within:ring-2 ring-blue-700">
                            <input class="w-full rounded-md py-3 px-4 focus:outline-none" type="email" name="" id="" placeholder="Email address">
                        </div>
                        <div class="mb-8 rounded-md shadow-md border focus-within:ring-2 ring-blue-700">
                            <textarea class="w-full rounded-md py-3 px-4 focus:outline-none" name="" id="" cols="30" rows="10" placeholder="Type a description"></textarea>
                        </div>
                        <button class="bg-blue-700 px-4 py-2 text-white rounded-md border hover:bg-white hover:text-blue-700 hover:border-blue-700">Send message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include("footer.php") ?>
</body>
</html>