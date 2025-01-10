<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require 'Connection.php';




?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>









  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assests/css/common.css">

</head>

<body>

<div  id="mobile-logo" style="width:100%;height:12%;background-color:white">
	
      
  <p  class="visible-lg"  style="display:inline;float:left;left:3%;top:15%;position: relative;"> <a href=""><img src="https://www.mahapragyapublicschool.com/wp-content/uploads/2016/10/cropped-cropped-mahapragya_logo.jpg" width="75px" height="85px" style="margin-right:10px;" alt="My Logo">
     <font style="font-size:27px;float:right;font-family: 'Lato';font-weight: 600;margin-top: 0%;line-height: 1.4;"> MAHAPRAGYA <br>PUBLIC SCHOOL</font></a></p>

  <p class="d-none d-md-block"   style="display:inline;float:right;right:40%;top:15%;position:relative;"><i class="fa fa-phone" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px; 
"></i>
    <font style="font-size:1vw;float:  right;font-family: lato;font-weight: 100;font-color:black;">022 2241 4201 <br>  <span>022 2241 4201</span>
  </font>
  </p>
  <p class="d-none d-md-block"   style="display:inline;float:right;right:13%;top:15%;position:relative;"><i class="fa fa-map-marker" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px; 
"></i>
    <font style="font-size:1vw;float: right;font-family: lato;font-weight: 100;font-color:#0000">32, Dadiseth Agyari Lane <br>  <span>Kalbadevi Road</span><br><span>Mumbai-02</span>
  </font>
  </p>
 <p class="d-none d-md-block"   style="display:inline;float:right;right:-15%;top:15%;position:relative;"><i class="fa fa-globe" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px; 
"></i>
    <font style="font-size:1vw;float: right;font-family: lato;font-weight: 100;font-color:#000000">Affiliated to CBSE<br>  <span> Affiliation No. 1130253</span><br><span>School Code :30215</span>
  </font>
  </p>
 
  </div>



    <script type="text/javascript">


(function($) {
  $.fn.menumaker = function(options) {
    var cssmenu = $(this),
      settings = $.extend({
        format: "dropdown",
        sticky: false
      }, options);
    return this.each(function() {
      $(this).find(".button").on('click', function() {
        $(this).toggleClass('menu-opened');
        var mainmenu = $(this).next('ul');
        if (mainmenu.hasClass('open')) {
          mainmenu.slideToggle().removeClass('open');
        } else {
          mainmenu.slideToggle().addClass('open');
          if (settings.format === "dropdown") {
            mainmenu.find('ul').show();
          }
        }
      });
      cssmenu.find('li ul').parent().addClass('has-sub');
      multiTg = function() {
        cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
        cssmenu.find('.submenu-button').on('click', function() {
          $(this).toggleClass('submenu-opened');
          if ($(this).siblings('ul').hasClass('open')) {
            $(this).siblings('ul').removeClass('open').slideToggle();
          } else {
            $(this).siblings('ul').addClass('open').slideToggle();
          }
        });
      };
      if (settings.format === 'multitoggle') multiTg();
      else cssmenu.addClass('dropdown');
      if (settings.sticky === true) cssmenu.css('position', 'fixed');
      resizeFix = function() {
        var mediasize = 700;
        if ($(window).width() > mediasize) {
          cssmenu.find('ul').show();
        }
        if ($(window).width() <= mediasize) {
          cssmenu.find('ul').hide().removeClass('open');
        }
      };
      resizeFix();
      return $(window).on('resize', resizeFix);
    });
  };
})(jQuery);

(function($) {
  $(document).ready(function() {
    $("#cssmenu").menumaker({
      format: "multitoggle"
    });
  });
})(jQuery);



  //]]></script>
 <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="width:100%;background-color:#63B8FF;font-size:18px;white-space: nowrap;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"  >
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="mps.php">Home</a>
      </li>
   <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="welcome.php">Enquiry List</a>
      </li>
      <li class="nav-item active dropdown" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Notice Board
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addfiles.php">Add new Notice</a>
          <a class="dropdown-item" href="noticeboard.php">View Notices</a>

      
        </div>
      </li>
       <li class="nav-item dropdown active" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Testimonies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addtestimony.php">Add testimonies</a>
          <a class="dropdown-item" href="viewtestimony.php">View testimonies</a>

        </div>
      </li>
       <li class="nav-item dropdown active" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="galleryupload.php">Create new gallery title</a>
          <a class="dropdown-item" href="addimages.php">Add images into existing titles</a>
                      <a class="dropdown-item" href="viewgallerytitle.php">View gallery</a>

        </div>
      </li>
            

    
    </ul>
 
  </div>
</nav>
<div class="container" style="margin-top: 100px;">
<div class="form-box form" style="margin-top: 50px;margin-left: 10vw;background-color: #f2f2f2;">
  <h1 style="text-align: center;">Upload Notice Document</h1>
  <p style="text-align: center;">Fill in all the details</p>
 <form style="margin:20px;" action="uploadedfiles.php" method="post" enctype="multipart/form-data">
  <font style="font-weight:bold">Select File to Upload</font>(pdf format only):
  <hr>
    <input type="file" name="file" required>
    <br>
    *remember file name
    <br>
    <br>
    <input class="btn btn-primary" style="margin-bottom: :20px;"type="submit" name="submit" value="Upload">
 
</form>
</div>
</div>
<?php include 'footer.php'; ?></body>

</html>
