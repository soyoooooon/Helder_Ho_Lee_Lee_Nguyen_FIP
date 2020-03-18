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
    <link rel="stylesheet" type="text/css" href="styling/css/reset.css">
    <link rel="stylesheet" type="text/css" href="styling/css/cms.css">
    <title>Site Editing Page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
    <main>
        <div class="cms-section">
            <div class="header">
                <h2>Logo</h2>
                <form action="edit_site.php" method="post">
                    <?php echo !empty($message)? $message:'';?>
                    <input type="file">
                    <button type="submit" name="logo">Save</button>
                </form>
            </div>
            <div class="hero">
                <div class="banner">
                    <h2>Banner-Text</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
                        <input type="text">
                        <button type="submit" name="banner-text">Save</button>
                    </form>
                </div>
                <div class="banner">
                    <h2>Banner-Web</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
                        <input type="file">
                        <button type="submit" name="banner-web">Save</button>
                    </form>
                </div>
                <div class="banner">
                    <h2>Banner-Mobile</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
                        <input type="file">
                        <button type="submit" name="banner-mobile">Save</button>
                    </form>
                </div>
            </div>
            <div class="about-us">
                <div class="about">
                    <h2>About-Title</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
                        <input type="text">
                        <button type="submit" name="about-title">Save</button>
                    </form>
                </div>
                <div class="about">
                    <h2>About-Text</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
                        <input type="text">
                        <button type="submit" name="about-text">Save</button>
                    </form>
                </div>
                <div class="about">
                    <h2>About-Video</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
                        <input type="file">
                        <button type="submit" name="about-video">Save</button>
                    </form>
                </div>
                <div class="about">
                    <h2>About-Background</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
                        <input type="file">
                        <button type="submit" name="about-background">Save</button>
                    </form>
                </div>
            </div>
            <div class="events">
                <div class="event">
                    <h2>Add-Event</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
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
                        </span>
                        <span>
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
                        <label for="start-time">Start Time:</label>
                        <input type="time" name="start-time" required>

                        <label for="end-time">End Time:</label>
                        <input type="time" name="end-time" required>

                        <label for="location">Location Name:</label>
                        <input type="text" name="location">

                        <label for="location">Location Address:</label>
                        <input type="text" name="location">

                        <button type="submit" name="event-add">Save</button>
                    </form>
                </div>
                <div class="event">
                    <h2>Remove-Event</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
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
                        </span>
                        <span>
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
                        
                        <button type="submit" name="event-add">Save</button>
                    </form>
                </div> 
                <div class="event">
                    <h2>Event-Background</h2>
                    <form action="edit_site.php" method="post">
                        <?php echo !empty($message)? $message:'';?>
                        <input type="file">
                        <button type="submit" name="event-background">Save</button>
                    </form>
                </div>             
            </div>
            

        </div>
        <div class="site-preview">
            <header>
                <img src="../images/LOGO.svg" alt="logo">
                <nav>
                    <ul>
                        <li>About</li>
                        <li>Workshop</li>
                        <li>Why</li>
                        <li>How</li>
                        <li>Where</li>
                        <li>Get Involved</li>
                    </ul>
                </nav>
            </header>

            <div class="hero-section">
                <img src="../images/Banner.jpg" alt="">
                <h1>courage makes changes</h1>
            </div>

            <div class="about-section">
                <img src="../images/about_background.jpg" alt="dark grey metal background">
                <div class="about-inner">
                    <div class="about-text">
                        <h2>About Us</h2>
                        <p>
                            The stigma is a result of misconceptions and 
                            it needs to end. Red Ribbon Youth is dedicated 
                            to combat the HIV discrimination through raising 
                            awareness and understanding among teenagers.
                        </p>
                    </div>
                    <div class="about-video">
                            <video src="#"></video>
                    </div>
                </div>
            </div>

            <div class="workshop-section">
                <img src="../images/workshop_background.jpg" alt="">
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

            <div class="why-section">
                <h1>why</h1>
                <img src="../images/why_background.jpg" alt="old metal background">
                <div class="inner-container">
                    <div class="is">
                        <h2>hiv/aids is transmitted</h2>
                        <div class="inner">
                            <div class="fact-container">
                                <img src="#" alt="">
                                <p>Unprotected sex</p>
                            </div>
                            <div class="fact-container">
                                <img src="#" alt="">
                                <p>Sharing needles</p>
                            </div>
                            <div class="fact-container">
                                <img src="#" alt="">
                                <p>Non-sterile</br>instruments</p>
                            </div>
                            <div class="fact-container">
                                <img src="#" alt="">
                                <p>Pregnancy</p>
                            </div>
                        </div>
                    </div>
                    <div class="not">
                        <h2>hiv/aids is <i>not</i> transmitted</h2>
                        <div class="inner">
                            <div class="fact-container">
                                <img src="#" alt="">
                                <p>Through food</p>
                            </div>
                            <div class="fact-container">
                                <img src="#" alt="">
                                <p>With a kiss</p>
                            </div>
                            <div class="fact-container">
                                <img src="#" alt="">
                                <p>Touching</p>
                            </div>
                            <div class="fact-container">
                                <img src="#" alt="">
                                <p>In the pool</p>
                            </div>
                        </div>
                    </div>
                    <a href="#">Find out more</a>
                </div>      
            </div>

            <div class="how-section">
                <div class="how-container">
                    <div class="inner-container">
                        <h2>Anonymous</br>Testing</h2>
                        <p>
                            An anonymous test doesn't require your name or health 
                            card. The test is ordered using a six digit code instead 
                            of your name. Typically, anonymous tests are also rapid tests, 
                            which are done on-site by sampling blood from a quick finger 
                            prick. You receive the results in about 20 minutes.
                        </p>
                        <a href="#">See more</a>
                    </div>
                    <div class="inner-container">
                        <h2>Confidential</br>Testing</h2>
                        <p>
                            A confidential test, like the one you would get at a heath 
                            unit or doctor's office, uses your name and usually involves 
                            a standard blood draw. The results take longer to come back 
                            than rapid test results because they are sent to a lab.
                        </p>
                        <a href="#">See more</a>
                    </div>
                </div>
            </div>

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

            <div class="join-section">
                <div class="join-container">
                    <h1>join us</br>on instagram</h1>
                    <p>
                        Pass along your courage with #redribbonyouth.</br>
                        Be brave enough to say no to unprotected sex, to say yes to get tested.</br>
                        And inspired others with your story.
                    </p>
                </div>
            </div>

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
                <div class="newsletter">
                    <h3>sign up for our newsletter</h3>
                    <p>We will keep you posted with our latest workshop schedule and testing information.</p>
                    <label for="email">*Email</label>
                    <input type="text">
                    <a href="#">Sign up</a>
                </div>
                <div class="footer-text">
                    <div class="social">
                        <img class="social-icon" src="#" alt="">
                        <img class="social-icon" src="#" alt="">
                        <img class="social-icon" src="#" alt="">
                        <img class="social-icon" src="#" alt="">
                    </div>
                    <p>
                        Red Ribbon Youth is dedicated to combat the HIV discrimination 
                        through raising awareness and understanding among teenagers. 
                        Information on this site is not to be used for diagnosis, treatment 
                        or referral services. Individuals should contact their personal 
                        physician, and/or their local addiction or mental health agency for 
                        further information. If you are in crisis, please go to your local
                         hospital or call 911 immediately.
                    </p>
                    <P>© Red Ribbon Youth, 2020. All rights reserved.</P>
                </div>
            </footer>

        </div>
    </main>
</body>
</html>