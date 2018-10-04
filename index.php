

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jimmy Johns</title>
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
    <h1>Pizza Time !</h1>
    <div class="nav_links">
        <a href="/projects/php_pizza_crud">Home</a>
        <a href="/projects/php_pizza_crud/orderForm.php">Customize</a>
    </div>
</nav>


<div class="my-head-space"></div>

<div class="pretty-pizza">
    <img src="./views/assets/img/pizzat.jpg" alt="">
    <div class="choice-form">
        <?php 

       $Connection=mysql_connect('localhost', 'root', '');
       $Selected=mysql_select_db('pizzahouse', $Connection);
       
       $sqlGet = "SELECT * FROM menu";
       $sqlData = mysql_query($sqlGet);
       $radio_btn = "<input class='selection' type='radio'>";
      

        // echo $selectionMult;
        
        // $value_prices = 4 * $selectionMult;
       
       echo "<table class='all_current_orders'>";
       echo "<tr><th></th><th>PIZZA</th><th>TOPPINGS</th> <th>SIZE</th><th>PRICE</th></tr>";
       while($row = mysql_fetch_assoc($sqlData)) {
        $sizeDropdown = "<select name='size'>
        <option value='SM'>
            SM
        </option>
        <option value='MED'>
            MED
        </option>
        <option value='LG'>
            LG
        </option>
        <option value='XL'>
            XL
        </option>
        </select>" ;
        $selectionMult = $_POST["size"];
        echo $selectionMult;
           echo "<tr><td>" . $radio_btn . "</td><td>" . $row["pizza_name"] . "</td><td>" . $row["toppings"] . "</td><td>" . 
           $sizeDropdown . "</td><td>" . $selectionMult ."</td></tr>";
       }
       echo "</table>";
        
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
echo "<button>Hello Puppet!!!!</button>";
echo "</table>";
?>