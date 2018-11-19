<?php 
    include './php/connection.php';
    include './php/functionsAndVariables.php';
    include './php/switchPrice.php';
    // include './php/formSubmit.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peep's Pizzeria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="views/assets/css/base.css" />    -->
    <link rel="stylesheet" href="views/assets/css/main.css" <?php  echo time(); ?> />   
    <link rel="stylesheet" href="views/assets/css/base.css" <?php  echo time(); ?> />   
    <link rel="stylesheet" href="views/assets/css/layout.css"  <?php  echo time(); ?> />  
    <link rel="stylesheet" href="views/assets/css/tables.css"  <?php  echo time(); ?> />   
    <link rel="stylesheet" href="views/assets/css/nav.css"  <?php  echo time(); ?> />   

</head>
<body>


<nav>
    <div class="logo"></div>
    <h1><em>Peep's Pizzeria</em></h1>
    <div class="nav_left-links">
        <a href="/projects/php_pizza_crud/php/delivery.php">Deliveries</a>
    </div>
    <div class="nav_links">
        <a class='active' href="/projects/php_pizza_crud">Home</a>
        <a href="/projects/php_pizza_crud/php/custom.php">Customize</a>
    </div>
</nav>

<div class="my-head-space"></div>
    <div class="center marg-bottom padding">
        <div class="table_header">
            <h2>Peep's Specials</h2>
        </div>
    </div> 


<div class="pretty-pizza">

    <?php  
    
    
            if (isset( $_POST["pizza_name"])) {
            echo "<br>";
            $src= $_POST["pizza_name"];
            get_image($src);
            echo "<br>";
        }  else {
            get_image('views/assets/img/pepperoniPizza.jpg');
        }
    ?>
    <div class="choice-form">
        <!-- <form action="formSubmit.php" class="specials"> -->
        
    <?php 
   
   $sqlGet = "SELECT * FROM menu";
   $sqlData = mysql_query($sqlGet);

   $selected='';
   $radio_select='';
   $page_header = ' 
    <div class="center">
        <div class="table_header">
            <h3><em>#LovesIt</em></h3>
        </div>
    </div> ';
    echo $page_header;   
   
   echo "<form method='POST'><table class='all_current_orders'>";
   echo "<col width='5%'/><col width='35%'/><col width='55%'/>";
   echo "<tr><th></th><th>PIZZA</th><th>TOPPINGS</th> </tr>";
   while($row = mysql_fetch_assoc($sqlData)) {
   
       echo "<tr><td>" . radio_btn_mkr() . "</td><td>" 
       . $row["pizza_name"] . "</td><td class='table_toppings'>" . $row["toppings"]
       . "</td></tr>";
   }
   echo "</table>";
?>
<div class="form-header">Size: </div> <br>
    <select name='size' class='pizza_size'>
        <option <?php if ( $size==='SM') { echo "selected='selected'"; }  ?> value='SM'>SM</option>
        <option <?php if ( $size==='MED') { echo "selected='selected'"; }  ?> value='MED'>MED</option>
        <option <?php if ( $size==='LG') { echo "selected='selected'"; }  ?> value='LG'>L</option>
        <option <?php if ( $size==='XL') { echo "selected='selected'"; }  ?> value='XL'>XL</option>
    </select>

<div class="form-header">Name: </div><br>  <input type="text" Name="customer" value=""><br>

<div class="center">
    <input class="submit-btn" type="Submit" value="GIMME" name="Submit">
</div>

<?php
   echo "</form>";
   $toppings = $specials_toppings[$price_by_size];
   echo $toppings;
   echo 'this is your price ' ?> <span id='chosen-pizza'><?php echo $price_by_size; ?></span>
  
        <!-- </form> -->
       

       <?php 

// include 'connection.php';
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
        // $toppings = $specials_toppings[$price_by_size];
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




    </div>
</div>

<div class="my-head-space"></div>


    <div class="container">
   
    </div>

</body>
</html>

