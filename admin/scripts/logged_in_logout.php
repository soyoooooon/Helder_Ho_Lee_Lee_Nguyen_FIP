<?php

    function confirm_logged_in(){
        if(!isset($_SESSION['user_id'])){
            redirect_to('user_login.php');
        }
    }

    function logout(){
        session_destroy();
        redirect_to('user_login.php');
    }

    function confirm_admin(){
        if($_SESSION['admin_rights'] !== "1"){
            redirect_to('admin_home.php');
        }
    }

?>