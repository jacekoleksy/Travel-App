<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/scripts.js"></script>  
    <title>Travel Compass</title>
</head>

<body>
    <video autoplay muted loop id="movie">
        <source src="public\img\uploads\background1.mov" type="video/mp4">
    </video>
    <div class="container">
        <div class="logo">
            <img src=public/img/uploads/logo.png>
        </div> 
        <div class="login-container">
            <form class="login" action="/login" method="POST">
            <h1>Login</h1>
                <div class="messages">
                    <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <input name="login-email" type="text" placeholder="E-mail">
                <input name="login-password" type="password" placeholder="Password">
                <button type="submit" value="login">Log in</button>
            </form>
            <hr>
            <form class="login" action="/register" method="POST">
            <h1>Register</h1>
                <div class="messages">
                    <?php
                        if(isset($messages2)){
                            foreach($messages2 as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <div class="input-short">
                    <input name="register-name" type="text" placeholder="Name">
                    <input name="register-surname" type="text" placeholder="Surname">
                </div>
                <input name="register-email" type="text" placeholder="E-mail">
                <input name="register-password" type="password" placeholder="Password">
                <input name="register-confirm-password" type="password" placeholder="Confirm Password">
                <div class="terms">
                    <input type="checkbox">
                    <h2>I accept <a href="">Terms of Use</a></h1>
                </div>
                <button type="submit" name="register">Sign in</button>
            </form>
        </div>
        <button id="get-started" type="submit" onclick="getStarted()">Get Started</button> 
    </div>
<?php
if ($_SERVER['REQUEST_URI'] !== "/"){
echo '<script type="text/javascript">
$("#get-started").hide();
$(".logo").hide();
$(".login-container").show().css("display", "flex");</script>';
}
?>
</body>