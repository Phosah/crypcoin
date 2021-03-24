<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit form</title>
    <link rel=stylesheet href="styles.css">
</head>
<body>
    <section class="py-20 bg-brand-gray-light-6">
        <div class="max-w-xl mx-auto pb-10 bg-white rounded-md">
            <div class="flex justify-between px-4 py-6">
                <h1 class="font-body font-bold text-brand-gray-dark-1 text-xl">Deposit</h1>
            </div>
            <div class="mb-8 border-t border-brand-gray-light-7"></div>
            <form action="">
                <div class="flex space-x-8 justify-between mb-4 px-4">
                    <div class="flex flex-1 w-1/2 space-x-4 items-center focus:border-brand-blue-light-1">                   
                        <div class="w-4">
                            <img src="img/dollar-sign.png" alt="Dollar sign">
                        </div>           
                        <div class="flex space-x-6 h-14 w-full border-b border-brand-gray-light-7 focus:outline-none bg-blue-100">
                            <input class="w-full" type="number" placeholder="Enter amount">
                        </div>
                        <div class=""></div>
                    </div>
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
                </div>
            </form>
            <div class="mb-4 px-4">
                <h2>Value: <span class="font-bold font-body text-lg text-brand-gray-dark-1">0.3233</span></h2>
            </div>
            <div class="w-48 mx-auto my-8">
                <img src="img/qrcode.png" alt="QR Code">
            </div>
            <div class="flex space-x-8 max-w-md mx-auto py-3 border-b border-brand-gray-dark-4 text-center">
                <p>122t3t3yui88whuwueu73892iwi838iiqikq82820203ujei</p>
                <img src="img/copy.png" alt="">
            </div>
        </div>
    </section>
</body>
</html>