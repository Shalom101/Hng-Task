
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="background">
		
	</div>

	<img src="Group 2 (4).png" alt="image" class="top">

	<img src="Group (1).png" alt="image" class="bottom">
	
	<div class="time-container">
		<span class="time">

			<?php 
			 date_default_timezone_set("Africa/Lagos");
			echo date("h:i:sa") ?>
		</span>

		<span class="text">
			That’s what the time says
		</span>

	</div>
</body>
</html>