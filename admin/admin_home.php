<?php
    require_once 'scripts\load.php';
    
    confirm_logged_in();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styling/reset.css">
    <link rel="stylesheet" type="text/css" href="styling/main.css">
    <title>Admin Landing Page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
    <main>
        <div class="greeting">
            <h1>Hello <?php echo ($_SESSION['user_fname'])?>!</h1>
        </div>
        <div class="activity">
            </br>
            <h1>You recent activity:</h1>
            </br>
            <h2>Your Current Login:</h2>
            <p><b>Time Stamp: </b><?php echo $_SESSION['this_login']?></p>
            <p><b>Ip Address: </b><?php echo $_SESSION['user_ip']?></p>
            </br>
            <h2>Your last Login:</h2>
            <p><b>Time Stamp: </b><?php echo $_SESSION['last_login']?></p>
            <p><b>Ip Address: </b><?php echo $_SESSION['last_ip']?></p>
            <p><i>Report any suspicious activity to site admin.</i></p>  
        </div>
    </main>
</body>
</html>