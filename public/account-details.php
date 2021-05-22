<section class="bg-brand-gray-light-6">
    <div class="pb-10 bg-white rounded-md">
        <div class="flex justify-between px-8 py-6">
            <h1 class="font-body font-bold text-brand-gray-dark-1 text-xl">Withdraw</h1>
            <svg id="withdraw-close-modal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-500 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="mb-8 border-t border-brand-gray-light-7"></div>
        <form action="includes/account-details.inc.php" method="POST">
            <div class="flex items-center space-x-6 px-6 mb-8">
                <div class="flex-1 items-center border-b border-gray-500 pl-6 focus-within:border-blue-600">
                    <input class="w-full bg-transparent py-4 focus-within:outline-none" type="text" name="bank" placeholder="Bank Name">
                </div>
                <div class="flex-1 items-center border-b border-gray-500 pl-6 focus-within:border-blue-600">
                    <input class="w-full bg-transparent py-4 focus-within:outline-none" type="text" name="account-name" placeholder="Account name" >
                </div>
            </div>
            <div class="w-1/2 mb-8 mx-6 border-b border-gray-500 px-6 focus-within:border-blue-600">
                <input class="w-full bg-transparent py-4 focus-within:outline-none" type="number" name="account-number" placeholder="Account number">
            </div>
            <div class="px-8 mb-12">   
                <button class="bg-blue-700 text-white text-md rounded-md px-6 py-2" name="submit" type="submit">Finish</button>
            </div>
        </form>
    </div>
</section>