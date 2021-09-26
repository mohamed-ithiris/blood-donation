<?php session_start();?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Blood Donation - Login / Registration</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">


	<!-- Favicons -->
	<link href="../assets/img/favicon.png" rel="icon">
  	<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css"> 
	<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">  	
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="particles-js" class="main-form-box">
	<div class="md-form">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="panel panel-login">
						<div class="logo-top">
						<h1 class="logo me-auto"><a href="index.html"> <img src="../assets/img/favicon.png" alt=""> Blood Donation</a></h1>
						<b class="text-danger" id="errormsg" style="display:none;">Invalid username or password !!!</b>
						<b class="text-danger" id="usererrormsg" style="display:none;">Username is already exist.!!</b>
						<b class="text-danger" id="notmatch" style="display:none;">Password does not match.!!</b>
						</div>
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-sm-6 col-xl-6">
									<a href="#" class="active" id="login-form-link" onclick="hideerror()">Login</a>
								</div>
								<div class="col-lg-6 col-sm-6 col-xl-6">
									<a href="#" id="register-form-link" onclick="hideerror()">Register</a>
								</div>
								<div class="or">OR</div>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form id="login-form" method="post" role="form" style="display: block;">
										<div class="form-group">
											<label class="icon-lp"><i class="fas fa-user-tie"></i></label>
											<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="" onfocus="hideerror()">
										</div>
										<div class="form-group">
											<label class="icon-lp"><i class="fas fa-key"></i></label>
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 offset-sm-3">
													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12">
													<div class="text-center">
														<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
													</div>
												</div>
											</div>
										</div>
									</form>
									<form id="register-form" method="post" style="display: none;">
										<div class="form-group">
											<label class="icon-lp"><i class="fas fa-user-tie"></i></label>
											<input type="text" name="user" id="user" tabindex="1" class="form-control" placeholder="Username" value="" required="">
										</div>
										<div class="form-group">
											<label class="icon-lp"><i class="fas fa-envelope"></i></label>
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required="">
										</div>
										<div class="form-group">
											<label class="icon-lp"><i class="fas fa-key"></i></label>
											<input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Password" required="">
										</div>
										<div class="form-group">
											<label class="icon-lp"><i class="fas fa-key"></i></label>
											<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required="">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 offset-sm-3">
													<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
</div>

<!-- PHP LOGIN STARTS -->

<?php
          require '../connect.php';
		  if(isset($_POST['login-submit'])){
			// echo " pressed";
			$sql="SELECT * FROM admininfo WHERE adminname='".$_POST['username']."' and adminpass='".$_POST['password']."'";
    		$result=mysqli_query($con,$sql);
			if(mysqli_fetch_assoc($result)){
				$_SESSION['ADMIN']=$_POST['username'];
				?><script>window.location.href="../admin.php"</script><?php
			}else{
				$sql="SELECT username, password FROM userinfo WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
				$result = mysqli_query($con,$sql);
				if(mysqli_fetch_assoc($result)){
					$_SESSION['USER']=$_POST['username'];
					?><script>window.location.href="../user.php"</script><?php
				}
				else{
					?><script> document.getElementById("errormsg").style.display="block"; </script><?php
				}
			}
		  }
?>

<!-- PHP LOGIN ENDS -->

<!-- PHP REGISTER STARTS -->

<?php
		  if(isset($_POST['register-submit'])){
			  $username=$_POST['user'];
			  $email=$_POST['email'];
			  $password=$_POST['pass'];
			  $confirm_password=$_POST['confirm-password'];
			  
			// echo " pressed";
			// echo $username;
			// echo $email;
			// echo $password;
			// echo $confirm_password;
			if($password !== $confirm_password){
				?><script>document.getElementById("notmatch").style.display="block";</script><?php
				}
				else{
					$sql="insert into userinfo (id,username,email,password,mobileno,country,state,city,gender,DOB) 
										values (null,'$username','$email','$password',null,null,null,null,null,null)";
						if($con->query($sql))
						{
							?><script>alert("Registration Success");</script><?php
						}
						else
						{
							// echo $con->error;
							?>
							<script>
							 document.getElementById("usererrormsg").style.display="block"; 
							 </script><?php
						}  
						$con->close();
				}
			
		  }
?>

<!-- PHP REGISTER ENDS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/index.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
				$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
				$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
		});
		
		$('.form-group input').focus(function () {
			$(this).parent().addClass('addcolor');
		}).blur(function () {
			$(this).parent().removeClass('addcolor');
		});
		
	</script>
	<script>
function hideerror() {
	document.getElementById("errormsg").style.display="none";
	document.getElementById("usererrormsg").style.display="none";
	document.getElementById("notmatch").style.display="none";
}

</script>
</body>
</html>
