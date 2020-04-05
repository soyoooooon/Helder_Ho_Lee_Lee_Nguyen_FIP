<?php

    function getSingleUser($id){

        $pdo = Database::getInstance()->getConnection();

        $getuser = 'SELECT * FROM tbl_users WHERE user_id = :user_id';
        $current_user = $pdo->prepare($getuser);
        $current_user->execute(
            array(
                ':user_id'=> $id
            )
        );

        if($current_user){
            return $current_user;
        }else{
            return false;
        }

    }

?>