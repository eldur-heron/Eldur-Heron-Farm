<!DOCTYPE html>
<html lang="en">

<!--    email form script       -->
<?php 
////
//        $sent = FALSE;
//        $to = "info@eldur-heron-farm.com";
//        $subject = "[MSG: Web Contact]";
//        $headers = "";
//        
//        $sentMsg = $nameErr = $emailErr = "";
//        $name = $email = $message = "";
//
//        if (filter_input(INPUT_SERVER, "REQUEST_METHOD") == "POST") {
//            if (empty(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING))) {
//                $nameErr = "Name is required";
//                $name = "";
//            } else {
//                $nameErr = "";
//                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
//            }
//            
//            if (empty(filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING))) {
//                $emailErr = "Email is required";
//                $email = "";
//            } else {
//                $emailErr = "";
//                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
//                
//                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
//                
//                if (!$email) {
//                    $emailErr = "Invalid email";
//                }  else {
//                    $headers = "From: webmaster@eldur-heron-farm.com \r\n" . 
//                            "Reply-To: " . $email . " \r\n" .
//                            "X-Mailer: " . "PHP/" . phpversion();
//                }
//            }
//            
//            if (empty(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING))) {
//                $message = "";
//            } else {
//                $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);
//            }
//            
//            if (!empty($headers)){
//                $sent = mail($to, $subject, $message, $headers);
////                $sent = mail($to, $subject, $message);
////                $sent = imap_mail($to, $subject, $message, $headers);
////                $sent = imap_mail($to, $subject, $message);
//
//                if ($sent) {
//                    $sentMsg = "Successfully sent message";
//                } else {
//                    $sentMsg = "Failed to send message"
//                            . "\r\n". $to
//                            . "\r\n". $subject
//                            . "\r\n". $message
//                            . "\r\n". $headers;
//                }
//            }
//        }
//
//        function process_input($data) {
//            
//          $data = trim($data);
//          $data = stripslashes($data);
//          $data = htmlspecialchars($data);
//          return $data;
//        }
//        
//        
        ?>

<!--    HEAD      -->
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Eldur Heron Farm</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     
<!--  external CSS stylesheets-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

  
<!--  external JavaScript scripts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
<!--  local style adjustments   -->
  <style>  
    .img-responsive{
        width: auto;
        max-height: 420px;
        min-height: 210px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
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
    /*color: #990000;*/
    color: #fff;
  }
  .carousel-indicators li {
    /*border-color: #990000;*/
    border-color: #fff;
  }
  .carousel-indicators li.active {
    /*background-color: #990000;*/
    background-color: #fff;
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
    border-radius: 1 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #990000;
    background-color: #fff;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #990000;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 1px;
    border-top-right-radius: 1px;
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
  }
  .panel-footer {
    background-color: white;
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
    border-radius: 1;
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

<!--    nav bar     -->
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

<!-- Container (Terms and Policies Section) -->
<div id="about" class="container-fluid">
    
  <div class="row">
    <div class="col-sm-8">
      <h4><strong>MISSION:</strong> Sustainably grow organic food for family, friends, and the local community while balancing the preservation of Skagit Valley farmland with the advancement of agricultural research and technology.</h4><br>
      <p><strong>VISION:</strong> Holistic, homestead-style stewardship of 20-40 acres in Skagit, Island, or Whatcom county, using the most sustainable practices and inputs possible. Besides the whole myriad of veggies we already grow, <em>Eldur Heron Farm</em> is looking to add flowers, herbs, chickens, ducks, sheep, bees, berries, fruit, nuts, and more to our offerings as the farm grows.</p>
    </div>
    <div class="col-sm-4" style="margin-left: auto; margin-right: auto;">
        <span class="glyphicon glyphicon-globe logo"></span>
    </div>
  </div>
    
  <div class="row">
    <div class="col-sm-8">
      <h2>Terms and Policies</h2><br>  
      
<div class="panel-group" id="accordion">
    <div class="panel panel-default" style="border-color: #bd1e24;">
      <div style="background-color: #bd1e24;" class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#privacy">Privacy Policy</a>
        </h4>
      </div>
      <div id="privacy" class="panel-collapse collapse">
        <div class="panel-body">
<!--            We care about your privacy and are invested in keeping it private. Your personal information is used solely by Uprising Seeds and is used only to process your order.  We will never share, rent, or sell any of your information for any reason. By creating a customer account or placing an order with us, you we will put you on our mailing list for next year’s catalogue. We hate junk mail, but for some reason there is something magical about sitting down in a cozy chair in the winter, flipping through the pages of a  paper seed catalog, and dreaming about spring.  If you'd rather not receive this, please notify us and we will be happy to take you off the list.
Due to our payment processing with Paypal, we never see nor store any credit card information.-->
        </div>
      </div>
    </div>
    <div class="panel panel-default" style="border-color: #e97600;">
      <div style="background-color: #e97600;" class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#shipping">Order Fulfillment and Shipping</a>
        </h4>
      </div>
      <div id="shipping" class="panel-collapse collapse">
        <div class="panel-body">
<!--            We process orders in the order received. We will never substitute another product for an out-of-stock item without your consent. Unless special arrangements are made we generally ship via USPS regular or priority mail depending on the size and weight of your package. You will recieve emails from us both to confirm that your order was recieved, and to alert you when we ship.  They might turn up in your spam folder depending on your email settings. If you need your order quick, please email us and let us know!
Our goal is to ship within 2-4 days of receiving your order, but at peak season (Jan - mid Mar) longer turnarounds may occur. We do not begin shipping until late January for all orders placed after the first of the year.-->
        </div>        
      </div>
    </div>
    <div class="panel panel-default" style="border-color: #e6bb00;">
      <div style="background-color: #e6bb00;" class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#international">International Orders</a>
        </h4>
      </div>
      <div id="international" class="panel-collapse collapse">
        <div class="panel-body">
<!--            It is our policy to ship anywhere in the world but we do leave it up to our customers to know the specific rules and regulations of their country. At our scale we are not able to provide Phytosanitary Certificates. Much of the time we've found that they are not necessary under a certain amount of seeds and/or weight.  Package tracking IS NOT available for International Orders. All this said, we have successfully shipped all over the world. Certain countries such as Italy do have more strict regulations so please check! International purchases are at the customers own risk and we will not issue refunds for orders blocked at customs.-->
        </div>
      </div>
    </div>
    <div class="panel panel-default" style="border-color: #007256;">
      <div style="background-color: #007256;" class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#returns">Returns and Liability</a>
        </h4>
      </div>
      <div id="returns" class="panel-collapse collapse">
        <div class="panel-body">
<!--            Uprising Seeds is dedicated to providing an excellent source for certified organic, open-pollinated and heirloom seeds and all our seeds are guaranteed to exceed Federal germination standards. Any lots that do not germ to our satisfaction are removed  from our catalogue for that year.  All corn seed is further submitted to third party GMO testing and must meet a 0% contamination standard to be sold.
We believe you will be happy with your order.  If for any reason you are dissatisfied, please contact us and we will happily send a replacement or refund. Uprising Seeds liability is limited solely to the purchase price or replacement of your order.Growing a crop from seed is a complex endeavor and involves many factors beyond our control. We are committed to providing excellent seeds. The rest is up to you!-->
        </div>
      </div>
    </div>
    <div class="panel panel-default" style="border-color: #0067a7;">
      <div style="background-color: #0067a7;" class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#contacting">Contacting Eldur Heron Farm</a>
        </h4>
      </div>
      <div id="contacting" class="panel-collapse collapse">
        <div class="panel-body">
<!--        Email: uprisingseeds@riseup.net By far, the best way to reach us year around.
Phone: (360)778-3749. (mid January-May) We do not keep regular office hours, but if you would like to talk to someone in person, the best times to call are between 9 and 3, M-F. We’ll do our best to get back to you asap if you leave a message. We are a tiny company. Spring and summer find us in the fields and fall finds us cleaning and testing seeds as well as writing our catalog and updating our website (inbetween we eat and gather with family and friends!). This said, we are available to take calls mid January through May. If you would love to talk to us, we would love to talk to you! If for some reason you are not able to get us on the phone, email us with your number and we will certainly call you back.
-->
        </div>
      </div>
    </div>
    <div class="panel panel-default" style="border-color: #964f8e;">
      <div class="panel-heading" style="background-color: #964f8e;">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#social">Social Media</a>
        </h4>
      </div>
      <div id="social" class="panel-collapse collapse">
        <div class="panel-body">
<!--        Facebook: Pictures, updates and customer questions and comments are often posted here.
Instagram: Folks, instagram is fun! It's here that you can see up to date photos and short musings. We encourage you to take a look! uprising.seeds-->
        </div>
      </div>
    </div>
  </div>
      
    </div>
    <div class="col-sm-4">
        <div style='margin: auto; text-align: center;'>
            
            <img class="img-responsive" alt="Eldur Heron" src="/graphix/great-blue-heron-silhouette-000000-sm.png" /><br>

          <a href="#contact" title="Contact Us">      
          <button class="btn btn-default btn-lg">Get in Touch</button>
          </a>
        </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-12" style="margin: auto; text-align: center;">
      <p>Reach out using a method below and someone will get back to you within 3-5 business days.</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@eldur-heron-farm.com</p>
      <p><span class="glyphicon glyphicon-phone"></span> +1 (360) 202 9484</p>
      <p><i class="fa fa-instagram"></i> @eldur.heron</p>
  
      <a href="terms.php" title="Terms of Service and Privacy Policy">Terms and Policies</a>
        
    </div>
<!--    <div class="col-sm-7">
        
        <form method="POST" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>/#contact">
            <div class="row">
                <div class="col-sm-12">
                    <p class="<?php //if ($sent) { echo "text-success"; } else { echo "text-danger"; }?>"><?php// echo $sentMsg?></p>
                    <p class="text-danger"><?php //echo $nameErr?></p>
                    <p class="text-danger"><?php //echo $emailErr?></p>
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

<!-- Container (Footer Section) -->
<footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    
  <p>Bootstrap Theme Originally Made by <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
  <p><span class="glyphicon glyphicon-copyright-mark"></span> &nbsp; <?php if ((string)date("Y")=="2019") { echo " "+(string)date("Y"); } else { echo " 2019-"+(string)date("Y"); }?> ELDUR HERON FARM</p>
  
</footer>

<!--smooth scrolling animation JavaScript-->
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
