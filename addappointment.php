<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--contact-->
<body  style="color:white;background-image:url(images/banner.jpg)" >
	<section  id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="ser-title">Contact us</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-4 col-sm-4">
			      <h3>Contact Info</h3>
			      <div class="space"></div>
			      <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Lahore<br>
			        pakistan</p>
			      <div class="space"></div>
			      <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>FitnessClub@gmail.com</p>
				<div class="col-md-8 col-sm-8 ">
					<div class="contact-info">
							<h3 class="cnt-ttl">Having Any Query! Or Book an appointment</h3>
							<div class="space"></div>
                            <form action="addappointment.php" method="post" role="form" class="contactForm">
							    <div class="form-group">
                                    <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                
								<div class="form-action">
									<button name="submit" type="submit" class="btn btn-form" style="color:black">Send Message</button>
								</div>
								<br>
								<div class="form-action">
									<button name="back" type="submit" class="btn btn-form" style="color:black">Back</button>
								</div>		
							</form>
								<br>
								
					</div>
				</div>
			</div>
		</div>
	
</div>
</section>
	<!--/ contact-->
</body>
</html>

<?php
	if(isset($_POST['back']))
		{
			header("location:user_services.php");
		}
	elseif(isset($_POST['submit']))
		{
		$con=new PDO("mysql:host=localhost;dbname=login","root","");
		$name=$_POST['name'];
		 $email=$_POST['email'];
		 $subject=$_POST['subject'];
		 $message=$_POST['message'];
		 
		if($name=='')
		{
			echo"<script>alert('please enter Name')</script>";
			exit();
		}
		if($email=='')
		{
			echo"<script>alert('please enter email')</script>";
			exit();
		}
		if($subject=='')
		{
			echo"<script>alert('please enter subject')</script>";
			exit();
		}
		if($message=='')
		{
			echo"<script>alert('please enter message')</script>";
			exit();
		}
		else
		{
			$select=$con->prepare("insert into appointments(name,email,subject,message) value('$name','$email','$subject','$message')");
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				echo"<script>alert('Appointment request sent successfully')</script>";
		}
	}
?>