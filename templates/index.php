<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Premedic-Chronic Kidney Analysis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="{{ url_for('static', filename='css/open-iconic-bootstrap.min.css') }}" >
    <link rel="stylesheet"  href="{{ url_for('static', filename='css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ url_for('static', filename='css/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/owl.theme.default.min.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/magnific-popup.css') }}" >

    <link rel="stylesheet" href="{{ url_for('static', filename='css/aos.css') }}" >

    <link rel="stylesheet" href="{{ url_for('static', filename='css/ionicons.min.css') }}" >

    <link rel="stylesheet" href="{{ url_for('static', filename='css/bootstrap-datepicker.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/flaticon.css') }}" >
    <link rel="stylesheet" href="{{ url_for('static', filename='css/icomoon.css') }}">
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="http://premediccare.rf.gd/mainindex-user.php"><i class="flaticon-pharmacy"></i><span>Pre</span>Medic Care</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="http://premediccare.rf.gd/mainindex-user.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/about-user.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/departments-user.php" class="nav-link">Departments</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/doctor-user.php" class="nav-link">Doctors</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/blog-user.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="http://premediccare.rf.gd/contact-user.php" class="nav-link">Contact</a></li>
        </ul>
        <div class="dropdown" style="float:right;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php $_COOKIE['Name'];?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Dashboard</a>
    <a class="dropdown-item" href="http://premediccare.rf.gd/logout.php" style="color:red;">Log Out &nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></a>
  </div>
</div>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('{{ url_for('static', filename='images/kidney.jpg') }}'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="http://premediccare.rf.gd/indexmain-user.php">Home</a></span></p>
            <h3 class="mb-3 bread">Kidney-Department</h3>
          </div>
        </div>
      </div>
    </div>

   <section class="ftco-section contact-section ftco-degree-bg" style="height: 2500px;background-color:AntiqueWhite">
   
      <div class="container col-lg-6" >
          
          
            <div class="w3-card-4" style="max-width:550px;margin: auto;background-color:White">
              <div class="w3-container w3-black">
                <h2 style="color:white;">Chronic Kidney Analysis</h2>
              </div>
              <form class="w3-container" action="{{ url_for('predict')}}"method="post" >
                <br>
                <p>      
                <label class="w3-text-black"><b>Age</b></label>
                <input class="w3-input w3-border w3-sand" name="Age" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>BloodPressure</b></label>
                <input class="w3-input w3-border w3-sand" name="BloodPressure" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>BGR</b></label>
                <input class="w3-input w3-border w3-sand" name="BGR" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>BU</b></label>
                <input class="w3-input w3-border w3-sand" name="BU" type="text" required="required">     </p>
				
               <p>      
                <label class="w3-text-black"><b>Sc</b></label>
                <input class="w3-input w3-border w3-sand" name="Sc" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>Sot</b></label>
                <input class="w3-input w3-border w3-sand" name="Sot" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>Pot</b></label>
                <input class="w3-input w3-border w3-sand" name="Pot" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>Hemo</b></label>
                <input class="w3-input w3-border w3-sand" name="Hemo" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>Pcv</b></label>
                <input class="w3-input w3-border w3-sand" name="Pcv" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>Wbcc</b></label>
                <input class="w3-input w3-border w3-sand" name="Wbcc" type="text" required="required">     </p>
               <p>      
                <label class="w3-text-black"><b>Rbcc</b></label>
                <input class="w3-input w3-border w3-sand" name="Rbcc" type="text" required="required">     </p>
                              <p>
                <label class="w3-text-black"><b>Sg</b></label>
                <select class="w3-select w3-border w3-sand" name="sg" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="1.005">1.005</option>
                <option value="1.010">1.010</option>
				 <option value="1.015">1.015</option>
				  <option value="1.020">1.020</option>
				   <option value="1.025">1.025</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>AL</b></label>
                <select class="w3-select w3-border w3-sand" name="AL" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 0</option>
                <option value="1">Type 1</option>
				 <option value="2">Type 2</option>
				  <option value="3">Type 3</option>
				   <option value="4">Type 4</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Su</b></label>
                <select class="w3-select w3-border w3-sand" name="Su" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="0">Type 0</option>
                <option value="1">Type 1</option>
				  <option value="2">Type 2</option>
				    <option value="3">Type 3</option>
					  <option value="4">Type 4</option>
					    <option value="5">Type 5</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Rbc</b></label>
                <select class="w3-select w3-border w3-sand" name="Rbc" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="0">Normal</option>
                <option value="1">Abnormal</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>pc</b></label>
                <select class="w3-select w3-border w3-sand" name="pc" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="0">Normal</option>
                <option value="1">Abnormal</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Pcc</b></label>
                <select class="w3-select w3-border w3-sand" name="Pcc" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="0">Present</option>
               <option value="1">Not Present</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Ba</b></label>
                <select class="w3-select w3-border w3-sand" name="Ba"required="required" >
                <option value="" disabled selected>Select Option</option>
                <option value="0">Present</option>
                <option value="1">Not Present</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Htn</b></label>
                <select class="w3-select w3-border w3-sand" name="Htn" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="1">NO</option>
                <option value="0">YES</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Dm</b></label>
                <select class="w3-select w3-border w3-sand" name="cp" required="required" >
                <option value="" disabled selected>Select Option</option>
                <option value="1">NO</option>
                <option value="0">YES</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Cad</b></label>
                <select class="w3-select w3-border w3-sand" name="Cad" required="required" >
                <option value="" disabled selected>Select Option</option>
                <option value="1">NO</option>
                <option value="0">YES</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Appet</b></label>
                <select class="w3-select w3-border w3-sand" name="cp"  required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="1">POOR</option>
                <option value="0">GOOD</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Pe</b></label>
                <select class="w3-select w3-border w3-sand" name="Pe" required="required" >
                <option value="" disabled selected>Select Option</option>
                <option value="1">NO</option>
                <option value="0">YES</option>
                </select>
                </p>
				                <p>
                <label class="w3-text-black"><b>Ane</b></label>
                <select class="w3-select w3-border w3-sand" name="Ane" required="required">
                <option value="" disabled selected>Select Option</option>
                <option value="1">NO</option>
                <option value="0">YES</option>
                </select>
                </p>
            
                <p>
                <button type="submit"class="w3-btn w3-black">Analyse now</button></p>
              </form>
            </div>
            </div>
      {{ prediction_text }}
    </section>
		<footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Premedic Care</h2>
              <p>Far far away, behind the word mountains, far from the countries We're here to provide you good care of your health.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="http://premediccare.rf.gd/mainindex-user.php" class="py-2 d-block">Home</a></li>
                <li><a href="http://premediccare.rf.gd/about-user.php" class="py-2 d-block">About</a></li>
                <li><a href="http://premediccare.rf.gd/departments-user.php" class="py-2 d-block">Departments</a></li>
                <li><a href="http://premediccare.rf.gd/doctors-user.php" class="py-2 d-block">Doctors</a></li>
                <li><a href="http://premediccare.rf.gd/blog-user.php" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">King's Palace 9(a), Kiit University, Patia, Bhubaneshwar,Odisha-751024</span></li>
	                <li><a href="tel:+91 7735866609"><span class="icon icon-phone"></span><span class="text">+91 7735866609</span></a></li>
	                <li><a href="mailto:piyushsinghpk21@yahoo.com"><span class="icon icon-envelope"></span><span class="text">piyushsinghpk21@yahoo.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This page is developed and maintained with<i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Premedic Team</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <!-- Main JS-->
   

  <script src={{ url_for('static', filename='js/jquery.min.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery-migrate-3.0.1.min.js') }}></script>
  <script src={{ url_for('static', filename='js/popper.min.js') }}></script>
  <script src={{ url_for('static', filename='js/bootstrap.min.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.easing.1.3.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.waypoints.min.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.stellar.min.js') }}></script>
  <script src={{ url_for('static', filename='js/owl.carousel.min.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.magnific-popup.min.js') }}></script>
  <script src={{ url_for('static', filename='js/aos.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.animateNumber.min.js') }}></script>
  <script src={{ url_for('static', filename='js/bootstrap-datepicker.js') }}></script>
  <script src={{ url_for('static', filename='js/jquery.timepicker.min.js') }}></script>
  <script src={{ url_for('static', filename='js/scrollax.min.js') }}></script>
  
  <script src={{ url_for('static', filename='js/google-map.js') }}></script>
  <script  src={{ url_for('static', filename='js/main.js') }}></script>
    
  </body>
</html>




































