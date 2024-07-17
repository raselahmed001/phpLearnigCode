<?php
//function Price_calculate(){
//    $product_price = 100;
//    $product_qty = 2;
//    $total_price = $product_price*$product_qty;
//    return $total_price;
//}

//function hello()
//{
//    echo "Hi";
//}
//hello();

//Function with Parameters
//function practice($a, $b)
//{
//    echo $a + $b;
//}
//practice(5,10);

//Function with return value
//function fName($a,$b)
//{
//    $c = $a + $b;
//    return $c;
//}
//
//function avg($avg)
//{
//    $avg = $avg/2;
//    echo $avg;
//}
//$d = fName(10,20);
//echo $d ."<br>";
//avg($d);

//Function Arguments by Reference

//function fun(&$string)
//{
//    $string .= "And someting extra";
//}
//$f = "This is ref value <br>";
//fun($f);
//echo $f;
//{
//
//}

//function value($num)
//{
//    $num +=5;
//
//}
//function ref(&$num)
//{
//    $num = $num + 10;
//
//}
//$number = 10;
//value($number);
//echo "Pass by value".$number."<br>";
//
//ref($number);
//echo "Pass by ref " .$number;

//recursive function


//function display($num)
//{
//    if($num < 5){
//        echo "$num <br>";
//        display($num +1);
//    }
//}
//display(1);

function fectorial($n)
{
    if ($n == 0){
        return 1;
    }else{
        return $n * fectorial($n-1);
    }
}

echo fectorial(5);


?>