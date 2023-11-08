<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendance</title>
	
	 <!-- Internal Style -->
  	<link rel="icon" type="text/css" href="../images/fud.png">
    <link rel="stylesheet" type="text/css" href="../css/all.css">
    <link rel="stylesheet" type="text/css" href="../attendance.css">
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
  		box-shadow: 1px 1px 4px; 
  		padding: 1.5% 0; 
  		border-radius: 5%;
  	}
  	.ahover a:hover{
  		font-weight: 600;
  	}
  	.inputmargin{
      width: 60%;
      margin-bottom: 4%;
      margin: auto;
    }
    .inputmargin input{
      width: 100%;
      margin-bottom: 2%;
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-success  ahover" style="font-size:115%; ">
          <a href="home.php" class="navbar-brand">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="indreg.php" class="nav-link">IndustrialRegistration</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Attendance</a>
              </li>
              <li class="nav-item">
                <a href="monthrep.php" class="nav-link">MonthlyReport</a>
              </li>
              <li class="nav-item">
                <a href="subtrep.php" class="nav-link">SubmittingOfTechReport</a>
              </li>
              <li class="nav-item">
                <a href="https://rtechvideo.000webhostapp.com/#79b0db" class="nav-link">Defence</a>
              </li>
              <li class="nav-item">
                <a href="guide.php" class="nav-link">Guidance</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link">AboutSIWES</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link">ContactUs</a>
              </li>
            </ul>
          </div>
      </nav>

  </section>


  <!--================= Body Section=================-->
  <section class="bodytext">
      <div class="container">
          <div class="jumbotron">
              <p>
                All services on this portal are restricted, hence, only authenticated users can access them. Please login Students should use their Registration numbers and passwords when login.
             </p>
          </div>

          <div class="jumbotron">
                
          <div style=" padding: 1% 0; width: 60%; margin: auto;">
            <hr>
              <h3>
                 Daily Attendance &#8631;
              </h3>
          </div>
          
          <!--================= Form Section=================-->
           <div class="container">
                  <form class="logform" method="post" action="login.php">
                    <?php include('errors.php'); ?>
                    <div class="d-grid gap-2">
                        <div class="inputmargin">
                          <input type="text" name="regno" placeholder="Reg Number">
                        </div>
                        <div class="inputmargin">
                          <input type="text" name="studname" placeholder="Name of Student">
                        </div>
                        <div class="inputmargin">
                          <input type="datetime-local" name="datetime" placeholder="Date and Time">
                        </div>
                        <!-- <div class="inputmargin">
                          <input type="text" name="latitude" placeholder="Latitude">
                        </div>
                        <div class="inputmargin">
                          <input type="text" name="longitude" placeholder="Longitude">
                        </div> -->
                        
                        <!-- submit button -->
                        <div class="inputmargin">
                          <input type="submit" name="login_user" value="LOGIN" class="btn btn-lg btn-success">
                        </div>
                    </div>
                  </form>
              </div>

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

