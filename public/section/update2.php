<section class="py-16 md:py-20 text-white">
    <div class="md:flex items-center md:space-x-12 max-w-6xl mx-auto px-6">
        <div class="md:w-1/2 mx-auto mb-12 md:mb-0">
            <img class="w-80 md:w-full mx-auto" src="img/update.png" alt="Update">
        </div>
        <div class="md:w-1/2 mx-auto">
            <h3 class="sm:text-center md:text-left text-white font-body font-bold text-4xl lg:text-5xl mb-3">Stay connected</h3>
            <p class="text-brand-gray-light-1 mb-12">Stay updated with our regular development and special offers</p>
            <form action="includes/subscriber2.inc.php" method="POST" class="flex items-center bg-blue-100 rounded-full pl-4 font-bold focus-within:ring-2 focus-within:ring-blue-700">
                <div class="flex-1 text-brand-gray-dark-1 ">
                    <input class="w-full bg-transparent focus-within:outline-none" type="email" name="email" id="" placeholder="Email address">
                </div>
                <div class="flex items-center">
                    <button class="w-12" type="submit" name="submit"><img src="img/arrow.png" alt="Send"></button>
                </div>
            </form>
            <?php 
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields</p>";
                    }
                    else if($_GET["error"] == "invalidemail") {
                        echo "<p>Choose a proper email</p>";
                    }
                    else if($_GET["error"] == "stmtfailed") {
                        echo "<p>Fill in all fields</p>";
                    }
                    else if($_GET["error"] == "none") {
                        echo "<p>You have signed up for updates!</p>";
                    }
                }
            ?>   
        </div>
    </div>
</section>

<?php
