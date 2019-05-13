<?php
session_start();
?>

<!DOCTYPE html>

<?php
	$con=new PDO("mysql:host=localhost;dbname=login","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$select=$con->query("SELECT * From requests");
				
?>
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
	<style>
	td
	{
		border:1px solid black;
		color:white;
	}
	</style>
  </head>
  
  	<!--banner-->
	<body style="background-image:url(images/banner4.jpg)">
							<form method="post" action="viewrequests.php">
							<br>
							<div>
							<div class="col-sm-0">
                   <input  type="text" name="email" placeholder="Enter email to approve" ></input>
							</div>
							</div>
							<br><br>
							<input style="width:1px;align-text:center;" type ="submit" name="submit"  value="Approve">
							<table style="border:1px solid black;font-style:bold;font-size: 20px;color:white">
								<tr style="border:1px solid black">
									<th style="border:1px solid black"> First Name </th>
									<th style="border:1px solid black"> Last Name </th>
									<th style="border:1px solid black">Email</th>
									<th style="border:1px solid black">Password</th>
									<th style="border:1px solid black">About</th>
									
							  
								<?php
								foreach($select as $row)
								{
								echo"</tr>";
								echo"<td>".$row['fName']."</td>";
								echo"<td>".$row['lName']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['pass']."</td>";
								echo "<td>".$row['about']."</td>";
								
								
								}
								?>
										<input style="width:1px;align-text:center" type ="submit" name="back"  value="Cancel">
					
							  </table>
							  </form>
					
						
	
</body>

  
</html>
<?php
if(isset($_POST['back']))
		{
			header("location:admin_services.php");
		}
	elseif(isset($_POST['submit']))
		{		
	if($_POST['email']=='')
	{
		echo"<script>alert('please enter email to approve')</script>";
		exit();
	}
	else
	{
		try
		{		
				$con=new PDO("mysql:host=localhost;dbname=login","root","");
				$email=$_POST['email'];
				
				$select=$con->prepare("SELECT * From requests WHERE email='$email'");
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				$data=$select->fetch();
				if($data['email']==$email)
				{
					$fname=$data['fName'];
					$lname=$data['lName'];
					$pass=$data['pass'];
					$about=$data['about'];
					
					$select=$con->prepare("insert into user(fName,lName,pass,email,about) value('$fname','$lname','$pass','$email','$about')");
								$select->setFetchMode(PDO::FETCH_ASSOC);
								$select->execute();
					
					$select=$con->prepare("DELETE From requests where email='$email'");
								$select->setFetchMode(PDO::FETCH_ASSOC);
								$select->execute();
						
						
						$to=$email;
						$from="From: Healthcareatyourdest.000webhostapp.com";
						$subject="Welcome to health care at your desk";
						$text="Welcome ".$fname." ".$lname." to Health Care at your desk.You have successfully registered.Your email is ".$email." and password is ".$pass;					
						mail($to,$subject,$text,$from);	
						
						
						
					echo"<script>alert('New user added successfully')</script>";

				}
				else
				{
					echo"<script>alert('Wrong Email entered')</script>";
				}
		}	
		catch(PDOException $e)
		{
			echo "Error" .$e->getMessage();
		}
	}
}
?>