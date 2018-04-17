<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>HNG-Stage1</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
</head>
<body  onload="time()">

	<header>
		<div id="logo">
			<img src="logo16.png">
		</div>
		<div id="nav">
			<ul>
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#">Works</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>
		</div>
	</header>
	<div id="colored-banner">
		<p>Hi, am <span id="name">Muhsin Ismail</span></p>

		<p>Am a ghanaian based designer, creative thinker and web <br> developer</p>

		<button id="read-more">Read More</button>
		<button id="time">

			<?php 	

			$date = date('jS F y  ');
			$h = date('h')-1;
			$m = date('i');
			$s = date('s');
			$pm_am = date('A');

			echo $date;
			echo $h . ":" . $m . ":" . $s . $pm_am;
		 //echo date('h:i:s A');
		   ?></span> </button> 
	</div>
	<div id="my-works">
		<p>My Works</p>
		<img src="farmmanager.png">
		<img src="logo16.png">
	</div>

<script type="text/javascript">
		function time(){
			var myDate = new Date();
			var date = myDate.getDate();
			var month = myDate.getMonth();
			var year = myDate.getFullYear();
			var h = myDate.getHours();
			var m = myDate.getMinutes();
			var s = myDate.getSeconds();

			document.getElementById("show_time").innerHTML = year+"-"+month+"-"+date+ "(" + h + ":"+ m + ":" + s + ")";
			setTimeout('time()', 1000);
		}
	</script>
	

</body>
</html>