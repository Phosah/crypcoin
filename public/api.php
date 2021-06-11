<?php

$ch = curl_init();
$url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=bitcoin&order=market_cap_desc&per_page=100&page=1&sparkline=false";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp);
    $btc_price = $decoded[0]->current_price;
}

curl_close($ch);

$ch = curl_init();
$url1 = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=litecoin&order=market_cap_desc&per_page=100&page=1&sparkline=false";

curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp);
    $ltc_price = $decoded[0]->current_price;
}

curl_close($ch);

$ch = curl_init();
$url2 = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=ethereum&order=market_cap_desc&per_page=100&page=1&sparkline=false";

curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp);
    $eth_price = $decoded[0]->current_price;
}

curl_close($ch);

$ch = curl_init();
$url3 = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=bitcoin-cash&order=market_cap_desc&per_page=100&page=1&sparkline=false";

curl_setopt($ch, CURLOPT_URL, $url3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp);
    $bch_price = $decoded[0]->current_price;
    echo "<br>";
}

curl_close($ch);

// $ch = curl_init();
// $url4 = "https://api.coingecko.com/api/v3/coins/dogecoin/market_chart?vs_currency=usd&days=3";

// curl_setopt($ch, CURLOPT_URL, $url4);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $resp = curl_exec($ch);

// if($e = curl_error($ch)) {
//     echo $e;
// } else {
//     var_dump($decoded = json_decode($resp));
//     echo $dogecoin_prices = $decoded->prices[0][1];
// }

// curl_close($ch);

$ch = curl_init();
$url4 = "https://api.coingecko.com/api/v3/coins/dogecoin/market_chart?vs_currency=usd&days=1";

curl_setopt($ch, CURLOPT_URL, $url4);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp);
    $price_array = $decoded->prices;
    $array_length = sizeof($price_array);
    // var_dump(sizeof($price_array));
    // echo "<br>";
    for ($i = 0; $i < $array_length; $i++) {
        // echo $price_array[$i][1];
        // echo "<br>";
        // echo "<div>==================================</div>";
    }
    for ($i = 0; $i < $array_length; $i++) {
        // echo $price_array[$i][0];
        // echo "<br>";
        // echo "<div>+++++++++++++++++++++++++++++++++</div>";
    }
}

curl_close($ch);