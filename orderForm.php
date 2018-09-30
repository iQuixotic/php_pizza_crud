<?php 
    
    if(isset($_POST["Submit"])) {
        $price=5;
        $pizzaName=$_POST["pizzaName"];
        $size=$_POST["size"];
        $customer=$_POST["customer"];
        $ToppingsArr=array();
        $PrepArr=array(
            $_POST["mushroom"], $_POST["peps"], $_POST["green_pepper"], $_POST["red_pepper"], 
            $_POST["ham"], $_POST["mozzarella"], $_POST["olive"], $_POST["onion"],
            $_POST["pineapple"], $_POST["provolone"], $_POST["spinach"], $_POST["tomato"]);

            function priceAdjust($arg) {
                global $price;
                $glass=$price+$arg;
                $price=$glass;

                print_r($price);
                print_r($glass);

                
                // echo $glass;
            }
        $SM_val=4.00;
        switch ($size) {
            // case 'SM':
            //     priceAdjust($);            
            //     break;
            case 'MED':
                priceAdjust(2.09);
                break;
            case 'LG':
                priceAdjust(3.59);
                break;
            case 'XL':
                priceAdjust(4.99);
                break;
            
            default:
                # code...
                break;
        }
        
        foreach ($PrepArr as $elem) {
            if($elem !== "NA") {
                $ToppingsArr[]=$elem;                
                $price=$price+.4;
                $toppings= implode(", ", $ToppingsArr);
            } 
        }

        $Connection=mysql_connect('localhost', 'root', '');
        $Selected=mysql_select_db('pizzahouse', $Connection);
        $Query="INSERT INTO menu(pizza_name, customer, size, toppings, price) 
        VALUES('$pizzaName',  '$customer', '$size', '$toppings', '$price')";
        $Execute=mysql_query($Query);
        echo $pizzaName .  $customer . $size . $toppings . $price;
    }
    // for ($i = 0; $i <= 10; $i++) {
    //     echo "The number is: $i <br>";

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
    <!-- <div class="form-header">Toppings:</div>  <br> <input type="text" Name="toppings" value=""><br> -->
    
    <div class="form-header">Size: </div> <br>
    <select name="size" class="pizza_size">
        <option value="SM">SM</option>
        <option value="MED">MED</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
    </select>

    <div id="Toppings">
        <div class="Toppings_single">
            <h5>Mushroom</h5>
            <img src="./views/assets/img/mushroom.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA" name="mushroom" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="mushroom" value="mushroom"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>           
        </div>
        <div class="Toppings_single">
            <h5>Pepperoni</h5>
            <img src="./views/assets/img/peps.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  value="NA" name="peps" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="peps" value="pepperoni"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Bell Pepper (Green)</h5>
            <img src="./views/assets/img/greenPepper.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  value="NA" name="green_pepper" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  value="green pepper" name="green_pepper"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Bell Pepper (Red)</h5>
            <img src="./views/assets/img/redPepper.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA" name="red_pepper" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio" value="red pepper"  name="red_pepper"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Ham</h5>
            <img src="./views/assets/img/ham.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA" name="ham" value="NA" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  name="ham" value="ham"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Mozzarella</h5>
            <img src="./views/assets/img/mozz.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA" name="mozzarella" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio" value="mozzarella" name="mozzarella"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Olive</h5>
            <img src="./views/assets/img/olive.png" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA" name="olive" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio" value="olive"  name="olive"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Onion</h5>
            <img src="./views/assets/img/onion.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio"  value="NA" name="onion" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio" value="onion" name="onion"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Pineapple</h5>
            <img src="./views/assets/img/pineapple.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA" name="pineapple" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio"  value="pineapple" name="pineapple"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Provolone</h5>
            <img src="./views/assets/img/provolone.png" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA" name="provolone" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio" value="provolone" name="provolone"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Spinach</h5>
            <img src="./views/assets/img/spinach.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA"  name="spinach" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio" value="spinach" name="spinach"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
        <div class="Toppings_single">
            <h5>Tomato</h5>
            <img src="./views/assets/img/tomato.jpg" alt="">
            <div class="block">                
                <input class ='Toppings_checkbox' type="radio" value="NA" name="tomato" checked> 
                <span class="Toppings_checkbox-txt">NOPE</span>
                <input class ='Toppings_checkbox' type="radio" value="tomato" name="tomato"> 
                <span class="Toppings_checkbox-txt">Yep</span>
            </div>
        </div>
    
        <input type="Submit" value="Result" name="Submit"> 

    </div>
    

    
    <!-- <div class="form-header">Price:</div>  <br> <input type="text" Name="price" value=""><br> -->
    </form>
    </div>
    
    

</body>
</html>