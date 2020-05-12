<?php 
require_once 'define.php';
  $link = LINK_COIN;
  
  $json = json_decode(file_get_contents($link));
    
  $priceCoin = [];
  $i= 0 ;
  foreach($json as $key => $value) {
    if(count($priceCoin) == 3) break ;
    $priceCoin[] = [
      'name' => $value->name,
      'price' => $value->current_price,
      'change' => $value->market_cap_change_percentage_24h
    ];
    $i+= 3;
  }
