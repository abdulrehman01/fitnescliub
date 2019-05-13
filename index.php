<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fitness Club</title>
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
    			  
<a class="navbar-brand" href="#"><img src="images/Capture.jpg" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>                   
         
	
		 <form style="width:1200px;padding-left:1000px;color:white" name="login" method="post" action="indexconnection.php">
               <label class="sr-only" for="form-email">Email</label>
			   <br>
                        	        <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                      	        </div>
				<br>
								<div class="form-group">
                        	        <label class="sr-only" for="form-password">Password</label>
                        	        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                      	        </div>
								<div class="form-group">
                        	        <input type ="Submit" style="color:black" name="Login"  value="Login" class="form-login form-control" id="form-login">
									
								</div>
				
               
 

            </form>
           
						<div class="banner-text text-center">
							
							<h3 style="color:white;font-size:40px;font-style:Italic" class="white">Fitness Club!!</h3>
							   
                 
   			      <!--jghbjk-->
                  <div><br>
	                  <div style="color:white;text-indent:500px" >
	                       <h3>Sign up now</h3>
	                            		<h5>Fill in the form below to get instant access</h5>
	                        		</div>
	                        		
	                            </div>
    			   <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-5"></div>
							<div class="col-sm-5">
                        	  <form role="form" action="indexconnection.php" method="post" class="registration-form">
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
                        	        <textarea name="form-about-yourself" placeholder="About yourself..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                      	        </div>
								  <input type ="submit" style="color:black;width:200px" name="signup"  value="signup" class="form-signup form-control" id="form-signup">
                      	      </form>

							</div>
						</div>
                    </div>
            
    		 
	
</body>

  
</html>