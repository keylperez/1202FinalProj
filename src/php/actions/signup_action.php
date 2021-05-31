<?php
session_start();
include "db_connect.php";



if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cPassword'])) {

	$name = trim($_POST['name']);
	$uname = trim($_POST['username']);
	$pass = trim($_POST['password']);
	$cPass = trim($_POST['cPassword']);

	if (empty($name) || empty($uname) || empty($pass) || empty($cPass)) {
		header("Location: ../../../sign_up.php?error=Please Fill All Fields");
		exit();
	} else if ($pass != $cPass) {
		header("Location: ../../../sign_up.php?error=Confirm Password not matching");
		exit();
	} else {
		$stmt = $conn->prepare("SELECT username FROM users WHERE username = '$uname'");
		// $stmt->bind_param("s", $uname);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();
		if ($result->num_rows == 0) {
			$stmt = $conn->prepare("INSERT INTO `users`(`username`, `password`, `name`) VALUES ('$uname','$pass','$name')");
			// $stmt->bind_param("sss", $uname, $pass, $name);
			$stmt->execute();
			$stmt->store_result();
			header("Location: ../../../sign_up.php?created=Account created successfully");
			$stmt->close();
		} else {
			header("Location: ../../../sign_up.php?error=Email already exists");
		}
	}
}
