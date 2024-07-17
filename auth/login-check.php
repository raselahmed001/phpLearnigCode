<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin"){
    echo "Login successfully";
    $_SESSION['username'] = $username;
    header("Location:dashboard.php");
    echo "<br>";

}else{
    echo "Login failed";
    header("Location:login.php");
}

?>