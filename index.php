<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shortest Path Finder</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
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
		<script type="text/javascript" src="js/jquery.js"></script>
<script>
function popupCenter(url, title, w, h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 
</script>

<script type="text/javascript" language="javascript">
				function renderTime(){
					var currentTime = new Date();
					var diem = "AM";
					var h = currentTime.getHours();
					var m = currentTime.getMinutes();
					var s = currentTime.getSeconds();
					
					if( h == 0){
						h = 12;
						
					} else if(h > 12){
						h = h - 12;
						diem ="PM";
					}
					
					if(h < 10){
						h = "0" + h;
						
					}
					if(m < 10){
						m = "0" + m;
						
					}
					if(s < 10){
						s = "0" + s;
						
					}
					
					var myClock = document.getElementById('clockDisplay');
					myClock.textContent = h +":" + m +":" + s + " "+ diem;
					myClock.innerText = h +":" + m +":" + s + " "+ diem;
					setTimeout('renderTime()',1000);
					
				}
				renderTime();
			</script>
	</head>
	<body>
		<?php include_once('incs/header.php')?>
		<br/>
		<br/>
		<br/>
		<div class="content" style="width:400px; margin:50px auto;">
			<br/>
			<a onclick="popupCenter('http://localhost/pathdistancefinder/application.php', 'myPop1',350,600);" href="javascript:void(0);"><button style="padding:10px;background-color: #28367F;" class="btn btn-primary">Launch App</button></a>
			
		</div>
		
		
	</body>
</html>
