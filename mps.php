<?php
// Initialize the session
session_start();

require 'Connection.php';
$query1 = mysqli_query($conn, "SELECT * FROM noticeboard");
$query2 = mysqli_query($conn, "SELECT * FROM noticeboard");




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


      <link rel="stylesheet" type="text/css" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
      <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
      <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

<style>

</style>
             <link rel="stylesheet" href="assests/css/common.css">
             <link rel="stylesheet" href="assests/css/mps.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div  id="mobile-logo" style="width:100%;height:12%;background-color:white">
	
      
  <p  class="visible-lg"  style="display:inline;float:left;left:3%;top:15%;position: relative;"> <a href=""><img src="https://www.mahapragyapublicschool.com/wp-content/uploads/2016/10/cropped-cropped-mahapragya_logo.jpg" width="75px" height="85px" style="margin-right:10px;" alt="My Logo">
     <font style="font-size:27px;float:right;font-family: 'Lato';font-weight: 600;margin-top: 0%;line-height: 1.4;"> MAHAPRAGYA <br>PUBLIC SCHOOL</font></a></p>
<p class="d-none d-md-block"   style="display:inline;float:right;right:4%;position: relative;"><script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=04f64b1ac64cc7fbcbd3bf024e3dd1ed03eae61c'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/771291/t/2"></script>


  </p>
  <p class="d-none d-md-block"   style="display:inline;float:right;right:40%;top:15%;position:relative;"><i class="fa fa-phone" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px; 
"></i>
    <font style="font-size:1vw;float:  right;font-family: lato;font-weight: 100;font-color:black;"><a href="tel:02222414201">022 22414201</a> <br>  <span><a href="tel:976956114">+91 976956114</a></span>
  </font>
  </p>
  <p class="d-none d-md-block"   style="display:inline;float:right;right:13%;top:15%;position:relative;"><i class="fa fa-map-marker" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px; 
"></i>
    <font style="font-size:1vw;float: right;font-family: lato;font-weight: 100;font-color:#0000">32, Dadiseth Agyari Lane <br>  <span>Kalbadevi Road</span><br><span>Mumbai, 400002</span>
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
    <script type="text/javascript">


const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});

  //]]></script>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('i_images/11.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('i_images/2.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      <div class="carousel-item" style="background-image: url('i_images/3.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      <div class="carousel-item" style="background-image: url('i_images/4.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      <div class="carousel-item" style="background-image: url('i_images/5.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      <div class="carousel-item" style="background-image: url('i_images/6.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
        <div class="carousel-item" style="background-image: url('i_images/7.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
        <div class="carousel-item" style="background-image: url('i_images/8.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
        <div class="carousel-item" style="background-image: url('i_images/9.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
        <div class="carousel-item" style="background-image: url('i_images/10.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  <div style="height: 30px;width: 100%;background-color: #1E90FF;position: static;">

    
<marquee width="100%" direction="left" style="font-size: 20px;color: gold;" style=" overflow: hidden;display: inline-block;
    width: 100%; 
    text-align:right;">
<span>&#8226;</span> 

This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
</marquee>

  </div>
  <div  style="margin:auto;margin-top:45px;text-align: center;width: 50%;left:40%;margin-bottom: 50px;">
    <p style="line-height:1.3;"><font style="font-size: 45px;font-weight: 1000;font-style: lato;color: brown;">Welcome To </font><br><font style="font-size: 45px;font-weight: 1000;color: #1E90FF;">Mahapragya Public school</font> </p>
    <p style="margin-top: 25px;"><font style="font-size: 18px;font-weight: 100;font-family:'Lato';color: grey;">Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any distinction.

Creating to the nursery, primary and secondary segments, the school follows the syllabi laid by Central Board of Secondary Education (CBSE).
Based upon Acharya Mahapragya’s educational philosophy, the school aspires to be a trendsetter by promoting excellence in education. Yoga and Science of Living (Jeevan Vigyan) form an integral part of the curriculum.</font> </p>
    <a href="ourvision.php"><button type="button" class="btn btn-primary" >Read more</button></a>
  </div>









<hr>




<div class="d-none d-sm-block">
    <div class="row 
" style="margin: auto;">
   

  <div class="card col-sm" style="border:none;width:280px;height:620px; margin-top:50px;">
  <img class="card-img-top" src="i_images/chairman.jpg" style="height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Trustee Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">Dear Parents and students,

I am glad that you have a taken the right decision of admitting your child in MPS- smart choice indeed.

The school aims at imparting knowledge that would be relevant in life always for the student. It adopts a blend of both- contemporary and traditional outlook to create a positive atmosphere of learning for your child.
</p>
    <a href="Trusteemessage.php" class="btn btn-primary">Read More</a>
  </div>
</div>

  <div class="card col-sm" style="border:none;width:280px;height:620px;margin-top:50px; ">
  <img class="card-img-top" src="i_images/patron.jpg" style="height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Patron's Message</h4>
    <p class="card-text"style="font-weight: 200; font-family: 'Lato';color: gray;">Dear Parents and Students, 

Every child is expected to go to school for about 14 years in his/her life. During this period, what he has to learn as a human being is to develop two of in-built mechanisms of the human brain,  in the right direction at the right place (School) and with the right people (teachers.The  two mechanisms in his brain are Neo-cortex and limbic system.

</p>
    <a href="patronmessage.php" class="btn btn-primary">Read More</a>
  </div>
</div>


  <div class="card col-sm" style="width:280px;height:620px;margin-top:50px;border:none;">
  <img class="card-img-top" src="i_images/princi.jpg" style="height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Principal Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any distinction.Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any</p>
    <a href="principalmessage.php" class="btn btn-primary">Read more</a>
  </div>
</div>


 

 <div class="card col-sm"  style="-webkit-box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);
-moz-box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);
box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);background-color:white;width:275px;height:620px;margin-top:50px;margin-left:2vw;margin-right:4vw; float: right;">
    <div class="card-body text-center">
      <h4 class="card-title">Notice Board</h4>
    </div>
    <marquee onmouseover="this.stop();" onmouseout="this.start();" width="100%" height="100%"direction="up" color="gold" style=" overflow: hidden;display: inline-block;
    width: 100%; 
    text-align:left;margin-left:10px; ">
<?php
    
$types = array();
while ($item = mysqli_fetch_array($query1))
{
    
   
    echo '<a href="uploadedfiles/'.$item['link'].'"  style="font-size:20px;font-weight:bold;text-align:left;margin-bottom:30px;">' . $item['title'] . '</a>';
      
    echo '<hr style="color:black">';

}



?>

</marquee>
  </div>
  

 </div>

</div>






    <div class="d-block d-sm-none" style="height: 2700px;">
   
 
  <div class="card" style="border:none;width:280px;height:620px;margin: auto; margin-top:50px;margin-bottom: 50px;">
  <img class="card-img-top" src="i_images/chairman.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Trustee's Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">I am glad that you have a taken the right decision of admitting your child in MPS- smart choice indeed.The school aims at imparting knowledge that would be relevant in life always for the student. It adopts a blend of both- contemporary and traditional outlook to create a positive atmosphere of learning for your child.
</p>
    <a href="Trusteemessage.php" class="btn btn-primary">Read More</a>
  </div>
</div>

  

  <div class="card" style="border:none;width:280px;height:620px;margin: auto; margin-bottom: 50px;">
  <img class="card-img-top" src="i_images/patron.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Patron's Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any distinction.Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race 
</p>
    <a href="patronmessage.php" class="btn btn-primary">Read More</a>
  </div>
</div>


  <div class="card" style="width:280px;height:620px;margin-top:50px;margin: auto;border:none;margin-bottom: 50px;">
  <img class="card-img-top" src="i_images/princi.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Principal Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any distinction.Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any</p>
    <a href="principalmessage.php" class="btn btn-primary">Read more</a>
  </div>
</div>

 <div class="card bg"  style="-webkit-box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);
-moz-box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);
box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);background-color:white;width:275px;height:620px;margin-top:50px;margin: auto; ">
    <div class="card-body text-center">
      <h4 class="card-title">Notice Board</h4>
    </div>
     <marquee onmouseover="this.stop();" onmouseout="this.start();" width="100%" height="100%" direction="up" color="gold" style=" overflow: hidden;display: inline-block;
    width: 100%; 
    text-align:left;margin-left:10px; ">
<?php
    
$types = array();
while ($item = mysqli_fetch_array($query2))
{
    
   
    echo '<a href="' . $item['link'] . ' " style="font-size:20px;font-weight:bold;text-align:left;margin-bottom:30px;">' . $item['title'] . '</a>';
      
    echo '<hr style="color:black">';

}



?>

</marquee>
    </div>

 </div>

 <hr style="width: 10%;height: 0.5px;background-color: gray;">

<div>
  <div style="margin:16%;margin-bottom:60px;margin-top:60px;"class="card-deck">
  <div class="card">
    <div class="card-body">
<h5 class="card-title" style="text-align: center;">      <i class="fa fa-calendar" style="text-align: center;font-size: 50px;margin-top: 20px;" aria-hidden="true"></i>
Facalities</h5>
      <p class="card-text">Learn all about the facalities students can use in school & make the most of it.</p>
      <a href="facalities.php">Read More|</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;"><i class="fa fa-graduation-cap" style="text-align: center;font-size: 50px;margin-top: 20px;" aria-hidden="true"></i>Academics</h5>
      <p class="card-text">
The school prides itself on its academic rigour, flexibility, and student-centric approach. CBSE allows the child to grow into a wholesome, skilled, competent individual</p>
      <a href="cirriculum.php">Read More|</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;"><i class="fa fa-flask" style="text-align: center;font-size: 50px;margin-top: 20px;" aria-hidden="true"></i>Innovations</h5>
      <p class="card-text">The school is a buzzing laboratory of experimentation at all levels. Our innovations are born out of our needs and shaped by our passion for embracing change</p>
      <a href="achievements.php">Read More|</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;"><i class="fa fa-question" style="text-align: center;font-size: 50px;margin-top: 20px;" aria-hidden="true"></i>Admission Faqs</h5>
      <p class="card-text">Have a question about admissions to MahaPragya Public School? Our FAQs section has all the answers and more to all your queries.</p>
        <a href="faq.php">Read More|</a>
    </div>
  </div>
</div>

</div>
<hr>

<div class="d-block d-sm-none">
  <p style="text-align: center;font-weight: bold;font-size: 25px;margin-top: 30px;">2020 CBSE performance highlights
</p>

  <div style="margin:16%;margin-bottom:50px;margin-top:30px;border:none;"class="card-group">
  <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
109</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">students</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
56</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 90%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
37</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 80%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
10</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 70%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
2</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 60%</p>
     
    </div>
  </div>
  
</div>

  </div>



<div class="d-none d-sm-block
">>
  <p style="text-align: center;font-weight: bold;font-size: 25px;margin-top: 30px;">2020 CBSE performance highlights
</p>

  <div style="margin:16%;margin-bottom:50px;margin-top:30px;border:none;"class="card-group">
  <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
109</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">students</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
56</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 90%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
37</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 80%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
10</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 70%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
2</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 60%</p>
     
    </div>
  </div>
  
</div>

  </div>


  <hr>
  <div>
<p style="text-align: center;font-weight: bold;font-size: 25px;margin-top: 30px;margin-bottom: 50px;">Virtual Tour 2020
</p>

 <div class="owl-carousel owl-theme">

    <div class="item" ><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;color: white'">Entrance</h4><img src="i_images/entrance.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" ><h4 style="position: absolute;font-size: 30px;bottom:10px;left:30%;color:white;font-weight: normal;">Reception</h4><img src="i_images/reception.jpg" style="width:100%;height: 100%;"></div>
    <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Play Area</h4><img src="i_images/playarea.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Staircase</h4><img src="i_images/staircase.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Skating ring</h4><img src="i_images/10.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Passage</h4><img src="i_images/passage.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Auditorium</h4><img src="i_images/auditorium.jpg" style="width:100%;height: 100%;"></div>
        <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Classrooms</h4><img src="i_images/classroom.jpg" style="width:100%;height: 100%;"></div>
           <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Classrooms</h4><img src="i_images/classroom1.jpg" style="width:100%;height: 100%;"></div>
              <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Principal Room</h4><img src="i_images/principalroom.jpg" style="width:100%;height: 100%;"></div>

                 <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Sciencelab</h4><img src="i_images/sciencelab.jpg" style="width:100%;height: 100%;"></div>
                    <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Dance Hall</h4><img src="i_images/danceaarea.jpg" style="width:100%;height: 100%;"></div>
                       <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Library</h4><img src="i_images/librrary.jpg" style="width:100%;height: 100%;"></div>
<div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Computer Lab</h4><img src="i_images/computerlab.jpg" style="width:100%;height: 100%;"></div>

<div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Washroom</h4><img src="i_images/washroom.jpg" style="width:100%;height: 100%;"></div>
<div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">WashBasin</h4><img src="i_images/washbasin.jpg" style="width:100%;height: 100%;"></div>

<div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Back-Entrance</h4><img src="i_images/backentrance.jpg" style="width:100%;height: 100%;"></div>
   
</div>

    <script type="text/javascript">//<![CDATA[


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    stagePadding: 50,
    nav:true,
    autoHeight:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

  //]]></script>
    
    
  </div>
        </div>

<?php include 'footer.php'; ?>
</body>
</html>