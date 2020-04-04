<?php
    require_once 'scripts/load.php';
    confirm_logged_in();
    confirm_admin();
    
    $users = getUsers();
   

    if(!$users){
        $message = 'no users found';
    }
    if(isset($_GET['id'])){

        if(($_SESSION['user_id']) === ($_GET['id'])){
            echo'cant delete yourself';
            
        }else{
            $id = $_GET['id'];
            $user_delete_result = deleteUser($id);

            if(!$user_delete_result){
                return 'failed to delete';
            }
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
    <title>Delete User</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
    <main>
        <h2>delete user</h2>
        <?php echo !empty($message)?$message:'';?>

        <?php if($users):?>
            <table style="border:1px solid black;">
                <thead>
                    <tr> 
                        <th>user Id</th>
                        <th>user name</th>
                        <th>user email</th>
                        <th>user rights</th>
                        <th></th>
                        <th></th>
                    </tr>
                <thead>

                <tbody>
                    <?php while($user = $users->fetch(PDO::FETCH_ASSOC)):?>
                        <tr>
                            <th><?php echo $user['user_id']; ?></th>
                            <th><?php echo $user['user_name']; ?></th>
                            <th><?php echo $user['user_email']; ?></th>
                            <th><?php echo $user['admin_rights']; ?></th>
                            <th><a href="edit_account.php?id=<?php echo $user['user_id']; ?>">Edit</a></th>
                            <th><a href="admin_edituser.php?id=<?php echo $user['user_id']; ?>">Delete</a></th>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </main>
</body>
</html>