<?php
$logout = false;
$status = false;
session_start();
if(!empty($_SESSION['loggedin']))
{
  $logout = true;
} 
if(isset($_SESSION['user']) and $_SESSION['user']=='system')
{
  $_SESSION['system'] = true;
  header("location:backend.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Dream Events</title>
    <!-- counter bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="./css/dream_home_style.css">
    <!-- js -->
    <script src="./js/count.js"></script>
</head>
    <!-- icons  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
<body>
<!-- Content -->
<div class="container-fluid p-0">
    <!-- navigaiton -->
    <nav class="navbar navigation sticky-top">
    <div class="container-fluid">
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./images/logo/l-3.png" alt="Logo" class="d-inline-block align-text-top"><span>|</span>
            Dream Events
          </a>
        </div>
      </nav>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>

      <div class="offcanvas offcanvas-end  bg-body-tertiary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dream Events</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <?php
          if($logout)
          {
          ?>
          <li class="nav-item">
              <img src="./images/icons/profile.png" alt=""><span><?php $username = $_SESSION['user']; echo " Username: ".$username?></span>
            </li>
          <?php
          }
          ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php"><img src="./images/icons/home.png" alt=""> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./whydreamevents.php"><img src="./images/icons/question.png" alt=""> Why Dream Events?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./planyourevents.php"><img src="./images/icons/agreement.png" alt="..."> Plan Your Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./bookappointment.php"><img src="./images/icons/mail.png" alt=""> Book Appointment</a>
            </li>
            <?php
            if($logout)
            {
            ?>
              <li class="nav-item">
              <a class="nav-link" href="./appointment_status.php"><img src="./images/icons/clipboard.png" alt=""> Appointment Status</a>
              </li>
            <?php
            }
            ?>
            <li class="nav-item">
              <a class="nav-link" href="./success_stories.php"><img src="./images/icons/success(1).png" alt=""> Success Stories</a>
            </li>
            <?php
            if(!$logout)
            {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="./dream_log_in.php"><img src="./images/icons/login-.png" alt=""> Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./sign_in.php"><img src="./images/icons/refer.png" alt=""> Sign in</a>
            </li>
            <?php 
            }
            ?>
            <li class="nav-item">
              <a class="nav-link" href="./dream_about.php"><img src="./images/icons/information.png" alt=""> About Us</a>
            </li>
            <?php
            if($logout)
            {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="./log_out.php"><img src="./images/icons/log-out.png" alt=""> Log out</a>
            </li>
            <?php
            }
            ?>
        </div>
      </div>
    </div>
  </nav> 
    <div class="container-fluid banner">
    <div class="row justify-content-evenly" style="height:700px">
        <div class="col-lg-5 text-left banner-side-1">
            <h1 class="banner-heading-1">ALL-IN-ONE EVENT MANAGEMENT SOFTWARE</h1>
            <h2 class="banner-heading-2">Built for the events of today—and tomorrow</h2>
            <p class="banner-para">Everything you need to craft impactful event experiences all while staying technologically relevant, now and always.</p>
            <button type="button" class="btn btn-danger banner-button-1"><a href="./sign_in.php">SIGN UP FOR FREE</a></button>
            <button type="button" class="btn btn-light banner-button-2"><a href="./bookappointment.php">BOOK AN APPOINTMENT</a></button>
        </div>
        <div class="col-lg-5 banner-side-2">
            <video class="banner-video" loop muted autoplay="autoplay">
                <source src="./videos/banner-intro.webm" type="video/mp4">
            </video>
        </div>
    </div> <!--1st row end-->
    <div class="row justify-content-center align-items-center">
        <div class="col-auto banner-logo"><img src="./images/homeimages/amazonlogo-fotor-bg-remover-20230625133632.png" alt="..." width="80px" height="auto"></div>
        <div class="col-auto banner-logo"><img src="./images/homeimages/logo2-fotor-bg-remover-20230625135737.png" height="36px" width="119px" alt=""></div>
        <div class="col-auto banner-logo"><img src="./images/homeimages/logo3.png" width="73px" alt=""></div>
        <div class="col-auto banner-logo"><img src="./images/homeimages/logo5.png" width="80px" alt=""></div>
        <div class="col-auto banner-logo"><img src="./images/homeimages/net-fotor-bg-remover-2023062514440.png" width="98px" alt="..."></div>
    </div>
</div> <!--Container end -->
</div>

<!-- Color matching -->
<div class="color-matching">

</div> <!--Color matching end-->
 
<!--Cards-->
<div class="container-fluid card-container">
    <div class="row justify-content-center">
        <div class="col-5">
            <h2 class="card-heading">The simplest way to host all your events</h2>
        </div>
    </div>
   <div class="row justify-content-center card-row-2">
    <div class="col-auto">
        <div class="card card-1">
            <video class="card-video" loop muted autoplay="autoplay">
                <source src="./videos/inperson-event.webm" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title text-white text-center">In-person events</h5>
              <p class="card-text text-white text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn card-btn btn-primary">Go Somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-auto">
        <div class="card card-2">
            <video class="card-video" loop muted autoplay="autoplay">
                <source src="./videos/virtual-event.webm" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title text-white text-center">Virtual events</h5>
              <p class="card-text text-white text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn card-btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-auto">
        <div class="card card-3">
            <video class="card-video" loop muted autoplay="autoplay">
                <source src="./videos/hybrid-event.webm" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title text-center">Hybrid events</h5>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn card-btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
   </div><!--card-row-2 end-->
</div>

<!-- artice-1  -->
<div class="container-fluid">
    <div class="row justify-content-evenly">
        <div class="col-5 article-1-left">
            <h2>Plan, run, and analyze your event— all from one place</h2>
        </div>
        <div class="col-5 article-1-right">
            <p>No more juggling tools, no more frustrating busy work. Dream Events Backstage is the fully-customizable event management platform that lets you do it all—from organizing your event to measuring its impact and everything in between.</p>
        </div>
</div>
</div>

<!-- Count Section -->
<div class="container rounded count-container">
  <div class="row">
    <div class="col count-heading" style="margin:22px 0px;">
      <h2>Backstage by the numbers</h2>
    </div>
  </div> 
  <div class="row justify-content-evenly">
    <div class="col-10">
      <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
        <div class="container-fluid">
        <div class="row">
        <div class="col count-item counter-section wow fadeInUp sm-margin-bottom-ten animated" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
          <i class="bi bi-calendar-heart"></i><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display:inline;">10000</span><span style=" color:white; font-family: 'Belanosima', sans-serif, sans-serif;"> +</span><p class="counter-title">events</p>
          <span id="anim-number-pizza" class="counter-number"></span>
        </div>
        <div class="col count-item counter-section wow fadeInUp sm-margin-bottom-ten animated" style="padding-right:48px; visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
          <i class="bi bi-calendar"></i><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display:inline;">5000</span><span style=" color:white; font-family: 'Belanosima', sans-serif, sans-serif;"> +</span><p class="counter-title">event planners</p>
          <span id="anim-number-pizza" class="counter-number"></span>
        </div>
        <div class="col count-item counter-section wow fadeInUp sm-margin-bottom-ten animated" style="padding-left:53px; visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;" style="padding-left:70px">
          <i class="bi bi-globe-central-south-asia"></i><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display:inline;">50</span><span style=" color:white; font-family: 'Belanosima', sans-serif, sans-serif;"> +</span><p class="counter-title">states</p>
          <span id="anim-number-pizza" class="counter-number"></span>
        </div>
        <div class="col-auto count-item counter-section wow fadeInUp sm-margin-bottom-ten animated" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
          <i class="bi bi-people"></i><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display:inline;">1</span><span style=" color:white; font-family: 'Belanosima', sans-serif, sans-serif;"><span style="font-size:34px">M</span>+</span><p class="counter-title">attendees</p>
          <span id="anim-number-pizza" class="counter-number"></span>
        </div>
      </div> <!--Inner row closed-->
      </div> <!--Inner container closed-->
    </div> <!--col10 closed-->
  </div> <!--Row closed-->
</div> <!--count container closed-->

<!-- article-2  -->
<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="height:600px">
        <div class="col-5 article-2-left">
            <span>KEEP THEM HOOKED</span>
            <h2>Holistic audience engagement <i class="bi bi-people-fill" style="color:rgb(239, 97, 9)"></i></h2>
            <p>Onsite or online, our session interaction tools, networking lounges, discussion channels, and 1:1 meetings make it easier than ever for you to engage attendees, foster networking, and create a community.</p>
        </div>
        <div class="col-5 article-2-right">
            <video class="article-2-video" loop muted autoplay="autoplay">
                <source src="./videos/holistic-view.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<div class="container-fluid last-container">
    <!-- Get started Now -->
    <div class="row row-cols-1 get-started-now-row justify-content-center">
        <div class="col">
            <h2 class="get-started-now-heading">Ready to manage your events smarter, better?</h2>
        </div>
        <div class="col">
            <h3 class="get-started-now-button text-center"><button type="button" class="btn btn-danger"><a style="text-decoration:none; color:white;" href="sign_in.php">Get Started Now</a></button></h3>
        </div>
    </div>
    <!-- FAQ  -->
    <div class="row faq-row">
        <div class="col text-center">
            <h2 id="faq-heading">Frequently Asked Questions</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-7">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is all-in-one event management software?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How does event management software help organize successful events?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        How is Dream Events Backstage different from other event management platforms?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        What are the key features of event management software?
                      </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        What is the difference between virtual event management software and webinar software?
                      </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                  </div>
              </div>
        </div>
    </div>
</div>
<!-- footer -->
<?php
include 'footer.html';
?> 
</body>
</html>