<!DOCTYPE html>
<html lang="en">
 
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Vaccination Management </title>

    <!-- Bootstrap core CSS -->
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>


<body class="is-preload">
<!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
                <?php
                    include("header.php");
                ?>

                 <!-- Banner -->
            <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-caption">
                            <h4>Hello, this is your <em>Vaccination management system</em> </h4>
                            <span>Vaccination &amp; Immunization</span>
                             <p>The main feature of E-Knowledge in Doctor appointment system is to provide the browser to get appointments from a doctor through internet instead of going there and fixing an appointment..</p>
                          
                              <p> Everyone needs to have Medical attention at any time. So we allow every user to register freely at any time..</p>
                             <p>Doctor appointment System maintains patient’s prescriptions so that their medical details are always available in Internet, which will be more convenient for the patients. This will be more comfortable for the patient..</p> 

                            <div class="primary-button">
                              <a href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

                        <!-- Services -->
            <section class="services">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <div class="service-item first-item">
                      <div class="icon"></div>
                      <h4>Admin Login</h4>
                      <p>Click here to login <a rel="nofollow" href="admin_login.php">Login</a>  Thank you.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item second-item">
                      <div class="icon"></div>
                      <h4>Parents Login</h4>
                      <p> Click here to login <a rel="nofollow" href="parent_login.php">Login</a>  Thank you. </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item third-item">
                      <div class="icon"></div>
                      <h4>Parent Register </h4> <p>Click here to register <a rel="nofollow" href="parent_register.php">Register</a>  Thank you. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

            <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <form method="get" action="#">
                <input type="text" name="search" id="search" placeholder="Search..." />
              </form>
            </section>
            <!-- Menu -->
            <nav id="menu">
              <ul>
                <li><a href="index.php">Homepage</a></li>  
                <li>
                  <span class="opener">Login</span>
                  <ul>
                    <li><a href="admin_login.php">Admin Login</a></li>
                    <li><a href="parent_login.php">Parent Login</a></li>
                  </ul>
                </li>
                <li><a href="simple_page.html">Parent Register</a></li>
                <li><a href="shortcodes.html">About us</a></li>
                <li><a href="https://www.google.com">External Link</a></li>
              </ul>
            </nav>

            <!-- Featured Posts -->
            <div class="featured-posts">
              <div class="heading">
                <h2>Featured Posts</h2>
              </div>
              <div class="owl-carousel owl-theme">
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured one">
                    <p>Aliquam egestas convallis eros sed gravida. Curabitur consequat sit.</p>
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured two">
                    <p>Donec a scelerisque massa. Aliquam non iaculis quam. Duis arcu turpis.</p>
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured three">
                    <p>Suspendisse ac convallis urna, vitae luctus ante. Donec sit amet.</p>
                  </div>
                </a>
              </div>
            </div>

            <!-- Footer -->

            <?php
                 include ("footer.php");
            ?>

          </div>
          </div>
          </div>
          </body>  

           <!--- scripts --->
            <?php
                 include ("scripts.php");
            ?>

  </html>