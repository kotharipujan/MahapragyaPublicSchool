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
  
<?php include 'header.php'; ?>





<div class="container-fluid">

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 " >
      <h3 style="margin-top:30px;margin-bottom:50px;margin-left: 4vw;font-size: 35px;">
        Admission FAQS
      </h3>     

<div id="accordion" style="margin-left: 2vw">
 <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button style=" white-space: normal;text-align: left;"class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
          How long has Mahapragya Public School been in existence?
        </button>
      </h5>
    </div>
    <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      Mahapragya Public School was founded in 1975, with 25 students offering the SSC board of education. Today we are a vibrant centre of modern education under the CBSE board with 500students in Kindergarten to Grade 10.
      </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button style=" white-space: normal;text-align: left;"class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          What geographic areas do you draw students from?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       We cater mainly to students who live in South Mumbai, but also have students who attend from as far away as Dadar.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          What is your Teacher Student Ratio?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       1:10 in both the Primary and Secondary sections.
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" style=" white-space: normal;text-align: left;"  data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
          What is Curriculum followed at school?
        </button>
      </h5>
    </div>

    <div id="collapsefour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
     The school is affiliated to the Central Board of Secondary Education(CBSE) for Grades 9 and 10.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="#collapseFive">
          What are the fees at MahaPragya Public School?
        </button>
      </h5>
    </div>
    <div id="#collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
     A one-time, non-refundable Application Fee of ₹1,500 must be submitted to the school with the printed Registration form. The application process then begins but is not a guarantee of acceptance.
     <br>

A one-time, non-refundable Admission Fee of ₹10,000 is payable when a student is granted acceptance to the school.
<br>
A one-time refundable Caution Fee of ₹10,000 is payable at the time of acceptance. This fee is refunded after adjustment for any sums owed when the student leaves or is withdrawn from the school.
<br>
Academic fees:
Grades 1 – 4: ₹146,260 when paid annually and ₹36,565 when paid quarterly.
Grades 5 – 9: ₹151,100 when paid annually and ₹37,775 when paid quarterly.
Grade 10: ₹171,260 when paid annually and ₹42,815 when paid quarterly.
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseTsixe" aria-expanded="false" aria-controls="collapseTsixe">
          Are there any other fees to consider?
        </button>
      </h5>
    </div>
    <div id="collapseTsixe" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       School bus transportation, Books, Stationary Items, Field trips and all overnight trips. 
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          What is the fees payment schedule?
        </button>
      </h5>
    </div>

    <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       Fees are payable in advance annually or at the beginning of each quarter. Unpaid dues may result in the student being struck off the rolls.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          How do you accept fees?
        </button>
      </h5>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       Fees should be deposited directly into the school account with cheques drawn in
favour of “Mahapragya Public School”. A specially printed pay-in slip and fee card is to be used for this purpose.
For More information contact school office at 022-22414201
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          What is the school schedule?
        </button>
      </h5>
    </div>
    <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        The school year comprises three terms. The 2018-19 school year begins in April, 2018 and ends in March, 2019.
First term: April 2 – April 27, 2018; June 7 – August 3, 2018
Second term: August 6 – November 2, 2018
Third term: November 12 – December 21 2108; January 7 – March 27 2019
      </div>
    </div>
  </div>





  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
         What are the school Hours?
        </button>
      </h5>
    </div>

    <div id="collapseTen" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    For Grades 1 through 10, school hours are from 7.45 am to 2.00 pm
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
         What are the school office timings?
        </button>
      </h5>
    </div>
    <div id="collapseEleven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       The School office is open from 8:00 am to 3:00 pm, Monday to Friday except for holidays.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
        When can parents meet the Principal?
        </button>
      </h5>
    </div>
    <div id="collapse12" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      The Principal meets parents on Wednesdays and Fridays between 9:00 am and 11:00 am only.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
          What are the faculty meeting hours?
        </button>
      </h5>
    </div>

    <div id="collapse13" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Co-ordinators and teachers of the Primary and Secondary sections are available between 2.05 pm and 2.25 pm on working days (except Friday).
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
          Is the school open on weekends and holidays?
        </button>
      </h5>
    </div>
    <div id="collapse14" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
    The school is closed on Saturdays and Sundays and school business is conducted on school holidays.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
          What is tge age criteria for admissions?
        </button>
      </h5>
    </div>
    <div id="collapse15" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      Children applying to enter Kindergarten must be xxx years of age on xxx day, month. Children applying for older grades are assessed by the school for correct class placement but usually, the same age requirement is followed.
      </div>
    </div>
  </div>
</div>
       </div>
     


       </div>
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
   

<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>MahaPragya Public School</h4>
          <ul class="list-unstyled">
            <button style="background-color: DodgerBlue;
  border: none; 
  color: white; 
  border-radius: 5px;
  padding: 12px 16px; 
  font-size: 20px;
  cursor: pointer; "><i class="fa fa-envelope"></i><a style="font-size: 20px;" href="mailto:principal@mahapragyapublicschool.com">  Mail Us</a></button>
                  </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Links</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="rules.php">Rules And Regulations</a></li>
            <li><a href="Trusteemessage.php">Trustee's Message</a></li>
            <li><a href="principalmessage.php">Principal Message</a></li>
            <li><a href="facalities.php">Facilities</a></li>
              <li><a href="Cirriculum.php">Curriculum</a></li>
                <li><a href="patronmessage.php">Patron's Message</a></li>
                  <li><a href="ourvision.php">Vision</a></li>

                     </ul>
        </div>
      </div>
            <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Resources</h4>
          <ul class="list-unstyled">
            <li><a href="faq.php">FAQS</a></li>
             <li><a href="ptalist.php">PTA List</a></li>
              <li><a href="stafflist.php">Staff</a></li>
            <li><a href="faq.php">Admission Faqs</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="facalities.php">Facalities</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Locate Us</h4>
          <ul class="list-unstyled">
            <div style="width: 100%"><iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=%2032,%20Dadiseth%20Agyari%20Lane,%20Kalbadevi%20Road,%20Mumbai,%20Maharashtra%20400002+()&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>       
    </div>
    </div>
  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 2020 - MahaPragya Public School  All rights reserved. |<a href="https://www.linkedin.com/in/pujan-kothari-2600b2142/"> Created By Pujan Narendra Kothari  (+91-9987100111)</a> |  Credits to Respective Owners |</p>
    </div>
      </div>


  </div>
  </div>
</footer>
</body>
</html>