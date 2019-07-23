

<?php

include('server.php');
?>

<!Doctype html>
<html lang="en">
  <head>
    <title>Top universities of Bd</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">University</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rankings</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                 <a class="dropdown-item" href="http://www.webometrics.info/en/Asia/Bangladesh%20 " target="_blank">Web Metrics</a>
                  <a class="dropdown-item" href="https://www.topuniversities.com/subject-rankings/2019" target="_blank">Ranking by Subjects</a>

                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Universities Information</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                 <a class="dropdown-item" href="course-single.html">BRAC University</a>
                  <a class="dropdown-item" href="nsu.html">North South University</a>

                  <a class="dropdown-item" href="aiub.html">AIUB</a>

                </div>

              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.php">Login</a> / <a href="register.php">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Log in</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Log in</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-4">Log in with your account</h2>
             


              <form action="login.php" method="post">
<?php include('errors.php');?>
              
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label >Username</label>
                    <input type="text"  name="username" class="form-control py-2" required>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-12 form-group">
                    <label >Password</label>
                    <input type="password"  name="password" class="form-control py-2" required>
                  </div>


                </div>
                
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" name="login_user" value="Login" class="btn btn-primary px-5 py-2">
                     <p>Not a User? <a href="register.php" target="_blank"><b>Sign In</b></a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="site-footer border-top">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3>University</h3>
            <p>Find your favourite universities here.</p>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                   <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                     <li><a href="contact.php">Contact</a></li>
                  <li><a href="login.php">Privacy</a></li>
                </ul>
              </div>
            </div>
          </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">1/5-C, Mirpur-2,Dhaka-1216,Bangladesh</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">01783923814</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">arnob.farshid@gmail.com</span></a></li>

              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">

            <p class="float-md-right">
              Copyright &copy; Farshid Ahsan. All rights reserved |
              <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook p-2"></a>
              <a href="https://twitter.com/login?lang=en" target="_blank" class="fa fa-twitter p-2"></a>
              <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin p-2"></a>
              <a href="https://www.instagram.com/?hl=en " target="_blank"class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>
