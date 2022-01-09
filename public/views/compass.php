<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/compass.css">
    <script type="text/javascript" src="public/js/compass.js"></script>  
    <?php include_once('head.php'); ?>
    <title>Travel Compass</title>
</head>

<body>
    <video autoplay muted loop id="movie">
        <source src="public\img\uploads\background1.mov" type="video/mp4" preload metadata>
    </video>
    <div class="container">
        <?php include_once('nav.php'); ?>
        <div class="content">
            <?php if(isset($currentquestion) && isset($questionnum) && isset($questiontitle)){ ?>
                <h1><i class='fas fa-chevron-circle-left' id='buttons-pc'></i>Question <span class='current_question'><?php echo $currentquestion;?></span> of <?php echo $questionnum;?><a href="/compass"><i class='fas fa-redo-alt' id='buttons-pc'></i></a></h1>
                <h2 class='current_title'><?php echo $questiontitle ?></h2>
                <hr>
                <form class="compass" method="POST">
                    <button type="button" value=-2 name="opinion">Strongly Disagree</button>
                    <button type="button" value=-1 name="opinion">Disagree</button>
                    <button type="button" value=0 name="opinion">No Opinion</button>
                    <button type="button" value=1 name="opinion">Agree</button>
                    <button type="button" value=2 name="opinion">Strongly Agree</button>
                    <input type="hidden" name='answers'></input>
                </form>
            <?php } 
            else { ?>
                <h1>Connection error</h1>    
            <?php } ?>
        </div>
    </div>
</body>