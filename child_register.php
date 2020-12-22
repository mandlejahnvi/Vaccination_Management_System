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
if(isset($_POST["submit"]))
{
    /*if(isset($_GET[editid]))
    {
            $sql ="UPDATE child_info SET child_name='$_POST[child_name]',address='$_POST[address]',contact_no='$_POST[mobilenumber]',pin_code='$_POST[pincode]',blood_group='$_POST[b_group]',gender='$_POST[gender]',dob='$_POST[dateofbirth]',status='active' WHERE childid='$_GET[editid]'";
        if($qsql = mysqli_query($con,$sql))
        {
            echo "<script>alert('child record updated successfully...');</script>";
        }
        else
        {
            echo mysqli_error($con);
        }   
    }
    else
    {*/
    $sql ="INSERT INTO child_info(child_name, address, contact_no, pin_code, father_name, mother_name, blood_group, gender, dob, status, height, weight) values('$_POST[name]','$_POST[address]','$_POST[mobilenumber]','$_POST[pincode]','$_POST[f_name]','$_POST[m_name]','$_POST[b_group]','$_POST[gender]','$_POST[dob]','Active','$_POST[height]','$_POST[weight]')";
    if($qsql = mysqli_query($con,$sql))
    {
        echo "<script>alert('child record inserted successfully...');</script>";
        $insid= mysqli_insert_id($con);
        if(isset($_SESSION[childid]))
        {
        echo "<script>window.location='appointment.php?patid=$insid';</script>";    
        }
        else
        {
        echo "<script>window.location='admin_account.php';</script>";    
        }       
    }
    else
    {
        echo mysqli_error($con);
    }
//}
}
/*if(isset($_GET[editid]))
{
    $sql="SELECT * FROM child_info WHERE childid='$_GET[editid]' ";
    $qsql = mysqli_query($con,$sql);
    $rsedit = mysqli_fetch_array($qsql);
    
}*/
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

        <section class="forms">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Register a child</h2>
                    </div>
                    <form id="contact" action="" name="childreg" method="post" onSubmit = "return validateform()">
                      <div class="row">
                        <div class="col-md-6">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Child Name :" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="dob" type="date" class="form-control" id="dob" placeholder=" Date of birth :" required="">
                          </fieldset>
                        </div>

                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="gender" type="radio" id="demo-small" value="male" checked>
                            <label for="demo-small">Male</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="gender" type="radio" id="demo-medium" value="female">
                            <label for="demo-medium">Female</label>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <fieldset>
                            <input name="f_name" type="text" class="form-control" id="name" placeholder="Father Name :" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="m_name" type="text" class="form-control" id="name" placeholder="Mother Name :" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                            <h4> Select blood group </h4>
                          <select name="b_group" id="category">
                            <option value="categories" selected>Select Category</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="height" type="float" class="form-control" id="height" placeholder="Height:" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="weight" type="float" class="form-control" id="weight" placeholder="Weight:" required="">
                          </fieldset>
                       </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="mobilenumber" type="number" class="form-control" id="mobilenumber" placeholder="Contact No." required="">
                          </fieldset>
                       </div>
                        <div class="col-12">
                          <textarea name="address" id="address" placeholder="Enter your address" rows="6"></textarea>
                        </div>
                        <div class="col-12">
                          <fieldset>
                              <input name="pincode" id="number" placeholder="Enter your pincode" rows="6">
                          </fieldset> 
                        </div>
                        <div class="col-md-12">
                          <button type="submit" name="submit" id="form-submit" class="button" value="Submit">Register</button>
                        </div>
                      </div>
                    </form>
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
  <script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 
var decimalExpression = /^[0-9\.]+[0-9]+$/; //variable to validate only decimal numbers

function validateform()
{
  if(document.childreg.name.value == "")
  {
    alert("child name should not be empty..");
    document.childreg.name.focus();
    return false;
  }
else if(!document.childreg.name.value.match(alphaspaceExp))
  {
    alert("Patient name not valid..");
    document.childreg.name.focus();
    return false;
  }
  else if(document.childreg.f_name.value == "")
  {
    alert("child name should not be empty..");
    document.childreg.f_name.focus();
    return false;
  }
else if(!document.childreg.f_name.value.match(alphaspaceExp))
  {
    alert("Patient name not valid..");
    document.childreg.name.focus();
    return false;
  }
  else if(document.childreg.m_name.value == "")
  {
    alert("child name should not be empty..");
    document.childreg.name.focus();
    return false;
  }
else if(!document.childreg.m_name.value.match(alphaspaceExp))
  {
    alert("Patient name not valid..");
    document.childreg.name.focus();
    return false;
  }
  else if(document.childreg.dob.value == "")
  {
    alert("Admission date should not be empty..");
    document.childreg.dob.focus();
    return false;
  }
  else if(document.childreg.address.value == "")
  {
    alert("Address should not be empty..");
    document.childreg.address.focus();
    return false;
  }
  else if(document.childreg.mobilenumber.value == "")
  {
    alert("Mobile number should not be empty..");
    document.childreg.mobilenumber.focus();
    return false;
  }
  else if(!document.childreg.mobilenumber.value.match(numericExpression))
  {
    alert("Mobile number not valid..");
    document.childreg.mobilenumber.focus();
    return false;
  }
  else if(document.childreg.height.value == "")
  {
    alert("City should not be empty..");
    document.childreg.height.focus();
    return false;
  }
  else if(!document.childreg.height.value.match(decimalExpression))
  {
    alert("City not valid..");
    document.childreg.height.focus();
    return false;
  }
  else if(document.childreg.weight.value == "")
  {
    alert("City should not be empty..");
    document.childreg.weight.focus();
    return false;
  }
  else if(!document.childreg.weight.value.match(decimalExpression))
  {
    alert("City not valid..");
    document.childreg.weight.focus();
    return false;
  }
  else if(document.childreg.pincode.value == "")
  {
    alert("Pincode should not be empty..");
    document.childreg.pincode.focus();
    return false;
  }
  else if(!document.childreg.pincode.value.match(numericExpression))
  {
    alert("Pincode not valid..");
    document.childreg.pincode.focus();
    return false;
  }
  /*else if(document.childreg.loginid.value == "")
  {
    alert("Login ID should not be empty..");
    document.childreg.loginid.focus();
    return false;
  }
  else if(!document.childreg.loginid.value.match(alphanumericExp))
  {
    alert("Login ID not valid..");
    document.childreg.loginid.focus();
    return false;
  }
  else if(document.childreg.password.value == "")
  {
    alert("Password should not be empty..");
    document.childreg.password.focus();
    return false;
  }
  else if(document.childreg.password.value.length < 8)
  {
    alert("Password length should be more than 8 characters...");
    document.childreg.password.focus();
    return false;
  }
  else if(document.childreg.password.value != document.childreg.confirmpassword.value )
  {
    alert("Password and confirm password should be equal..");
    document.childreg.confirmpassword.focus();
    return false;
  }*/
  else if(document.childreg.blood_group.value == "")
  {
    alert("Date Of Birth should not be empty..");
    document.childreg.blood_group.focus();
    return false;
  }
  else if(document.childreg.gender.value == "" )
  {
    alert("Kindly select the status..");
    document.childreg.gender.focus();
    return false;
  }
  else
  {
    return true;
  }
}
</script>
  </html>

            