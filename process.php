<?php
$name= $_POST["fname"];
$Usname=$_POST["username"];
$Email=$_POST["email"];
$Passw=$_POST["password"];
$Phone_n=$_POST["Phone_number"];
$servername ="localhost";
$username ="root";
$password ="";
$Db="Diva";
$qu='INSERT INTO `users`( `fname`, `username`, `email`, `password`, `Phone_number`) VALUES ("'.$name.'","'.$Usname.'","'.$Email.'","'.$Passw.'","'.$Phone_n.'");';
// Create connection
$conn =mysqli_connect($servername, $username, $password,$Db);

// Check connection
print_r($qu);
$result=$conn->query($qu);
header("Location:/MiniP_5/shop.php");
?>