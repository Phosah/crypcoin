<section class="py-20 bg-brand-gray-light-6">
    <div class="max-w-xl mx-auto pb-10 bg-white rounded-md">
        <div class="flex justify-between px-4 py-6">
            <h1 class="font-body font-bold text-brand-gray-dark-1 text-xl">Withdraw</h1>
            <svg id="withdraw-close-modal-two" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-500 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="mb-8 border-t border-brand-gray-light-7"></div>
        <form action="">
            <div class="flex space-x-8 justify-between mb-6 px-6">
                <div class="flex flex-1 w-1/2 items-center space-x-6">               
                    <div class="w-6">  
                        <img src="img/bitcoin-small.png" alt="Bitcoin small logo">
                    </div>
                    <div class="flex space-x-6 h-14 w-full bg-green-100 border-b border-brand-gray-light-7">
                        <select class="w-full" name="" id="">
                            <option value="Bitcoin">Bitcoin</option>
                            <option value="Bitcoin">Ethereum</option>
                            <option value="Bitcoin">Litecoin</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-1 w-1/2 space-x-4 items-center focus:border-brand-blue-light-1">                   
                    <div class="w-4">
                        <img src="img/dollar-sign.png" alt="Dollar sign">
                    </div>           
                    <div class="flex space-x-6 h-14 w-full border-b border-brand-gray-light-7 focus:outline-none bg-blue-100">
                        <input class="w-full" type="number" placeholder="Enter amount">
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class=" mb-12 px-6">
                <h2>Value: <span class="font-bold font-body text-lg text-brand-gray-dark-1">0.3233</span></h2>
            </div>
            <div class="px-6 mb-12">   
                <button class="bg-blue-700 text-white text-md rounded-md px-6 py-2">Continue</button>
            </div>
        </form>
    </div>
</section>