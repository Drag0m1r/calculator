<?php

$btwCodes= [
    "NL" => 21,
    "BE" => 21,
    "LU" => 15,
    "FR" => 20,
    "DU" => 16,
];

$btwCode = $_REQUEST['country'];


$amount = $_REQUEST['itemAmount'];

$bedrag = $_REQUEST['itemPrice'];



function calculate($btwCodes , $amount , $bedrag , $btwCode){
    var_dump($btwCode, $amount, $bedrag);
    $total = $bedrag * $amount;
    if($amount < 1000){
        $discount = 0;
    }
    
    if($amount >= 1000 && $amount < 6000){
        $discount = 3;
    }elseif($amount >=5000 && $amount < 7000){
        $discount = 5;
    }elseif($amount >=7000 && $amount < 10000 ){
        $discount = 7;
    }elseif($amount >=10000 && $amount <50000){
        $discount = 10;
    }
    
    $valueDiscount = $total/100 * $discount;
    $total = $total - $discount;
    $incBTW = $total/100 * $btwCodes[$btwCode];
    var_dump($incBTW);
    echo $incBTW;
}
calculate($btwCodes, $amount, $bedrag, $btwCode);



?>