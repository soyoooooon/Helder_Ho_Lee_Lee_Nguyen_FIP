<?php 
function login($username, $userpassword, $ip){

    $pdo = Database::getInstance()->getConnection();
    //check if username exisits
    $check_exist_query = 'SELECT COUNT(*) FROM `tbl_users` WHERE user_name = :username';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':username'=>$username
        )
    );
    //if username exists then 
    if($user_set->fetchColumn()>0){
        //Verify if user-input password matches Hashed password//
        $get_the_hash = 'SELECT user_pass FROM `tbl_users` WHERE user_name = :username';
        $user_hash = $pdo->prepare($get_the_hash);
        $user_hash->execute(
            array(
            ':username'=>$username
            )
        );
        $hashedword = $user_hash->fetchColumn();
        //if it does match then
        if(!password_verify($userpassword, $hashedword)) {

            return 'Wrong password.';
         
        }else{
            $new_password = $hashedword;
            //Check if pass/user match
            $check_exist_query = 'SELECT * FROM `tbl_users` WHERE user_name = :username AND user_pass=:password';
            $user_match = $pdo->prepare($check_exist_query);
            $user_match->execute(
                array(
                    ':username'=>$username,
                    ':password'=>$new_password
                )
            );
            //if match
            while($founduser = $user_match->fetch(PDO::FETCH_ASSOC)){
                $id = $founduser['user_id'];
            
                if(isset($id)){
                    //if never logged in
                    if(($founduser['last_login'] == null)) {
                    
                        //set time varibles for lockout
                        //now
                        $thisTime = date('Y-m-d H:i:s');
                        //2 days (48hours) after admin created account
                        $timeLimit = date('Y-m-d H:i:s', strtotime('+2 days', strtotime($founduser['reg_date'])));

                        //if logging in before the 48 hour limit
                        if($thisTime < $timeLimit){
                            //set new "this_login" and "last_on" and "user_ip" and "last_ip"
                            $update = 'UPDATE tbl_users SET this_login = CURRENT_TIMESTAMP, last_login = CURRENT_TIMESTAMP, user_ip = :user_ip, last_ip =:user_ip WHERE user_id =:id';
                            $thislogin_update = $pdo->prepare($update);
                            $data = [
                                ':id'=>$id,
                                ':user_ip'=>$ip
                            ];
                            $thislogin_update->execute($data);
                            
                            //set session stuff//
                            $get_user_query = 'SELECT * FROM `tbl_users` WHERE user_id = :id';
                            $user_stuff = $pdo->prepare($get_user_query);
                            $user_stuff->execute(
                                array(
                                    ':id' =>$id
                                )
                            );
                            while($founduser = $user_stuff->fetch(PDO::FETCH_ASSOC)){
                                $_SESSION['user_id'] = $founduser['user_id'];
                                $_SESSION['user_name'] = $founduser['user_name'];
                                $_SESSION['user_email'] = $founduser['user_email'];
                                $_SESSION['user_fname'] = $founduser['user_fname'];
                                $_SESSION['user_lname'] = $founduser['user_lname'];
                                $_SESSION['this_login'] = $founduser['this_login'];
                                $_SESSION['last_login'] = $founduser['last_login'];
                                $_SESSION['reg_date'] = $founduser['reg_date'];
                                $_SESSION['user_ip'] = $founduser['user_ip'];
                                $_SESSION['last_ip'] = $founduser['last_ip'];
                                $_SESSION['admin_rights'] = $founduser['admin_rights'];
                            }
                            redirect_to('edit_account.php');
                            
                        } else {
                            //if failed to login before 48hours
                            return 'Sorry, 48 hours has expired please contact site admin';
                        }

                    //if have logged in
                    }else{
                        //set "last_login" as the previous "this_login" and "last_ip" as previous "user_ip"
                        $laston = $founduser['this_login'];
                        $last_ip = $founduser['user_ip'];
                        $lastlogin_update = 'UPDATE tbl_users SET last_login = :laston, last_ip = :last_ip WHERE user_id = :id';
                        $last_update = $pdo->prepare($lastlogin_update);
                        $lastdata = [
                            ':id'=>$id,
                            ':laston'=>$laston,
                            ':last_ip' =>$last_ip
                        ];
                        $last_update->execute($lastdata);

                        //set new "this_login" and "user_ip"
                        $update = 'UPDATE tbl_users SET this_login = CURRENT_TIMESTAMP, user_ip = :user_ip WHERE user_id = :id';
                        $thislogin_update = $pdo->prepare($update);
                        $data = [
                            ':id'=>$id,
                            ':user_ip'=>$ip
                        ];
                        $thislogin_update->execute($data);
                        
                         //set session stuff//
                         $get_user_query = 'SELECT * FROM `tbl_users` WHERE user_id = :id';
                         $user_stuff = $pdo->prepare($get_user_query);
                         $user_stuff->execute(
                             array(
                                 ':id' =>$id
                             )
                         );

                         while($founduser = $user_stuff->fetch(PDO::FETCH_ASSOC)){
                             $_SESSION['user_id'] = $founduser['user_id'];
                             $_SESSION['user_name'] = $founduser['user_name'];
                             $_SESSION['user_email'] = $founduser['user_email'];
                             $_SESSION['user_fname'] = $founduser['user_fname'];
                             $_SESSION['user_lname'] = $founduser['user_lname'];
                             $_SESSION['this_login'] = $founduser['this_login'];
                             $_SESSION['last_login'] = $founduser['last_login'];
                             $_SESSION['reg_date'] = $founduser['reg_date'];
                             $_SESSION['user_ip'] = $founduser['user_ip'];
                             $_SESSION['last_ip'] = $founduser['last_ip'];
                             $_SESSION['admin_rights'] = $founduser['admin_rights'];
                         }

                        redirect_to('admin_home.php');
                    }
                }
            } 
        }
     //if username doesnt exsist
    }else{
        return 'Username not found.';
    }
}

?>