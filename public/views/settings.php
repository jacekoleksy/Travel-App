<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/settings.css">
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
                        <input id="settings-name" name="settings-name" type="text" value=<?php echo $_SESSION['name']?> placeholder="Name" readonly onfocus="this.removeAttribute('readonly');">
                    </li>
                    <li>
                        <h3>Last name *</h3>
                        <input id="settings-surname" name="settings-surname" type="text" value=<?php echo $_SESSION['surname']?> placeholder="Surname" readonly onfocus="this.removeAttribute('readonly');">
                    </li>
                    <li>
                        <h3>Login *</h3>
                        <input id="settings-email" name="settings-email" type="email" value=<?php echo $_SESSION['user']?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z0-9]{2,10}$" title="Email should only contain lower case letters, @ and . sign. Example: 'admin@gmail.com'" placeholder="E-mail" readonly onfocus="this.removeAttribute('readonly');">
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