<?php
session_start();
if(!$_SESSION['fName'])
{
header("location:index.php");
}
echo "<h4>Welcome ".ucfirst($_SESSION['fName']." ".$_SESSION['lName']."<h4>");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fitness Club</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body  style="background-image:url(images/banner.jpg);color:white">
 <div  class="container-fluid"  > 
    <p><!-- Brand and toggle get grouped for better mobile display -->
    </p>
    <div  class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a  class="navbar-brand" href="#"><img src="images/Capture.jpg" class="img-responsive" style="width:140px; margin-top:-16px"></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    
    
     <!--navbar-left side-->
    <div  style="visibility:0.8px" class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin_home.php" style="color:Black">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="admin_services.php" style="color:Black">Services</a></li>
        <li><a href="admin_doctors.php" style="color:Black">Doctors</a></li>
       
          
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-left">
        
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:Black">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="viewmail.php">Mailbox </a></li>
            <li><a href="adduser.php">Add new user</a></li>
            <li><a href="viewuser.php">View all users</a></li>
            <li><a href="viewcomment.php">View comments</a></li>
            <li><a href="viewrequests.php">Registration request</a></li>
            <li><a href="adminchangepassword.php">Change Password</a></li>
            
            <li><a href="logout.php" name="logout">Logout</a></li>
          </ul>
        </li>
      </ul>
      <!--/navbar-left side-->
      <!-- searchbar-->
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <!--/searchbar-->
      

 <!--service-->
	<section id="service" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h2 style="padding-left:70px" class="ser-title">Our Services</h2>
                     
					<hr class="botm-line">
                     <img src="images/Capture.jpg" width="465" height="400" alt=""/>
			  
                 </div>
				<div class="col-md-3 col-sm-3">
					<div class="service-info">
                   
						<div class="icon">
							<i class="fa fa-stethoscope"></i>
						</div>
						<div class="icon-info">
                     
							<h2><a href="bmi.php" style="color:white"> BMI(Body Mass Index) </a></h2>
							<p>Calulate the hight and age of user and then guide about the exercise and diet plan.</p> 
                            
						</div>
					</div>
                   
					<div class="service-info">
						<div class="icon">
							<i class="fa fa-medkit"></i>
						</div>
						<div class="icon-info">
							<h2 ><a href="addvideo.php" style="color:white"> Update Exercise Videos </a></h2>
							<p>videos cab be download etc....</p>
						</div>
					</div>
					
					<div class="service-info">
						<div class="icon">
							<i class="fa fa-medkit"></i>
						</div>
						<div class="icon-info">
							<h2><a href="addsupliment.php" style="color:white"> Update Supliments </a></h2>
							<p>Provide the Supliments about the patient query.</p>
						</div>
					</div>
					<div class="service-info">
						<div class="icon">
							<i class="fa fa-medkit"></i>
						</div>
						<div class="icon-info">
							<h2><a href="addweightloss.php" style="color:white"> Update Weightloss techniques </a></h2>
							<p>Provide the Weightloss techniques about the patient query.</p>
						</div>
					</div>
				</div>
                
				<div class="col-md-3 col-sm-3">
					<div class="service-info">
						<div class="icon">
							<i class="fa fa-user-md"></i>
						</div>
						<div class="icon-info">
						<a href="addhealthtips.php">	<h2 style="color:white"> Update Health Tips</h2></a>
							<p>Provide the health tips about the patient query.</p>
						</div>
					</div>
							<div class="service-info">
						<div class="icon-info">
					<a href="addnutrition.php">		<h2 style="color:white">Update Nutritions</h2></a>
							<p>Provide the Nutritions about the patient query.</p>
						</div>
						</div>
						<div class="service-info">
						<div class="icon-info">
					<a href="viewappointment.php">		<h2 style="color:white"> View Appointment</h2></a>
							<p>Approve an appointment</p>
						</div>
						</div>
					</div>
					
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--services-->
    </body>
    </html>