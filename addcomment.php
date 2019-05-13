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
                        	  <form style="color:white" role="form" action="addcomment.php" method="post" class="registration-form">
                        	      <div  class="form-group" >
                        	        <div class="form-group">
                        	        <div class="form-group">
                        	        Enter your First Name
									<input type="text" name="form-fname" class="form-password form-control" id="form-password">
                      	        </div>
									<div class="form-group">
                        	        Enter Last Name
									<input type="text" name="form-lname" class="form-lName form-control" id="form-lName">
                      	        </div>
									<label style="font-style:bold;font-size: 20px">Add new comment</label>
                        	        <textarea name="comment" 
				                        				class="form-about-yourself form-control"></textarea>
                      	        </div>
								  <input type ="submit" style="color:black;width:200px" name="add"  value="Add comment" class="form-signup form-control" id="form-signup">
									<br><input type ="submit" style="color:black;width:200px" name="cancel"  value="cancel" class="form-signup form-control" id="form-signup">
                      	      
							  </form>
							</div>
						</div>
                    </div>
            
    		 
	
</body>

  
</html>

<?php
if(isset($_POST['cancel']))
	{
			header("location:user_services.php");
	}
	elseif(isset($_POST['comment']))
	{
	$con=new PDO("mysql:host=localhost;dbname=login","root","");

		 $fName=$_POST['form-fname'];
		 $lName=$_POST['form-lname'];
		 $comment=$_POST['comment'];
		 
		if($fName=='')
		{
			echo"<script>alert('please enter First Name')</script>";
			exit();
		}
		if($lName=='')
		{
			echo"<script>alert('please enter Last Name')</script>";
			exit();
		}
		if($comment=='')
		{
			echo"<script>alert('please enter comment')</script>";
			exit();
		}
		else
		{
			$select=$con->prepare("insert into comments(uFName,uLName,comment) value('$fName','$lName','$comment')");
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				echo"<script>alert('Comment added successfully')</script>";
		}
	}
?>