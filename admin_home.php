<?php
session_start();
if(!$_SESSION['fName'])
{
header("location:index.php");
}
echo "<h4>Welcome ".ucfirst($_SESSION['fName']." ".$_SESSION['lName']."<h4>");


	$con=new PDO("mysql:host=localhost;dbname=login","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$select=$con->query("SELECT * From comments");
		$r=0;	
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
<style>
td
	{
		border:1px solid white;
		color:white;
	}
</style>	

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
		</div>
		</div>
	  						<br><br><br><br><br><br><br><br><br>
							<table style="border:1px solid white;font-style:bold;font-size: 20px;">
								<tr style="border:1px solid white">
									<th style="border:1px solid white"> Sr no. </th>
									<th style="border:1px solid white"> User First Name </th>
									<th style="border:1px solid white"> User Last Name </th>
									<th style="border:1px solid white"> Comments </th>
									
								<?php
								foreach($select as $row)
								{
								echo"</tr>";
								$r++;
								echo"<td>".$r."</td>";
								echo"<td>".$row['uFName']."</td>";
								echo"<td>".$row['uLName']."</td>";
								echo"<td>".$row['comment']."</td>";
								
								}
								?>
								
							  </table>
							</form>
	  
	  
    </body>
    </html>