<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="css/bootstrap.css">
        <script src="assets/popper/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.js"></script>
	</head>
	<style>
		.cl_white{
			color: white;
		}
		section{
			width: 100vw;
			height: 100vh;
			padding: 50px;
		}
	</style>
	<body style="padding-top: 70px">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.html"><img src="assets/images/logo-128x37.png"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active"> <a class="nav-link" href="index.html">Home</a> </li>
				<li class="nav-item active"> <a class="nav-link" href="investment plan.html">Investment Plan</a> </li>
				<li class="nav-item active"> <a class="nav-link" href="about.html">About</a> </li>
			</ul>
			<button><a href="loginsignup.html">Login/Signup <span class="sr-only">(current)</span></a></button>
		  </div>
		</nav>
		<section id="home" style="background: url(background.jpg); background-size: 100% 100%;" class="cl_white text-center">
			<p><a href="register.php">Login Here</a></p>
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<p>Register</p>
						<form class="col-md-8 col-lg-12" role="form" method="post" action="./registration.php">
							<div class="form-group">
								Name: <input class="form-control" placeholder="Full Name" name="name" type="text" required/>
							</div>
							<div class="form-group">
								Username: <input class="form-control" placeholder="Username" name="username" type="text" required/>
							</div>
							<div class="form-group">
								Email: <input class="form-control" placeholder="Email" name="email" type="email" required/>
							</div>
							<div class="form-group">
								Password: <input class="form-control" placeholder="Password" name="password" type="password" required/>
							</div>
							<div class="form-group">
								Admin id: <input class="form-control" placeholder="Admin id" name="adminid" type="text" optional/>
							</div>
							<div class="form-group">
								<input class="btn btn-success" value="Register" name="register" type="submit" />
							</div>
						</form>
						<p>© Copyright 2020 Mastertrade Capital - All Rights Reserved</p>
					</div>
				</div>
			</div>
		</section>
		
	</body>
</html>