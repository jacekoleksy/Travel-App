<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/results.css">
    <?php include_once('head.php'); ?>
    <title>Travel Compass</title>
</head>

<body>
    <video autoplay muted loop id="movie">
        <source src="public\img\uploads\background1.mov" type="video/mp4" preload metadata>
    </video>
    <div class="container">
        <?php include_once('nav.php'); ?>
        <div class="results-container">
            <div id="container-for-smaller">
        <?php
            if(isset($results)){
                $count = 0;
                foreach ($results as $result) {
                    if ($count == 0) { ?>
                        <div class='your-destination' id='active'><h1>Your destination</h1>
                    <?php } else { ?>
                        <div class='your-destination'><h1>Your destination</h1> 
                    <?php } ?>
                    <h2><?php echo $result['name'] ?> </h2>
                    <?php 
                    $name = 'public\img\uploads\\'.$result['name'].'.jpg';
                    $left = 48.6 + $result['value_w']*3.22;
                    $top = 48.7 - $result['value_h']*3.22;
                    ?>
                    <img src=<?php echo $name ?>>
                    <p><?php echo $result['description'] ?></p></div>
                    <?php if ($count == 0) { ?>
                        <div class='your-preferences' id='active'><h1>Your preferences</h1>
                    <?php } else { ?>
                        <div class='your-preferences'><h1>Your preferences</h1>
                    <?php } ?>
                    <div id=compass-image><div id='pointer' style='left:<?php echo $left ?>%;top: <?php echo $top ?>%'></div></div></div>
                    <?php $count += 1; 
                }
                if ($count > 1) { ?>
                    <i class='fas fa-chevron-circle-left' id='buttons-pc' onclick='prevResult()'></i>
                    <i class='fas fa-chevron-circle-right' id='buttons-pc' onclick="nextResult()"></i>
                <?php }
            }
            else { ?>
                <div class='no-results'><h1><?php echo $error[0] ?></h1>
                <h2><?php echo $error[1]?><a href='/compass'><?php echo $error[2]?></a></h2></div> 
            <?php } ?>
            </div>
            <!-- <i class='fas fa-chevron-circle-left' id='buttons-pc' onclick='prevResult()'></i>
            <i class='fas fa-chevron-circle-right' id='buttons-pc' onclick="nextResult()"></i> -->
        </div>
    </div>
</body>
