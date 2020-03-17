<?php

    function editUser($id, $fname, $lname, $password, $email){

        $hashed_password = password_hash($password ,PASSWORD_DEFAULT);

        $pdo = Database::getInstance()->getConnection();

        $update_user = 'UPDATE tbl_users SET user_fname= :firstname, user_lname=:lastname, user_pass=:pass, user_email=:email WHERE user_id = :user_id';
        $user_update = $pdo->prepare($update_user);
        $user_update->execute(
            array(
                ':user_id'=> $id,
                ':firstname' => $fname,
                ':lastname' => $lname,
                ':pass' => $hashed_password,
                ':email' => $email
            )
        );

        if($user_update){
            redirect_to('admin_home.php');
        }else{
            return 'Failed To Update';
        }
        
    }

?>