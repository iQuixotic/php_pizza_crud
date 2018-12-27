<?php

// global variable deffinitions and arrays
$price_by_size = 0;
$j=0;
$customer= isset($_POST["customer"]) ? $_POST["customer"] : '';
$toppingsArr=array();
$pizza_img = array(0 => 'views/assets/img/pepperoniPizza.jpg', 
   1 => 'views/assets/img/hawPizza.jpg', 2 => 'views/assets/img/supremePizza.jpg',
   3 => 'views/assets/img/pizzat.jpg', 4 => 'views/assets/img/mushroomPizza.jpg'  
    );
$specials_toppings = array(0 => 'pepperoni, sam',
    1 => 'pineapple, ham, pepperoni', 2 => 'mushroom, pepperoni, green pepper, red pepper, ham, mozzarella, olive, onion, pineapple, provolone, spinach, tomato',
    3 => 'tomatoes, provalone, spinach', 4 => 'mushrooms, provalone',
    );
    if (isset($_POST["pizza_name"]) && $_POST["pizza_name"] == $j) {
        global $price_by_size, $j;
        $price_by_size = array_search ( $j ,$pizza_img );
}

// all functions start here
function check_pizza_name() {
    global $j, $price_by_size, $toppings, 
    $specials_toppings, $pizza_img;
    if (isset($_POST["pizza_name"]) && $_POST["pizza_name"] == $pizza_img[$j]) {

    $price_by_size = array_search ( $pizza_img[$j] ,$pizza_img );

    $toppings = $specials_toppings[$price_by_size];
         echo 'this is j ' . $price_by_size;
         return " checked=checked ";
     } 
}


function radio_btn_mkr() {
    global $pizza_img;           
    global $j;
         $radio_btn = " <input  onclick='form.submit()' name='pizza_name'               
         value=". $pizza_img[$j] . check_pizza_name()  . "
         class='selection' type='radio'>";
     $j++;
     return $radio_btn;
}  

function get_image($src) {
     echo "<img src='./$src'>";
}

?>
