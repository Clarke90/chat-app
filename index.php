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
	<div class="wrapper">
		<header>
			<div class="col-sm-1">
					<img src="assets/chat.svg" id="logo" alt="">
			</div>
			<div class="col-sm-11">
					<h1>Chat Room</h1>
			</div>
		</header>
		<!-- Content wrapper for pushing footer -->
		<main>
			<div class="col-sm-12">
					<div id="chatroom"></div>
			</divs>
				<div class="col-sm-12 textbox">
							<form method="POST">
								<input id="name" name="name" type="text" placeholder="Username"/><br>
								<textarea id="message" name="message" type="text" rows="6" cols="80"></textarea><br>
								<input type="submit" name="submit" value="Save Data"><br>
							</form>
				</div>
	<div class="col-sm-12">
		<footer class="sticky-footer">
				<small class="pull-right">&copy;<?php echo date("Y"); ?> Chad Clarke & Mat Seifried</small>
		</footer>
	</div>
		</main>

</div> <!-- wrapper -->


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="scripts/custom.js"></script>
	<!--
	Project refrences
	http://stackoverflow.com/questions/19381111/how-to-encode-json-in-php-via-jquery-ajax-post-data

	// Saving data to file via php
	http://stackoverflow.com/questions/15149331/how-to-add-to-json-array-in-json-file-with-php
	-->

<script type="text/javascript">
$( document ).ready(function() {
    console.log( "ready!" );
		setTimeout(function(){
			// remove the header after 2 seconds
			   $("header").remove();
			//scroll to bottom of page
				   $('html, body').scrollTop( $(document).height() - $(window).height() );
		},2000);




});
</script>

</body>

</html>
