<?php 
// $_SERVER[projects]
include 'connection.php';
// include 'custom.php';
// include 'delivery.php';
// include 'index.php';



$price_by_size = 0;
$customer= isset($_POST["customer"]) ? $_POST["customer"] : '';
$toppings='';
$j=0;
$toppingsArr=array();
$pizza_img = array(0 => 'views/assets/img/pepperoniPizza.jpg', 
   1 => 'views/assets/img/hawPizza.jpg', 2 => 'views/assets/img/supremePizza.jpg',
   3 => 'views/assets/img/pizzat.jpg', 4 => 'views/assets/img/mushroomPizza.jpg'  
    );

if (isset($_POST["pizza_name"]) && $_POST["pizza_name"] == $j) {
    global $price_by_size;
             
         $price_by_size = array_search ( $j ,$pizza_img );
}

if (isset($_POST["Submit"])) {

    if (isset($_POST["mushroom"])) {
        $PrepArr = array(
            $_POST["mushroom"], $_POST["peps"], $_POST["green_pepper"], $_POST["red_pepper"],
            $_POST["ham"], $_POST["mozzarella"], $_POST["olive"], $_POST["onion"],
            $_POST["pineapple"], $_POST["provolone"], $_POST["spinach"], $_POST["tomato"]);

        foreach ($PrepArr as $elem) {
            if ($elem !== "NA") {
                $toppingsArr[] = $elem;
                $price = $price + .4;
                $toppings = implode(", ", $toppingsArr);
            }
        }
    } else {
        $specials_toppings = array(0 => 'pepperoni',
            1 => 'pineapple, ham, pepperoni', 2 => 'mushroom, pepperoni, green pepper, red pepper, ham, mozzarella, olive, onion, pineapple, provolone, spinach, tomato',
            3 => 'tomatoes, provalone, spinach', 4 => 'mushrooms, provalone',
        );
        global $price_by_size;
        global $toppings;
        $toppings = $specials_toppings[$price_by_size];

    }
}

global $price, $size;
$Query="INSERT INTO orders(customer, size, toppings, price) 
VALUES('$customer', '$size', '$toppings', '$price')";
$Execute=mysql_query($Query);
echo 'THIS IS THE BEGINNING OF THE TOPPINGS ARRAY' . $customer . $size . $toppings . $price;


?>