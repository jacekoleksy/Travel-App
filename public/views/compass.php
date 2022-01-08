<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/compass.css">
    <?php include_once('head.php'); ?>
    <title>Travel Compass</title>
</head>

<body>
    <video autoplay muted loop id="movie">
        <source src="public\img\uploads\background1.mov" type="video/mp4" preload metadata>
    </video>
    <div class="container">
        <?php include_once('nav.php'); ?>
        <div class="settings-container">
            <?php if(isset($currentquestion) && isset($questionnum) && isset($questiontitle)){ ?>
                <h1>Question <?php echo $currentquestion ?> of <?php echo $questionnum ?></h1>
                <h2> <?php echo $questiontitle ?></h2>
                <hr>
                <form class="compass" action="/compass_action" method="POST">
                    <button type="submit" value=-2 name="opinion">Strongly Disagree</button>
                    <button type="submit" value=-1 name="opinion">Disagree</button>
                    <button type="submit" value=0 name="opinion">No Opinion</button>
                    <button type="submit" value=1 name="opinion">Agree</button>
                    <button type="submit" value=2 name="opinion">Strongly Agree</button>
                </form>
            <?php } 
            else { ?>
                <h1>Connection error</h1>    
            <?php } ?>
        </div>
    </div>
</body>