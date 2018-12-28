<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peep's Pizzeria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="views/assets/css/base.css" />    -->
    <link rel="stylesheet" href="../views/assets/css/main.css" <?php  echo time(); ?> />   
    <link rel="stylesheet" href="../views/assets/css/base.css" <?php  echo time(); ?> />   
    <link rel="stylesheet" href="../views/assets/css/layout.css"  <?php  echo time(); ?> />  
    <link rel="stylesheet" href="../views/assets/css/tables.css"  <?php  echo time(); ?> />   
    <link rel="stylesheet" href="../views/assets/css/nav.css"  <?php  echo time(); ?> />   

</head>
<body>

<nav>
    <div class="logo"></div>
    <h1 class="peeps"><em>Peep's Pizzeria</em></h1>
    <div class="nav_links-all">
        <div class="nav_left-links">
            <a  href="/projects/php_pizza_crud/php/delivery.php" class=<?php echo $_SERVER['REQUEST_URI'] == "/projects/php_pizza_crud/php/delivery.php" ? 'active' : ''; ?>>Deliveries</a>
        </div>
        <div class="nav_links">
            <a href="/projects/php_pizza_crud" class=<?php $_SERVER['REQUEST_URI'] == "/projects/php_pizza_crud" ? 'active' : ''; ?> 
            >Home</a>
            <a href="/projects/php_pizza_crud/php/custom.php" class=<?php echo $_SERVER['REQUEST_URI'] == "/projects/php_pizza_crud/php/custom.php" ? 'active' : ''; ?> >Customize</a>
        </div>
    </div>
</nav>
