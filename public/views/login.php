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
        <source src="public\img\uploads\background1.mov" type="video/mp4" preload metadata>
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
                <input name="login-email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z0-9]{2,10}$" title="Email should only contain lower case letters, @ and . sign. Example: 'admin@gmail.com'" placeholder="E-mail" readonly onfocus="this.removeAttribute('readonly');">
                <input name="login-password" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}$" title="Password must contain lower and upper case letters, at least one sign and number" placeholder="Password" readonly onfocus="this.removeAttribute('readonly');">
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
                    <input name="register-name" type="text" placeholder="Name" readonly onfocus="this.removeAttribute('readonly');">
                    <input name="register-surname" type="text" placeholder="Surname" readonly onfocus="this.removeAttribute('readonly');">
                </div>
                <input name="register-email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z0-9]{2,10}$" title="Email should only contain lower case letters, @ and . sign. Example: 'admin@gmail.com'" placeholder="E-mail" readonly onfocus="this.removeAttribute('readonly');">
                <input name="register-password" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" title="Password must contain lower and upper case letters, at least one sign and number" placeholder="Password" readonly onfocus="this.removeAttribute('readonly');">
                <input name="register-confirm-password" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" title="Password must contain lower and upper case letters, at least one sign and number" placeholder="Confirm Password" readonly onfocus="this.removeAttribute('readonly');">
                <div class="terms">
                    <input type="checkbox" name="terms-of-use">
                    <h2>I accept <a href="">Terms of Use</a></h1>
                </div>
                <button type="submit" name="register">Sign in</button>
            </form>
        </div>
        <button id="get-started" type="submit" onclick="getStarted()">Get Started</button> 
    </div>
<?php
if ($_SERVER['REQUEST_URI'] !== "/") {
echo '<script type="text/javascript">logging();</script>'; 
}
?>
</body>