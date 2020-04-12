<?php
    require_once 'scripts/load.php';
    
    confirm_logged_in();

    $header = getHeader();
    $hero = getHero();
    $about = getAbout();
    $workshop = getWork();
    $events = getEvents();
    $why = getWhy();
    $trueFacts = getTrueFacts();
    $trueNotFacts = getTrueNotFacts();
    $test = getTest();
    $join = getJoin();
    $news = getNews();
    $footer = getFooter();

//BASIC TEXT//
    if(isset($_POST['banner-text'])){
        $bannerTitle = trim($_POST['banner_title']);
    
        if(empty($bannerTitle)){
            $btextmessage = 'Please fill required fields!';
        }else{
            $btextmessage = updateBannerTitle($bannerTitle);
        }
    }
    if(isset($_POST['about-title'])){
        $aboutTitle = trim($_POST['aboutTitle']);
    
        if(empty($aboutTitle)){
            $atitlemessage = 'Please fill required fields!';
        }else{
            $atitlemessage = updateAboutTitle($aboutTitle);
        }
    }
    if(isset($_POST['about-text'])){
        $aboutText = trim($_POST['aboutText']);
    
        if(empty($aboutText)){
            $atextmessage = 'Please fill required fields!';
        }else{
            $atextmessage = updateAboutText($aboutText);
        }
    }
    if(isset($_POST['why-title'])){
        $whyTitle = trim($_POST['whyTitle']);
    
        if(empty($whyTitle)){
            $whytitlemessage = 'Please fill required fields!';
        }else{
            $whytitlemessage = updateWhyTitle($whyTitle);
        }
    }
    if(isset($_POST['is-title'])){
        $whyIsTitle = trim($_POST['whyIsTitle']);
    
        if(empty($whyIsTitle)){
            $istitlemessage = 'Please fill required fields!';
        }else{
            $istitlemessage = updateWhyIsTitle($whyIsTitle);
        }
    }
    if(isset($_POST['not-title'])){
        $whyNotTitle = trim($_POST['whyNotTitle']);
    
        if(empty($whyNotTitle)){
            $nottitlemessage = 'Please fill required fields!';
        }else{
            $nottitlemessage = updateWhyNotTitle($whyNotTitle);
        }
    }
    if(isset($_POST['box-1'])){
        $box1Title = trim($_POST['title']);
        $box1Text = trim($_POST['text']);
    
        if(empty($box1Title) || empty($box1Text)){
            $firstmessage = 'Please fill all fields';
        }else{
            $firstmessage = updateTestingOne($box1Title, $box1Text);
        }
    }
    if(isset($_POST['box-2'])){
        $box2Title = trim($_POST['title']);
        $box2Text = trim($_POST['text']);
    
        if(empty($box2Title) || empty($box2Text)){
            $secondmessage = 'Please fill all fields';
        }else{
            $secondmessage = updateTestingTwo($box2Title, $box2Text);
        }
    }
    if(isset($_POST['join-us'])){
        $joinTitle = trim($_POST['title']);
        $joinText = trim($_POST['text']);
    
        if(empty($joinTitle) || empty($joinText)){
            $joinmessage = 'Please fill all fields';
        }else{
            $joinmessage = updateJoinUs($joinTitle, $joinText);
        }
    }
    if(isset($_POST['newsletter'])){
        $newsTitle = trim($_POST['title']);
        $newsText = trim($_POST['text']);
    
        if(empty($newsTitle) || empty($newsText)){
            $newsmessage = 'Please fill all fields';
        }else{
            $newsmessage = updateNews($newsTitle, $newsText);
        }
    }
    if(isset($_POST['footer'])){
        $disclaimer = trim($_POST['disclaimer']);
        $copy = trim($_POST['copy']);
    
        if(empty($disclaimer) || empty($copy)){
            $footmessage = 'Please fill all fields';
        }else{
            $footmessage = updateFooter($disclaimer, $copy);
        }
    }

//IMAGES//

    if(isset($_FILES['logoimage'])){
        $image = $_FILES['logoimage'];
        $file_name = $_FILES['logoimage']['name'];
        $file_size =$_FILES['logoimage']['size'];
        $file_tmp =$_FILES['logoimage']['tmp_name'];
        $file_type=$_FILES['logoimage']['type'];
        

        if(empty($image)){
            $logomessage = 'Please fill all fields';
        }else{
            $logomessage = UploadUpdateLogo($file_name, $file_size, $file_tmp, $file_type);
        }
    }
    if(isset($_FILES['bannerImage'])){
        $image = $_FILES['bannerImage'];
        $file_name = $_FILES['bannerImage']['name'];
        $file_size =$_FILES['bannerImage']['size'];
        $file_tmp =$_FILES['bannerImage']['tmp_name'];
        $file_type=$_FILES['bannerImage']['type'];
        

        if(empty($image)){
            $bwebmessage = 'Please fill all fields';
        }else{
            $bwebmessage = UploadUpdateHero($file_name, $file_size, $file_tmp, $file_type);
        }
    }
    if(isset($_FILES['bannerImageMoblie'])){
        $image = $_FILES['BannerImageMobile'];
        $file_name = $_FILES['BannerImageMobile']['name'];
        $file_size =$_FILES['BannerImageMobile']['size'];
        $file_tmp =$_FILES['BannerImageMobile']['tmp_name'];
        $file_type=$_FILES['BannerImageMobile']['type'];
        

        if(empty($image)){
            $bmobilemessage = 'Please fill all fields';
        }else{
            $bmobilemessage = UploadUpdateHeroMobile($file_name, $file_size, $file_tmp, $file_type);
        }
    }
    if(isset($_FILES['aboutBack'])){
        $image = $_FILES['aboutBack'];
        $file_name = $_FILES['aboutBack']['name'];
        $file_size =$_FILES['aboutBack']['size'];
        $file_tmp =$_FILES['aboutBack']['tmp_name'];
        $file_type=$_FILES['aboutBack']['type'];
        

        if(empty($image)){
            $abackmessage = 'Please fill all fields';
        }else{
            $abackmessage = UploadUpdateAboutBack($file_name, $file_size, $file_tmp, $file_type);
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
    <link rel="stylesheet" type="text/css" href="styling/css/cms.css">
    <title>Site Editing Page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
    <main>
        <div class="cms-section">
            <div class="cms-inner">
                <div class="header">
                    <div class="logo">
                        <h2>Logo</h2>
                        <form action="edit_site.php" method="post" enctype="multipart/form-data">
                            <p><?php echo !empty($logomessage)? $logomessage:'';?></p>
                            <input type="file" name="logoimage">
                            <input type="submit" name="logo" value="save">
                        </form>
                    </div>
                </div>
                <div class="hero">
                    <div class="banner">
                        <h2>Banner-Text</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($btextmessage)? $btextmessage:'';?></p>
                            <input type="text" name="banner_title">
                            <input type="submit" name="banner-text" value="save">
                        </form>
                    </div>
                    <div class="banner">
                        <h2>Banner-Web</h2>
                        <form action="edit_site.php" method="post" enctype="multipart/form-data">
                            <p><?php echo !empty($bwebmessage)? $bwebmessage:'';?></p>
                            <input type="file" name="bannerImage">
                            <input type="submit" name="banner-web" value="save">
                        </form>
                    </div>
                    <div class="banner">
                        <h2>Banner-Mobile</h2>
                        <form action="edit_site.php" method="post" enctype="multipart/form-data">
                            <p><?php echo !empty($bmobilemessage)? $bmobilemessage:'';?></p>
                            <input type="file" name="BannerImageMobile">
                            <input type="submit" name="banner-mobile" value="save">
                        </form>
                    </div>
                </div>
                <div class="about-us">
                    <div class="about">
                        <h2>About-Title</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($atitlemessage)? $atitlemessage:'';?></p>
                            <input type="text" name="aboutTitle">
                            <input type="submit" name="about-title" value="save">
                        </form>
                    </div>
                    <div class="about">
                        <h2>About-Text</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($atextmessage)? $atextmessage:'';?></p>
                            <input type="text" name="aboutText">
                            <input type="submit" name="about-text" value="save">
                        </form>
                    </div>
                    <div class="about">
                        <h2>About-Video</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($avideomessage)? $avideomessage:'';?></p>
                            <input type="file" name="aboutVid">
                            <input type="submit" name="about-video" value="save">
                        </form>
                    </div>
                    <div class="about">
                        <h2>About-Background</h2>
                        <form action="edit_site.php" method="post"enctype="multipart/form-data">
                            <p><?php echo !empty($abackmessage)? $abackmessage:'';?></p>
                            <input type="file" name="aboutBack">
                            <input type="submit" name="about-background" value="save">
                        </form>
                    </div>
                </div>
                <div class="events">
                    <div class="event">
                        <h2>Add-Event</h2>
                        <form action="edit_site.php" method="post" >
                            <p><?php echo !empty($eventaddmessage)? $eventaddmessage:'';?></p>
                            <span>
                                <label for="month">Month:</label>
                                <select name="month">
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select> 
                                <label for="day">Day:</label>
                                <select name="day">
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </span>

                            <span>
                                <span class="time">
                                    <label for="start-time">Start Time:</label>
                                    <input type="time" name="start-time" required>
                                </span>

                                <span class="time">
                                    <label for="end-time">End Time:</label>
                                    <input type="time" name="end-time" required>
                                </span>
                            </span>

                            

                            <label for="location">Location Name:</label>
                            <input type="text" name="location">

                            <label for="location">Location Address:</label>
                            <input type="text" name="location">

                            <input type="submit" name="event-add" value="save">
                        </form>
                    </div>
                    <div class="event">
                        <h2>Remove-Event</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($eventremovemessage)? $eventremovemessage:'';?></p>
                            <span>
                                <label for="month">Month:</label>
                                <select name="month">
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select> 
                                <label for="day">Day:</label>
                                <select name="day">
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </span>
                            
                            <input type="submit" name="event-add" value="delete">
                        </form>
                    </div> 
                    <div class="event">
                        <h2>Event-Background</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($eventbackmessage)? $eventbackmessage:'';?></p>
                            <input type="file">
                            <input type="submit" name="event-background" value="save">
                        </form>
                    </div>             
                </div>  
                <div class="why">
                    <div class="whys">
                        <h2>Why Title</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($whytitlemessage)? $whytitlemessage:'';?></p>
                            <input type="text" name="whyTitle">

                            <input type="submit" name="why-title" value="save">
                        </form>
                    </div>
                    <div class="whys">
                        <h2>Why 'is' title</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($istitlemessage)? $istitlemessage:'';?></p>
                            <input type="text" name="whyIsTitle">

                            <input type="submit" name="is-title" value="save">
                        </form>
                    </div>
                    <div class="whys">
                        <h2>'Is' Facts</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($iffactmessage)? $isfactmessage:'';?></p>
                            <label for="fact-box">Which-Box:</label>
                            <select name="fact-box">
                                <option value="1" id="1">1</option>
                                <option value="2" id="2">2</option>
                                <option value="3" id="3">3</option>
                                <option value="4" id="4">4</option>
                            </select>
                            <label for="title">Title:</label>
                            <input name="title" type="text">
                            <label for="icon">Icon:</label>
                            <input type="file" name="icon">

                            <input type="submit" name="is-title" value="save">
                        </form>
                    </div>
                    <div class="whys">
                        <h2>Why 'is-not' title</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($nottitlemessage)? $nottitlemessage:'';?></p>
                            <input type="text" name="whyNotTitle">

                            <input type="submit" name="not-title" value="save">
                        </form>
                    </div>
                    <div class="whys">
                        <h2>'Is-Not' Facts</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($notfactmessage)? $notfactmessage:'';?></p>
                            <label for="fact-box">Which-Box:</label>
                            <select name="fact-box">
                                <option value="5" id="1">1</option>
                                <option value="6" id="2">2</option>
                                <option value="7" id="3">3</option>
                                <option value="8" id="4">4</option>
                            </select>
                            <label for="title">Title:</label>
                            <input name="title" type="text">
                            <label for="icon">Icon:</label>
                            <input type="file" name="icon">

                            <input type="submit" name="not-title" value="save">
                        </form>
                    </div>
                </div> 
                <div class="how">
                    <div class="box 1">
                        <h2>Fist-Box</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($firstmessage)? $firstmessage:'';?></p>
                            <label for="title">Header</label>
                            <input type="text"name="title">
                            <label for="text">Text</label>
                            <input type="text"name="text">
                            
                            <input type="submit" name="box-1" value="save">
                        </form>
                    </div>
                    <div class="box 2">
                        <h2>Second-Box</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($secondmessage)? $secondmessage:'';?></p>
                            <label for="title">Header</label>
                            <input type="text"name="title">
                            <label for="text">Text</label>
                            <input type="text"name="text">
                            
                            <input type="submit" name="box-2" value="save">
                        </form>
                    </div>
                </div>
                <div class="map">
                    <div class="maps">
                        <h2>Add Region Location</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($regionmessage)? $regionmessage:'';?></p>
                            <label for="map-box">Which-Region:</label>
                            <select name="map-box">
                                <option value="1" id="1">Whitehills</option>
                                <option value="2" id="2">Masonville</option>
                                <option value="3" id="3">North London</option>
                                <option value="4" id="4">Northeast London</option>
                                <option value="5" id="5">East London</option>
                                <option value="6" id="6">Near West</option>
                                <option value="7" id="7">Old Town</option>
                                <option value="8" id="8">West London</option>
                                <option value="9" id="9">Near South</option>
                                <option value="10" id="10">Downtown</option>
                                <option value="11" id="11">Old South</option>
                                <option value="12" id="12">SouthWest London</option>
                                <option value="13" id="13">SouthEast London</option>
                            </select>
                            <label for="title">location name:</label>
                            <input name="title" type="text">
                            <label for="title">location info:</label>
                            <input name="title" type="text">

                            <input type="submit" name="map-info" value="save">
                        </form>
                    </div>
                </div>
                <div class="join-us">
                    <div class="join">
                        <h2>Join Us</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($joinmessage)? $joinmessage:'';?></p>
                            <label for="title">Title</label>
                            <input type="text" name="title">
                            <label for="text">Text</label>
                            <input type="text" name="text">

                            <input type="submit" name="join-us" value="save">
                        </form>
                    </div>
                </div>
                <div class="footer">
                    <div class="newsletter">
                        <h2>Newsletter Section</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($newsmessage)? $newsmessage:'';?></p>
                            <label for="title">Header</label>
                            <input type="text" name="title">
                            <label for="text">Text</label>
                            <input type="text" name="text">

                            <input type="submit" name="newsletter" value="save">
                        </form>
                    </div>
                    <div class="foot">
                        <h2>Footer Section</h2>
                        <form action="edit_site.php" method="post">
                            <p><?php echo !empty($footmessage)? $footmessage:'';?></p>
                            <label for="disclaimer">Disclaimer</label>
                            <input type="text" name="disclaimer">
                            <label for="copy">Copyright</label>
                            <input type="text" name="copy">

                            <input type="submit" name="footer" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-preview">
            
            <?php if($header):?>
                <?php $header_info = $header->fetch(PDO::FETCH_ASSOC);?>
            <header>
                <img src="../images/<?php echo $header_info['logo'];?>" alt="logo">
                <nav>
                    <ul>
                        <li><?php echo $header_info['link1'];?></li>
                        <li><?php echo $header_info['link2'];?></li>
                        <li><?php echo $header_info['link3'];?></li>
                        <li><?php echo $header_info['link4'];?></li>
                        <li><?php echo $header_info['link5'];?></li>
                        <li><?php echo $header_info['link6'];?></li>
                    </ul>
                </nav>
            </header>
            <?php endif;?>

            <?php if($hero):?>
                <?php $hero_info = $hero->fetch(PDO::FETCH_ASSOC);?>
            <div class="hero-section">
                <img class="hero-mobile" src="../images/<?php echo $hero_info['mobile-image'];?>" alt="banner-small">
                <img src="../images/<?php echo $hero_info['image'];?>" alt="banner">
                <h1><?php echo $hero_info['text'];?></h1>
            </div>
            <?php endif;?>

            <?php if($about):?>
                <?php $about_info = $about->fetch(PDO::FETCH_ASSOC);?>
            <div class="about-section">
                <img src="../images/<?php echo $about_info['background'];?>" alt="dark grey metal background">
                <div class="about-inner">
                    <div class="about-text">
                        <h2><?php echo $about_info['title'];?></h2>
                        <p><?php echo $about_info['text'];?></p>
                    </div>
                    <div class="about-video">
                            <video src="<?php echo $about_info['video'];?>"></video>
                    </div>
                </div>
            </div>
            <?php endif;?>

            <?php if($workshop):?>
                <?php $work_info = $workshop->fetch(PDO::FETCH_ASSOC);?>
            <div class="workshop-section">
                <img src="../images/<?php echo $work_info['background'];?>" alt="">
                <div class="workshop-inner">
                    <div class="single-workshop">
                        <div class="workshop-container">
                            <div class="text-container">
                                <h2>join our workshop</h2>
                                <p><b>10</b>june</p>
                                <p>Thames Valley District School Board</p>
                                <p>11am - 1pm</p>
                                <a href="#">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="workshop-list">

                        <div class="row">
                            <div class="date">
                                <p><b>10</b> </p>
                                <p>june</p>
                            </div>
                            <div class="workshop-info">
                                <p>
                                    London District Catholic</br>
                                    School Board</br>
                                    11am - 1pm
                                </p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="date">
                                <p><b>10</b></p>
                                <p>june</p>
                            </div>
                            <div class="workshop-info">
                                <p>
                                    London District Catholic</br>
                                    School Board</br>
                                    11am - 1pm
                                </p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="date">
                                <p><b>10</b></p>
                                <p>june</p>
                            </div>
                            <div class="workshop-info">
                                <p>
                                    London District Catholic</br>
                                    School Board</br>
                                    11am - 1pm
                                </p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="date">
                                <p><b>10</b></p>
                                <p>june</p>
                            </div>
                            <div class="workshop-info">
                                <p>
                                    London District Catholic</br>
                                    School Board</br>
                                    11am - 1pm
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php endif;?>

            <?php if($why):?>
                <?php $why_info = $why->fetch(PDO::FETCH_ASSOC);?>
            <div class="why-section">
                <h1><?php echo $why_info['title'];?></h1>
                <img src="../images/why_background.jpg" alt="old metal background">
                <div class="inner-container">
                    <div class="is">
                        <h2><?php echo $why_info['istitle'];?></h2>
                        <?php if($trueFacts):?>
                            <div class="inner">

                            <?php while($trueFacts_info = $trueFacts->fetch(PDO::FETCH_ASSOC)):?>
                                <div class="fact-container">
                                    <img src="<?php echo $trueFacts_info['icon'];?>" alt="">
                                    <p><?php echo $trueFacts_info['title'];?></p>
                                </div>
                            <?php endwhile;?>

                            </div>
                       <?php endif;?>
                    </div>
                    <div class="not">
                        <h2><?php echo $why_info['isnottitle'];?></h2>

                        <?php if($trueNotFacts):?>
                        <div class="inner">

                            <?php while($trueNotFacts_info = $trueNotFacts->fetch(PDO::FETCH_ASSOC)):?>
                                <div class="fact-container">
                                    <img src="<?php echo $trueNotFacts_info['icon'];?>" alt="">
                                    <p><?php echo $trueNotFacts_info['title'];?></p>
                                </div>
                            <?php endwhile;?>

                        </div>
                            <?php endif;?>
                    </div>
                    <a href="#">Find out more</a>
                </div>      
            </div>
            <?php endif;?>

            <?php if($test):?>
                
            <div class="how-section">
                <div class="how-container">
                <?php while($test_info = $test->fetch(PDO::FETCH_ASSOC)):?>
                    <div class="inner-container">
                        <h2><?php echo $test_info['title'];?></h2>
                        <p><?php echo $test_info['text'];?></p>
                        <a href="#">See more</a>
                    </div>
                <?php endwhile;?>
                </div>
            </div>
            <?php endif;?>

            <div class="where-section">
                <div class="map">
                    <!-- <img class="back" src="../images/map_background.jpg" alt="grey background"> -->
                    <img class="map-svg" src="../images/london_map.svg" alt="map of london">
                </div>
                <div class="map-info">
                    <!-- <img src="../images/where_background.jpg" alt="rry background"> -->
                    <div class="info-container">
                        <div class="text-container">
                            <h2>Where to get tested</h2>
                            <p>Pick your region to see nearby<br>testing center.</p>
                            <ul>
                                <li>Options clinique - London intercommunity health centre</li>
                                <li>Regional HIV/AIDS Connection</li>
                                <li>Anova</li>
                                <li>Central Spa Bathhouse</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($join):?>
                <?php $join_info = $join->fetch(PDO::FETCH_ASSOC);?>
            <div class="join-section">
                <div class="join-container">
                    <h1><?php echo $join_info['title'];?></h1>
                    <p><?php echo $join_info['text'];?></p>
                </div>
            </div>
            <?php endif;?>

            <div class="insta-section">
                <div class="insta-block"></div>
                <div class="insta-block"></div>
                <div class="insta-block"></div>
                <div class="insta-block"></div>
                <div class="insta-block"></div>
                <div class="insta-block"></div>
                <div class="insta-block"></div>
                <div class="insta-block"></div>
                <div class="insta-block"></div>
                <div class="insta-block"></div>
            </div>

            <footer>
                <?php if($news):?>
                <?php $news_info = $news->fetch(PDO::FETCH_ASSOC);?>
                <div class="newsletter">
                    <h3><?php echo $news_info['title'];?></h3>
                    <p><?php echo $news_info['text'];?></p>
                    <label for="email">*Email</label>
                    <input type="text">
                    <a href="#">Sign up</a>
                </div>
                <?php endif;?>
                <div class="footer-text">
                    <div class="social">
                        <img class="social-icon" src="#" alt="">
                        <img class="social-icon" src="#" alt="">
                        <img class="social-icon" src="#" alt="">
                        <img class="social-icon" src="#" alt="">
                    </div>
                    <?php if($footer):?>
                        <?php $foot_info = $footer->fetch(PDO::FETCH_ASSOC);?>
                    <p><?php echo $foot_info['disclaimer'];?></p>
                    <p>© <?php echo $foot_info['copy'];?></p>
                    <?php endif;?>
                    
                </div>
            </footer>

        </div>
    </main>
</body>
</html>