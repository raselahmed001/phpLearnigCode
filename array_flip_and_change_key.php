<?php

$array = [

    "id"=>1,
    "first_name"=>"2",
    "last_name"=>"3",
    ];

//$new = array_flip($array);
$new = array_change_key_case($array,CASE_UPPER);
echo "<pre>";
print_r($new);
echo "</pre>";