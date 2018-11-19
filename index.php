<?php 
    include './php/connection.php';
    include './php/formInputs.php';
    include './php/switchPrice.php';
    include './php/formSubmit.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peep's Pizzeria</title>
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
    <h1><em>Peep's Pizzeria</em></h1>
    <div class="nav_left-links">
        <a href="/projects/php_pizza_crud/php/delivery.php">Deliveries</a>
    </div>
    <div class="nav_links">
        <a class='active' href="/projects/php_pizza_crud">Home</a>
        <a href="/projects/php_pizza_crud/php/custom.php">Customize</a>
    </div>
</nav>

<div class="my-head-space"></div>
    <div class="center marg-bottom padding">
        <div class="table_header">
            <h2>Peep's Specials</h2>
        </div>
    </div> 


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
        <!-- <form action="formSubmit.php" class="specials"> -->
        
    <?php 
   
   $sqlGet = "SELECT * FROM menu";
   $sqlData = mysql_query($sqlGet);


//    $price=3.5;
   
//    $submit_btn = '<div class="center"><input class="submit-btn" 
//                   type="Submit" value="GIMME" name="Submit"></div>';
   $selected='';
   $radio_select='';
   $page_header = ' 
    <div class="center">
        <div class="table_header">
            <h3><em>#LovesIt</em></h3>
        </div>
    </div> ';
    echo $page_header;   

    // all functions start here
   function check_pizza_name($j) {
    //    global $price_by_size;
    //    $price_by_size = 2;
       global $pizza_img;
            if (isset($_POST["pizza_name"]) && $_POST["pizza_name"] == $j) {
       global $price_by_size;
                
            $price_by_size = array_search ( $j ,$pizza_img );
            echo 'this is j ' . $price_by_size;
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
        return $radio_btn;
   }  

   function get_image($src) {
        echo "<img src='./$src'>";
   }

//    function get_options($selected) {
//     $sizes=array('SM'=>1, 'MED'=>2, 'LG'=>3, 'XL'=>4);
//     $options='';
//     while(list($k,$v)=each($sizes)) {
//         if($selected==$v) {
//             $options .= '<option value="' . $v . '" selected>' . $k .'</option>';
//         } else {
//             $options.='<option value="' . $v . '">' . $k .'</option>';                
//         }
//     }
//     return $options;
//     }

    // $new_price='';
    // if (isset( $_POST["sizes"])) {
    //     $new_price = $price+$_POST["sizes"];
    // }
    
     $input_area ="
    <h3 class='price'>$price_by_size</h3>";  

    // <select name='sizes'>
    // ". get_options($selected) . "
    // </select>
   
   echo "<form method='POST'><table class='all_current_orders'>";
   echo "<col width='5%'/><col width='35%'/><col width='55%'/>";
   echo "<tr><th></th><th>PIZZA</th><th>TOPPINGS</th> </tr>";
   while($row = mysql_fetch_assoc($sqlData)) {
   
       echo "<tr><td>" . radio_btn_mkr() . "</td><td>" 
       . $row["pizza_name"] . "</td><td class='table_toppings'>" . $row["toppings"]
       . "</td></tr>";
   }
   echo "</table>";
?>
<div class="form-header">Size: </div> <br>
    <select name='size' class='pizza_size'>
        <option <?php if ( $size==='SM') { echo "selected='selected'"; }  ?> value='SM'>SM</option>
        <option <?php if ( $size==='MED') { echo "selected='selected'"; }  ?> value='MED'>MED</option>
        <option <?php if ( $size==='LG') { echo "selected='selected'"; }  ?> value='LG'>L</option>
        <option <?php if ( $size==='XL') { echo "selected='selected'"; }  ?> value='XL'>XL</option>
    </select>

<div class="form-header">Name: </div><br>  <input type="text" Name="customer" value=""><br>

<div class="center">
    <input class="submit-btn" type="Submit" value="GIMME" name="Submit">
</div>

<?php
   echo $input_area;
   echo " is this my price $price_by_size ";

   echo "</form>"
   
  
    
    ?>
        <!-- </form> -->
       
    </div>
</div>

<div class="my-head-space"></div>


    <div class="container">
   
    </div>

</body>
</html>

