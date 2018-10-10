<?php

// include 'switchPrice.php';

$size_dropdown = "
<select name='size' onchange='form.submit()' class='pizza_size'>
    <option value='SM'></option>
    <option value='SM'>SM</option>
    <option value='MED'>MED</option>
    <option value='LG'>L</option>
    <option value='XL'>XL</option>
</select>";

$price_visibility_form = "
    <form action='switchPrice.php' method='POST'>
        $size_dropdown
    </form>";


?>