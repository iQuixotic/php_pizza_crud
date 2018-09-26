<!DOCTYPE >
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
</head>
<body>
    <!-- hey
    <h1>PHP Suuuuoooonnnnn</h1>
    <table>
        <tr>
            <th>Pizza Name</th>
            <th>Customer</th>
            <th>Toppings</th>
            <th>Price</th>
        </tr>
        <tr>
            Stacy
        </tr>
    </table> -->
    
    <?php

    echo "hello";

    $Connection=mysql_connect('localhost', 'root', '');
    if($Connection) {
        echo 'Database working goodly !!';
        echo "<br>";
    } else {
        echo 'It\'s completely broked-ded';
    }
    $Selected=mysql_select_db('pizzahouse', $Connection);
    if($Selected) {
        echo 'Oh yes, OOOHHOHHH yes, It soo goodS !!';
    } else {
        echo 'At leasst the ohter workses-ses !@!@!?!';
    }
        
    ?>
</body>
</html>