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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


     

             <link rel="stylesheet" href="assests/css/common.css">


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
 
      <li class="nav-item active dropdown" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="patronmessage.php">Patron's Message</a>
          <a class="dropdown-item" href="principalmessage.php">Principal's Message</a>
                      <a class="dropdown-item" href="Trusteemessage.php">Chairman's Message</a>

          <a class="dropdown-item" href="ourvision.php" >Our Vision</a>
        </div>
      </li>
       <li class="nav-item dropdown active" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Our Team
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="stafflist.php">Staff List</a>
          <a class="dropdown-item" href="ptalist.php">PTA list</a>

        </div>
      </li>
       <li class="nav-item dropdown active" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         School
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cirriculum.php">Curriculum</a>
          <a class="dropdown-item" href="facalities.php">Facalities</a>
                      <a class="dropdown-item" href="achievements.php">Achievements</a>

        </div>
      </li>
      <li class="nav-item dropdown active" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Admissions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="faq.php">Admission's FAQ</a>
          <a class="dropdown-item" href="rules.php">Rules & Regulations</a>


        </div>
      </li>

            <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="schoolenquiryform.php">Admission Enquiry</a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="contact.html">Reach Us</a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="login.php">Staff Login</a>
      </li>

    
    </ul>
 
  </div>
</nav>

<div class="container-fluid">

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 " >
   <h3 style="margin-top:30px;margin-bottom:50px;margin-left: 5vw;font-size: 40px;">
Staff List
      </h3> 
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:15px 5vw;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:15px 5vw;word-break:normal;}
.tg .tg-uawm{border-color:inherit;color:#fd6864;font-family:"Trebuchet MS", Helvetica, sans-serif !important;;font-size:18px;
  font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-v4x1{border-color:inherit;color:#3166ff;font-family:"Trebuchet MS", Helvetica, sans-serif !important;;font-size:18px;
  text-align:center;vertical-align:top}
</style>
<table class="tg" style="margin-left:5vw;margin-top: 50px; ">
<thead>
  <tr>
    <th class="tg-uawm">Mrs. Laxmi Madhuri C</th>
    <th class="tg-uawm">Principal</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-uawm">Mrs. Menka Dagliya</td>
    <td class="tg-uawm">Admission Incharge</td>
  </tr>
  <tr>
    <td class="tg-v4x1" colspan="2">Pre-Primary</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Purvi Mehta</td>
    <td class="tg-uawm">Play Group</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Laxmi Choudhary</td>
    <td class="tg-uawm">Nursery</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms.Esaidiviyal Thomas</td>
    <td class="tg-uawm">Junior KG</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Mittu Das</td>
    <td class="tg-uawm">Senior KG</td>
  </tr>
  <tr>
    <td class="tg-v4x1" colspan="2">Primary</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Srilata Tungani</td>
    <td class="tg-uawm">|</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Jayshree Balraj</td>
    <td class="tg-uawm">||</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Keerthika Nadar</td>
    <td class="tg-uawm">|||</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Babita Pandey</td>
    <td class="tg-uawm">IV A</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Anto Jensa</td>
    <td class="tg-uawm">IV B</td>
  </tr>
  <tr>
    <td class="tg-v4x1" colspan="2">Secondary</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Bhavna Hingol</td>
    <td class="tg-uawm">V A</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Viral Makwana</td>
    <td class="tg-uawm">V B</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Nirali Kadyani</td>
    <td class="tg-uawm">VI</td>
  </tr>
  <tr>
    <td class="tg-uawm">Mr. Vimal Joshi</td>
    <td class="tg-uawm">VII</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Mahalaxmi</td>
    <td class="tg-uawm">IX A</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Nehreen Shaikh</td>
    <td class="tg-uawm">IX B</td>
  </tr>
  <tr>
    <td class="tg-uawm">Mr. Anupam Roy</td>
    <td class="tg-uawm">X A</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Vaishali Gurav</td>
    <td class="tg-uawm">X B</td>
  </tr>
  <tr>
    <td class="tg-v4x1" colspan="2">Subject Teachers</td>
  </tr>
  <tr>
    <td class="tg-uawm">Mr. Anol Dishagaj</td>
    <td class="tg-uawm">Music</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Shikha Shah</td>
    <td class="tg-uawm">Dance</td>
  </tr>
  <tr>
    <td class="tg-uawm">Mr. Dhwanit Rele</td>
    <td class="tg-uawm">Skating</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Priyanshi Soni</td>
    <td class="tg-uawm">Publicity &amp; Media Exec.</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Ansari Jadhav</td>
    <td class="tg-uawm">Art/Craft</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Sarika Sharma</td>
    <td class="tg-uawm">Counselor</td>
  </tr>
  <tr>
    <td class="tg-v4x1" colspan="2">Administration Staff</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Archana Jadhav</td>
    <td class="tg-uawm">Accountant</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Vaishali Tausalkar</td>
    <td class="tg-uawm">Receptionist</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Aarti Gurav</td>
    <td class="tg-uawm">Office Assistant</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Poonam Gunjawate</td>
    <td class="tg-uawm">Office Assistant</td>
  </tr>
  <tr>
    <td class="tg-v4x1" colspan="2">Poens/Maid</td>
  </tr>
  <tr>
    <td class="tg-uawm">Mr.Sukhdev Saran</td>
    <td class="tg-uawm">Peon</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Sayali Surve</td>
    <td class="tg-uawm">Maid</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Bharati Mandlik</td>
    <td class="tg-uawm">Maid</td>
  </tr>
  <tr>
    <td class="tg-uawm">Ms. Sarla Munigaity</td>
    <td class="tg-uawm">Maid</td>
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