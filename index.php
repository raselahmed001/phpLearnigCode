<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $salary = 1200;
        // $house_rent = 1300;
        // $name = "Rasel";
        // echo "Total:". $salary+$house_rent. "</br>";
        // echo "Total:". $name. "</br>";

        // $num1 = 10;
        // $num2 = 20;
        // $sum = $num1+$num2;
        // echo "Total:". $sum. "</br>";

        // //Functions

        // function getAdd(){
        //     echo "Rasel" . "</br>";
        // }
        // getAdd();

        // function getSum($num3, $num4) {
        //     echo "Sum:" . ($num3 + $num4) . "</br>";
        // }
        
        // getSum(10, 20);

        // function person($name, $age) {
        //     echo "Person name is " . ($name) . "and age is :".($age). "</br>";
        // }

        // person("rasel", 22);

        //global variable 

        // $phone = "01515203197";
        // function Addresses(){
        //     global $phone;
        //     echo $phone;
        // }
        // Addresses();

        // $name = "Rasel";
        // function Person(){
        //     echo $GLOBALS['name'];
            
        // }
        // Person();

        //static function

        function StaticNumbers(){
            static $num = 1;
            echo $num. "<br/>";
            $num = 2;
        }
        StaticNumbers();
        StaticNumbers();
        StaticNumbers(); 
         


    ?>
</body>
</html>