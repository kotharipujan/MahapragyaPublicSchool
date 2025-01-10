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


             <link rel="stylesheet" href="assests/css/common.css">
             <link rel="stylesheet" href="assests/css/enquiry.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div id="mobile-logo" style="width:100%;height:12%;background-color:white">


        <p class="visible-lg" style="display:inline;float:left;left:3%;top:15%;position: relative;"> <a href=""><img
                    src="https://www.mahapragyapublicschool.com/wp-content/uploads/2016/10/cropped-cropped-mahapragya_logo.jpg"
                    width="75px" height="85px" style="margin-right:10px;" alt="My Logo">
                <font
                    style="font-size:27px;float:right;font-family: 'Lato';font-weight: 600;margin-top: 0%;line-height: 1.4;">
                    MAHAPRAGYA <br>PUBLIC SCHOOL</font>
            </a></p>

        <p class="d-none d-md-block" style="display:inline;float:right;right:40%;top:15%;position:relative;"><i
                class="fa fa-phone" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px;
"></i>
            <font style="font-size:1vw;float:  right;font-family: lato;font-weight: 100;font-color:black;">022 2241 4201
                <br> <span>022 2241 4201</span>
            </font>
        </p>
        <p class="d-none d-md-block" style="display:inline;float:right;right:13%;top:15%;position:relative;"><i
                class="fa fa-map-marker" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px;
"></i>
            <font style="font-size:1vw;float: right;font-family: lato;font-weight: 100;font-color:#0000">32, Dadiseth
                Agyari Lane <br> <span>Kalbadevi Road</span><br><span>Mumbai-02</span>
            </font>
        </p>
        <p class="d-none d-md-block" style="display:inline;float:right;right:-15%;top:15%;position:relative;"><i
                class="fa fa-globe" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px;
"></i>
            <font style="font-size:1vw;float: right;font-family: lato;font-weight: 100;font-color:#000000">Affiliated to
                CBSE<br> <span> Affiliation No. 1130253</span><br><span>School Code – 30215</span>
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



    //]]>
    </script>
  <nav  id='cssmenu' style="float:left;position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;">
    <div id="head-mobile"></div>
    <div  class="button"></div>
    <ul  >
      <li ><a href='https://secureito.com/mps.php'>HOME</a></li>
      <li><a href='#'>ABOUT</a>
        <ul>
          <li><a href='https://secureito.com/patronmessage.php'>Patron's Message</a></li>
          <li><a href='https://secureito.com/principalmessage.php'>Principal's Message</a></li>
          <li><a href='https://secureito.com/Trusteemessage.php'>Trustee's Message</a></li>
          <li><a href='https://secureito.com/ourvision.php'>Our Vision</a></li>
        </ul>



      </li>

         <li><a href='#'>OUR TEAM</a>
        <ul>
          <li><a href='https://secureito.com/stafflist.php'>Staff List</a></li>
          <li><a href='https://secureito.com/ptalist.php'>PTA Memembers</a></li>

        </ul>

      <li><a href='#'>SCHOOL</a>
        <ul>
          <li><a href='https://secureito.com/cirriculum.php'>Curriculum</a></li>
          <li><a href='https://secureito.com/achievements.php'>Achievements</a></li>
          <li><a href='https://secureito.com/facalities.php'>Facalities</a></li>

        </ul>
      </li>
      <li><a href='#'>ADMISSIONS</a>
          <ul>
          <li><a href='https://secureito.com/faq.php'>Admission FAQS</a></li>
          <li><a href='https://secureito.com/rules.php'>Rules & Regulations</a></li>

        </ul>
      </li>

      <li><a href='https://secureito.com/gallery.php'>GALLERY</a></li>

      <li><a href='https://secureito.com/schoolenquiryform.php'>ADMISSION ENQUIRY</a></li>
      <li><a href='https://secureito.com/contact.html'>CONTACT</a></li>
       <li><a href='https://secureito.com/login.php'>STAFF LOGIN</a></li>
    </ul>
  </nav>


    <div style="margin-top: 200px;">
    </div>
    <div class = "form">
      <form action="enquiry.php" method="POST">
          <div class="pname">
              <label for="pname">Parent's Full Name:</label>
              <input type="text" id="pname" name="pname"><br><br>
          </div>

          <div class="sname">
              <label for="sname">Students's Full Name:</label>
              <input type="text" id="sname" name="sname"><br><br>
          </div>
          <div class="email-block">
              <label for="email">Email ID:</label>
              <input type="email" id="email" name="email"><br><br>
          </div>

          <div class="age">
              <label for="age">Student's Age:</label>
              <input type="number" min="2" max="16" step="1" value="" name="age">
          </div>

          <div class="standard" style="padding-top: 20px;">
              <label for="standard">Standard</label>
              <select name="standard">
                  <option selected>Select Standard</option>
                  <option>1st</option>
                  <option>2nd</option>
                  <option>3rd</option>
                  <option>4th</option>
                  <option>5th</option>
                  <option>6th</option>
                  <option>7th</option>
                  <option>8th</option>
                  <option>9th</option>
                  <option>10th</option>
              </select>
          </div>

          Fill the Detail: <br>

          <textarea rows="5" cols="50" name="message">
          </textarea>
          <div style="padding-top: 30px;">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <input type="reset" class="btn btn-primary" value="Reset" />
          </div>
      </form>
    </div>
<?php include 'footer.php'; ?>
</body>

</html>