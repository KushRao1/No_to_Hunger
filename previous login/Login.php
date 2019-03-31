/*<?php 
session_start();
error_reporting(0);
// if(!empty($_SESSION['data']))
// {
	// header('Location: http://localhost/inktm/index.php');
// }
include "config.php";
 
			// if(isset($_GET['lo']))
			// {
				// echo "<script>
						// alert('Successfully logout. Have a nice time.');
						// window.location.href='http://localhost/dating/login.php';
						// </script>";
			// }
		



 	if(isset($_POST['login_submit']))
	{
		
		$email=$_POST['email'];
		$password=$_POST['password'];
	    
	$sql = "select * from user_data where email='$email' and password='$password' and status=1";
     $result = $conn->query($sql);
   if ($result->num_rows > 0) {
	   
	  
	   
	 $_SESSION['data'] = $result->FETCH_ASSOC();
	   $user_role = $_SESSION['data']['user_role'];
		//print_r($user_role);exit;
		switch ($user_role) {
				case "Donor":
				echo "<script>alert('Login Successfully.');window.location.href='$base_url/user1/index.php';</script>";  
				break;
				case "Receiver":
				echo "<script>alert('Login Successfully.');window.location.href='$base_url/user2/index.php';</script>";  
					break;
				case "Volunteer":
				echo "<script>alert('Login Successfully.');window.location.href='$base_url/user3/index.php';</script>";  
					break;
				default:
				echo "<script>alert('Your role is not matched.');window.location.href='$base_url/user1/index.php';</script>";  
			}
			
   } else {
   		 echo "Invalid details or pay registration fees.";exit;
       }
	}
?>
*/
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">


        <?php include "header.php";?>
		
		

		
		  <div id="fh5co-features"  style="background-image: url(images/cover_bg_2.jpg);background-size:cover;" >
        	<div class="container">
				<div class="row">
					<div class="col-md-3 text-center">
                        
      				</div>
                    <div class="col-md-6 text-center">
                  <br>
							<div class="row"style ="background:#fff; box-shadow: 1px 10px 20px 10px rgba(0, 0, 0, 0.1)">
								<div class="col-md-12 text-center">
                                    <br>
                                    <br>
									<H1 style="color:#000; font-weight:bold;">Login</H1>
                                                                       <hr>
								</div>
								<form action="" method="POST">
                                <div class="col-md-12">
									<!--<div class="form-group">
                                        <br>
										<input type="text" class="form-control" placeholder="Username">
									</div>-->
								</div>
								<div class="col-md-12">
									<div class="form-group">
                                        <br>
										<input type="Email" name="email" class="form-control" placeholder="Email ">
									</div>
								</div>
                                <div class="col-md-12">
									<div class="form-group">
                                        <br>
										<input type="password" name="password" class="form-control" placeholder="Password">
									</div>
								</div>
								<!--<div class="col-md-12">
                                    <br>
                                   
									<select name="User_Type"style="height: 50px; width: 100%; padding: 15px;  border: 1px solid rgba(0, 0, 0, 0.1);margin-bottom:15px;">
                                        
                                           <option value="Donor">Donor</option>
                                           <option value="Reciever">Reciver</option>
                                           <option value="Volunteer">Volunteer</option>
                                    </select>
								</div>-->
                                <br>
                                <br>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="login_submit" value="Submit" class="btn btn-primary">
									</div>
                                    <hr>
								</div>
								</form>
                                <br>
                                <br>
                                <hr>
                                <a href=" #">Forget  Your Password?</a>
                                <br>
                                <br>
                                <br>
                                
                            
							</div>
						  
      				</div>
                    <div class="col-md-3 text-center">
                        
      				</div>
			    </div>
            </div>
           </div>
		
		
		

		
		
		<!-- fh5co-content-section -->

		
<?php include "footer.php";?>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

