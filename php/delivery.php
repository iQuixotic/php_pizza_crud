<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peep's Pizzeria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../views/assets/css/main.css" <?php  echo time(); ?> />   
    <link rel="stylesheet" href="../views/assets/css/base.css" <?php  echo time(); ?> />   
    <link rel="stylesheet" href="../views/assets/css/layout.css"  <?php  echo time(); ?> />  
    <link rel="stylesheet" href="../views/assets/css/tables.css"  <?php  echo time(); ?> />   
    <link rel="stylesheet" href="../views/assets/css/nav.css"  <?php  echo time(); ?> />   


</head>
<body>

<nav>
    <div class="logo"></div>
    <h1><em>Peep's Pizzeria</em></h1>
    <div class="nav_left-links">
        <a class='active' href="/projects/php_pizza_crud/php/delivery.php">Deliveries</a>
    </div>
    <div class="nav_links">
        <a href="/projects/php_pizza_crud">Home</a>
        <a href="/projects/php_pizza_crud/php/custom.php">Customize</a>
    </div>
</nav>

<div class="my-head-space"></div>

</body>
</html>

<div class="container">
   <div class="center">
       <div class="table_header">
            <h2>Deliveries</h2>
       </div>
   </div> 
<?php

$sqlGet = "SELECT * FROM orders";
$sqlData = mysql_query($sqlGet);

echo "<table class='all_current_orders'>";
echo "<col width='15%'/> <col width='15%'/> <col width='15%'/> 
<col width='40%'/> <col width='15%'/>";
echo "<tr><th>ORDER #</th> <th>CUSTOMER</th><th>SIZE</th> <th>TOPPINGS</th><th>PRICE</th></tr>";
while($row = mysql_fetch_assoc($sqlData)) {
    echo "<tr><td>" . $row["id"] . "</td><td class='overflow'>";
    if( $row["customer"] === '') { echo 'UNKNOWN DESTINATION'; } else { echo $row["customer"]; };
    echo "</td><td>" . $row["size"] . "</td><td>" . $row["toppings"] . "</td><td>" . $row["price"] . 
    "</td></tr>";
}
echo "</table>";

?>
</div>
