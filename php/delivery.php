<?php 
include 'connection.php';
?>

<?php include 'head.php'; ?>

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
echo "<tr><th  class='overflow'>ORDER #</th> <th  class='overflow'>CUSTOMER</th><th>SIZE</th> <th  class='overflow'>TOPPINGS</th><th  class='overflow t_price'>PRICE</th></tr>";
while($row = mysql_fetch_assoc($sqlData)) {
    echo "<tr><td>" . $row["id"] . "</td><td class='overflow'>";
    if( $row["customer"] === '') { echo 'UNKNOWN DESTINATION'; } else { echo $row["customer"]; };
    echo "</td><td>" . $row["size"] . "</td><td>" . $row["toppings"] . "</td><td>" . $row["price"] . 
    "</td></tr>";
}
echo "</table>";

?>
</div>
