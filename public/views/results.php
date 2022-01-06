<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/results.css">
    <link rel="stylesheet" type="text/css" href="public/css/nav.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@300;700&display=swap" rel="stylesheet">
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
        <div class="results-container">
            <i class='fas fa-chevron-circle-left'></i>
        <?php
            if(isset($name)){
                echo "<div class='your-destination'><h1>Your destination</h1>";
                echo "<h2>",$name[0],"</h2>";
                echo "<p>",$description[0],"</p></div>";
                echo "<div class='your-preferences'><h1>Your preferences</h1>";
                $left = 48.6 + $value_w[0]*3.22;
                $top = 48.7 - $value_h[0]*3.22;
                echo "<div id=compass-image><div id='pointer' style='left:$left%;top:$top%'></div></div></div>";
            }
            else {
                echo "<div class='no-results'><h1>$error[0]</h1>";
                echo "<h2>$error[1]<a href='/compass'>$error[2]</a></h2></div>";
            }
        ?>
            <i class='fas fa-chevron-circle-right'></i>
        </div>
    </div>
</body>
