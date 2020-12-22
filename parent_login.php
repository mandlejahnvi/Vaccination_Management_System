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

              <!-- Banner -->
            <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h1> Enter Login ID and Password...</h1>
                     <form method="post" action="" name="frmpatlogin" onSubmit="return validateform()">
                       <table width="200" border="3">
                          <tbody>
                          <tr>
                          <td width="34%">Login ID</td>
                           <td width="66%"><input type="text" name="loginid" id="loginid" /></td>
                          </tr>
                          <tr>
                          <td>Password</td>
                            <td><input type="password" name="password" id="password" /></td>
                          </tr>
                          <tr>
                          <td height="36" colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Login" /></td>
                          </tr>
                       <tr>
                  <td height="36" colspan="2" align="center"><strong>New user<br>
              <a href="">Click Here</a> to Register </strong> | <a href=""><strong>Forgot Password</strong></a></td>
        </tr>
      </tbody>
    </table>
    </form>
    <p>&nbsp;</p>
</div>
</div>
</div>
</section>

<?php
session_start();
include("db_connection.php");
//if(isset($_SESSION[parentid]))
//{
	//echo "<script>window.location='admin_account.php';</script>";
//}
if(isset($_POST['submit']))
{
	$sql = "SELECT * FROM parent_login WHERE loginid='$_POST[loginid]' AND password='$_POST[password]' AND status='active'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql) >= 1)
	{
		$rslogin = mysqli_fetch_array($qsql);
		$_SESSION[parentid]= $rslogin[parentid] ;
		echo "<script>window.location='admin_account.php';</script>";
	}
	else
	{
		echo "<script>alert('Invalid login id and password entered..'); </script>";
	}
	
}
?>


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
  </html>