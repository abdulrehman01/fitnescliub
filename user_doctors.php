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
<body style="background-image:url(images/banner.jpg);color:white">
<div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#"><img src="images/Capture.jpg" class="img-responsive" style="width:140px; margin-top:-16px;"></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    
    
     <!--navbar-left side-->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="user_home.php" style="color:Black">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="user_services.php" style="color:Black">Services</a></li>
        <li><a href="user_doctors.php" style="color:Black">Doctors</a></li>
       
          
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-left">
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:Black">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <<li><a href="addmail.php">Mail to Admin</a></li>
            <li><a href="addcomment.php">Comments</a></li>
            <li><a href="about.php">About</a></li>
           
            <li><a href="adminchangepassword.php">Change Password</a></li>
            
            <li><a href="logout.php" name="logout">Logout</a></li>
          </ul>
        </li>
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
      

<!--doctor team-->
	<section id="doctor-team" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="ser-title" style="padding-left:70px">Meet Our Doctors!</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
			      <div class="thumbnail"> 
			      	<img src="img/doctor1.jpg" alt="..." class="team-img">
			        <div class="caption">
			          <h3>Jessica Wally</h3>
			          <p>Doctor</p>
			         
			        </div>
			      </div>
			    </div>
			    <div class="col-md-3 col-sm-3 col-xs-6">
			      <div class="thumbnail"> 
			      	<img src="img/doctor2.jpg" alt="..." class="team-img">
			        <div class="caption">
			          <h3>Iai Donas</h3>
			          <p>Doctor</p>
			         
			        </div>
			      </div>
			    </div>
			    <div class="col-md-3 col-sm-3 col-xs-6">
			      <div class="thumbnail"> 
			      	<img src="img/doctor3.jpg" alt="..." class="team-img">
			        <div class="caption">
			          <h3>Amanda Denyl</h3>
			          <p>Doctor</p>
			         
			        </div>
			      </div>
			    </div>
			    <div class="col-md-3 col-sm-3 col-xs-6">
			      <div class="thumbnail"> 
			      	<img src="img/doctor4.jpg" alt="..." class="team-img">
			        <div class="caption">
			          <h3>Jason Davis</h3>
			          <p>Doctor</p>
			          
			        </div>
			      </div>
			    </div>
			</div>
		</div>
	</section>
	<!--/ doctor team-->
    
</body>
</html>
