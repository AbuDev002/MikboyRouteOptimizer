<?php
if(isset($_POST['search'])){
	$search = $_POST['search'];
}
?>
<!Doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shortes Distance Finder - App</title>
		<!-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
		<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/index.js"></script>
		<style type="text/css">
		.clockstyle{
			background:#000;
			opacity:0.5;
			color:#f5f5f5;
			padding:12px;
			height:50px;
			font-weight:bold;
			font-size:16px;
			letter-spacing:2px;
			display:inline;
			width:100%;
		}
	</style>
	<script>
		var myWindow;

		function openWin() {
			myWindow = window.open("http://localhost/multimedia/index.php", "", "width=100, height=100");
	//myWindow.focus();
}

function resizeWin() {
	myWindow.resizeTo(250, 250);
	myWindow.focus();
}
</script>

</head>
<body>
	<?php include_once('incs/header.php')?>
	<center>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
           <!--  <input id="pac-input" class="form-control controls" type="text" placeholder="Search places"/> -->
        </div>
    </div>
    <div class="content">

    	<ul>

    		<a href="#" id="get_location">
    			<li>
    				<img src="images/cycling.jpg">
    				<span>Cycling</span>
    			</li>
    		</a>

    		<a href="#">
    			<li>
    				<img src="images/driving.png">
    				<span>Driving</span>
    			</li>
    		</a>
    		<a href="#">
    			<li>
    				<img src="images/flight.png">
    				<span>flight</span>
    			</li>
    		</a>
    		<a href="#">
    			<li>
    				<img src="images/transit.jpg">
    				<span>Transit</span>
    			</li>
    		</a>
    		<a href="#">
    			<li>
    				<img src="images/walking.png">
    				<span>Walking</span>
    			</li>
    		</a>

    	</ul>

    </div>
    <center><font color="white" style="text-align:center;">This application can be used by travellers to locate the shortest path from a source to destination</font></center>
    <br/>

    <!-- <div id="clockDisplay" class="clockstyle"></div>
    <br/>
    <br/> -->
    <div class="container">
    	<p><a href="https://www.google.com/maps/dir/">Get Distance and Time</a></p>
    	<h5>Path Finder - Captrue Shortes Distance Between Two Places</h5>

    	<h4>Showing search result: </h4>
    		<div style="display: none">
      <input
        id="origin-input"
        class="controls"
        type="text"
        placeholder="Enter Source  Location"
      />

      <input
        id="destination-input"
        class="controls"
        type="text"
        placeholder="Enter Destination Location"
      />

      <div id="mode-selector" class="controls">
        <input
          type="radio"
          name="type"
          id="changemode-walking"
          checked="checked"
        />
        <label for="changemode-walking">Walking</label>

        <input type="radio" name="type" id="changemode-transit" />
        <label for="changemode-transit">Transit</label>

        <input type="radio" name="type" id="changemode-driving" />
        <label for="changemode-driving">Driving</label>
      </div>
    </div>
    	<!-- <a href="https://www.google.com/maps/dir/">Get Location</a> -->
    	<div class="well" style="width: 100%; height: 100%; position: absolute;">

    		<div id="map"></div>
    	</div>
    </div>
   

</center>
<div class="bottom-menu">
	<ul>

		<a href="#">
			<li>
				<!--<img src="images/stream-icon.png">-->
			</li>
		</a>

		<a href="#">
			<li>
				<button type="button" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
				</button>
			</li>
		</a>
		<a href="#">
			<li class="selected">
				<button type="button" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
				</button>
			</li>
		</a>
		<a href="#">
			<li>
				<button type="button" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
				</button>
			</li>
		</a>
		<a href="menu.php">
			<li>
				<button type="button" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
				</button>
			</li>
		</a>
	</ul>
</div>
</body>
</html>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBycIZOQ-ClXJAVxmV0wDBYbXIF9Ao94og&callback=initMap&libraries=places&v=weekly"
      async
    ></script>

