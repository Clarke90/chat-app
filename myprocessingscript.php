<?php
if(isset($_POST['name']) && isset($_POST['message'])) {
    $data = $_POST['name'] . '-' . $_POST['message'] . "\n";
    $ret = file_put_contents('mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "its been written to file";
    }
}
else {
   die('no post data to process');
}

?>
