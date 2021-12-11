<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="header">
        <div class="navbar">
            <div class="logo">

            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="./zircon-home.php">Home</a></li>
                    <li><a href="./products.php">Product</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a id="acc" href="./profile.php">Profile</a></li>
                </ul>
            </nav>
           <a href="./cart.php"><img src="./cart.png">  </a> 
            <img src="./menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!----------account-page--------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./image5.png">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Profile</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <?php
                            session_start();
                            $connection = mysqli_connect('localhost',"root",'', "project");
                            if(!$connection){
                                echo"error";
                            }
                            $userName = $_SESSION['userName'];
                            $fetch_query = "SELECT * FROM `userData` WHERE `userName`='$userName'";
                            $data = mysqli_query($connection,$fetch_query);
                            $details = mysqli_fetch_array($data);
                            $email = $details['Email'];
                        ?>

                        <form id="LoginForm" method="POST" action="./logout.php">
                            <input type="text" value="<?php echo($userName)?>" readonly>
                            <input type="email" value="<?php echo($email)?>" readonly>
                            <button type="submit" class="btn" name="login">LogOut</button>
                        </form>

                        <form id="RegForm" method="POST" action="./signup.php">
                            <input type="text" placeholder="Username" name="uname">
                            <input type="email" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" name="pass">
                            <button type="submit" class="btn" name="signup">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <!---------footer---------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phones</p>
                    <div class="app-logo">
                        <img src="./appstore.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="">
                    <p>Our Purpose Is To Sustainably Make The Pleasure And Benefits of Sports Accesories To Many</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Posts</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021</p>
        </div>
    </div>

    <!-----js for toggle menu----->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!--------js for toggle Form-------->

    <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");

            function register() {
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(55px)";
            }
            function login() {
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(-55px)";
            }

    </script>
</body>

</html>