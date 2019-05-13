<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health Evalution System</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- ===  header === -->
  </head>
  
  	<!--banner-->
	<body style="background-image:url(images/banner.jpg)">
	
	
           
				  <div><br><br><br><br><br><br>
	                  <div style="color:white;text-align:center" >
	                       <h3>Add new User</h3>
	                            		<h5>Fill in the form below to give instant access to new user</h5>
	                        		</div>
	                        		
	             </div>
    			   <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-3"></div>
							<div class="col-sm-4">
                        	  <form id="MyForm" role="form" action="adduser.php" method="post" class="registration-form">
                        	      <div class="form-group">
                        	        <label class="sr-only" for="form-first-name">First name</label>
                        	        <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                      	        </div>
                        	      <div class="form-group">
                        	        <label class="sr-only" for="form-last-name">Last name</label>
                        	        <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                      	        </div>
								
                        	      <div class="form-group">
                        	        <label class="sr-only" for="form-email">Email</label>
                        	        <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                      	        </div>
								  <div class="form-group">
                        	        <label class="sr-only" for="form-password">Password</label>
                        	        <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                      	        </div>
                        	      <div class="form-group">
                        	        <label class="sr-only" for="form-about-yourself">About yourself</label>
                        	        <textarea name="form-about-yourself" placeholder="About yourself..."class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                      	        </div>
								  <input type ="submit" style="color:black;width:200px" name="submit"  value="Add User" class="form-signup form-control" id="form-signup">
                      	   
							  </form>
							  <br>
                                <span id="result"></span>
							  <br>
							  <form role="form" action="admin_services.php" method="post" class="registration-form">
								<input type ="submit" style="color:black;width:200px" name="back"  value="cancel" class="form-signup form-control" id="form-signup">
                      	      
							  </form>
							</div>
						</div>
                    </div>
            
    		 
	<script src="script.js" type="text/javascript"></script>
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

	 $fname=$_POST['form-first-name'];
	 $lname=$_POST['form-last-name'];
	$pass=$_POST['form-password'];
	$email=$_POST['form-email'];
	$about=$_POST['form-about-yourself'];
	if($fname=='')
	{
		echo"<script>alert('please enter your First name')</script>";
		exit();
	}
	if($lname=='')
	{
		echo"<script>alert('please enter your Last name')</script>";
		exit();
	}
	if($email=='')
	{
		echo"<script>alert('please enter your email')</script>";
		exit();	
	}
	if($pass=='')
	{
	echo"<script>alert('please enter your password')</script>";
		exit();
	}
	else
	{
		$select=$con->prepare("insert into user(fName,lName,pass,email,about) value('$fname','$lname','$pass','$email','$about')");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			echo"<b>New user added successfully</b>";
	}
}
?>