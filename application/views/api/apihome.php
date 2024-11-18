<?php
header('Access-Control-Allow-Origin: *');

$id = $_GET['id'];
$key = $_GET['key'];
$mak[] = json_decode('{"id":99999,"name":"MAK","symbol":"MAK","slug":"mak","num_market_pairs":45,"date_added":"2023-11-01T00:00:00.000Z","tags":["mineable","pow","sha-256","store-of-value","state-channel","coinbase-ventures-portfolio","three-arrows-capital-portfolio","polychain-capital-portfolio","kak-labs-portfolio","blockchain-capital-portfolio","boostvc-portfolio","cms-holdings-portfolio","dcg-portfolio","dragonfly-capital-portfolio","electric-capital-portfolio","fabric-ventures-portfolio","framework-ventures-portfolio","galaxy-digital-portfolio","huobi-capital-portfolio","alameda-research-portfolio","a16z-portfolio","1confirmation-portfolio","winklevoss-capital-portfolio","usv-portfolio","placeholder-ventures-portfolio","pantera-capital-portfolio","multicoin-capital-portfolio","paradigm-portfolio","bitcoin-ecosystem","ftx-bankruptcy-estate"],"max_supply":21000000000,"circulating_supply":511412,"total_supply":511412,"infinite_supply":false,"platform":null,"cmc_rank":1,"self_reported_circulating_supply":null,"self_reported_market_cap":null,"tvl_ratio":null,"last_updated":"2023-10-12T08:55:00.000Z","quote":{"USD":{"price":0.001,"volume_24h":12327120839.4232654571533203125,"volume_change_24h":5.02,"percent_change_1h":-0.033219800000000000,"percent_change_24h":4.1302999,"percent_change_7d":3.1216972099,"percent_change_30d":3.98634392,"percent_change_60d":8.800181970,"percent_change_90d":14.2339758300000,"market_cap":132808588605.3131103515625,"market_cap_dominance":49.86860000,"fully_diluted_market_cap":562695327263.4300537109375,"tvl":null,"last_updated":"2023-10-12T08:55:00.000Z"}}}',true);

if($id == "1"){
  $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
  $parameters = [
    'start' => '1',
    'limit' => $key,
    'convert' => 'USD'
  ];

  $headers = [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: 962e8eeb-6773-4c3f-9243-b2bca2b77d9d'
  ];
  $qs = http_build_query($parameters);
  $request = "{$url}?{$qs}";


  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $request,      
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => 1    
  ));

  $response = curl_exec($curl);
  $data = json_decode($response,true);
  curl_close($curl);

  if($data==null){
    print_r(json_encode($mak));
  }
  else{
    $finaldata = array_merge($mak,$data['data']);
    print_r(json_encode($finaldata));
  }
}

if($id == "2"){
  $url = 'https://pro-api.coinmarketcap.com/v2/cryptocurrency/quotes/latest';
  $parameters = [
    'slug' => $key,
    'convert' => 'USD'
  ];

  $headers = [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: 99bcaf01-a609-47df-9a1e-79b8165537bc'
  ];
  $qs = http_build_query($parameters);
  $request = "{$url}?{$qs}";

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $request,      
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => 1    
  ));

  $response = curl_exec($curl);
  $data = json_decode($response,true);
  curl_close($curl);
  print_r(json_encode($data['data']));
}
if($id == "3"){
  $url = "https://api.exchangerate-api.com/v4/latest/USD";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  $result = curl_exec($ch);
  curl_close($ch);
  $data = json_decode($result,true);
if($data==null){
  print_r(json_encode(83.27));
}
else{
  print_r(json_encode($data['rates'][$key]));
}
}

?>