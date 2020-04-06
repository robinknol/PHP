<?php
	$firstName = $_GET['firstName'];
	$lastName = $_GET['lastName'];
	$age = $_GET['age'];
	$email = $_GET['email'];
	
	echo "<h3>Response Demo Form</h3>";
	echo "<h4>You submitted the following information<br>";
	echo "<ul>";
	echo "<li>Firstname lastname: $firstName $lastName </li>";
	echo "<li>Age: $age </li>";
	echo "<li>E-mail: $email <li>";
	echo "</ul>";
	echo "</h4>"
?>
