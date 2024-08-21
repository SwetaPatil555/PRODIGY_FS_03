<?php 
session_start();
?>

<?php
    // print_r($_SESSION['cart']);
    if(isset($_GET["item"])){
        if(!$_SESSION['cart']){
            $_SESSION["cart"]=array($_GET["item"]);  
        }
    array_push($_SESSION['cart'],$_GET["item"]);  
    }
    
?>
<button><a href="/MiniP_5/checkout.php">Payment Gateway</a></button><br>

<?php
$items=$_SESSION['cart'];
foreach ($items as $key => $value) {
  $item=json_decode($value);

 echo "item name:".$item->name;
 echo "<br>";
 echo "item price:".$item->price;
 echo "<br>";
 echo "<br>";
}
?>