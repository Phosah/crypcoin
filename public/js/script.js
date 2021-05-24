let getRandomNumber = function(start, range) {
    let getRandom = Math.floor(Math.random() * range) + start;
    while (getRandom > range) {
        getRandom = Math.floor(Math.random() * range) + start;
    }
    return getRandom;
}
// console.log(getRandomNumber(500, 1000));

let activeAccount = document.querySelector('.active_account');
activeAccount.textContent = getRandomNumber(10, 20) + 'K+';

let supportedCountries = document.querySelector('.supported_countries');
supportedCountries.textContent = getRandomNumber(17, 75) + '+';

let totalDeposit = document.querySelector('.total_deposit');
totalDeposit.textContent = getRandomNumber(100, 400) +  'M+';

let totalWithdrawal = document.querySelector('.total_withdrawal');
totalWithdrawal.textContent = getRandomNumber(50, 700) + 'M+';
