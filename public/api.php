<?php

// $url = "https://bitpay.com/api/rates";
// $json = json_decode(file_get_contents($url));
// $dollar = $btc = 0;
// foreach($json as $obj) {
//     if($obj->code=="USD") $btc = $obj->rate;
// }

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
}

curl_close($ch);