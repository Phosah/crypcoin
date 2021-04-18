<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account details</title>
    <link rel=stylesheet href="css/styles.css">
</head>
<body>
    <section class="py-20 bg-brand-gray-light-6">
        <div class="max-w-xl mx-auto pb-10 bg-white rounded-md">
            <div class="flex justify-between px-4 py-6">
                <h1 class="font-body font-bold text-brand-gray-dark-1 text-xl">Account details</h1>
            </div>
            <div class="mb-8 border-t border-brand-gray-light-7"></div>
            <form action="">
                <div class="flex space-x-8 justify-between mb-6 px-6">
                    <div class="w-1/2 items-end space-x-6">                           
                        <div class="w-full bg-green-100 border-b border-brand-gray-light-7">
                            <select class="h-14 w-full" name="" id="">
                                <option value="Bitcoin">Select Bank</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-1/2 focus:border-brand-blue-light-1">                            
                        <div class="flex space-x-6 h-14 w-full border-b border-brand-gray-light-7 focus:outline-none bg-blue-100">
                            <input class="w-full" type="text" placeholder="Account name">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 space-x-4 mb-8 px-6 items-center focus:border-brand-blue-light-1">                            
                    <div class="flex space-x-6 h-14 w-full border-b border-brand-gray-light-7 focus:outline-none bg-blue-100">
                        <input class="w-full" type="number" placeholder="Account number">
                    </div>
                </div>
                <div class="px-6 mb-12">   
                    <button class="bg-blue-700 text-white text-md rounded-md px-6 py-2">Finish</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>