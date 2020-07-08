<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Champion - Sports Professional</title>
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/services.css" rel="stylesheet">
<link href="css/aboutus.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="?page=home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="?page=aboutus">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="?page=concept">How it works?</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="?page=faq">FAQ's</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="?page=contactus">Contact Us</a>
							</li>
							
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<?php if(!isset($_SESSION['uid'])){
								echo '<a class="nav-link login-button" href="?page=login">Login</a>';
								}else{echo '<a class="nav-link login-button" href="?page=logout">Logout</a>';}?>
							</li>
							<?php if(!isset($_SESSION['uid'])){echo'
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="?page=signup"><i class="fa fa-plus-circle"></i> Register as proffesional</a>
							</li>';}else{//echo '<li class="nav-item"><a class="nav-link text-white add-button" href="?page=login"><i class="fa fa-user-circle"></i> View Profile</a></li>';
							}?>							
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>
