<?php

//UPDATE HEADER//
    function UploadUpdateLogo($file_name, $file_size, $file_tmp, $file_type){
            
        $file_ext_tmp =explode('.',$file_name);
        $file_ext =strtolower(end($file_ext_tmp));
        $extensions= array("jpeg","jpg","svg", "png");
        $target_dir = "../images/";

        if(in_array($file_ext,$extensions)=== false){
            return 'needs to be jpg, svg, or png ):<';
        }if($file_size > 1000000){
            return 'file too big o:';
        }if(file_exists($target_dir.$file_name)){
            return 'file already exists! o.O';
        }else{
            $pdo = Database::getInstance()->getConnection();
            $update_page = 'UPDATE header SET  logo = :logo';
            $page_update = $pdo->prepare($update_page);
            $page_update->execute(array(':logo'=> $file_name));
            if($page_update){
                move_uploaded_file($file_tmp,$target_dir.$file_name);
                return 'Update Successful';
            }else{
                return 'Failed To Update';
            }
        }
    }
//END HEADER//

//UPDATE HERO//
    function updateBannerTitle($bannerTitle){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE hero SET text = :new_title WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_title'=> $bannerTitle));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    function UploadUpdateHero($file_name, $file_size, $file_tmp, $file_type){
        
        $file_ext_tmp =explode('.',$file_name);
        $file_ext =strtolower(end($file_ext_tmp));
        $extensions= array("jpeg","jpg","svg", "png");
        $target_dir = "../images/";

        if(in_array($file_ext,$extensions)=== false){
            return 'needs to be jpg, svg, or png ):<';
        }if($file_size > 1300000){
            return 'file too big o:';
        }if(file_exists($target_dir.$file_name)){
            return 'file already exists! o.O';
        }else{
            $pdo = Database::getInstance()->getConnection();
            $update_page = 'UPDATE hero SET  image = :image';
            $page_update = $pdo->prepare($update_page);
            $page_update->execute(array(':image'=> $file_name));
            if($page_update){
                move_uploaded_file($file_tmp,$target_dir.$file_name);
                return 'Update Successful';
            }else{
                return 'Failed To Update';
            }
        }
    }
    function UploadUpdateBannerMobile($file_name, $file_size, $file_tmp, $file_type){
        
        $file_ext_tmp =explode('.',$file_name);
        $file_ext =strtolower(end($file_ext_tmp));
        $extensions= array("jpeg","jpg","svg", "png");
        $target_dir = "../images/";

        if(in_array($file_ext,$extensions)=== false){
            return 'needs to be jpg, svg, or png ):<';
        }if($file_size > 1300000){
            return 'file too big o:';
        }if(file_exists($target_dir.$file_name)){
            return 'file already exists! o.O';
        }else{
            $pdo = Database::getInstance()->getConnection();
            $update_page = 'UPDATE hero SET  mobile-image = :image';
            $page_update = $pdo->prepare($update_page);
            $page_update->execute(array(':image'=> $file_name));
            if($page_update){
                move_uploaded_file($file_tmp,$target_dir.$file_name);
                return 'Update Successful';
            }else{
                return 'Failed To Update';
            }
        }
    }
//END HERO//

//UPDATE ABOUT//
        function updateAboutTitle($aboutTitle){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE about SET title = :new_title WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_title'=> $aboutTitle));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    function updateAboutText($aboutText){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE about SET text = :new_text WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_text'=> $aboutText));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    function UploadUpdateAboutBack($file_name, $file_size, $file_tmp, $file_type){
        
        $file_ext_tmp =explode('.',$file_name);
        $file_ext =strtolower(end($file_ext_tmp));
        $extensions= array("jpeg","jpg","svg", "png");
        $target_dir = "../images/";

        if(in_array($file_ext,$extensions)=== false){
            return 'needs to be jpg, svg, or png ):<';
        }if($file_size > 1300000){
            return 'file too big o:';
        }if(file_exists($target_dir.$file_name)){
            return 'file already exists! o.O';
        }else{
            $pdo = Database::getInstance()->getConnection();
            $update_page = 'UPDATE about SET  background = :image';
            $page_update = $pdo->prepare($update_page);
            $page_update->execute(array(':image'=> $file_name));
            if($page_update){
                move_uploaded_file($file_tmp,$target_dir.$file_name);
                return 'Update Successful';
            }else{
                return 'Failed To Update';
            }
        }
    }
//END ABOUT//

//UPDATE WORKSHOP-EVENTS//
    function UploadUpdateEventBack($file_name, $file_size, $file_tmp, $file_type){
            
        $file_ext_tmp =explode('.',$file_name);
        $file_ext =strtolower(end($file_ext_tmp));
        $extensions= array("jpeg","jpg","svg", "png");
        $target_dir = "../images/";

        if(in_array($file_ext,$extensions)=== false){
            return 'needs to be jpg, svg, or png ):<';
        }if($file_size > 1300000){
            return 'file too big o:';
        }if(file_exists($target_dir.$file_name)){
            return 'file already exists! o.O';
        }else{
            $pdo = Database::getInstance()->getConnection();
            $update_page = 'UPDATE workshop SET background = :image';
            $page_update = $pdo->prepare($update_page);
            $page_update->execute(array(':image'=> $file_name));
            if($page_update){
                move_uploaded_file($file_tmp,$target_dir.$file_name);
                return 'Update Successful';
            }else{
                return 'Failed To Update';
            }
        }
    }
    //events//
    function updateEventAdd($month, $day, $startTime, $endTime, $locationName, $location){
            
        $converted_startTime = date('h:i a', strtotime($startTime));
        $converted_endTime = date('h:i a', strtotime($endTime));
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $data = [
            $monthName,
            $day,
            $converted_startTime,
            $converted_endTime,
            $locationName,
            $location
        ];

        $pdo = Database::getInstance()->getConnection();
        $update_page = 'INSERT INTO events (id, name, address, start, end, month, day) VALUES (DEFAULT,"'. $locationName.'","'.$location.'","'.$converted_startTime.'","'.$converted_endTime.'","'.$monthName.'","'.$day.'")';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute($data);

        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    function updateEventRemove($month, $day){
            
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $pdo = Database::getInstance()->getConnection();
        $update_page = 'DELETE FROM events WHERE month = :month AND day = :day';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':month'=> $monthName, ':day'=> $day));

        if($page_update){
            return 'Deleted';
        }else{
            return 'Failed To Delete';
        }
    }
//END WORKSHOP-EVENTS//

//UPDATE WHY-HOW//
    function updateWhyTitle($whyTitle){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE why SET title = :new_title WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_title'=> $whyTitle));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    function updateWhyIsTitle($whyIsTitle){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE why SET istitle = :new_title WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_title'=> $whyIsTitle));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    function updateWhyNotTitle($whyNotTitle){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE why SET isnottitle = :new_title WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_title'=> $whyNotTitle));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    //fact boxes
    function updateFacts($title, $box, $icon, $icon_name, $icon_size, $icon_tmp, $icon_type){
            
        $icon_ext_tmp =explode('.',$icon_name);
        $icon_ext =strtolower(end($icon_ext_tmp));
        $extensions= array("jpeg","jpg","svg", "png", "");
        $target_dir = "../images/";

        if($icon == 0){
            if(in_array($icon_ext,$extensions)=== false){
                return 'needs to be jpg, svg, or png ):<';
            }if($icon_size > 1000000){
                return 'file too big o:';
            }if(file_exists($target_dir.$icon_name)){
                return 'file already exists! o.O';
            }else{
                move_uploaded_file($icon_tmp,$target_dir.$icon_name);
            }
        }
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE facts SET  title = :title, icon = :icon WHERE id= :boxNum';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(
            array(
                ':title' => $title,
                ':icon' => $icon_name,
                ':boxNum' => $box
            )
        );
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
//END WHY-HOW//

//UPDATE TESTING//
    function updateTestingOne($box1Title, $box1Text){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE testing SET title = :new_title, text = :new_text  WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_title'=> $box1Title, ':new_text'=> $box1Text));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    function updateTestingTwo($box2Title, $box2Text){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE testing SET title = :new_title, text = :new_text  WHERE id = 2';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_title'=> $box2Title, ':new_text'=> $box2Text));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
//END TESTING//

//UPDATE MAPS INFO//
    function updateMapInfo($region, $location, $info){
        $data = [
            $region,
            $location,
            $info
        ];
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'INSERT INTO `'.$region.'` (id, location, info) VALUES (DEFAULT,"'.$location.'","'.$info.'")';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute($data);
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
//END MAP INFO//

//UPDATE JOIN-US//
    function updateJoinUs($joinTitle, $joinText){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE join_us SET title = :new_title, text = :new_text  WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':new_title'=> $joinTitle, ':new_text'=> $joinText));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
//END JOIN-US//

//UPDATE FOOTER//
    function updateNews($newsTitle, $newsText){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE newsletter SET  title = :title, text = :text  WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':title'=> $newsTitle, ':text'=> $newsText));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
    function updateFooter($disclaimer, $copy){
        $pdo = Database::getInstance()->getConnection();
        $update_page = 'UPDATE footer SET  disclaimer = :disclaimer, copy = :copy  WHERE id = 1';
        $page_update = $pdo->prepare($update_page);
        $page_update->execute(array(':disclaimer'=> $disclaimer, ':copy'=> $copy));
        if($page_update){
            return 'Update Successful';
        }else{
            return 'Failed To Update';
        }
    }
//END FOOTER//

?>