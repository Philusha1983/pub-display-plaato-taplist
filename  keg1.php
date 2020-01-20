<?php
// Calling the API 
$beer_name = file_get_contents("http://plaato.blynk.cc/[Token]/get/v64");
?>
// Shows only result
<?php echo($beer_name)?>