<?php
session_start();
include "db_connect.php";



if (isset($_POST['username']) && isset($_POST['password'])) {

	$uname = trim($_POST['username']);
	$pass = trim($_POST['password']);

	if (empty($uname)) {
		header("Location: ../../index.php?error=Username is required");
		exit();
	} else if (empty($pass)) {
		header("Location: ../../index.php?error=Password is required");
		exit();
	} else {
		$stmt = $conn->prepare("SELECT username, password FROM users WHERE username = '$uname' AND password = '$pass'");
		// $stmt->bind_param("sss", $uname, $pass);
		$stmt->execute();
		$stmt->store_result();
		$numrows = $stmt->num_rows;
		$stmt->bind_result($dbusername, $dbpassword);
		$stmt->fetch();
		$stmt->close();

		if ($numrows > 0) {
			$_SESSION['username'] = $dbusername;
			header("Location: ../../main.php");
			exit();
		} else {
			header("Location: ../../index.php?error=Incorect Username or password");
			exit();
		}
	}
	header("Location: ../../index.php");
	exit();
}
