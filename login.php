<?php
	$users = ["Llowman" => "BSHS_NSDA1!"];

	$feedback = "";
	$validation_error = "*Incorrect username or password.";
	$username = "";

	if($_SERVER["REQUEST_METHOD"] === "POST"){
		$username = $_POST["username"];
		$password = $_POST["password"];
		if(isset($users[$username]) && $password === $users[$username]){
			header("Location: homepage.html");
			exit;
		} else {
			$feedback = $validation_error;
		}
	}
?>