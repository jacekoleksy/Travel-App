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
    <div class="container">
        <div class="logo">
            <img src=public/img/uploads/logo.png>
        </div> 
        <div class="login-container">
            <form class="login" action="login" method="POST">
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
                <input name="email" type="text" placeholder="E-mail">
                <input name="password" type="password" placeholder="Password">
                <button type="submit">Log in</button>
            </form>
            <hr>
            <form class="login" action="register" method="POST">
            <h1>Register</h1>
                <div class="messages2">
                    <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <div class="input-short">
                    <input name="first-name" type="text" placeholder="First name">
                    <input name="last-name" type="text" placeholder="Last name">
                </div>
                <input name="email" type="text" placeholder="E-mail">
                <input name="password" type="password" placeholder="Password">
                <input name="confirm-password" type="password" placeholder="Confirm Password">
                <div class="terms">
                    <input type="checkbox">
                    <h2>I accept <a href="">Terms of Use</a></h1>
                </div>
                <button type="submit">Sign in</button>
            </form>
        </div>
        <button id="get-started" type="submit" onclick="getStarted()">Get Started</button> 
    </div>
    <!-- <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </div> -->
</body>