<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty website Design </title>

    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="assests/Homecss.css">

</head>
<body>
    
<!-- header section start page -->
<section id="header" class="header">
<a href="#" class="logo"><i class="fas fa-female"></i> Diva</a>
<nav class="navbar">
    <a href="#home">home</a> 
    <a href="#about">about</a> 
    <a href="shop.php">shop</a>  
</nav>

<div class="icons">
    
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-shopping-cart"></a>
</div>
</section>
 <div class = "shopping-cart">
    <div class="box">
        <img src ="">
    </div>
    </div>
 

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">


    <div class="slide active" style="background:url(/MiniP_5/assests/wow.png) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>forever <br> beautiful</span>
        <h3>“For attractive lips, speak words of kindness.<br>
            For lovely eyes, seek out the good in people.<br>
            For a slim figure, share your food with the hungry.<br>
            For beautiful hair, let a child run his fingers through it once a day </h3>
         <a href="/MiniP_5/registration.php" class="btn">read more</a>  
    </div>
    </div>

    <div class="slide" style="background:url(pink-background.webp) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>forever <br> beautiful</span>
        <h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
            sed do eiusmod tempor farhan ut labore et dolore magna aliqua.<br>
           Lorem, ipsum dolor </h3>
         <a href="#" class="btn">read more</a>  
    </div>
    </div>

    <div class="slide" style="background:url(Image.jpeg) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>forever <br> beautiful</span>
        <h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
            sed do eiusmod tempor farhan ut labore et dolore magna aliqua.<br>
           Lorem, ipsum dolor </h3>
         <a href="#" class="btn">read more</a> 
    </div>
    </div> 
        
     
    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>
    
</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">
    <div class="img">
        <img src="/MiniP_5/assests/background pic.jpg" alt="">
    </div>
    <div class="content">
        <div class="box">
            <h3>About <span>Us...</span></h3>
            <p>“For attractive lips, speak words of kindness.
                For lovely eyes, seek out the good in people.
                For a slim figure, share your food with the hungry.
                For beautiful hair, let a child run his fingers through it once a day.</p>
            <a href="#" class="btn">read more</a>
            
        </div>
        
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-address-card"></i>
                <p>address card</p>
            </div>
            <div class="icons">
                <i class="fas fa-award"></i>
                <p>award cards</p>
            </div>
            <div class="icons">
                <i class="fas fa-gift"></i>
                <p>gift cards</p>
            </div>
        </div>
    </div>
</section>

<!-- about section ends -->

<!-- banner section starts -->

<section class="banner">
    <div class="content">
        <span>special <span>offer</span></span>
        <h3>upto 50% off</h3>
        
        <a href="#" class="btn">shop now</a>
    </div>
</section>


<!-- services section starts -->

<section class="services">

    <div class="box">
        <img src="/MiniP_5/assests/free delivery-icon-fococlipping-standard.png" alt="">
        <h3>free delivery</h3>
    </div>

    <div class="box">
        <img src="/MiniP_5/assests/payment.icon-fococlipping-standard.png" alt="">
        <h3>secure payments</h3> 
    </div>

    <div class="box">
        <img src="/MiniP_5/assests/OIP-fococlipping-standard.png" alt="">
        <h3>24/7 support</h3>
       
    </div>

</section>

<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="link" href="#home"> <i class="fas fa-angle-right"></i> home</a>
            <a class="link" href="#about"> <i class="fas fa-angle-right"></i> about</a>
            <a class="link" href="#shop"> <i class="fas fa-angle-right"></i> shop</a>
            
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my favorite </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my order </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> private policy </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +111-111-111 </a>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a class="link" href="#"> <i class="fas fa-envelope"></i> sssss@gmail.com </a>
            <a class="link" href="#"> <i class="fas fa-map"></i> mumbai, india - 400000 </a>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" id="" class="email">
                <input type="submit" value="subscribe" class="btn">
            </form>  
        </div>

    </div>
    <!--div class="shopping-cart">
        <div class="box">
            <i class="fa -trash"></i>
            <img src="">
            <div  class="content">
                <h3>watt</h3>
                <span class="price">efd</span>
                <span class = "quantity">Qty :1 </span>
            </div>
        </div>
    </div-->

    <div class="credit"> THANK YOU ||<span>THANK YOU</span> ||THANK YOU! </div>

</section>

<!-- custom js file link -->
<script src="home main.js"></script>
</body>
</html>