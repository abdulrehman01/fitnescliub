<?php
session_start();
?>

<!DOCTYPE html>

<?php
	$con=new PDO("mysql:host=localhost;dbname=login","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$select=$con->query("SELECT * From appointments");
		$r=0;	
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
	<body style="background-image:url(images/banner4.jpg);color:black">
							<br><br>
							<table style="border:1px solid black;font-style:bold;font-size: 20px;color:white">
								<tr style="border:1px solid black">
									<th style="border:1px solid black"> Sr no. </th>
									<th style="border:1px solid black"> Name </th>
									<th style="border:1px solid black"> Email </th>
									<th style="border:1px solid black"> Subject </th>
									<th style="border:1px solid black"> Message </th>
									
								<?php
								foreach($select as $row)
								{
								echo"</tr>";
								$r++;
								echo"<td> " .$r."</td>";
								echo"<td> ".$row['name']." </td>";
								echo"<td> ".$row['email']." </td>";
								echo"<td> ".$row['subject']." </td>";
								echo"<td> ".$row['message']." </td>";
								
								
								}
								?>
								
							  </table>
							  
								<br><br><form method="post" action="admin_services.php">
						<input style="width:1px;align-text:center" type ="submit" name="back"  value="back">
							</form>
						
	
</body>

  
</html>