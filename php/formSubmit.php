<?php 

include 'connection.php';


$price=5;
$pizzaName=$_POST["pizzaName"];
$size=$_POST["size"];
$customer=$_POST["customer"];
$toppings='';
$toppingsArr=array();

$Query="INSERT INTO orders(pizza_name, customer, size, toppings, price) 
VALUES('$pizzaName',  '$customer', '$size', '$toppings', '$price')";
$Execute=mysql_query($Query);
echo $pizzaName .  $customer . $size . $toppings . $price;


?>