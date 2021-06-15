window.addEventListener('DOMContentLoaded', getEthereum);
function getEthereum () {
    let currentDate = (Math.floor(new Date().getTime()/1000.0));
    let prev24hrs = (currentDate - (86400000/1000.0));
    // 24 * 60 * 60 * 1000 = 86400000;
    console.log(currentDate);
    console.log(prev24hrs);
    fetch(`https://api.coingecko.com/api/v3/coins/bitcoin-cash/market_chart/range?vs_currency=usd&from=${prev24hrs}&to=${currentDate}`)
    
    
    .then(function(res){
        return (res.json());
    })
    .then(function(data){
        // console.log(data['prices']);
        let prices = data['prices'];
        let bitcoincashDate = []
        let bitcoincashPrice = new Array;
        prices.forEach(price => {
            // console.log(price[1]);
            bitcoincashDate.push(price[0]);
            bitcoincashPrice.push(price[1]);
            // window.prices = bitcoincashPrice;
        });
        console.log(bitcoincashPrice);
        renderChart(bitcoincashPrice, bitcoincashDate)
        // console.log(window.prices);
    })
}