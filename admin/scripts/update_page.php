<?php

//UPDATE BASIC TEXT/TITLES//
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

//UPDATE/UPLOAD FILES//
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

?>