<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/scripts.js"></script>  
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>Travel Compass</title>
</head>

<body>
    <video autoplay muted loop id="movie">
        <source src="public\img\uploads\background1.mov" type="video/mp4" preload metadata>
    </video>
    <div class="container">
        <div class="nav" id="nav-pc">
            <i class="fas fa-bars fa-3x"></i>
            <ul id="menu">
                <li><a href="/compass">Compass</a></li>
                <li><a href="/about_us">About Us</a></li>
            </ul>
            <ul id="account">
                <li><a href="/results" id="another-color">My Results</a></li>
                <li><a href="/settings" id="another-color">Settings</a></li>
                <li><a href="/logout" id="another-color">Log out</a></li>
            </ul>
            <i class="fas fa-user-circle fa-3x" id="another-color"></i>
        </div>
        <div class="nav" id="nav-mobile" onclick="menuMobileShow()" onmouseout="menuMobileHide()">
            <i class="fas fa-bars fa-3x"></i>
            <i class="fas fa-user-circle fa-3x" id="another-color"></i>
        </div>
        <ul id="menu-mobile">
                <li><a href="/compass">Compass</a></li>
                <li><a href="/about_us">About Us</a></li>
                <li><a href="/results" id="another-color">My Results</a></li>
                <li><a href="/settings" id="another-color">Settings</a></li>
                <li><a href="/logout" id="another-color">Log out</a></li>
        </ul>
        <div class="settings-container">
            <form class="login" action="/settings_action" method="POST">
            <h1>Your account</h1>
                <div class="messages">
                    <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <ul>
                    <li>
                        <h3>First Name *</h3>
                        <input id="settings-name" name="settings-name" type="text" placeholder="Name" readonly onfocus="this.removeAttribute('readonly');">
                    </li>
                    <li>
                        <h3>Last name *</h3>
                        <input id="settings-surname" name="settings-surname" type="text" placeholder="Surname" readonly onfocus="this.removeAttribute('readonly');">
                    </li>
                    <li>
                        <h3>Login *</h3>
                        <input id="settings-email" name="settings-email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z0-9]{2,10}$" title="Email should only contain lower case letters, @ and . sign. Example: 'admin@gmail.com'" placeholder="E-mail" readonly onfocus="this.removeAttribute('readonly');">
                    </li>
                    <h2>Password</h2>
                    <li>
                        <h3>Current Password *</h3>
                        <input name="settings-password" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}$" title="Password must contain lower and upper case letters, at least one sign and number" placeholder="*******" readonly onfocus="this.removeAttribute('readonly');">
                    </li>
                    <li>
                        <h3>New Password</h3>
                        <input name="settings-new-password" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}$" title="Password must contain lower and upper case letters, at least one sign and number" placeholder="*******" readonly onfocus="this.removeAttribute('readonly');">
                    </li>
                </ul>
                <button type="submit" value="settings">Update</button>
            </form>
        </div>
    </div>
    <?php
    echo '<script type="text/javascript">settings();</script>'; 
    ?>
</body>