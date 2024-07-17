<?php

$array = [
    //[
        "id"=>1,
        "first_name"=>"Rasel",
        "last_name"=>"Ahmed",
    //],
//    [
//        "id"=>2,
//        "first_name"=>"Sayma",
//        "last_name"=>"Khatun",
//    ],
//    [
//        "id"=>1,
//        "first_name"=>"Merina",
//        "last_name"=>"Rabbe",
//    ],
];

//$new = array_column($array,"first_name");
$new = array_chunk($array,2,true);

echo "<pre>";
print_r($new);
echo "</pre>";


