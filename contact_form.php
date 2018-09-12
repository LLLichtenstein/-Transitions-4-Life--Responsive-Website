<!-- Check if the user has entered a value in Your Name field; if yes, set to entered name; if no, set to blank-->
    <?php 
        $old_your_name = isset($_POST['your_name']) ? $_POST['your_name'] : '';
        $old_email_address = isset($_POST['email_address']) ? $_POST['email_address'] : '';
        $old_subject = isset($_POST['subject']) ? $_POST['subject'] : '';
        $old_your_message = isset($_POST['your_message']) ? $_POST['your_message'] : '';
    ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Linda L. Lichtenstein Transitions 4 Life Self Advocacy Page</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="css/contact_styles.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
	</style>
</head>
<body>
	<div id="main">
  		<header id="banner">
        <div>
            <!-- place a DIV tag inside the <a> tag so that an entire area can be clicked, not just the text-->
            <span id="logo"><a id="link_color" href="index.html" accesskey="h"><div><span id="T">T</span>ransitions<span id="four">4</span><span id="life">Life</span> </div> </a></span>
        </div>
        <nav>
             
            <!-- DESKTOP AND TABLET MENU -->
            <!-- desktop - letter on same line. tablet - letter on next line -->
            <span class="nav_indent nav_letter_desktop"><a href="index.html" accesskey="h" title="link to Home page">Home (h)</a></span>
            <span class="nav_indent nav_letter_tablet"><a href="index.html" accesskey="h" title="link to Home page">Home</br>(h)</a></span>
                
            <span class="nav_letter_desktop"><a href="assistive_technology.html" accesskey="a" title="link to Technologies page">Technologies (a)</a></span>
            <span class="nav_letter_tablet"><a href="assistive_technology.html" accesskey="a" title="link to Technologies page">Technologies</br>(a)</a></span>
                
            <span class="nav_letter_desktop"><a href="self_advocacy.html" accesskey="s" title="link to Self-Advocacy page">Self-Advocacy (s)</a></span>
            <span class="nav_letter_tablet"><a href="self_advocacy.html" accesskey="s" title="link to Self-Advocacy page">Advocacy</br>(s)</a></span>
                
            <span class="nav_letter_desktop"><a href="at_transition_guide.pdf" accesskey="g" title="link to Transition Guide" target="_blank">Transition Guide (g)</a></span>
            <span class="nav_letter_tablet"><a href="at_transition_guide.pdf" accesskey="g" title="link to Transition Guide" target="_blank">Guide</br>(g)</a></span>
                
            <span class="nav_letter_desktop"><a href="about_us.html" accesskey="u" title="link to About Us page">About Us (u)</a></span>
            <span class="nav_letter_tablet"><a href="about_us.html" accesskey="u" title="link to About Us page">About Us</br>(u)</a></span>
            
            <span class="nav_letter_desktop"><a href="contact_us.html" accesskey="c" title="link to Contact Us page">Contact Us (c)</a></span>
            <span class="nav_letter_tablet"><a href="contact_us.html" accesskey="c" title="link to Contact Us page">Contact Us</br>(c)</a></span>
            <br><br>
            
            <!-- MOBILE MENU -->
            <ul>
              
                <li class="mobile_menu"><a href="index.html" accesskey="h" title="link to Home page">Home (h)</a></li>
                <hr>
                <li class="mobile_menu"><a href="assistive_technology.html" accesskey="a" title="link to Technologies page">Technologies (a)</a></li>
                <hr>
                <li class="mobile_menu"><a href="self_advocacy.html" accesskey="s" title="link to Self-Advocacy page">Self-Advocacy (s)</a></li>
                <hr>
                <li class="mobile_menu"><a href="at_transition_guide.pdf" accesskey="g" title="link to Transition Guide" target="_blank">Transition Guide (g)</a>
                <hr>
                <li class="mobile_menu"><a href="about_us.html" accesskey="u" title="link to About Us page">About Us (u)</a></li>
                <hr>
                <li class="mobile_menu"><a href="contact_us.html" accesskey="c" title="link to Contact Us page">Contact Us (c)</a></li>
             </ul>
        </nav>
    </header>
    <section>
        <div id="relative_box" class="row">
            <img id="sky_background" src="images/sky_large.jpg" alt="blue sky with clouds"/>
            <div class="definition_box"> 
                <h1 class="definition_word">CONTACT US</h1>
                <h2 class="definition_text">Have a question or something you want to share with us? <br>Use the form below to get in touch. We will do our best to get back to you within two business days.</h2>  
            </div>
        </div>
    	<br class="clearfloat">
	</section>
    <section class="subtitle_background">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="subtitle_text">CONTACT FORM</h1>
            </div>
        </div>
    </section>
  	<section class="form_red_background">
        <div class="row">
            <div class="col-lg-12">
                <div class="form_box">
                    <form method="POST" action="send_mail.php">
                        <div class="form_margin">
                        <ul class="form_text">
                        
                            <!-- name is the value that is sent to the server, id is for css -->
                            <!--<li><label for="name">Your Name (required)</label>
                                <input type="text" id="name" name="name" required autofocus="autofocus" value="<?= htmlentities($old_name)
                                ?>"/>
                            </li>-->
                             <li><label for="name">Your Name (required)</label>
                                <input type="text" id="name" name="name" required autofocus="autofocus"/>
                            </li>
                            
                            <!--<li><label for="email_address">Email Address (required)</label>
                                <input id="email_address" type="email" name="email_address" required value="<?= htmlentities($old_email_address) ?>"/>
                            </li>-->
                            <li><label for="email_address">Email Address (required)</label>
                                <input id="email_address" type="email" name="email_address" required/>
                            </li>
                            <!--<li><label for="subject">Subject</label>
                                <input type="text" id ="subject" name="subject" value="<?= htmlentities($old_subject) ?>"/>
                            </li>-->
                            <li><label for="subject">Subject</label>
                                <input type="text" id ="subject" name="subject"/>
                            </li>
                            <!--<li><label for="message">Your Message</label>
                                <textarea id="message" name="message" required data-minlength="2">value="<?= htmlentities($old_message) ?>"</textarea>
                            </li>-->
                            <li><label for="message">Your Message</label>
                                <textarea id="message" name="message" required data-minlength="2"></textarea>
                            </li>
                            <li><button>Send</button></li>
                        </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    	<br class="clearfloat">
	</section> 
    
    <section class="subtitle_background">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="subtitle_text">OUR AFFILIATIONS</h1>
            </div>
        </div>
    </section>
    
    <section class="affiliations_red_background">
        <div class="row">
            <div class="col-lg-4">
                <div class="boxes">
                    <h1 class="affiliations_subtitle">COMPANY 1</h1><br><br>
                    <span class="affiliations_person">Caroline Contact</span><br>
                    <span class="affiliations_data">ccontact@company1.com</span><br><br>
                    <span class="affiliations_data">www.company1.com</span><br><br>
                    <span class="affiliations_data">555-555-1111</span>   <br>
                    <span class="affiliations_data">555-556-2222</span><br><br>
                    <span class="affiliations_data">101 Company1 Way</span><br>
                    <span class="affiliations_data">Acity, FL, 00110</span>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="boxes">
                    <h1 class="affiliations_subtitle">COMPANY 2</h1><br><br>
                    <span class="affiliations_person">Matthew Company2</span><br>
                    <span class="affiliations_data">matthewc@company2.com</span><br><br>
                    <span class="affiliations_data">www.company2.com</span><br><br>
                    <span class="affiliations_data">555-333-1212</span>   <br>
                    <span class="affiliations_data">555-334-2323</span><br><br>
                    <span class="affiliations_data">500 Astreet Ave</span><br>
                    <span class="affiliations_data">Acity, FL, 00110</span>   
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="boxes">
                    <h1 class="affiliations_subtitle">EDUCATIONAL ORGANIZATION</h1><br><br>
                    <span class="affiliations_person">Eddie Org</span><br>
                    <span class="affiliations_data">eddie@educational.org</span><br><br>
                    <span class="affiliations_data">www.educational.org</span><br><br>
                    <span class="affiliations_data">555-333-5656</span>   <br>
                    <span class="affiliations_data">555-334-7878</span><br><br>
                    <span class="affiliations_data">200 Educational Street</span><br>
                    <span class="affiliations_data">Acity, FL, 00110</span> 
                </div>
            </div>
            
        </div>
    </section>

<footer class="footer_background">
	
  	<br class="clearfloat">
    <section>
  		<div>
  			<p class="credits_text">Website designed and developed by <a href="http://www.lllichtenstein.com" target="_blank">Linda L. Lichtenstein</a></p>  
            <br>                
            <p class="copyright_text">&copy; Copyright  2018</p>
        </div>
  </section>
</footer>
</div><!--main-->
</body>
</html>