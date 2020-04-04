<?php
require_once 'scripts/load.php';

confirm_logged_in();

if(isset($_GET['id'])){
    $id= $_GET['id'];
}else{
    $id = $_SESSION['user_id'];
}

$current_user = getSingleUser($id);

if(!$current_user){
    $message = 'Failed to get user info';
}

if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['lname']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    $message = editAccount ($id, $fname, $username, $password, $email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styling/css/reset.css">
    <link rel="stylesheet" type="text/css" href="styling/css/main.css">
    <title>Edit User</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
    <main>
        <h2>Edit User</h2>
        <?php echo !empty($message)? $message:'';?>

        <form action="admin_edituser.php" method="post">

        <?php if($current_user):?>
            <?php while($user_info = $current_user->fetch(PDO::FETCH_ASSOC)):?>

                <label for="fname">First Name:</label>
                <input type="text" name="fname" value="<?php echo $user_info['user_fname']; ?>"><br><br>
                
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" value="<?php echo $user_info['user_lname']; ?>"><br><br>
                
                <label for="password">Password:</label>
                <input type="text" name="password" value=""><br><br>
                
                <label for="email">Email:</label>
                <input type="text" name="email" value="<?php echo $user_info['user_email']; ?>"><br><br>

                <?php if($_SESSION['user_name']==="admin"):?>
                    <label for="email">Rights:</label>
                    <input type="text" name="email" value="<?php echo $user_info['admin_rights']; ?>"><br><br>
                <?php endif;?>

            <button type="submit" name="submit">Edit Account</button>
            <?php endwhile; ?>
        <?php endif; ?>

        </form>
    </main>
</body>
</html>