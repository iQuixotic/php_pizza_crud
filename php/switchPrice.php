<?php

// echo 'hellog';
$price=5;
// global $size;



if (isset( $_POST["size"])) {
    $size = $_POST["size"];
    echo $size;
} else {
    $size = 'SM';
}

if (isset($_POST["size"])) {
    switch ($size) {
        case 'MED':
            priceAdjust(2.00);
            break;
        case 'LG':
            priceAdjust(3.00);
            break;
        case 'XL':
            priceAdjust(4.00);
            break;
        
        default:
            priceAdjust(0);
            break;
    }
} else {
    echo 'not yet';
}


function priceAdjust($arg) {
    global $size;
    global $price;
    $glass=$price+$arg;
    $price=$glass;

    echo "<h1>yo yo yo $size $price</h1>";
    echo "<h1>yo yo yo $price</h1>";
    echo "<h1>yo yo yo $price</h1>";


    print_r($price);
    print_r($glass);
}




?>