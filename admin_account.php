<!DOCTYPE html>
<html lang="en">
 
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title> </title>

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
               include ("header.php");
            ?>
                              <!-- Services -->
            <section class="services">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <div class="service-item first-item">
                      <div class="icon"></div>
                      <h4>Register child</h4>
                      <p> <a rel="nofollow" href="child_register.php">Register</a>  </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item second-item">
                      <div class="icon"></div>
                      <h4>Update reports</h4>
                      <p>  <a rel="nofollow" href="child_update.php">Update</a> </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item third-item">
                      <div class="icon"></div>
                      <h4> View reports </h4> <p> <a rel="nofollow" href="view_records.php">View</a> </p>
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
                <li><a href="child_register.php">Child Register</a></li>
                <li><a href="report_update.php">Update Report</a></li> 
                <li><a href="view_report.php">View Reports</a></li>
                <li><a href="simple_page.html">Log out</a></li>
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