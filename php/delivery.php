<?php 
include 'connection.php';
?>

<?php include 'head.php'; ?>


<div class="my-head-space"></div>


<?php echo $_SERVER['REQUEST_URI']; ?> 
<?php echo $_SERVER['REQUEST_URI'] === '/propro'; ?> 
<?php echo $_SERVER['REQUEST_URI'] === "/projects/php_pizza_crud/php/delivery.php"; ?> 

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
