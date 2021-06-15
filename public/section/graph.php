<section class="py-16 md:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="mb-8 text-white font-body font-bold text-4xl lg:text-5xl text-center">Market value of top cyptocurrencies</h2>
        <p class="max-w-xl mx-auto text-brand-gray-light-1 text-center text-xl lg:text-2xl mb-20">Be updated on the current market standings and growths value of various top coins</p>
        <div class="flex justify-between items-center mb-10 text-brand-gray-light-1">
            <p class="text-xl">Current value: <span class="text-white font-body font-bold"><?php echo '$'. $btc_price; ?></span></p>
            <select class="px-4 py-2 border border-brand-gray-light-1 focus:outline-none focus-within:ring-2 rounded-md ring-blue-700 text-xl" name="" id="">
                <option value="">Bitcoin</option>
            </select>
        </div>
        <!-- <div>
            <img src="img/crypto-graph-dark.png" alt="Crypto Market Graph">
        </div> -->
        <!-- Plotting graph -->
        <div id="chart"></div>
    </div>
</section>