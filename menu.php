<!Doctype html>
<html>
	<head>
		<title>Project</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style type="text/css">
		.content{
			border:1px solid #000;
			min-height:68px;
			text-align:center;
		}
		</style>
	</head>
	<body>
		<?php include_once('incs/header.php')?>
		<center>
		<div class="content">
			<?php include_once('incs/nav_menu.php')?>
			
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
				<a href="application.php">
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