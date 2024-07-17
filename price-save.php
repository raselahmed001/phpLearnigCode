<?php

echo $title = $_POST['title']."</br>";
echo $price = $_POST['price']."</br>";
echo $plane = $_POST['plane']."</br>";
$feature_list = $_POST['feature_list'];


//var_dump($feature_list);

$cunt_featureList = count($feature_list);

for ($i=0; $i <$cunt_featureList; $i++) { 
    echo '<img src="images/right.jpg" width="15" height="15"/>'.$feature_list[$i]."</br>";
}

?>