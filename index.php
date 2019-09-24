<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Eldur Heron Farm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut_icon" href="/graphix/great-blue-heron-silhouette.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .affix {
    top: 20px;
    z-index: 9999 !important;
    text-align: center;
  }
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h3 {
    font-size: 21px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 18px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #990000;
    color: #fff;
    padding: 100px 25px;
    font-family: Pacifico, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #990000;
    font-size: 50px;
  }
  .logo {
    color: #990000;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #990000;
  }
  .carousel-indicators li {
    border-color: #990000;
  }
  .carousel-indicators li.active {
    background-color: #990000;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #990000; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #990000;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #990000 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #990000;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #990000;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-brand {
      font-family: Pacifico, sans-serif;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #990000 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #990000;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#home">Eldur Heron Farm</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#archives">ARCHIVES</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#support">SUPPORT</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
    
  <div id="imgCarousel" class="carousel slide text-center" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#imgCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#imgCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <img class="img-responsive" src="/images/IMG_1835.jpg" />
              </div>
              <div class="col-lg-2"></div>
          </div>
      </div>
      <div class="item">
          <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <img class="img-responsive" src="/images/IMG_1836.jpg" />
              </div>
              <div class="col-lg-2"></div>
          </div>
      </div>
    </div>
    <a class="left carousel-control" href="#imgCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href="#imgCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h4><strong>MISSION:</strong> Sustainably grow organic food for family, friends, and the local community while balancing the preservation of Skagit Valley farmland with the advancement of agricultural research and technology.</h4><br>
      <p><strong>VISION:</strong> Holistic, homestead-style stewardship of 20-40 acres in Skagit, Island, or Whatcom county, using the most sustainable practices and inputs possible. Besides the whole myriad of veggies we already grow, <em>Eldur Heron Farm</em> is looking to add flowers, herbs, chickens, ducks, sheep, bees, berries, fruit, nuts, and more to our offerings as the farm grows.</p>
    </div>
  </div>
    
  <div class="row">
    <div class="col-sm-8">
      <h2>About the Farm</h2><br>
      
      <h4>who</h4>
      <p>My name is Nathan Minor and I started <em>Eldur Heron Farm</em> in 2016 as <em>Turnip the Beet Farm</em> out of my great uncle's home garden. Now I am currently cultivating mixed vegetables on half an acre at <a href="https://vivafarms.org/" target="_blank"><em>Viva Farms</em></a>. With the gracious support of my family, friends, and <em>Viva Farms</em> I have been able to start this journey to become a farmer. Below is an incomplete list of those who have played a pivotal role in supporting the growth of this farm and my dreams.</p>
      <br>
      <ul>
          <li><strong>Joel Ward</strong> for lending an extra set of hands when I injured my right hand at the end of August 2019</li>
          <li><strong>Charles McNeil</strong> also for lending an extra set of hands when I injured my right hand at the end of August 2019, and for helping me continue to grow the farm</li>
        <li><strong>Amanda Stevens</strong> for the original farm name of <em>Turnip the Beet Farm</em></li>
        <li><strong>Heather Tiszai</strong> and <a href="https://whws.org" target="_blank"><em>WHWS</em></a> for your mentorship and support of my passion for growing veggies</li>
        <li><strong>Spencer Belsvik</strong> for your friendship and the sharing of many books and ideas</li>
        <li><strong>Rob Smith</strong>, with <em>Viva Farms</em> for graciously allowing me to jump into the first Viva Farms FIELD practicum course last minute, and for providing me with one the greatest learning experiences of my life thus far</li>
        <li><strong>Viva Farms</strong> for all the amazing support and allowing for me to farm with them each season, without <a href="https://vivafarms.org/" target="_blank"><em>Viva Farms</em></a> this whole endeavor would not be possible</li>
        <li><strong>Chris Hamer</strong>, with <a href="https://whenpigsflyorganics.com/" target="_blank"><em>When Pigs Fly Farm</em></a>, for all the support and encouragement as vendor-neighbors at the farmers markets during 2016</li>
        <li><strong>Shawna Mengle</strong> with the <a href="http://mountvernonfarmersmarket.org/" target="_blank"><abbr title="Mount Vernon Farmers Market">MVFM</abbr></a> and <strong>Patty Sweaney</strong> with the <a href="https://bowlittlemarket.com/" target="_blank"><abbr title="Bow Little Market">BLM</abbr></a> for helping <em>Turnip the Beet Farm</em> get started with farmers markets during my first season in 2016</li>
        <li><strong>Chris Johnson</strong>, my great uncle, for letting me borrow his home garden in Bay View to get things started during the summer of 2016, for teaching me how to drive a tractor, and how to mill lumber (<a href="http://www.bayviewboards.com/" target="_blank"><em>Bay View Boards</em></a>)</li>
        <li><strong>Sharon and Mike Minor</strong>, my grandparents, for supporting me and putting up with my dog Luke and me during the first two seasons at <em>Viva Farms</em></li>
        <li><strong>Kelli Walker</strong>, my aunt, for helping foster my passion for helping plants gorw, and for letting me sell some of her extra flowers in exchange for helping her keep up on the never ending battle with weeds (<a href="http://www.countrybouquetsfloral.com/" target="_blank"><em>Country Bouquets</em></a>)</li>
        <li><strong>Emily and James Stewart</strong>, my sister and brother <span class="text-muted">in-law</span>, for your boundless support and the beater Toyota pickup</li>
        <li><strong>Wesley Minor</strong>, my brother, for inspiring me to chase after my own dreams</li>
        <li><strong>Christine Haavisto Minor</strong>, my mom, for always supporting my dreams and passions, regardless of how far out they might seem, and for always giving me the space I needed to grow</li>
        <li><strong>Bryan Minor</strong>, my dad, for igniting my passion for helping plants grow, for teaching me how to think critically, and for showing me, through counterexample, how to be patient</li>
        <li><strong>Luke</strong> for being my best friend throughout the start of this amazing journey</li>
      </ul>
      <br>
      
      <h4>what</h4>
      <p>The plethora of vegetables grown at <em>Eldur Heron Farm</em> can be categorized by the following rotation:</p>
      <dl>
          <dt style="color: #bd1e24;">Cucurbits</dt>
          <dd>- Zucchini</dd>
          <dd>- Yellow Crookneck</dd>
          <dd>- Winter Squash (2020)</dd>
          <dt style="color: #e97600;">Solanaceae</dt>
          <dd>- Tomatoes*</dd>
          <dd>- Peppers (2020)</dd>
          <dt style="color: #e6bb00;">Zea Mays</dt>
          <dd>- Flour Corn (<a href="https://seedalliance.org/" target="_blank"><abbr title="Organic Seed Alliance">OSA</abbr></a> Seed Trial)</dd>
          <dd>- Sweet Corn</dd>
          <dt style="color: #007256;">Legumes</dt>
          <dd>- Dry Beans</dd>
          <dd>- Green Beans</dd>
          <dt style="color: #0067a7;">Roots and Greens</dt>
          <dd>- Kale</dd>
          <dd>- Chard</dd>
          <dd>- Yellow Beets (<a href="https://seedalliance.org/" target="_blank"><abbr title="Organic Seed Alliance">OSA</abbr></a> Seed Trial)</dd>
          <dd>- Black Radishes*</dd>
          <dt style="color: #964f8e;">Cover Crop</dt>
          <dd>- Buckwheat (summer; weed suppression, organic matter)</dd>
          <dd>- Rye/vetch mix (fall/winter; erosion control, orgnaic matter, soil building)</dd>
          <dd>- Oats/vetch mix (2020 summer; organic matter, soil building)</dd>
      </dl>
<!--      <p style="color: #bd1e24;"><strong><em>Cucurbits</em></strong> (squash, melons)</p>
      <p style="color: #e97600;"><strong><em>Solanaceae</em></strong> (tomatoes, peppers)</p>
      <p style="color: #e6bb00;"><strong><em>Zea Mays</em></strong> (corn)</p>
      <p style="color: #007256;"><strong><em>Legumes</em></strong> (beans)</p>
      <p style="color: #0067a7;"><strong><em>Roots and Greens</em></strong></p>
      <p style="color: #964f8e;"><strong><em>Cover Crop</em></strong></p>-->
      <br>
      
      <h4>when</h4>
      <p></p>
      <br>
      
      <h4>where</h4>
      <p></p>
      <br>
      
      <h4>how</h4>
      <p></p>
      <br>
      
      <h4>why</h4>
      <p></p>
      <br>
    </div>
    <div class="col-sm-4">
        <div style='text-align: center;'>
            
            <img class="img-responsive" alt="Eldur Heron" src="/graphix/great-blue-heron-silhouette-000000-sm.png" /><br>

          <a href="#contact" title="Contact Us">      
          <button class="btn btn-default btn-lg">Get in Touch</button>
          </a>
        </div>
    </div>
  </div>
</div>

<!-- Container (Support Section) -->
<div id="support" class="container-fluid text-center">
  <h2>SUPPORT</h2>
  
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-shopping-cart logo-small"></span>
      <h4>Local Stores</h4>
      <p>Wholefoods</p>
      <p>Mount Vernon Food Co-Op</p>
      <p>Bellingham Food Co-Op</p>
      <p>Mount Vernon Food Co-Op</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Viva CSA</h4>
      <p>Summer</p>
      <p>and</p>
      <p>Fall/Winter</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-grain logo-small"></span>
      <h4>Farmers Markets</h4>
      <p>Back in 2016 <em>Eldur Heron Farm</em> was known as <em>Turnip the Beet Farm</em> and sold produce from a large home garden through booths at the <a href="http://mountvernonfarmersmarket.org/" target="_blank"><em>Mount Vernon Farmers Market</em></a> and the <a href="https://bowlittlemarket.com/" target="_blank"><em>Bow Little Market</em></a>. After taking a break from these markets to improve both the quality and quantity of produce, <em>Eldur Heron Farm</em> is looking to return to both these markets in 2020. Stay tuned for more info.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-gift logo-small"></span>
      <h4>DONATE</h4>
      <p>Stay tuned for details about how to make a contribution to the growth of <em>Eldur Heron Farm</em>.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>VOLUNTEER</h4>
      <p>Interested in lending a hand? Want to learn more about where your food comes from? Curious about agriculture? <a href="#contact">Contact us</a> to get a conversation started about how you can volunteer at <em>Eldur Heron Farm</em>.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-send logo-small"></span>
      <h4>CONTACT</h4>
      <p>Questions? Comments? Concerns? Or just want to get in touch and share stories and knowledge? <a href="#contact">Contact us</a>.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<!--<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  
-->  

<!--

 Container (Pricing Section) 
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>-->

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 3-5 business days.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mount Vernon, WA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +1 (360) 202 9484</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@eldur-heron-farm.com</p>
    </div>
<!--    <div class="col-sm-7">
<?php
        $sent = FALSE;
        $to = "info@eldur-heron-farm.com";
        $subject = "MSG: Web Contact";
        $headers = "";
        
        $sentMsg = $nameErr = $emailErr = "";
        $name = $email = $message = "";

        if (filter_input(INPUT_SERVER, "REQUEST_METHOD") == "POST") {
            if (empty(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING))) {
                $nameErr = "Name is required";
                $name = "";
            } else {
                $nameErr = "";
                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
            }
            
            if (empty(filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING))) {
                $emailErr = "Email is required";
                $email = "";
            } else {
                $emailErr = "";
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
                
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                
                if (!$email) {
                    $emailErr = "Invalid email";
                }  else {
                    $headers = "From: " . $email . "\r\n" . 
                            "Reply-To: " . $email . "\r\n" .
                            "X-Mailer: " . "PHP/" . phpversion();
                }
            }
            
            if (empty(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING))) {
                $message = "";
            } else {
                $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);
            }
            
            if (!empty($headers)){
                $sent = mail($to, $subject, $message, $headers);

                if ($sent) {
                    $sentMsg = "Successfully sent message";
                } else {
                    $sentMsg = "Failed to send message"
                            . "\r\n". $to
                            . "\r\n". $subject
                            . "\r\n". $message
                            . "\r\n". $headers;
                }
            }
        }

        function process_input($data) {
            
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
        
        ?>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>/#contact">
            <div class="row">
                <div class="col-sm-12">
                    <p class="<?php if ($sent) { echo "text-success"; } else { echo "text-danger"; }?>"><?php echo $sentMsg?></p>
                    <p class="text-danger"><?php echo $nameErr?></p>
                    <p class="text-danger"><?php echo $emailErr?></p>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-right" type="submit">Send</button>
              </div>
            </div>
        </form>        

                               
            
        
    </div>-->
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    
  <p>Bootstrap Theme Originally Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
  <p><span class="glyphicon glyphicon-copyright-mark"></span> &nbsp; <?php if (date("Y")=="2019") { echo " "+date("Y"); } else { echo " 2019-"+date("Y"); }?> ELDUR HERON FARM</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home'], a[href='#contact']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
});
</script>

</body>
</html>