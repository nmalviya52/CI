<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>Aapka Painter- Best way to get your house painted</title>
	<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .peopleCarouselImg img {
  width: auto;
  height: 225px;
  max-height: 225px;
}
  </style>
  

</head>
<body>
<form action='/ap/index.php/welcome/progpage' method='post'>
 	<button type="submit">Click me!</button>
 	</form>
<div id="container">
	<h1></h1>
<body background="1264.jpg">


<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="0"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/CI/images/villascapes.jpg" alt="Chania"  class="peopleCarouselImg">
      </div>

      <div class="item">
        <img src="/CI/images/villascapes-3.jpg" alt="Chania"  class="peopleCarouselImg">
      </div>
    
      <div class="item">
        <img src="/CI/images/villascapes-7.jpg" alt="Flower"  class="peopleCarouselImg">
      </div>
      <div class="item">
        <img src="/CI/images/villascapes-13.jpg" alt="Flower"  class="peopleCarouselImg">
      </div>
      <div class="item">
        <img src="/CI/images/villascapes-16.jpg" alt="Flower"  class="peopleCarouselImg">
      </div>
      <div class="item">
        <img src="/CI/images/villascapes-17.jpg" alt="Flower"  class="peopleCarouselImg">
      </div>
      <div class="item">
        <img src="/CI/images/villascapes-18.jpg" alt="Flower"  class="peopleCarouselImg">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br> <br>
<?php
if(!$this->ion_auth->logged_in()) echo'
<div class="container">
	<h3 class="text-info" style="color:black"> <B>Login to proceed</B></h3>
	<br>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href="/CI/index.php/auth/?a=1" class="btn btn-primary btn-lg btn-block" >Customer</a>
    </div>
    <div class="col-md-4">
      <a href="/CI/index.php/auth/?a=2"  class="btn btn-primary btn-lg btn-block">Vendor</a>
    </div>
    <div class="col-md-4">
      <a href="/CI/index.php/auth/?a=3"  class="btn btn-primary btn-lg btn-block">Admin</a>    </div>
  </div>
</div>
<br>';
?>
<br>
<footer id="site-footer">
      <div class="container fullwidth">
        <div class="signupform" id="footer-signup">
            <form>
            <svg width="31" height="24" viewBox="0 0 31 24" xmlns="http://www.w3.org/2000/svg">
              <g fill="#EF3939" fill-rule="evenodd">
                <path d="M15.5 2.26L29 9.684v12.34H2V9.686L15.5 2.26m0-2.26L0 8.526V24h31V8.526L15.5 0"/>
                <path d="M20.442 16.07l8.056-6.304L27.86 9l-8.272 6.47-4.27-2.998-4.296 3.01L2.736 9l-.64.766 8.07 6.314L0 23.2l.596.8 14.722-10.31L30 24l-.032-1.24-9.526-6.69"/>
              </g>
            </svg>
              <span class="signupmessage">Subscribe to our newsletter:</span>
              <input class="emailaddress" type="email" placeholder="Enter your email address">
              <input class="0listid" type="hidden" value="2">
              <input class="signupsubmit" type="submit" value="Send">
            </form>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-3">
            <h3>Vivaldi</h3>
            <a href="/#features">Features</a>
            <a href="/download/" class="piwikTrackContent" onclick="javascript:_paq.push(['trackEvent', 'Download Click', 'Footer']);">Download</a>
            <a href="/bugreport/">Report a Bug</a>
          </div>
          <div class="col-md-3">
            <h3>About</h3>
            <a href="/story/">Our Story</a>
            <a href="/team/">Team</a>
          </div>
          <div class="col-md-3">
            <h3>Support</h3>
            <a href="https://vivaldi.net/forums/">Help</a>
            <a href="/contact/">Contact</a>
          </div>
          <div class="col-md-3">
            <h3>Press & Media</h3>
            <a href="/press/">Press Kit</a>
            <a href="/press/releases/">Press Releases</a>
          </div>
        </div>
      </div>
      <br>
      <br>
<div class="bottom container fullwidth">
  <div class="copyright">
    <object data="/assets/vivaldi.svg" class="vivaldi-logo" type="image/svg+xml"></object>
    Copyright © 2016 Aapka Painter™ — All rights reserved.    <a href="/privacy/">Privacy Policy</a>
  </div> 
</div>
</footer>
   <script>
    $('#myCarousel').carousel
    ({
        interval: 2000,


        })

    </script>
</body>
</html>