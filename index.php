

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pipi's Pizzeria</title>
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
    <h1>PiPi's Cheeky Pizzeria</h1>
    <div class="nav_links">
        <a href="/projects/php_pizza_crud">Home</a>
        <a href="/projects/php_pizza_crud/orderForm.php">Customize</a>
    </div>
</nav>


<div class="my-head-space"></div>

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
        <?php 

       $Connection=mysql_connect('localhost', 'root', '');
       $Selected=mysql_select_db('pizzahouse', $Connection);
       
       $sqlGet = "SELECT * FROM menu";
       $sqlData = mysql_query($sqlGet);

       $price=3.5;
       $pizza_img = array('views/assets/img/pepperoniPizza.jpg', 
       'views/assets/img/hawPizza.jpg', 'views/assets/img/supremePizza.jpg',
       'views/assets/img/pizzat.jpg', 'views/assets/img/mushroomPizza.jpg'  
        );
       $submit_btn = '<input class="submit-btn" type="Submit" value="Result" name="Submit">';
       $selected='';
       $radio_select='';
       $j=0;

       function check_pizza_name($j) {
        // echo $j;
    //    echo $_SERVER['pizza_name'] == 'POST';

       if (isset($_POST["pizza_name"]) && $_POST["pizza_name"] == $j) {
        return " checked=checked ";
       } 
       }


       function radio_btn_mkr() {
           global $pizza_img;           
           global $j;
                $radio_btn = " <input  onclick='form.submit()' name='pizza_name'               
                value=". $pizza_img[$j] . check_pizza_name($pizza_img[$j])  . "
                class='selection' type='radio'>";
            $j++;
            // echo $j;

            return $radio_btn;
       }

      

       function get_image($src) {
            echo "<img src='./$src'>";
       }

       function get_options($selected) {
        $sizes=array('SM'=>1, 'MED'=>2, 'LG'=>3, 'XL'=>4);
        $options='';
        while(list($k,$v)=each($sizes)) {
            if($selected==$v) {
                $options .= '<option value="' . $v . '" selected>' . $k .'</option>';
            } else {
                $options.='<option value="' . $v . '">' . $k .'</option>';                
            }
        }
        return $options;
        }
        if (isset( $_POST["sizes"])) {
            echo $_POST["sizes"];
            echo $price+$_POST["sizes"];
        }

         $sizeDropdown = "<form action='' method='POST'>
        <select name='sizes'>
        ". get_options($selected) . "
        </select>
       $submit_btn 
        </form>" ;
       
       echo "<table class='all_current_orders'>";
       echo "<tr><th></th><th>PIZZA</th><th>TOPPINGS</th> </tr>";
       while($row = mysql_fetch_assoc($sqlData)) {
       
           echo "<form action='' method='POST'><tr><td>" . radio_btn_mkr() . "</td><td>" . $row["pizza_name"] . "</td><td>" . $row["toppings"]
           . "</td></tr></form>";
       }
       echo "</table>";

       echo $sizeDropdown;
        
        ?>
    </div>
</div>

<div class="my-head-space"></div>
<input type="checkbox">


    <div class="container">
   
    </div>

</body>
</html>

<?php
$Connection=mysql_connect('localhost', 'root', '');
$Selected=mysql_select_db('pizzahouse', $Connection);

$sqlGet = "SELECT * FROM orders";
$sqlData = mysql_query($sqlGet);

echo "<table class='all_current_orders'>";
echo "<tr><th>ORDER #</th> <th>CUSTOMER</th><th>PIZZA NAME</th> <th>TOPPINGS</th><th>PRICE</th></tr>";
while($row = mysql_fetch_assoc($sqlData)) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["customer"] . "</td><td>" . 
    $row["pizza_name"] . "</td><td>" . $row["toppings"] . "</td><td>" . $row["price"] . 
    "</td></tr>";
}
echo "</table>";
?>