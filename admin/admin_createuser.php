<?php
    require_once 'scripts/load.php';
    confirm_logged_in();
    confirm_admin();

    if(isset($_POST['create'])){
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $rights = trim($_POST['rights']);
    
        if(empty($fname) || empty($lname) || empty($email) || empty($rights)){
            $message = 'Please fill required fields!';
        }else{
            //all data is good
            $message = createUser($fname, $lname, $email, $rights);
        }
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
    <title>Document</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
    <main>
        <div class="text">
            <h2>Create User</h2>
            <?php echo !empty($message)? $message:''; ?>
            <form action="admin_createuser.php" method="post">

        </br>
                <label>First Name:</label>
                <input type="text" name="fname" value=""></br></br>

                <label>Last Name:</label>
                <input type="text" name="lname" value=""></br></br>

                <label>UserEmail:</label>
                <input type="text" name="email" value=""></br></br>

                <label>UserRights:</label>
                <input type="text" name="rights" value=""></br></br>

                <button type="submit" name="create">Create User</button>
                
            </form>
        </div>
    </main>
</body>
</html>