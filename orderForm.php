<?php 
    
    if(isset($_POST["Submit"])) {
        $pizzaName=$_POST["pizzaName"];
        $customer=$_POST["customer"];
        $toppings=$_POST["toppings"];
        $price=$_POST["price"];

        $Connection=mysql_connect('localhost', 'root', '');
        $Selected=mysql_select_db('pizzahouse', $Connection);
        $Query="INSERT INTO menu(pizza_name, customer, toppings, price) 
        VALUES('$pizzaName',  '$customer', '$toppings', '$price')";
        $Execute=mysql_query($Query);
        echo $pizzaName .  $customer . $toppings . $price;
    }
    for ($i = 0; $i <= 10; $i++) {
        echo "The number is: $i <br>";
    }

    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="views/assets/css/base.css" />   
    <link rel="stylesheet" type="text/css" media="screen" href="views/assets/css/toppings.css" />    
</head>
<body>
    <div class="container">
    <form method="POST" action="orderForm.php">
    <div class="form-header">Pizza Name:</div>  <br> <input type="text" Name="pizzaName" value=""><br>
    <div class="form-header">Customer:</div><br>  <input type="text" Name="customer" value=""><br>
    <div class="form-header">Toppings:</div>  <br> <input type="text" Name="toppings" value=""><br>

    <div id="Toppings">
        <div class="Toppings_single">
            <h5>Mushroom</h5>
            <img src="./views/assets/img/mushroom.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="mushroom" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="mushroom"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="mushroom"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>           
        </div>
        <div class="Toppings_single">
            <h5>Pepperoni</h5>
            <img src="./views/assets/img/peps.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="peps" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="peps"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="peps"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Bell Pepper (Green)</h5>
            <img src="./views/assets/img/greenPepper.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="green_pepper" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="green_pepper"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="green_pepper"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Bell Pepper (Red)</h5>
            <img src="./views/assets/img/redPepper.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="red_pepper" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="red_pepper"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="red_pepper"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Ham</h5>
            <img src="./views/assets/img/ham.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="ham" value="NA" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="ham" value="ham"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="ham" value="double ham"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Mozzarella</h5>
            <img src="./views/assets/img/mozz.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="mozzarella" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="mozzarella"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="mozzarella"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Olive</h5>
            <img src="./views/assets/img/olive.png" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="olive" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="olive"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="olive"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Onion</h5>
            <img src="./views/assets/img/onion.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="onion" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="onion"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="onion"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Pineapple</h5>
            <img src="./views/assets/img/pineapple.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="pineapple" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="pineapple"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="pineapple"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Provolone</h5>
            <img src="./views/assets/img/provolone.png" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="provolone" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="provolone"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="provolone"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Spinach</h5>
            <img src="./views/assets/img/spinach.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="spinach"> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="spinach"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="spinach"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Tomato</h5>
            <img src="./views/assets/img/tomato.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  name="tomato"> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="tomato"> 
                <span class="Toppings_checkbox-txt">Yep</span>
                <input class ='Toppings_checkbox' type="radio" name="tomato"> 
                <span class="Toppings_checkbox-txt">2x</span>
            </div>
        </div>
    
        <input type="Submit" value="Result" name="Submit"> 

    </div>
    

    
    <div class="form-header">Price:</div>  <br> <input type="text" Name="price" value=""><br>
    </form>
    </div>
    
    

</body>
</html>