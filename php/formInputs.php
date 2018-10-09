<?php

include 'switchPrice.php';

$size_dropdown = "
<select name='size' onchange='form.submit()' class='pizza_size'>
    <option value='SM'>SM</option>
    <option value='MED'>MED</option>
    <option value='L'>L</option>
    <option value='XL'>XL</option>
</select>";

$price_visibility_form = "
    <form action='' method='POST'>
        $size_dropdown
    </form>";


?>