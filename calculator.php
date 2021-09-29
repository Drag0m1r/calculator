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



function calculate($btwCodes , $amount , $bedrag){

    $result = $bedrag 
}


?>