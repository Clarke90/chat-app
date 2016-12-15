<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COMP2112 - Project 2</title>
	<meta name="description" content="A simple chatroom application using jQuery, AJAX and JSON.">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">

</head>
<body>
	<!-- Content wrapper for pushing footer -->
	<div class="wrapper">
		<form method="POST">
			<input id="name" name="name" type="text" placeholder="Username"/><br>
			<textarea id="message" name="message" type="text" rows="8" cols="40"></textarea><br>
			<input type="submit" name="submit" value="Save Data"><br>
		</form>

		<div class="push"></div>
	</div>


	<footer class="sticky-footer flex-row y-center">
		<div class="container">
			<small class="pull-right">&copy;<?php echo date("Y"); ?> Chad Clarke & Mat Seifried</small>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="scripts/custom.js"></script>
	<!--
	Project refrences
	http://stackoverflow.com/questions/19381111/how-to-encode-json-in-php-via-jquery-ajax-post-data
	-->
</body>
</html>
