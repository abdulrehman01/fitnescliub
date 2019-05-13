<?php
session_start();
?>

<!DOCTYPE html>

<?php
	$con=new PDO("mysql:host=localhost;dbname=login","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$select=$con->query("SELECT * From supliments");
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
		border:1px solid white;
		color:white;
	}
	</style>
  </head>
  
  	<!--banner-->
	<body style="background-image:url(images/banner4.jpg)">
							<br><br>
							<table style="border:1px solid white;font-style:bold;font-size: 20px;color:white">
								<tr style="border:1px solid white">
									<th style="border:1px solid white"> Sr no. </th>
									<th style="border:1px solid white"> Brand Name </th>
									<th style="border:1px solid white"> Price </th>
									<th style="border:1px solid white"> Supliment </th>
									
								<?php
								foreach($select as $row)
								{
								echo"</tr>";
								$r++;
								echo"<td>".$r."</td>";
								echo"<td>".$row['brandname']."</td>";
								echo"<td>".$row['price']."</td>";
								echo"<td>".$row['supliments']."</td>";
								
								}
								?>
								
							  </table>
							  
								<br><br><form method="post" action="user_services.php">
						<input style="width:1px;align-text:center" type ="submit" name="back"  value="back">
							</form>
						
	
</body>

  
</html>