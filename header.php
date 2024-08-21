<?php 
session_start();
?>
<?php
if($_SESSION['cart']){
    $cart = sizeof($_SESSION['cart']);
}
?>
<style>
    header{
        display: flex;
        justify-content:space-between ;
        margin-inline:auto;
        max-width:1600px;
        padding:2rem;
        font-size:2rem;
    }
</style>
<header>
    <a href="/MiniP_5/">home</a>
    <a href="/MiniP_5/cart.php" class="fas fa-shopping-cart"> <?php echo $cart ?>  </a>
</header>