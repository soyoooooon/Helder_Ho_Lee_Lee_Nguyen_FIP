<?php

    function getUsers(){

        $pdo = Database::getInstance()->getConnection();
        $get_all_users = 'SELECT * FROM `tbl_users` WHERE user_id != 1';
        $user_set = $pdo->query($get_all_users);

         if($user_set){
        
            return $user_set;

        } else {
            return false;
        }
    
    }

    function deleteUser($id){

        $pdo = Database::getInstance()->getConnection();
        $delete_user = 'DELETE FROM `tbl_users` WHERE user_id = :user_id';
        $user_delete = $pdo->prepare($delete_user);
        $user_delete->execute(
            array(
                ':user_id'=> $id
            )
        );

        if($user_delete){
            redirect_to('admin_deleteuser.php');
        }else{
            return false;
        }
        
    }

?>