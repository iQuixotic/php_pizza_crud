<?php 
    include 'connection.php';
    include 'formInputs.php';
    include 'functionsAndVariables.php';
include 'switchPrice.php';
include 'formSubmit.php';


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jimmy Johns</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../views/assets/css/base.css" <?php  echo time(); ?> />   
    <link rel="stylesheet" href="../views/assets/css/layout.css"  <?php  echo time(); ?> />   
    <link rel="stylesheet" href="../views/assets/css/nav.css"  <?php  echo time(); ?> />   


</head>
<body>

<nav>
    <div class="logo"></div>
    <h1><em>Peep's Pizzeria</em></h1>
    <div class="nav_left-links">
        <a href="/projects/php_pizza_crud/php/delivery.php">Deliveries</a>
    </div>
    <div class="nav_links">
        <a href="/projects/php_pizza_crud">Home</a>
        <a class='active' href="/projects/php_pizza_crud/php/custom.php">Customize</a>
    </div>
</nav>

<div class="my-head-space"></div>

    <div class="container">
    <form method="POST" >
    <div class="form-header">Name: </div><br>  <input type="text" Name="customer" value=""><br>
    
    <div class="form-header">Size: </div> <br>
    <select name='size' class='pizza_size'>
        <option value='SM'>SM</option>
        <option value='MED'>MED</option>
        <option value='LG'>L</option>
        <option value='XL'>XL</option>
    </select>

    <div id="toppings">
        <div class="toppings_single">
            <h5>Mushroom</h5>
            <img class="toppings_img" src="../views/assets/img/mushroom.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA" name="mushroom" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio"  name="mushroom" value="mushroom"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>           
        </div>
        <div class="toppings_single">
            <h5>Pepperoni</h5>
            <img class="toppings_img" src="../views/assets/img/peps.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio"  value="NA" name="peps" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio"  name="peps" value="pepperoni"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Bell Pepper (Green)</h5>
            <img class="toppings_img" src="../views/assets/img/greenPepper.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio"  value="NA" name="green_pepper" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio"  value="green pepper" name="green_pepper"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Bell Pepper (Red)</h5>
            <img class="toppings_img" src="../views/assets/img/redPepper.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA" name="red_pepper" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio" value="red pepper"  name="red_pepper"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Ham</h5>
            <img class="toppings_img" src="../views/assets/img/ham.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA" name="ham" value="NA" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio"  name="ham" value="ham"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Mozzarella</h5>
            <img class="toppings_img" src="../views/assets/img/mozz.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA" name="mozzarella" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio" value="mozzarella" name="mozzarella"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Olive</h5>
            <img class="toppings_img" src="../views/assets/img/olive.png" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA" name="olive" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio" value="olive"  name="olive"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Onion</h5>
            <img class="toppings_img" src="../views/assets/img/onion.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio"  value="NA" name="onion" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio" value="onion" name="onion"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Pineapple</h5>
            <img class="toppings_img" src="../views/assets/img/pineapple.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA" name="pineapple" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio"  value="pineapple" name="pineapple"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Provolone</h5>
            <img class="toppings_img" src="../views/assets/img/provolone.png" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA" name="provolone" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio" value="provolone" name="provolone"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Spinach</h5>
            <img class="toppings_img" src="../views/assets/img/spinach.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA"  name="spinach" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio" value="spinach" name="spinach"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="toppings_single">
            <h5>Tomato</h5>
            <img class="toppings_img" src="../views/assets/img/tomato.jpg" alt="">
            <div class="block">                
                <input class ='toppings_checkbox' type="radio" value="NA" name="tomato" checked> 
                <span class="toppings_checkbox-txt">NOPE</span>
                <input class ='toppings_checkbox' type="radio" value="tomato" name="tomato"> 
                <span class="toppings_checkbox-txt">Yep</span>
            </div>
        </div>
    
        <div class="center">
            <input class="submit-btn" type="Submit" value="Result" name="Submit"> 
        </div>

    </div>
    
    </form>
    </div>
    
    

</body>
</html>