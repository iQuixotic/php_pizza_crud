<?php

$price=5;

if (isset($_POST["$size"])) {
    switch ($size) {
        case 'MED':
            priceAdjust(2.09);
            break;
        case 'LG':
            priceAdjust(3.59);
            break;
        case 'XL':
            priceAdjust(4.99);
            break;
        
        default:
            # code...
            break;
    }
} else {
    $size = '';
}


function priceAdjust($arg) {
    global $price;
    $glass=$price+$arg;
    $price=$glass;

    echo "<h1>yo yo yo $price</h1>";
    echo "<h1>yo yo yo $price</h1>";
    echo "<h1>yo yo yo $price</h1>";


    print_r($price);
    print_r($glass);
}




?>