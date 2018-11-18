<?php

// include 'switchPrice.php';
?>
<script>
size_dropdown = () => { 
    let drops = (
`<select name='size' onchange='form.submit()' class='pizza_size'>
    <option value='SM'></option>
    <option value='SM'>SM</option>
    <option value='MED'>MED</option>
    <option value='LG'>L</option>
    <option value='XL'>XL</option>
</select>`;
)
return drops;
}
</script>

<?php
$price_visibility_form = "
    <form action='' method='POST'>
        $size_dropdown
    </form>";


?>