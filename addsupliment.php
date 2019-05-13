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
                        	  <form style="color:white" role="form" action="addsupliment.php" method="post" class="registration-form">
                        	      <div  class="form-group" >
                        	        <div class="form-group">
                        	        <div class="form-group">
                        	        <div class="form-group">
                        	        Enter Brand Name
									<input type="text" name="form-fname" class="form-password form-control" id="form-password">
                      	        </div>
									<div class="form-group">
                        	        Enter Price
									<input type="text" name="form-lname" class="form-lName form-control" id="form-lName">
                      	        </div>
									<label style="font-style:bold;font-size: 20px">Add new Supliment</label>
                        	        <textarea name="mail" 
				                        				class="form-about-yourself form-control"></textarea>
                      	        </div>
								  <input type ="submit" style="color:black;width:200px" name="submit"  value="Add Supliment" class="form-signup form-control" id="form-signup">
                      	   
							  </form>
							  <br>
							  <form role="form" action="admin_services.php" method="post" class="registration-form">
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

$con=new PDO("mysql:host=localhost;dbname=login","root","");
	$bName=$_POST['form-fname'];
	 $price=$_POST['form-lname'];
	 $text=$_POST['mail'];
	 if($bName=='')
	{
		echo"<script>alert('please enter Brand Name')</script>";
		exit();
	}
	if($price=='')
	{
		echo"<script>alert('please enter Price')</script>";
		exit();
	}
	if($text=='')
	{
		echo"<script>alert('please enter Suppliment')</script>";
		exit();
	}
	else
	{
		$select=$con->prepare("insert into supliments(brandname,price,supliments) value('$bName','$price','$text')");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			echo"<script>alert('Supliment added successfully')</script>";
	}
}
?>