<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="user">User Name</label>
        <input type="text" name="name">
        <button type="Submit">Submit</button> 
    
</form>
<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){

    $name = $_REQUEST['name'];
    // if(empty($name)){
    //     echo "Input is empty";
    // }else{
    //     echo $name;
    // }

    if(!empty($name)){
        echo $name;
    }
    else{
        echo "Input failed";
    }
}
?>

</body>
</html>