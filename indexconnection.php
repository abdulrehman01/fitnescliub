<?php
session_start();
if($_POST['Login'])
{
try
{
	if($_POST['email']=='' or $_POST['password']=='')
	{
		
				?>
				<script>
				alert('Please fill all the feilds');
				window.open('index.php','_self');
				</script>
				<?php
	}
	else
	{
		$con=new PDO("mysql:host=localhost;dbname=login","root","");
			
			$uName=$_POST['email'];
			$pass=$_POST['password'];
			$select=$con->prepare("SELECT * From admin WHERE email='$uName' AND pass='$pass'");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			$data=$select->fetch();
			if($data['email']==$uName AND $data['pass']==$pass)
			{
				$_SESSION['fName']=$data['fName'];
				$_SESSION['lName']=$data['lName'];		
					header("location:admin_home.php");
			}
			else
			{
				$select=$con->prepare("SELECT * From user WHERE email='$uName' AND pass='$pass'");
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				$data=$select->fetch();
				if($data['email']==$uName AND $data['pass']==$pass)
				{
					
				$_SESSION['fName']=$data['fName'];
				$_SESSION['lName']=$data['lName'];
					header("location:user_home.php");
				}
				elseif($data['email']!=$uName AND $data['pass']!=$pass)
				{
				?>
				<script>
				alert('Invalid email or password');
				window.open('index.php','_self');
				</script>
				<?php
				}
			}
		
		
	}
}
	catch(PDOException $e)
	{
		echo "Error" .$e->getMessage();
	}
	
}
if($_POST['signup'])
{
		$con=new PDO("mysql:host=localhost;dbname=login","root","");

	 $fname=$_POST['form-first-name'];
	 $lname=$_POST['form-last-name'];
	$pass=$_POST['form-password'];
	$email=$_POST['form-email'];
	$about=$_POST['form-about-yourself'];
	
	if($fname=='')
	{       ?>
		<script>alert('please enter your First name');
window.open('index.php','_self');
</script>
               <?php		

	}
	elseif($lname=='')
	{        ?>
		<script>alert('please enter your Last name');
window.open('index.php','_self');
</script>
		<?php
	}
	elseif($email=='')
	{?>
		<script>alert('please enter your email');
window.open('index.php','_self');
</script>
	<?php	
	}
	elseif($pass=='')
	{?>
	<script>alert('please enter your password');
window.open('index.php','_self');
</script>
	<?php
	}
	else
	{
		$select=$con->prepare("insert into requests(fName,lName,pass,email,about) value('$fname','$lname','$pass','$email','$about')");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			?>
	<script>alert('Signup request send successfully');
window.open('index.php','_self');
</script>
	<?php
	}
}
?>