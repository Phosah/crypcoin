window.addEventListener('DOMContentLoaded', getBitcoin);
function getBitcoin () {
    let currentDate = (Math.floor(new Date().getTime()/1000.0));
    let prev24hrs = (currentDate - (86400000/1000.0));
    // 24 * 60 * 60 * 1000 = 86400000;
    console.log(currentDate);
    console.log(prev24hrs);
    fetch(`https://api.coingecko.com/api/v3/coins/bitcoin/market_chart/range?vs_currency=usd&from=${prev24hrs}&to=${currentDate}`)
    
    .then(function(res){
        return (res.json());
    })
    .then(function(data){
        // console.log(data['prices']);
        let prices = data['prices'];
        let bitcoinDate = []
        let bitcoinPrice = new Array;
        prices.forEach(price => {
            // console.log(price[1]);
            bitcoinDate.push(price[0]);
            bitcoinPrice.push(price[1]);
            // window.prices = bitcoinPrice;
        });
        console.log(bitcoinPrice);
        renderChart(bitcoinPrice, bitcoinDate)
        // console.log(window.prices);
    })
}