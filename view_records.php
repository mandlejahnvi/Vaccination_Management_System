<!DOCTYPE html>
<html lang="en">
 
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Login page </title>

    <!-- Bootstrap core CSS -->
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
<?php
session_start();

include("db_connection.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM child_info WHERE childid='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('child record deleted successfully..');</script>";
	}
}
?>

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

        
               <!-- Tables -->
            <section class="tables">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2> Child Records</h2>
                    </div>
                    <div class="default-table">
                      <table>
                        <thead>
                          <tr>
                            <th>Child name</th>
                            <th>Dob</th>
                            <th>Blood group</th>
                            <th>address</th>
                            <th>pincode</th>
                            <th>gender</th>
                            <th>status</th>
                            <th>height</th>
                            <th>weight</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                             $sql ="SELECT * FROM child_info";
                             $qsql = mysqli_query($con,$sql);
                             while($rs = mysqli_fetch_array($qsql))
                             {
                               echo "<tr>
                                 <td>$rs[child_name]<br>
                                 </td>
                                 <td> &nbsp;$rs[dob]<br>
                                 </td>
                                 <td> $rs[blood_group]<br>
                                  <td>$rs[address]<br></td>
                                  <td>$rs[pin_code]<br></td>
                                <td> &nbsp;$rs[gender]<br></td>
                              <td align='center'>$rs[status] <br></td>
                              <td> &nbsp;$rs[height]<br></td>
                              <td align='center'> $rs[weight] <br> </td></tr>";
                       }
                       ?>
                        </tbody>
                      </table>
                      <ul class="table-pagination">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
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
                  include("footer.php");
            ?>

            </div>
            </div>
          </div>
          </body>
              <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
   <?php
        include ("Scripts.php");
  ?> 
  