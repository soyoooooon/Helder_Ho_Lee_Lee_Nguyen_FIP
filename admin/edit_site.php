<?php
    require_once 'scripts\load.php';
    
    confirm_logged_in();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styling/reset.css">
    <link rel="stylesheet" type="text/css" href="styling/main.css">
    <title>Site Editing Page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
    <main>
        <div class="title">
            <h1>Site Content Management</h1>
            <p><i>Please be aware of image size restrictions as well as <b>Web and Mobile</b> sizing.</i></p>
        </div>
        <div class="site-nav">
            <h2>Choose what section to edit or continue scrolling</h2>
            <ul class="sections">
                <li><a href="#hero">Hero-Banner</a></li>
                <li><a href="#about">About-Us</a></li>
                <li><a href="#workshop">Workshops</a></li>
                <li><a href="#why">Why</a></li>
                <li><a href="#how">How</a></li>
                <li><a href="#where">Where</a></li>
                <li><a href="#join">Join-Us</a></li>
                <li><a href="#footer">Footer</a></li>
            </ul>
        </div>
        <div id="hero">
            <h1>Hero Section</h1>
            <h2>Section Images</h2>
            <div class="images">
                <div class="image-container">
                    <div class="image">
                        <img class="hero-banner-web" src="../images/Banner.jpg" alt="hero banner web">
                    </div>
                    <h2>Banner-Web</h2>
                    <p><i><b>Maximum file size:</b> 1000kb</i></p>    
                    <p><i><b>Suggested dimensions:</b> 1400x866</i></p>
                    <form action="">
                        <input type="file">
                    </form>
                </div> 
                <div class="image-container">
                    <div class="image">
                        <img class="hero-banner-mobile" src="../images/Banner_mobile.jpg" alt="hero banner mobile">
                    </div>
                    <h2>Banner-Mobile</h2>
                    <p><i><b>Maximum file size:</b> 200kb</i></p>    
                    <p><i><b>Suggested dimensions:</b> 320x446</i></p>
                    <form action="">
                        <input type="file">
                    </form>
                </div>
            </div>
            <h2>Section Copy</h2>
            <div>
                <h3>Courage Makes Change</h3>
            </div>
        </div>
        <div id="about">
            <h1>About-Us Section</h1>
            <h2>Section Copy</h2>
            <div class="text">
                <h3>About Us</h3>
                <h4>
                    The stigma is a result of misconceptions and it needs to end. Red Ribbon Youth is 
                    dedicated to combat the HIV discrimination through raising awareness and understanding 
                    among teenagers.
                </h4>
            </div>
            <h2>Section Video</h2>
            <div class="video">
                <video src="../"></video>
            </div>
            <h2>Section Images</h2>
            <div class="images">
                <div class="image-container">
                    <div class="image">
                        <img class="about-back" src="../images/about_background.jpg" alt="about background">
                    </div>
                    <h2>About-Background</h2>
                    <p><i><b>Maximum file size:</b> 500kb</i></p>    
                    <p><i><b>Suggested dimensions:</b> 1437x724</i></p>
                    <form action="">
                        <input type="file">
                    </form>
                </div> 
            </div>
        </div>
        <div id="workshop">

        </div>
        <div id="why">

        </div>
        <div id="how">

        </div>
        <div id="where">

        </div>
        <div id="join">

        </div>
        <div id="footer">

        </div>
    </main>
</body>
</html>