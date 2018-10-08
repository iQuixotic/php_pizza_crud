<?php 
// $_SERVER[projects]
include 'connection.php';
include 'custom.php';
include 'delivery.php';
include 'index.php';

// $pizzaName=$_POST["pizzaName"];
$size=$_POST["size"];
$customer= isset($_POST["customer"]) ? $_POST["customer"] : '';
$toppings='';
$toppingsArr=array();

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

$Query="INSERT INTO orders(customer, size, toppings, price) 
VALUES('$customer', '$size', '$toppings', '$price')";
$Execute=mysql_query($Query);
echo $customer . $size . $toppings . $price;


?>