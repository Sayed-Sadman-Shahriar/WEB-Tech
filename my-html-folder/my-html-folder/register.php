<?php
	$name = $_POST['name'];
	$gender = $_POST['gender'];

	$file = fopen("data.txt", "a");
	fwrite($file, $gender . "\n");
	fclose($file);

	header("Location: stats.php");
?>