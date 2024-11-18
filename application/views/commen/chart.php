<?php
$s = "BITSTAMP:BTCUSD";
if(isset($_GET["s"]) && $_GET["s"]!=''){
    $s = $k = $_GET["s"];
    $s = "BITSTAMP:".$s."USD";

    if($k=="ar" || $k=="bnb" || $k=="trx" || $k=="wld"){
        $s = str_replace("BITSTAMP", "BINANCE", $s);
    }
    if($k=="usdt"){
        $s = str_replace("BITSTAMP", "COINBASE", $s);
    }
    if($k=="steth" || $k=="ton" || $k=="wbtc" || $k=="iost" || $k=="leo" || $k=="cheel"){
        $s = str_replace("BITSTAMP", "CRYPTO", $s);
    }
}
?>

<div class="tradingview-widget-container" style="height:100%;width:100%">
  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
  {
  "autosize": true,
  "symbol": "<?php echo $s ?>",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "hide_legend": true,
  "allow_symbol_change": false,
  "save_image": false,
  "calendar": false,
  "hide_volume": true,
  "support_host": "https://www.tradingview.com"
}
  </script>
</div>

