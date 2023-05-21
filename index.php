<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<title>Boat Reservation</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">

	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
	</style>



	<body>

		<!-- begin whole content -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="image/logo.png" height="50" width="50"> &nbsp;
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						

						<ul class="nav navbar-nav" style="font-family: Times New Roman;">
							<li class="active">
								<a href="index.html">Home</a>
								
							</li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman;">
							<li>
								<a href="regLoginLanding.html">
									Login
									<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
								</a>
							</li>

							<li>
								<?php include_once('goto-registration.php'); ?>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->
		<div class="row">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<center>
						<img src="image/dhoni.jpg" style="height: 500px; width: 100%;">
						</center>
						<div class="container">
							<div class="carousel-caption">
								<h1>Traditional Boat Model</h1>
								<p>Available Now at Low Price. Booked Now :)</p>
								<p><a class="btn btn-lg btn-primary" href="ferry.html" role="button">Book the tickets today</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="image/plasticFish2.jpg" style="height: 500px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>About the Sea</h1>
								<p>Its More fragile then we think</p>
								<p><a class="btn btn-lg btn-primary" href="why_help.html" role="button">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="item active">
						<img src="image/island1.jpg" style="height: 500px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>Maldives Ferry Schedules</h1>
								<p>Public ferries will be operated to certain Atoll and islands which is North Male atoll.</p>
								<p><a class="btn btn-lg btn-primary" href="ferry.html" role="button">Book Ferry</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>

		<br />
		<div class="row container-fluid">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><center>About Us</center></h3>
					</div>
					<div class="panel-body">
						Our Core Values-  <br>
						Our company's very heart lies in the passion for travelling and never-ending love for the ocean. We believe in people and their passion. The secret behind our hassle-free and seamless vacations? We value our partners, our team and our clients.
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Contact Us</center></h3>
					</div>
					<div class="panel-body">
					Shafiu Ali<br>
						Booking Service Deck Officer<br>
						
						Office email : shafiu_ali@hotmail.com<br>
						mobile : +9607778957
						
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Weather Info Of Maldives</center></h3>
					</div>
					<div class="panel-body">
					
              <!-- weather widget start --><div id="m-booked-prime-days-24295"> <div class="weather-customize widget-type-prime-days">  <div class="booked-prime-days-in"> <div class="booked-prime-days-data"> <div class="booked-pd-today"> <div class="booked-pd-today-img wrz-18 "></div> <div class="booked-pd-today-temperature"> <div class="booked-wzs-pd-val"> <div class="booked-wzs-pd-number"><span class="plus">+</span>29</div> <div class="booked-wzs-pd-dergee"> <div class="booked-wzs-pd-dergee-val">&deg;</div> <div class="booked-wzs-pd-dergee-name">C</div> </div> </div> </div> <div class="booked-pd-today-extreme"> <div class="booked-pd booked-pd-h"><span>High:</span><span class="plus">+</span>30</div> <div class="booked-pd booked-pd-l"><span>Low:</span><span class="plus">+</span>28</div> </div> </div> <div class="booked-pd-ndays">  <div class="booked-pd-nitem"> <div class="booked-pd-nidi wrz-sml wrzs-18"></div> <div class="booked-pd-nidw">Wed</div> </div>  <div class="booked-pd-nitem"> <div class="booked-pd-nidi wrz-sml wrzs-18"></div> <div class="booked-pd-nidw">Thu</div> </div>  <div class="booked-pd-nitem"> <div class="booked-pd-nidi wrz-sml wrzs-03"></div> <div class="booked-pd-nidw">Fri</div> </div>  <div class="booked-pd-nitem"> <div class="booked-pd-nidi wrz-sml wrzs-03"></div> <div class="booked-pd-nidw">Sat</div> </div> </div> </div> </div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-prime-days.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_24295(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-prime-days-24295'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18127;type=6;scode=47298;ltid=3457;domid=w209;anc_id=88671;countday=undefined;cmetric=1;wlangID=1;color=137AE9;wwidth=160;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=24295';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
               
					</div>
				</div>
			</div>
		</div>
 		
 		<p>
 			<center>
 			
 			</center>
 		</p>
		
		<footer style="background-color: white;">
			<center>
				&copy; All rights reserved
			</center>
		</footer>

 		<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 		<script src="bootstrap/js/bootstrap.js"></script>

	</body>
</html>