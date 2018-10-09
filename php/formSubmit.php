<?php 
// $_SERVER[projects]
include 'connection.php';
// include 'custom.php';
// include 'delivery.php';
// include 'index.php';

$customer= isset($_POST["customer"]) ? $_POST["customer"] : '';
$toppings='';
$toppingsArr=array();

if(isset($_POST["Submit"])) {
        
    $PrepArr=array(
        $_POST["mushroom"], $_POST["peps"], $_POST["green_pepper"], $_POST["red_pepper"], 
        $_POST["ham"], $_POST["mozzarella"], $_POST["olive"], $_POST["onion"],
        $_POST["pineapple"], $_POST["provolone"], $_POST["spinach"], $_POST["tomato"]);

        
    
    foreach ($PrepArr as $elem) {
        if($elem !== "NA") {
            $toppingsArr[]=$elem;                
            $price=$price+.4;
            $toppings= implode(", ", $toppingsArr);
        } 
    }
}


global $price, $size;
$Query="INSERT INTO orders(customer, size, toppings, price) 
VALUES('$customer', '$size', '$toppings', '$price')";
$Execute=mysql_query($Query);
echo $customer . $size . $toppings . $price;


?>