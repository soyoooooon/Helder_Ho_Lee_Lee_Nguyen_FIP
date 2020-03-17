<?php

    function createUser($fname, $lname, $email, $rights){

        $pdo = Database::getInstance()->getConnection();
    //check email
        $check_exist_query = 'SELECT COUNT(*) FROM `tbl_users` WHERE user_email = :useremail';
        $user_set = $pdo->prepare($check_exist_query);
        $user_set->execute(
            array(
                ':useremail'=>$email
            )
        );
    //if email count is greater than 0
         if($user_set->fetchColumn()>0){
        
            return 'Email already in use';

        } else {

    //Count any Users that have the same first and last name //
            $pdo = Database::getInstance()->getConnection();
            $check_name_query = 'SELECT COUNT(*) FROM `tbl_users` WHERE user_fname = :fname AND user_lname = :lname';
            $name_number = $pdo->prepare($check_name_query);
            $name_number->execute(
                array(
                    ':fname'=>$fname,
                    ':lname'=>$lname
                )
            );
            $user_number = $name_number->fetchColumn();
            if($user_number === '0'){
                $user_number = '';
            }
    //create username using first name, last name, and number of count //
            $username = $fname . $lname . $user_number;

    //Create random password
            $passAlphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ12334567890!@#&';
            $user_password = array();
            $length = strlen($passAlphabet) -1;
            for ($i = 0; $i < 6; $i++){
                $n = rand(0, $length);
                $user_password[] = $passAlphabet[$n];
            }
            $password = implode($user_password);
    //hash password for database
            $hashed_password = password_hash($password ,PASSWORD_DEFAULT);

    //compile all data being inputed into database //
            $data = [
                $fname,
                $lname,
                $username,
                $hashed_password,
                $email,
                $rights
            ];

    //insert data into table //
            $newuser = 'INSERT INTO tbl_users (user_id, user_name, user_pass, user_email, user_fname, user_lname, this_login, last_login, reg_date, user_ip, last_ip, admin_rights) VALUES (DEFAULT,"'. $username.'","'.$hashed_password.'","'.$email.'","'.$fname.'","'.$lname.'",DEFAULT,DEFAULT,CURRENT_TIMESTAMP,DEFAULT,DEFAULT,"'.$rights.'")';
            $user_build = $pdo->prepare($newuser);
            $user_build->execute($data);
        
    //email the new user the login credentials
            $to = $email;
            $subject = "Red Ribbon Youth Admin";
            $credentials = "Username: \n $username \nPassword: \n $password";
            $link = "login-link-goes-here";
            $headers = "From: admin@redribbonyouth.com";
            $content = "Hello $fname $lname! \n\nYou have 48 hours to login to your new account!:\n $link\n\nYOUR CREDENTIALS:\n\n$credentials";


//THIS IS WHERE IT MAILS BUT I COMMENTED IT OUT SO I WOULDN'T GET ERRORS


            // mail($to,$subject,$content,$headers);
            // return 'User Created!';



//THIS IS THE FAKE EMAIL dumped out SO YOU CAN SEE HOW IT WILL SEND


            $fakeemail = "\n\nTo:$to \nSubject:$subject \n$headers\n\n$content\n\n";
            return 'User Created!'.var_dump($fakeemail);


    
        };       

    }

?>
