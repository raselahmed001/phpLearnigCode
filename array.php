<?php
//$colors = array("red", "green", "blue");
//
//echo $colors[0];
//echo "<ul>";
//for ($i = 0; $i< 3; $i++){
//    echo "<li> $colors[$i] </li>";
//}
//echo "</ul>";
//
//echo "<pre>";
//print_r($colors);
//echo "</pre>";

//Associative Arrays
//
//$asso = array(
//    "a" => 20,
//    "b" => 24,
//    "c" => 33
//);
//
//$asso["b"] = 22;
//
//var_dump($asso);
//
//foreach loop

//$colors = array(
//    "red" =>20,
//    "green" => 33,
//    "blue" =>45
//);
//echo "<ul>";
//foreach ($colors as $key => $vale){
//    echo "<li> $key = $vale  </li>";
//}
//echo "</ul>";

//Multidimensional Array

//$emp = [
//    [1,"Rasel","Manager", 50000],
//    [2,"Raj","Salesman", 30000],
//    [3,"Manik","Programer", 900000],
//    [4,"Amza","Account", 40000]
//
//];

//for ($row = 0; $row < 4; $row++){
//    for ($col = 0; $col < 4; $col++){
//        echo $emp[$row][$col]." ";
//    }
//    echo "<br>";
//}

//echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";
//echo "<tr>
//    <th>ID</th>
//    <th>Name</th>
//    <th>Des</th>
//    <th>Salary</th>
//</tr>";
//
//foreach ($emp as $row){
//    echo "<tr>";
//    foreach ($row as $col){
//        echo "<td>$col</td>";
//    }
//    echo "</tr>";
//}
//echo "</table>";

//echo "<pre>";
//print_r($emp);
//echo "<pre>";

//Multidimensional Associative Array

//$marks = [
//    "Rasel" => [
//        "physics" => 85,
//        "maths" => 78,
//        "chemistry" => 89
//    ],
//    "Salam" => [
//        "physics" => 68,
//        "maths" => 73,
//        "chemistry" => 79
//    ],
//    "Amir" => [
//        "physics" => 62,
//        "maths" => 44,
//        "chemistry" => 90
//    ]
//];
//
//echo "<table border='2px' cellpadding='5pc' cellspacing='0'>
//    <tr>
//        <th>Student name</th>
//        <th>Physice</th>
//        <th>Maths</th>
//        <th>Chemistry</th>
//    </tr>>
// ";
//
//foreach ($marks as $key=>$value1){
//    echo "<tr>
//        <td> $key </td>";
//        foreach ($value1 as $key=> $item) {
//            echo  "<td>".$item. "</td>";
//
//    }
//    //echo "<br>";
//    echo "</tr>";
//
//}
//echo "</table>";
//var_dump($marks);
//echo "<pre>";
//print_r ($marks);
//echo "</pre>";

//Multidimensional Array with list

//$emp = [
//    [1,"Rasel","Manager", 50000],
//    [2,"Raj","Salesman", 30000],
//    [3,"Manik","Programer", 900000],
//    [4,"Amza","Account", 40000]
//
//];
//echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
//<tr>
//    <th>Id</th>
//    <th>Name</th>
//    <th>Des</th>
//    <th>Salary</th>
//
//</tr>";
//foreach ($emp as list($id,$name,$des, $salary) ) {
//    echo "<tr>
//       <td> $id</td> <td>$name </td> <td>$des</td> <td> $salary </td>
//       </tr>
//       ";
//}
//echo "</table>";

// count() and sizeof()

//$names = [
//    "Rasel"=>[10,20],
//    "Raju"=>[30,40],
//    "Amir"=>[50,60],
//    "Raj"=> [70,80]
//
//$names = ["rasel", "Raj"];
//$len =  sizeof($names);
//for ($i = 0; $i < $len; $i++) {
//    echo $names[$i]."<br>";
//
//}
//print_r(array_count_values($names));
//$food = ['orange','banana', 'apple'];

//if (in_array('apple',$food,true)){
//    echo "Find it";
//}else{
//    echo "Not find";
//}

//echo array_search('banana', $food);

$food = ['orange','banana', 'apple'];
$veggie = ['carrot', 'pea'];

$newArray = array_replace($food,$veggie);
echo "<pre>";
print_r($newArray);
echo "</pre>";













