<?php

$per = 3;
if ($per >= 80 and $per <=100){
    echo "You are in Merit";
}
elseif  ($per >= 60 and $per <=79){
    echo "You are in 1st Division";
}
elseif  ($per >= 45 and $per <=59){
    echo "You are in 2st Division";
}
elseif  ($per >= 33 and $per <=44){
    echo "You are in 3st Division";
}else{
    echo "Faield";
}
