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
        <div class="nav" id="nav-mobile" onmouseover="menuMobileShow()" onmouseout="menuMobileShow()">
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
                <?php
                    if(isset($currentquestion) && isset($questionnum) && isset($questiontitle)){
                        echo "<h1>Question ",$currentquestion," of ",$questionnum,"</h1>";
                        echo "<h2>",$questiontitle,"</h2>";
                    }
                    if(isset($result)) {
                        echo "<h1>Your Result</h1>";
                        echo "<h2>Value W:",$_COOKIE['value_w']," Value H:",$_COOKIE['value_h'],"</h2>";
                    }
                ?>
            <hr>
            <?php
            if(isset($currentquestion) && isset($questionnum) && isset($questiontitle)){
            echo '<form class="compass" action="/compass_action" method="POST">';
            echo '    <button type="submit" value=-2 name="opinion">Strongly Disagree</button>';
            echo '    <button type="submit" value=-1 name="opinion">Disagree</button>';
            echo '    <button type="submit" value=0 name="opinion">No Opinion</button>';
            echo '    <button type="submit" value=1 name="opinion">Agree</button>';
            echo '    <button type="submit" value=2 name="opinion">Strongly Agree</button>';
            echo '</form>';
            }
            ?>
        </div>
    </div>
</body>