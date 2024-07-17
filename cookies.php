<?php
//global $cookie_name;
include 'cookie.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
<?php
        if(!isset($_COOKIE["user"])){
            echo "Cookie not set";
        } else {
            echo $_COOKIE["user"];
        }

//        if(!isset($_COOKIE[$cookie_name])){
//            echo "Cookie not set";
//        } else {
//            echo $_COOKIE[$cookie_name];
//        }
    ?>
</body>
</html>


