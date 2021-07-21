<?php include 'd.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Upsilion Academy Student's Bio-Data Page</title>
  <link rel="stylesheet" type="text/css" href="assets/sweetalert/sweetalert.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="return confirm('The reason for data you submit is to keep in touch with you as our student and for future job opportunities & recommendations. It is our tradition @UpsilonAcademy to always be on the lookout for the success of every student/client under our tutorship.')" >
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form id="dozie">
				<!-- <img src="img/avatar.svg"> -->
				<h2 style="font-size: 0.9rem" class="title">Upsilion Student's Bio-Data Form</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5 style="font-size: 0.7rem">Full name</h5>
           		   		<input type="text" class="input" name="fullname" required="required">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i"> 
           		    	<i class="fas fa-home"></i>
           		   </div>
           		   <div class="div">
           		    	<h5 style="font-size: 0.7rem">Address</h5>
           		    	<input type="text" class="input" name="address" required="required">
            	   </div>
            	</div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-phone"></i>
                 </div>
                 <div class="div">
                    <h5 style="font-size: 0.7rem">Phone Number</h5>
                    <input type="number" class="input" name="phonenumber" required="required">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-school"></i>
                 </div>
                 <div class="div">
                    <h5 style="font-size: 0.7rem">Faculty</h5>
                    <input type="text" class="input" name="faculty" required="required">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-bars"></i>
                 </div>
                 <div class="div">
                    <h5 style="font-size: 0.7rem">Level</h5>
                    <input type="number" class="input" name="level" required="required">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-calendar"></i>
                 </div>
                 <div class="div">
                    <h5 style="font-size: 0.7rem">Date of Birth</h5>
                    <input type="date" class="input" name="dob" required="required">
                 </div>
              </div>
            	<!-- <input id="somebtn" type="submit" class="btn" value="Submit"> -->
              <button id="somebtn" type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="assets/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>
