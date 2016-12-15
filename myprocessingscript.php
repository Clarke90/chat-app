<?php
// Make sure data is beng posted
if(isset($_POST['name']) && isset($_POST['message'])) {
	// Store data in variables from post
	$name = $_POST['name'];
	$message = $_POST['message'];

	// Setp and stage data for write to JSON file
	$file = "data.json";
	$json = json_decode(file_get_contents($file), true);
	$json = array("name" => $name, "message" => $message);

	// Append data to JSON file
	$write = file_put_contents($file, json_encode($json), FILE_APPEND);

	// Error handle
	if($write === false) {
		die('There was an error writing to this file');
	}
	else {
		echo "File successfully written";
	}
}

// Do not write data if data is not posted
else {
	die('Missing data');
}
?>
