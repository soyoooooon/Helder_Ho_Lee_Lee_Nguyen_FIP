<?php
    require_once 'scripts\load.php';
    $ip = $_SERVER['REMOTE_ADDR'];

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $userpassword = trim($_POST['password']);

        if(!empty($username) && !empty($userpassword)){
           
            $message = login($username, $userpassword, $ip);
        }else{
            $message = 'Please fill out the required fields';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styling/reset.css">
    <link rel="stylesheet" type="text/css" href="styling/main.css">
    <title>Red Ribbon Youth Admin Login Page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
    <main>
        <h1>Red Ribbon Youth</h1>
        <h2>Administrative Login</h2>
        <form action="user_login.php" method="post">
            <p><?php echo !empty($message)?$message:' '; ?></p>
            <label>Username:</label>
            <input type="text" name="username" value="" placeholder="username"/><br>

            <label>Password:</label>
            <input type="text" name="password" value="" placeholder="password"/><br>

            <button name="submit">Submit</button>
        </form>
    </main>
<?php include_once 'templates/footer.php'; ?>
</body>
</html>