<?php
// $json_url = "https://api.coinbase.com/v2/prices/:currency_pair/buy";
// $json = file_get_contents($json_url);
// $data = json_decode($json, TRUE);
// echo "<h4> 1 BTC</h4>";
// echo ($data['amount']);

$url = "https://bitpay.com/api/rates";
$json = json_decode(file_get_contents($url));
$dollar = $btc = 0;
foreach($json as $obj) {
    if($obj->code=="USD") $btc = $obj->rate;
}

// echo '1 bitcoin = /$' . $btc . 'USD<br>';
// echo '10 dollars = '. round($dollar*10,8) . 'BTC<br>';