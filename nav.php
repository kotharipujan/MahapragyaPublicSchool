<?php
// Nav menu JavaScript function
function addMenuScript() {
    echo '
    <script>
    (function($) {
        $.fn.menumaker = function(options) {
            var cssmenu = $(this),
                settings = $.extend({
                    format: "dropdown",
                    sticky: false
                }, options);

            return this.each(function() {
                $(this).find(".button").on("click", function() {
                    $(this).toggleClass("menu-opened");
                    var mainmenu = $(this).next("ul");
                    if (mainmenu.hasClass("open")) {
                        mainmenu.slideToggle().removeClass("open");
                    } else {
                        mainmenu.slideToggle().addClass("open");
                        if (settings.format === "dropdown") {
                            mainmenu.find("ul").show();
                        }
                    }
                });

                cssmenu.find("li ul").parent().addClass("has-sub");

                var multiTg = function() {
                    cssmenu.find(".has-sub").prepend("<span class=\"submenu-button\"></span>");
                    cssmenu.find(".submenu-button").on("click", function() {
                        $(this).toggleClass("submenu-opened");
                        if ($(this).siblings("ul").hasClass("open")) {
                            $(this).siblings("ul").removeClass("open").slideToggle();
                        } else {
                            $(this).siblings("ul").addClass("open").slideToggle();
                        }
                    });
                };

                if (settings.format === "multitoggle") multiTg();
                else cssmenu.addClass("dropdown");

                if (settings.sticky === true) cssmenu.css("position", "fixed");

                var resizeFix = function() {
                    var mediasize = 700;
                    if ($(window).width() > mediasize) {
                        cssmenu.find("ul").show();
                    }
                    if ($(window).width() <= mediasize) {
                        cssmenu.find("ul").hide().removeClass("open");
                    }
                };
                resizeFix();
                return $(window).on("resize", resizeFix);
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
    </script>';
}
?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="width:100%;background-color:#63B8FF;font-size:18px;white-space: nowrap;">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="margin-right:3%;">
                <a class="nav-link" href="mps.php">Home</a>
            </li>

            <li class="nav-item active dropdown" style="margin-right:3%;">
                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                </a>
                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                    <a class="dropdown-item" href="patronmessage.php">Patron's Message</a>
                    <a class="dropdown-item" href="principalmessage.php">Principal's Message</a>
                    <a class="dropdown-item" href="Trusteemessage.php">Chairman's Message</a>
                    <a class="dropdown-item" href="ourvision.php">Our Vision</a>
                </div>
            </li>

            <li class="nav-item dropdown active" style="margin-right:3%;">
                <a class="nav-link dropdown-toggle" href="#" id="teamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Our Team
                </a>
                <div class="dropdown-menu" aria-labelledby="teamDropdown">
                    <a class="dropdown-item" href="stafflist.php">Staff List</a>
                    <a class="dropdown-item" href="ptalist.php">PTA list</a>
                </div>
            </li>

            <li class="nav-item dropdown active" style="margin-right:3%;">
                <a class="nav-link dropdown-toggle" href="#" id="schoolDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    School
                </a>
                <div class="dropdown-menu" aria-labelledby="schoolDropdown">
                    <a class="dropdown-item" href="cirriculum.php">Curriculum</a>
                    <a class="dropdown-item" href="facalities.php">Facilities</a>
                    <a class="dropdown-item" href="achievements.php">Achievements</a>
                </div>
            </li>

            <li class="nav-item dropdown active" style="margin-right:3%;">
                <a class="nav-link dropdown-toggle" href="#" id="admissionsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admissions
                </a>
                <div class="dropdown-menu" aria-labelledby="admissionsDropdown">
                    <a class="dropdown-item" href="faq.php">Admission's FAQ</a>
                    <a class="dropdown-item" href="rules.php">Rules & Regulations</a>
                </div>
            </li>

            <li class="nav-item active" style="margin-right:3%;">
                <a class="nav-link" href="gallery.php">Gallery</a>
            </li>

            <li class="nav-item active" style="margin-right:3%;">
                <a class="nav-link" href="schoolenquiryform.php">Admission Enquiry</a>
            </li>

            <li class="nav-item active" style="margin-right:3%;">
                <a class="nav-link" href="contact.html">Reach Us</a>
            </li>

            <li class="nav-item active" style="margin-right:3%;">
                <a class="nav-link" href="login.php">Staff Login</a>
            </li>
        </ul>
    </div>
</nav>

<?php addMenuScript(); ?>