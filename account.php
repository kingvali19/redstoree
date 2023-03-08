<?php
require 'config.php';
if(isset($_POST['submit'])){
    $username = $_POST(['username']);
    $email = $_POST(['email']);
    $password = $_POST(['password']);
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' or email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo 
        "<script>alert("Username or email already taken!");</script>"
    }
    else{
        $query = "INSERT INTO tb_user VALUES('', '$username', '$email', '$password')";
        mysqli_query($conn,$query);
        echo 
        "<script>alert('Registration succesful);</script>"
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-eidth, initial-
    scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - REDStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <script src="login.js"></script>
    
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="container">
    <div class="navbar">
        <div class="logo">
          <a href="index.html" > <img src="images/logo.png" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.html">Product</a></li>
                        <li><a href="About.html">About</a></li>
                        <li><a href="Contact.html">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
            </ul>
        </nav>
        <a href="cart.html"><img src="images/cart.png" width="30px" height="30px">
        <img src="images/menu.png" class="menu-icon" 
        onclick="menutoggle()"></a>
    </div>
     
    </div>
    <!------account-page---->
    
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                         <hr id="Indicator">
                    </div>
                    <form id="LoginForm" action="" method="post" autocomplete="off">
                        <input type="text" placeholder="Username" name="name" value="" id="name" required>
                        <input type="password" placeholder="Password">
                        <button type="submit " onclick="validateForm()" class="btn">Login</button>
                        <a href="">Forgot password</a>
                    </form>

                    <form id="RegForm" action="" method="post">
                        <input type="text" placeholder="Username" name="username" id="username">
                        <input type="email" placeholder="Email" name="email" id="email">
                        <input type="password" placeholder="Password" name="password" id="password">
                        <button type="submit " class="btn">Register</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--------footer--------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and IOS mobile phone. </p>
                <div class="app-logo">
                    <img src="images/play-store.png" >
                    <img src="images/app-store.png" >
                </div>

            </div>
            <div class="footer-col-2">
               <img src="images/logo-white.png" alt="">
                <p>Our Purpose Is To Sustainably Make the Pleasure and 
                Benefits of Sports Accessible to the Many. </p>
            </div>

            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>

                </ul>

            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>

                </ul>

            </div>
        </div>
            <hr>
            <p class="copyright">Copyright 2022-Easy Tutorials</p>

    </div>
</div>
<!---------js for toggle menu------->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px"
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
<!---------js for toggle Form------->


<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){

        RegForm.style.transform = " translateX(0px)";
        LoginForm.style.transform = " translateX(0px)";
        Indicator.style.transform = " translateX(100px)";

    }
    function login(){

        RegForm.style.transform = " translateX(300px)";
        LoginForm.style.transform = " translateX(300px)";
        Indicator.style.transform = " translateX(0px)";
    }

</script>

            
</body>
</html>