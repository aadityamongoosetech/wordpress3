<?php 
/*
Plugin Name: shortcode
Version:2.0
Author:Your name

*/
function form_creation(){
?>
<form class="ink_form">
Name:<input type="text" name="name"></br>
email:<input type="text" name="email"></br>
password:<input type="text" name="password"></br>
Moblienumber:<input type="text" name="moblinumber"></br>
address:<input type="text" name="address"></br>
<input type="submit" name="submit"></br>
</form>
<?php
}
add_shortcode('form','form_creation');
?>

<?php
function wpb_demo_shortcode()
{
    $message="Hello world";
    return $message;

}
add_shortcode('greeting','wpb__demo_shortcode');

?>





