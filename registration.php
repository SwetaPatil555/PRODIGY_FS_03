<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/MiniP_5/assests/Reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<!--body background="./myg.jpeg"-->
  <div class="container">
    <div class="title">Register yourself</div>
    <div class="content">
      <form action  ="/MiniP_5/process.php"method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text"name="fname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password"name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text"name="Phone_number" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password"name="confirm_Password" placeholder="Confirm your password" required>
          </div>
        </div>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <div class="button"> 
          <a href =""></a>
          <input type="submit" value="Register" >
          <a href="file:///C:/Users/shana/OneDrive/Desktop/Miniproject%20sem%205/login.html"></a>
          
        </div>
        
        </div>
        <div class="container signin">
            <p>Already have an account? <a href="/MiniP_5/login.php">Sign in</a>.</p>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
