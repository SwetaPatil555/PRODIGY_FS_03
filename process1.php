<?php
$Email=$_POST["email"];
$Passw=$_POST["password"];
$servername ="localhost";
$username ="root";
$password ="";
$Db="Diva";
$qu1='SELECT * FROM users where email="'.$Email.'" and password="'.$Passw.'";';
// Create connection
$conn =mysqli_connect($servername, $username, $password,$Db);

// Check connection
print_r($qu1);
$result=$conn->query($qu1);
print_r($result);
// header("Location:/MiniP_5/shop.php");
?>