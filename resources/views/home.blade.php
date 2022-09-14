<!DOCTYPE html>
<html>

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <title>GOTANGO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body style="background-color: orange">
<div style="background-color: orange" class="header">
    <div style="background-color: orange" class="container">
        <a href="home.blade.php" class="navbar-brand scroll-top">GOTANGO</a>
        <a class="logo" href="" style="size: 50px;margin-left: 420px;margin-right: 350px"><img class="logo_resp" src="https://gotangolb.com/front/images/logo.png"></a>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div style="background-color: orange" id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="menu.html">Our Menus</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li>
                                    @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                   <li>
                                       <x-app-layout>

                                       </x-app-layout>

                                   </li>
                                @else
                                     <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                    @if (Route::has('register'))
                            <li>   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                    @endif
                                @endauth
                            </div>
                        @endif
                     </li>
                               </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</div>
<!--/.header-->


<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4>Here you can find delecious foods</h4>
                <h2>GoTango Restaurant</h2>
                <p>Your place to go</p>
                <div class="primary-button">
                    <a href="#" class="scroll-link" data-id="book-table">Order Right Now</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="cook-delecious">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <div class="first-image">
                    <img src="https://gotangolb.com/uploads/ourgallery/gallery/290x260/9.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="cook-content">
                    <h4>We cook delecious</h4>
                    <div style="background-color: #a6ad39" class="contact-content">
                        <span>You can call us on:</span>
                        <h6> 01555702</h6>
                    </div>
                    <span>or</span>
                    <div class="primary-white-button">
                        <a href="#" class="scroll-link" data-id="book-table">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="second-image">
                    <img src="https://gotangolb.com/uploads/ourgallery/gallery/290x260/24.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                        <img src="https://gotangolb.com/uploads/ourgallery/gallery/290x260/12.jpg" width="220" height="210" alt="Breakfast">
                        <h4>Breakfast</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                        <img src="https://gotangolb.com/uploads/ourgallery/gallery/290x260/39.jpg" width="220" height="210" alt="Lunch">
                        <h4>Lunch</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                        <img src="https://gotangolb.com/uploads/ourgallery/gallery/290x260/29.jpg" width="220" height="210" alt="Dinner">
                        <h4>Dinner</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                        <img src="https://gotangolb.com/uploads/ourgallery/gallery/290x260/4.jpg" width="220" height="210" alt="Desserts">
                        <h4>Desserts</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



@include("booktb")


<section class="get-app">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h2>Get application for your phone</h2>
            </div>
            <div class="primary-white-button">
                <a href="#">Download now</a>
            </div>
        </div>
    </div>
</section>



@include("food")



<section class="sign-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Signup for our newsletters</h2>
                </div>
            </div>
        </div>
        <form id="contact" action="" method="get">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email here..." required>
                    </fieldset>
                </div>
                <div class="col-md-2">
                    <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</section>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Copyright &copy; 2022 XperBot</p>
            </div>
            <div class="col-md-4">
                <ul class="social-icons">
                    <li><a rel="nofollow" href="https://www.facebook.com/gotangorestocafe/" target="_parent"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/GotangoR"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/gotango_restocafe/"><i class="fa fa-instagram"></i></a></li>

                </ul>
            </div>
            <div class="col-md-4">
                <p>Designed by <em>YOUSSEF SHREIM</em></p>
            </div>
        </div>
    </div>
</footer>





<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
</script>
</body>
</html>

