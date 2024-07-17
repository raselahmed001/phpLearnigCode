<?php
$userImage = $_FILES['userimage'];
$image_name = $userImage['name'];
$image_array = explode(".", $image_name);
$extention = $image_array[1];

$image_formate = array('jpg', 'png', 'jepg');

if(in_array($extention,$image_formate)){
    echo "Match";
}else{
    echo "Invalid";
}

?>