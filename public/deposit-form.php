<section class="bg-brand-gray-light-6">
    <div class="pb-10 bg-white rounded-md">
        <div class="flex justify-between px-8 py-6">
            <h1 class="font-body font-bold text-brand-gray-dark-1 text-xl">Deposit</h1>
            <svg id="deposit-close-modal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-500 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="mb-8 border-t border-brand-gray-light-7"></div>
        <form action="includes/deposit-pending.inc.php" method="POST">
            <div class="flex space-x-8 justify-between mb-4 px-8">
                <div class="flex flex-1 w-1/2 space-x-4 items-center border-b border-brand-gray-light-7 focus-within:ring-2 ring-blue-200 rounded-t-lg focus-within:border-transparent">                   
                    <div class="w-4">
                        <img src="img/dollar-sign.png" alt="Dollar sign">
                    </div>           
                    <div class="flex space-x-6 h-14 w-full bg-blue-100">
                        <input class="w-full focus:outline-none" type="text" name="amount" placeholder="Enter amount">
                    </div>
                    <div class=""></div>
                </div>
                <div class="flex flex-1 w-1/2 items-center space-x-6 border-b border-brand-gray-light-7 focus-within:ring-2 ring-blue-200 rounded-t-lg focus-within:border-transparent">               
                    <div class="w-6">  
                        <img src="img/bitcoin-small.png" alt="Bitcoin small logo">
                    </div>
                    <div class="flex space-x-6 h-14 w-full bg-green-100">
                        <select class="w-full focus:outline-none" name="" id="">
                            <!-- <option value="Bitcoin">USDT</option> -->
                            <option value="Bitcoin">Bitcoin</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="mb-4 px-8">
                <h2>Value: <span class="font-bold font-body text-lg text-brand-gray-dark-1">0.0000 BTC</span></h2>
            </div>
            <div class="w-48 mx-auto my-8">
                <img src="img/qrcode.png" alt="QR Code">
            </div>
            <div class="flex space-x-8 text-center px-8 pb-4 cursor-pointer">
                <p class="text-sm">122t3t3yui88whuwueu73892iwi838iiqikq82820203ujei</p>
                <img src="img/copy.png" alt="">
            </div>
            <div class="mx-6 mb-8 border-b border-brand-gray-dark-4"></div>
            <div class="mx-8"><button class="py-2 px-6 bg-blue-700 text-white rounded-md cursor-pointer" name="submit" type="submit">Submit</button></div>
        </form>
    </div>
</section>