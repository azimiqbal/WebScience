<?php

//quick comment: This page was the one i had most trouble with, especially because i wanted verify and be secure and i didnt know how to, until i got linked a tutorial for it, which i put in my report of course.


session_start();
include("db.php");

// Check if username and password was submitted
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Vennligst fyll inn navn og passord!');
}

// Prep SQL to prevent SQL injection, important for security.
if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	// Bind parameters, s for string
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

		if ($stmt->num_rows > 0) {   //if table has 1 or more rows, we bind the result, then fetch it. 
		$stmt->bind_result($id, $password);
		$stmt->fetch();
		if (password_verify($_POST['password'], $password)) {
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			header('Location: dashboard.php');
		} else {
			echo 'Incorrect password!';
		}
	} else {
		echo 'Incorrect username!';
	}


	$stmt->close();
}
?>
