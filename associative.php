<?php
$personal_info = array(
    "name" => "Rasel",
    "phone" => "01796653252",
    "email" => "r@gmail.com",

);

// $key_change_case = array_change_key_case($personal_info, CASE_LOWER);

// foreach ($key_change_case as $key => $value) {
//     echo $key."=".$value."</br>";
// }
$divided = array_chunk($personal_info,1,true);
var_dump($divided)."</br>";

?>