<?php
    require_once 'scripts/load.php';
    
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
            <h1>RRY - Content Management System</h1>
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
            <h2>Hero-Section Image(s)</h2>
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
            <h2>Hero-Section Copy</h2>
            <div class="copy">
                <div class="copy-container">
                    <div class="text">
                        <p>" Courage Makes Change "</p>
                    </div>
                    <h2>Hero-Tag-Line</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
            </div>
        </div>
        <div id="about">
            <h1>About-Us Section</h1>
            <h2>About-Section Image(s)</h2>
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
            <h2>About-Section Video(s)</h2>
            <div class="video">
                <div class="video-container">
                    <div class="video">
                        <video src="../"></video>
                    </div>
                    <h2>About-Video</h2>
                    <form>
				        <input type="file">
			        </form>
                </div> 
            </div>
            <h2>About-Section Copy</h2>
            <div class="copy">
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            About Us 
                        "</p>
                    </div>
                    <h2>About-Title</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            The stigma is a result of misconceptions and it needs to end. Red Ribbon Youth is 
                            dedicated to combat the HIV discrimination through raising awareness and understanding 
                            among teenagers. 
                        "</p>
                    </div>
                    <h2>About-Description</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
            </div>
        </div>

        <div id="workshop">

        </div>

        <div id="why">
            <h1>Why Section</h1>
            <h2>Why Image(s)</h2>
            <div class="images">
                <div class="image-container">
                    <div class="image">
                        <img class="about-back" src="../images/why_background.jpg" alt="why background">
                    </div>
                    <h2>Why-Background</h2>
                    <p><i><b>Maximum file size:</b> 500kb</i></p>    
                    <p><i><b>Suggested dimensions:</b> 1437x724</i></p>
                    <form action="">
                        <input type="file">
                    </form>
                </div> 
            </div>
        </div>

        <div id="how">
            <h1>How Section</h1>
            <h2>How-Box-One</h2>
            <div class="copy">
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            Anonymous Testing 
                        "</p>
                    </div>
                    <h2>Box-Title</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            An anonymous test doesn't require your name or health card. 
                            The test is ordered using a six digit code instead of your name. 
                            Typically, anonymous tests are also rapid tests, which are done 
                            on-site by sampling blood from a quick finger prick. You receive 
                            the results in about 20 minutes.
                        "</p>
                    </div>
                    <h2>Box-Paragraph</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
            </div>
            <h2>How-Box-Two</h2>
            <div class="copy">
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            Confidential Testing 
                        "</p>
                    </div>
                    <h2>Box-Title</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            A confidential test, like the one you would get at a heath unit 
                            or doctor's office, uses your name and usually involves a 
                            standard blood draw. The results take longer to come back than 
                            rapid test results because they are sent to a lab.
                        "</p>
                    </div>
                    <h2>Box-Paragraph</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
            </div>
        </div>

        <div id="where">

        </div>
        <div id="join">
        <h1>Join-Us Section</h1>
        <h2>Join-Section Copy</h2>
            <div class="copy">
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            Join Us On Instagram
                        "</p>
                    </div>
                    <h2>Join-Title</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
                <div class="copy-container">
                    <div class="text">
                        <p>"
                        Pass along your courage with #redribbonyouth. Be brave enough to say 
                        no to unprotected sex, to say yes to get tested. And inspired others 
                        with your story.
                        "</p>
                    </div>
                    <h2>Join-Description</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
            </div>
        </div>
        <div id="footer">
            <h1>Footer Section</h1>
            <h2>Newsletter</h2>
            <div class="copy">
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            Sign Up For Our Newsletter 
                        "</p>
                    </div>
                    <h2>Title</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            We will keep you posted with our latest workshop and 
                            testing information
                        "</p>
                    </div>
                    <h2>Description</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
            </div>
            <h2>Footer-Copy</h2>
            <div class="copy">
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            Red Ribbon Youth is dedicated to combat the HIV discrimination 
                            through raising awareness and understanding among teenagers. 
                            Information on this site is not to be used for diagnosis, treatment 
                            or referral services. Individuals should contact their personal
                            physician, and/or their local addiction or mental health agency 
                            for further information. If you are in crisis, please go to your 
                            local hospital or call 911 immediately.
                        "</p>
                    </div>
                    <h2>Footer-Note</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div> 
                <div class="copy-container">
                    <div class="text">
                        <p>"
                            © Red Ribbon Youth, 2020. All rights reserved.
                        "</p>
                    </div>
                    <h2>Copywrite</h2>
                    <form>
				        <label for="message">New Content</label>
				        <textarea class="message" type="text" autocomplete="off" id="textarea"></textarea>
				        <input type="submit">
			        </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>