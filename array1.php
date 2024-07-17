<?php
// $person = array('rasel', '01','mirpur');
 //echo count($person);
// echo $person[0];

$product_info[0] = "Potato";
$product_info[1] = 10;
$product_info[2] = 3;

//var_dump($product_info);
$product_count = count($product_info);

for ($i=0; $i <$product_count ; $i++) { 
   
   // echo $i."</br>";
    echo  $product_info[$i]."</br>";
}



?>