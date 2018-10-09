<?php 

$Connection=mysql_connect('localhost', 'root', '');
$Selected=mysql_select_db('pizzahouse', $Connection);

$sqlGet = "SELECT * FROM menu";
$sqlData = mysql_query($sqlGet);

?>