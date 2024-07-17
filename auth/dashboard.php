<?php  
session_start();
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}
else{
    header("Location:login.php");
}

echo "<br>"; 

?>
<a href="logout.php">Log out</a>