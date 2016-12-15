<?php
if(isset($_POST['name']) && isset($_POST['message'])) {
	$name = $_POST['name'];
	$message = $_POST['message'];

	$file = "data.json";
	$json = json_decode(file_get_contents($file), true);
	$json = array("name" => $name, "message" => $message);
	$write = file_put_contents($file, json_encode($json), FILE_APPEND);

	if($write === false) {
		die('There was an error writing to this file');
	}
	else {
		echo "File successfully written";
	}
}
else {
	die('Invalid data');
}
?>
