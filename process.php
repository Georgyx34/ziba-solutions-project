<?php
$mysqli = new mysqli('localhost', 'root', 'mypass123', 'admin')or die(mysqli_error($mysqli)); 
if (isset($ POST['save'])){
	$name = $ POST['name'];
	$email = $ POST['email'];

	$mysqli->query("INSERT INTO data(name, email) VALUES('$name', '$email')") or die(msqli->error);
}
?>