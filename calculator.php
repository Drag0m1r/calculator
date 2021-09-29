<?php

$btwCodes= [
    "NL" => 121,
    "BE" => 121,
    "LU" => 115,
    "FR" => 120,
    "DU" => 116,
];

$btwCode = $_REQUEST['country'];


$amount = $_REQUEST['itemAmount'];

$bedrag = $_REQUEST['itemPrice'] * $amount;




function calculate($btwCodes , $amount , $bedrag , $btwCode){
    // var_dump($btwCode, $amount, $bedrag);
    if($amount < 1000){
        $discount = 0;
    }
    
    if($amount >= 1000 && $amount < 5000){
        $discount = 3;
    }elseif($amount >=5000 && $amount < 7000){
        $discount = 5;
    }elseif($amount >=7000 && $amount < 10000 ){
        $discount = 7;
    }elseif($amount >=10000 && $amount <50000){
        $discount = 10;
    }
    
    $valueDiscount = $bedrag/100 * $discount;
    $total = $bedrag - $valueDiscount;
    $incBTW = $total/100 * $btwCodes[$btwCode];
    echo "Het bedrag is: " . $incBTW;
}
calculate($btwCodes, $amount, $bedrag, $btwCode);



?>