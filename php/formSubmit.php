<?php 

include 'connection.php';
// include 'functionsAndVariables.php';

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
        sendTheQuery();

    } else {
        //  $toppings;
        $toppings = $specials_toppings[$price_by_size];
        echo $toppings;
        sendTheQuery();

    }
} else {
    $toppings = '';
}

function sendTheQuery() {
    global $price, $size, $customer, $toppings, $price_by_size, $j;
    echo 'hardhardhhhhhhhhhhhhhhhhhhh ' . $j . $price_by_size;
    $Query="INSERT INTO orders(customer, size, toppings, price) 
    VALUES('$customer', '$size', '$toppings', '$price')";
    $Execute=mysql_query($Query);
    echo 'THIS IS THE BEGINNING OF THE TOPPINGS ARRAY' . $customer . $size . $toppings . $price;
}


?>