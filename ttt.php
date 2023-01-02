<?php

// Get the current price of Bitcoin in USD
$price = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');

// Decode the JSON data
$priceData = json_decode($price, true);

// Get the current price from the data
$currentPrice = $priceData['bpi']['USD']['rate'];

// Print the current price to the screen
echo "The current price of Bitcoin is $currentPrice USD.";

?>
