
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book_store | Ecommerce website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <div class="header">



    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" alt="" width="125px">
            </div>
            <nav>
               
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Product</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" alt="" class="menu-icon">


       
</div>
</div>
</div>
<!-- ---------------------- Account page---------------------- -->
<div class="account-page">
    <div class="container">
        
        <div class="row">
         <div class="col-2">
            <img src="images/image1.png" alt="" width="100%">
        </div>
        <div class="col-2">
            <div class="form-container">
                <div class="form-btn">
                    <span onclick="login()"> Login</span>
                    <span onclick="register()"> Register </span>
                    <hr id="Indicator">    
                </div>
                <form action="login.php" id="LoginForm" name="myform" method="post">
                    <input type="text" id="" placeholder="Username" name="username">
                    <input type="password" id="" placeholder="password" name="password">
                    <input type="submit" value="login" class="btn" >
                    <a href="">Forget password</a>
                </form>
                <form action="register.php" id="RegForm" method="post">
                    <input type="text" name="first_name" id="username" placeholder="Username" >
                    <input type="email" name="email" id="email" placeholder="email">
                    <input type="password" name="password" placeholder="password" id="password">
                    <!-- <button type="button" class="btn">Register</button> -->
                    <input type="submit" value="submit" class="btn"> 
            
                </form>
            </div>
        </div>
        </div>
    </div>
</div>



<!-- -------------------------- Fotter ----------------------------- -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3> Download our app </h3>
                <p> Download App for Andriod and IOS for Mobile phone </p> 
                <div class="app-logo">
                    <img src="images/play-store.png" alt="">
                    <img src="images/app-store.png" alt="">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo-white.png" alt="">
                <p> Our purpose Is To Sustainiably Makre The Plaesure and 
                    Benifits of Sports Accesible To the Many  </p> 
            </div>
            <div class="footer-col-3">
              <h3> Useful links </h3>
            <ul>
                <li>Coupons</li>
                <li>Blog Post</li>
                <li>Reaturn Policy</li>
                <li> Join affilatate</li>
            </ul>
            </div>
            <div class="footer-col-4">
                <h3> Follow us </h3>
              <ul>
                  <li>Facebook</li>
                  <li>Twitter</li>
                  <li>Instagram</li>
                  <li>YouTube</li>
              </ul>
              </div>
        </div>
        <hr>
        <p class="copyright"> Copyright 2022 :- Himanshu </p>
    </div>
</div>
<!-- ---------------------- sift pages  js --------------- -->
<script>
    var LoginForm=document.getElementById("LoginForm")
    var RegForm=document.getElementById("RegForm")
    var Indicator=document.getElementById("Indicator")
    function register(){
        RegForm.style.transform="translateX(0px)";
        LoginForm.style.transform="translateX(0px)";
        Indicator.style.transform="translateX(100px)";


    }
    function login(){
        RegForm.style.transform="translateX(300px)";
        LoginForm.style.transform="translateX(300px)";
        Indicator.style.transform="translateX(0px)";

    }
 




</script>
</body>
</html>