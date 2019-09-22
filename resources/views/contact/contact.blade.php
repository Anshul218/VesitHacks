<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


	<link rel="apple-touch-icon" href="C:\Users\moghe\Desktop\Employee Assessment\1.png">
	<link rel="shortcut icon" href="C:\Users\moghe\Desktop\Employee Assessment\1.png">
	
	<title>Employee Assessment and Rating System/Contact Us</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

	<!-- Bootstrap -->
    <!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

	<!-- Font Awesome Icon -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/contact/contact.css')}}" />
    

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<style>
		.panel {
			/* display: inline-flexbox; */
			text-align: center; 
			margin-right: 8%;
			margin-bottom: 8%;
			max-width: 25%;
			padding: 0px;
			max-height: 30%;
		}
	</style>
</head>

<body>

	<!-- Header -->
	<header id="header">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.html">
						<img src="{{asset('imgs/ears.png')}}" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<span></span>
				</button>
				<!-- /Mobile toggle -->
			</div>

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
	</header>
	<!-- /Header -->

	<!-- Panels -->
	<div class="container">
		<div class="row">
			<div class="panel panel-default col-md-3">
				<div class="panel-heading">
					<h3 class="panel-title">Jatin Acharya</h3>
				</div>
				<div class="panel-body">
					<img src="{{asset('imgs/ears.png')}}" height=150px width=150px>
					<br><br>
					<h5>Email ID: 2017.jatin.acharya@ves.ac.in</h5>
					<h5>Contact No.: +91 9819109578</h5>
					<h5></h5>
				</div>
			</div>

			<div class="panel panel-default col-md-3">
				<div class="panel-heading">
					<h3 class="panel-title">Prithvi Amin</h3>
				</div>
				<div class="panel-body">
					<img src="{{asset('imgs/ears.png')}}" height=150px width=150px>
					<br><br>
					<h5>Email ID: 2017.prithvi.amin@ves.ac.in</h5>
					<h5>Contact No.: +91 8097438675</h5>
					<h5></h5>
				</div>
			</div>

			<div class="panel panel-default col-md-3">
				<div class="panel-heading">
					<h3 class="panel-title">Anish Chhabria</h3>
				</div>
				<div class="panel-body">
					<img src="{{asset('imgs/ears.png')}}" height=150px width=150px>
					<br><br>
					<h5>Email ID: 2017.anish.chhabria@ves.ac.in</h5>
					<h5>Contact No.: +91 9619287840</h5>
					<h5></h5>
				</div>
			</div>
		</div>
			<div class="row">	
			<div class="panel panel-default col-md-3">
				<div class="panel-heading">
					<h3 class="panel-title">Anshul Chaudhary</h3>
				</div>
				<div class="panel-body">
					<img src="{{asset('imgs/ears.png')}}" height=150px width=150px>
					<br><br>
					<h5>Email ID: 2017.anshul.chaudhary@ves.ac.in</h5>
					<h5>Contact No.: +91 9930044967</h5>
					<h5></h5>
				</div>
			</div>

			<div class="panel panel-default col-md-3">
				<div class="panel-heading">
					<h3 class="panel-title">Sayali Moghe</h3>
				</div>
				<div class="panel-body">
					<img src="{{asset('imgs/ears.png')}}" height=150px width=150px>
					<br><br>
					<h5>Email ID: 2017.sayali.moghe@ves.ac.in</h5>
					<h5>Contact No.: +91 9594033444</h5>
					<h5></h5>
				</div>
			</div>

			<div class="panel panel-default col-md-3">
				<div class="panel-heading">
					<h3 class="panel-title">Sparsh Prabhakar</h3>
				</div>
				<div class="panel-body">
					<img src="{{asset('imgs/ears.png')}}" height=150px width=150px>
					<br><br>
					<h5>Email ID: 2017.sparsh.prabahakar@ves.ac.in</h5>
					<h5>Contact No.: +91 9004251621</h5>
				</div>
			</div>
		</div>
	</div>

	<!-- preloader -->
	<!-- <div id='preloader'>
		<div class='preloader'></div>
	</div> -->
	<!-- /preloader -->


	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript" src="js/google-map.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>