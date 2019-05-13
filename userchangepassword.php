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
	
	
           <br><br><br><br><br>
    			   <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-3"></div>
							<div  class="col-sm-4">
                        	  <form style="color:white" role="form" action="userchangepassword.php" method="post" class="registration-form">
                        	      <div  class="form-group" >
                        	        <div class="form-group">
                        	        Enter your First name
									<input type="text" name="form-fname" class="form-password form-control" id="form-password">
                      	        </div>
									<div class="form-group">
                        	        Enter old Password
									<input type="password" name="form-old-password" class="form-password form-control" id="form-password">
                      	        </div>
								  <div class="form-group">
                        	        Enter new Password
									<input type="password" name="form-new-password" class="form-password form-control" id="form-password">
                      	        </div>
								  <input type ="submit" style="color:black;width:200px" name="submit"  value="Change Password" class="form-signup form-control" id="form-signup">
                      	   <br>
							  <input type ="submit" style="color:black;width:200px" name="back"  value="cancel" class="form-signup form-control" id="form-signup">
                      	      
							  </form>
							  
							  </div>
						</div>
                    </div>
            
    		 
	
</body>

  
</html>
<?php
if(isset($_POST['back']))
		{
			header("location:user_services.php");
		}
	elseif(isset($_POST['submit']))
		{	
	try
	{
		if($_POST['form-fname']=='' or $_POST['form-new-password']=='' or $_POST['form-old-password']=='')
		{
			
			echo "<script>alert('Please fill all the feilds')</script>";
		}
		else
		{
				$con=new PDO("mysql:host=localhost;dbname=login","root","");
				$fname=$_POST['form-fname'];			
				$oldpass=$_POST['form-old-password'];
				$newpass=$_POST['form-new-password'];
				
				
				$select=$con->prepare("SELECT * From user WHERE pass='$oldpass' AND fName='$fname'");
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				$data=$select->fetch();
				if($data['pass']==$oldpass)
				{
					
					$select=$con->prepare("update user set pass='$newpass' where pass='$oldpass'AND fName='$fname'");
					$select->setFetchMode(PDO::FETCH_ASSOC);
					$select->execute();
					echo"<script>alert('password updated successfully successfully')</script>";
				}
				else
				{
						echo"<script>alert('old password wrong')</script>";
				}
		}
	}
		catch(PDOException $e)
		{
			echo "Error" .$e->getMessage();
		}
	}
?>