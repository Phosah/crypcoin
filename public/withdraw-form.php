<section class="bg-brand-gray-light-6">
    <div class="pb-10 bg-white rounded-md text-xs sm:text-lg">
        <div class="flex justify-between px-8 py-6">
            <h1 class="font-body font-bold text-brand-gray-dark-1 sm:text-xl">Withdraw</h1>
            <svg id="withdraw-close-modal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-500 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="mb-8 border-t border-brand-gray-light-7"></div>
        <form action="includes/withdraw-pending.inc.php" method="POST">
            <div class="flex space-x-8 justify-between mb-6 px-8">
                <div class="flex flex-1 w-1/2 items-center space-x-6 border-b border-brand-gray-light-7 focus-within:ring-2 ring-blue-200 rounded-t-lg focus-within:border-transparent">               
                    <div class="w-6">
                        <img src="img/bitcoin-small.png" alt="Bitcoin small logo">
                    </div>
                    <div class="flex space-x-6 h-14 w-full">
                        <select class="w-full focus:outline-none" name="" id="">
                            <option value="Bitcoin">Bitcoin</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-1 w-1/2 space-x-4 items-center border-b border-brand-gray-light-7 focus-within:ring-2 ring-blue-200 rounded-t-lg focus-within:border-transparent">                   
                    <div class="w-4">
                        <img src="img/dollar-sign.png" alt="Dollar sign">
                    </div>           
                    <div class="flex space-x-6 h-14 w-full bg-blue-100">
                        <input class="w-full focus:outline-none" type="number" name="amount" placeholder="Enter amount">
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class=" mb-12 px-8">
                <h2>Value: <span class="font-bold font-body sm:text-sm text-brand-gray-dark-1">0.0000</span></h2>
            </div>
            <div class="px-8 mb-12">   
                <button class="bg-blue-700 text-white text-md rounded-md px-6 py-2" name="submit" type="submit">Continue</button>
            </div>
        </form>
    </div>
</section>