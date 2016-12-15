<?php
// Make sure data is beng posted
if(isset($_POST['name']) && isset($_POST['message'])) {
	// Store data in variables from post
	$name = $_POST['name'];
	$message = $_POST['message'];

	// Get current JSON data
	$file = file_get_contents('data.json');
	$data = json_decode($file);

	// Prevent memory leaks for large json.
	unset($file);

	// Insert data into JSON data
	$data[] = array('name' => $name, 'message' => $message);

	// Re save the file
	$write = file_put_contents('data.json',json_encode($data));

	// Release memory
	unset($data);

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
