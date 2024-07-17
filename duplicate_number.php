<?php

// $arry = array(1,2,3,1);

// $duplicate = array_diff_assoc($arry,array_unique($arry));
// print_r($duplicate);

//next

// $arry = array(1,2,3,4,1,2,8,9,4);

// $length = sizeof($arry);

// for ($i = 0; $i < $length; $i++){
//     for ($j = $i+1; $j < $length; $j++) {
//         if ($arry[$i]==$arry[$j]){
//             echo $arry[$j];
//         }

//     }
// }

function dublicate($arry,$length){
    for ($i=0; $i<$length; $i++){
        for ($j=$i+1; $j<$length; $j++){
            if($arry[$i]==$arry[$j]){
                echo $arry[$j].'';
                break;
            }
        }
    }
}

$arry = array(1,2,3,4,1,2,8,9,4);
$length = sizeof($arry);
dublicate($arry,$length );

?>