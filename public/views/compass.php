<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/compass.css">
    <link rel="stylesheet" type="text/css" href="public/css/nav.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/scripts.js"></script>  
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>Travel Compass</title>
</head>
<body>
    <div class="container">
        <div class="nav" id="nav-pc" onmouseover="menuShow();accountShow()" onmouseout="menuShow();accountShow()">
            <i class="fas fa-bars fa-3x"></i>
            <ul id="menu">
                <li><a href="/compass">Compass</a></li>
                <li><a href="">About Us</a></li>
            </ul>
            <ul id="account">
                <li><a href="" id="another-color">My Results</a></li>
                <li><a href="/settings" id="another-color">Settings</a></li>
            </ul>
            <i class="fas fa-user-circle fa-3x" id="another-color"></i>
        </div>
        <div class="nav" id="nav-mobile" onclick="menuMobileShow()">
        <i class="fas fa-bars fa-3x"></i>
        <i class="fas fa-user-circle fa-3x" id="another-color"></i>
        </div>
        <ul id="menu-mobile">
                <li><a href="/compass">Compass</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="" id="another-color">My Results</a></li>
                <li><a href="/settings" id="another-color">Settings</a></li>
        </ul>
    </div>
</body>