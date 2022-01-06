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
            <div class="logo">
                <img src=public/img/uploads/logo.png>
            </div>
            <h2>
            The idea for our Compass arose from the simple need to find the right holiday destination <a>without searching through thousands of pages or videos</a>
            </h2>
            <h3>
            Thanks to our service, after answering a few short questions about your preferences, you will find a properly personalized answer to this question. The questions are based only on actual data regarding prices, leisure activities and the preferences of the average visitor.<br><br>
            It is not always possible to rely on the opinion of people from the Internet, and it is better not to be angry with anyone that the holiday did not go well, right?
            </h3>
            <h4>
            Jacek Oleksy, a student of Politechnika Krakowska im. Tadeusz Kościuszko &copy; 2022 <a href="mailto:jacekoleksy99@gmail.com">jacekoleksy99@gmail.com</a>
            </h4>
        </div>
    </div>
</body>