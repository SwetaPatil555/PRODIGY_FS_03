<!DOCTYPE html>
<html lang="en">
<head>
    <style>
.container
{
    position:relative;
    width:80vw;
    max-height:100vh;
    overflow:hidden;
}
img
{
height:100%;
}
#top
{
   position:absolute;
   top:0;
   left:50%;
   width:50%;
   height:33.3%;
   transform:translateX(-50%)

}
#top::before
{
content:"";
width:100%;
height: 100%;
display:block;


}
#mid
{
    position:absolute;
   top:30%;
   left:50%;
   width:50%;
   height:33.3%;
   transform:translateX(-50%)

}
#mid::before
{
content:"";
width:100%;
height:100%;
display:block;

}
#bottom
{
    position:absolute;
   top:60%;
   left:50%;
   width:50%;
   height:33.3%;
   transform:translate(-50%);
   
}
#bottom::before
{
content:"";
width:100%;
height:100%;
display:block;

}
.center 
{
display:block;
margin-left:auto;
margin-right:auto;
width:auto;
height:100vh;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class ="container">
        <img src="/MiniP_5/assests/vector_img.png"alt="Human_structure" class="center">
        <a href="/MiniP_5/face1.php" id="top"></a>
        <a href="/MiniP_5/body1.php" id="mid"></a>
        <a href="/MiniP_5/legs.php"id="bottom"></a>
     </div>

</body>
</html>