<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>FUD Siwes Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Internal Style -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="text/css" href="../images/fud.png">
  <link rel="stylesheet" type="text/css" href="form.css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <!-- Enternal style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- External Script -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Internal Style -->
  <style type="text/css">
    .jumbotron{
      background-color: #fff; 
      line-height: 2;
      font-size: 1.4rem;
      text-align: center;
      padding-bottom: 0;
    }
    .jumbotron h3{
      color: #16611D;
      font-size: 2.2rem;
    }
    .inputmargin{
      width: 100%;
      margin-bottom: 4%;
    }
    .inputmargin input{
      width: 100%;
    }
    
  </style>
</head>
<body>

    <!--================= Header Section =================-->
  <section class="title">
    <!-- header -->
    <div class="logheader">
        <div class="row" >
          <div class="col-lg-1 col-md-1 col-sm-1">
            <img src="../images/fud.png" alt="fud Logo">
          </div>
          <div class="col-lg-11 col-md-11 col-sm-11">
            <h1>FEDERAL UNIVERSITY DUTSE</h1>
          </div>
        </div>
        <div class="row">
          <h6>Knowledge, Excellent & Service</h6>
        </div>
    </div> 
 
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
      <h3 style="font-size: 1.7rem;"> 
          Welcome to Federal University Dutse, Student Industrial Work and Experience Scheme (SIWES) Portal
      </h3>
    </nav>
  </section>


  <!--================= Body Text Section=================-->
  <section class="bodytext">
      <div class="container">
        <div class="jumbotron">
          <h3>
            THIS PORTAL IS USE ONLY FOR SIWES STUDENT
          </h3>
          <hr class="loghr">
          <p>
            Welcome to the Federal University Dutse, Students Industrial Work and 
            Experience Scheme (SIWES) Portal.
            All services on this portal are restricted, hence, only authenticated users can 
            access them.
          </p>
          <p>
            Your can log into this portal with your Registration Number and Password.
            <em style="color: #af1d1d;"><big>Once verified by the Head of Department & SIWES Coordinator, </big></em> Use your Registration Number and password to start your SIWES activities.
          </p>
        </div>
      </div>

  </section>


  <!--================= Form Section=================-->
  <section class="formsec">

    <div class="container">

      <div class="jumbotron">

          <div class="header">
            <h2>Register Now</h2>
          </div>

          <form class="logform" method="post" action="register.php">
          <?php include('errors.php'); ?>
            <div class="d-grid gap-2">

                <div class="inputmargin">
                  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Registration Number">
                </div>
                <div class="inputmargin">
                  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Your Email">
                </div>
                <div class="inputmargin">
                  <input type="password" name="password_1" placeholder="Your Password">
                </div>
                <div class="inputmargin">
                  <input type="password" name="password_2" placeholder="Confirm password">
                </div>
                <div class="inputmargin" style="margin-bottom: 0;">
                  <input type="submit" name="reg_user" value="Register" class="btn btn-lg btn-success">
                </div>
                <p class="form-link form-link1" style="margin: 0px auto 0px auto;">
                  <big>Already a member?</big> <a href="login.php">Sign in</a>
                </p>
            </div>
        </form>

     </div>
    </div>
  </section>


  <!--=================  Enquiries Section=================-->
  <section>
    <div class="container">
      <div class="jumbotron">
          <p>
            Please for all enquiries and/or complaints regarding the SIWES Activities
                Click on <a href="contact.php">Contact Us page</a>  or send an email to Report send an email to <a href="siwes.cse@fud.edu.ng">siwes.cse@fud.edu.ng</a>
            </p>
     </div>
    </div>
  </section>


  <!--================= Footer Section=================-->
  <section class="footer">
    <p>
      &copy Federal University Dutse
    </p>
    <hr class="hr">
    <p>
      All rights reserved
    </p>
  </section>

</body>
</html>