<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="max-w-5xl mx-auto">
        <?php include("navbar-light.php") ?>
    </header>
    <main>
        <section class="py-16">
            <div class="max-w-5xl mx-auto mb-8 text-center">
                <h2 class="text-brand-gray-dark-1 text-3xl font-bold mb-4">Contact US</h2>
                <p class="text-brand-gray-light ">It doesnt matter where you are or the time of the day, we are always here to answer you</p>
            </div>
        </section>
        <section class="py-16">
            <div class="max-w-5xl mx-auto flex items-center space-x-12">               
                <div class="w-1/2 ">
                    <h3 class="max-w-sm mb-6 text-brand-gray-dark-1 text-3xl font-bold">Want to make more enquires?</h3>
                    <h4 class="mb-6 text-brand-gray-dark-1 font-bold">Want a direct reach?</h4>
                    <p class="mb-4 text-brand-gray-light ">crypcoinsupport@gmail.com</p>
                    <p class="mb-4 text-brand-gray-light ">+091123930400</p>
                    <p class="mb-
                     text-brand-gray-light ">2345A Kent mac hall avenue, Manchester, London</p>
                </div>
                <div class="w-1/2">
                    <form action="">
                        <div class="mb-6 rounded-md shadow-md ">
                            <input class="w-full rounded-md py-3 px-4 " type="text" name="" id="" placeholder="Fullname">
                        </div>
                        <div class="mb-6 rounded-md shadow-md">
                            <input class="w-full rounded-md py-3 px-4" type="email" name="" id="" placeholder="Email address">
                        </div>
                        <div class="mb-8 rounded-md shadow-md">
                            <textarea class="w-full rounded-md py-3 px-4" name="" id="" cols="30" rows="10" placeholder="Type a description"></textarea>
                        </div>
                        <button class="bg-blue-700  px-4 py-2 text-white rounded-md">Send message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include("footer.php") ?>
</body>
</html>