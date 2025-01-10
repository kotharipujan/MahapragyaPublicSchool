<?php
// Initialize the session
session_start();

require 'Connection.php';
$query1 = mysqli_query($conn, "SELECT * FROM testimonial
                               ORDER BY RAND()
                                LIMIT 1");



?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js'></script>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
        <link rel="stylesheet" href="assests/css/common.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


     





  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <font style="font-size:1vw;float: right;font-family: lato;font-weight: 100;font-color:#000000">Affiliated to CBSE<br>  <span> Affiliation No. 1130253</span><br><span>School Code – 30215</span>
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
  
  
  <?php include 'header.php'; ?>




<div class="container-fluid">

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 " >
      
 <h3 style="margin-top:30px;margin-bottom:50px;margin-left: 3vw;">
Our Curriculum
      </h3> 
<p style="font-size: 18px;font-size: normal;margin-left: 3vw">
The school year, which begins in April 2021, and ends in March 2021 comprises three terms.
<br>
The CBSE. curriculum ensures a general education without any diversification of studies as all candidates are required to enter and sit for subjects as mentioned and required to complete satisfactory courses in a third language, Art and Craft, Physical Education, Moral and Spiritual Values and Socially Useful Productive Work and Community Service. These are assessed internally by the school and their results will contribute towards the award of the C.B.S.E Examination Certificate.
<br>

After a ten year course, candidates are required to offer subjects as laid down by the council for the C.B.S.E Examination. Candidates are declared successful if they reach a prescribed minimum aggregate of marks in the compulsory subjects and pass in Five subjects, which must include the subject English and also pass in Socially Useful Productive Work and Community Service.
<br>
As per rules and regulation of the C.B.S.E Board, New Delhi, the school offers the following subjects:
<br>
</p>

<style type="text/css">
.tg  {border:none;border-collapse:collapse;border-spacing:0;}
.tg td{border-style:solid;border-width:0px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;
  padding:10px 20px;word-break:normal;}
.tg th{border-style:solid;border-width:0px;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;
  overflow:hidden;padding:10px 20px;word-break:normal;}
.tg .tg-uhf4{background-color:#ffffff;font-family:Arial, Helvetica, sans-serif !important;font-size:14px;text-align:left;
  vertical-align:top}
.tg .tg-byu7{background-color:#ffffff;font-family:Arial, Helvetica, sans-serif !important;font-size:14px;font-weight:bold;
  text-align:left;vertical-align:top}
</style>
<table class="tg d-block d-sm-none" style="margin-top: 50px;">
<thead>
  <tr>
    <th class="tg-byu7">Group 1 (compulsory)</th>
    <th class="tg-byu7">External<br>Examination</th>
    <th class="tg-byu7">Internal<br>Assessment</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-uhf4">English</td>
    <td class="tg-uhf4">80%</td>
    <td class="tg-uhf4">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf4">Hindi/French</td>
    <td class="tg-uhf4">80%</td>
    <td class="tg-uhf4">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf4">History,Civis &amp; Geography</td>
    <td class="tg-uhf4">80%</td>
    <td class="tg-uhf4">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf4" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-byu7">Group 2 (compulsory)</td>
    <td class="tg-byu7">External<br>Examination</td>
    <td class="tg-byu7">Internal<br>Assessment</td>
  </tr>
  <tr>
    <td class="tg-uhf4">Mathematics</td>
    <td class="tg-uhf4">80%</td>
    <td class="tg-uhf4">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf4">Science</td>
    <td class="tg-uhf4">80%</td>
    <td class="tg-uhf4">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf4">E.V.S</td>
    <td class="tg-uhf4">80%</td>
    <td class="tg-uhf4">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf4" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-byu7">Group 3</td>
    <td class="tg-byu7">External <br>Examination</td>
    <td class="tg-byu7">Internal <br>Examination</td>
  </tr>
  <tr>
    <td class="tg-uhf4">Physical Education</td>
    <td class="tg-uhf4">80%</td>
    <td class="tg-uhf4">20%</td>
  </tr>
</tbody>
</table>

<style type="text/css">
.tg  {border:none;border-collapse:collapse;border-spacing:0;}
.tg td{border-style:solid;border-width:0px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;
  padding:10px 4vw;word-break:normal;}
.tg th{border-style:solid;border-width:0px;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;
  overflow:hidden;padding:10px 4vw;word-break:normal;}
.tg .tg-uhf3{background-color:#ffffff;font-family:Arial, Helvetica, sans-serif !important;;font-size:22px;text-align:left;
  vertical-align:top}
.tg .tg-byu6{background-color:#ffffff;font-family:Arial, Helvetica, sans-serif !important;;font-size:22px;font-weight:bold;
  text-align:left;vertical-align:top}
</style>

<table class="tg d-none d-sm-block" style="margin-top: 50px;">
<thead>
  <tr>
    <th class="tg-byu6">Group 1 (compulsory)</th>
    <th class="tg-byu6">External<br>Examination</th>
    <th class="tg-byu6">Internal<br>Assessment</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-uhf3">English</td>
    <td class="tg-uhf3">80%</td>
    <td class="tg-uhf3">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf3">Hindi/French</td>
    <td class="tg-uhf3">80%</td>
    <td class="tg-uhf3">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf3">History,Civis &amp; Geography</td>
    <td class="tg-uhf3">80%</td>
    <td class="tg-uhf3">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf3" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-byu6">Group 2 (compulsory)</td>
    <td class="tg-byu6">External<br>Examination</td>
    <td class="tg-byu6">Internal<br>Assessment</td>
  </tr>
  <tr>
    <td class="tg-uhf3">Mathematics</td>
    <td class="tg-uhf3">80%</td>
    <td class="tg-uhf3">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf3">Science</td>
    <td class="tg-uhf3">80%</td>
    <td class="tg-uhf3">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf3">E.V.S</td>
    <td class="tg-uhf3">80%</td>
    <td class="tg-uhf3">20%</td>
  </tr>
  <tr>
    <td class="tg-uhf3" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-byu6">Group 3</td>
    <td class="tg-byu6">External <br>Examination</td>
    <td class="tg-byu6">Internal <br>Examination</td>
  </tr>
  <tr>
    <td class="tg-uhf3">Physical Education</td>
    <td class="tg-uhf3">80%</td>
    <td class="tg-uhf3">20%</td>
  </tr>
</tbody>
</table>

       </div>
       <div class="col-lg-3 " >
        <div class="list-group" style="margin-top:15vh;margin-right:1vw; ">
        	  <li class="list-group-item " style="font-size: 25px;font-weight: bold;background: #6bb6ff;color:black;">Explore Mahapragya</li>
        	   <a href="cirriculum.php" class="list-group-item list-group-item-action" style="font-size: 18px;font-weight: normal;background: #6bb6ff;color:white;">Curriculum</a>
  <a href="faq.php" class="list-group-item list-group-item-action" style="font-size: 18px;font-weight: normal;background: #6bb6ff;color:white;">FAQs</a>
  <a href="gallery.php" class="list-group-item list-group-item-action" style="font-size: 18px;font-weight: normal;background: #6bb6ff;color:white;">Gallery</a>
   
       <a href="contact.html" class="list-group-item list-group-item-action" style="font-size: 18px;font-weight: normal;background: #6bb6ff;color:white;">Reach Us</a>
</div>
<br>

<?php
    echo '<div class="container" style="padding-top: 30px;">
          <div style="font-size:22px;font-weight:bold;text-align:center;margin-top:10px;margin-bottom:20px;" >Testimonials</div>';
$types = array();
while ($item = mysqli_fetch_array($query1))
{
    
   
    echo '<div  style="font-size:20px;font-weight:bold;text-align:left;">' . $item['tname'] . '</div>';
      echo '<div style="font-size:18px;font-weight:bold;text-align:left;margin-bottom:5px;">' . $item['tpos'] . '</div>';
     
echo '<div style="font-size:18px;font-weight:norma;text-align:left;margin-bottom:20px;" >"' . $item['tmessage'] . '"</div>';
    echo '<div style="font-size:20px;font-weight:bold;text-align:left;">' . $item['sname'] . '</div>';
 
    echo '<div style="font-size:18px;font-weight:bold;text-align:left;margin-bottom:5px;">Class ' . $item['sclass'] . '</div>';
     echo '<div style="font-size:18px;font-weight:norma;text-align:left;margin-bottom:15px;">"' . $item['smessage'] . '"</div>';

}


echo '</div>';
?>


      </div>
    </div>
  </div>
</div>
   

<?php include 'footer.php'; ?>
</body>
</html>