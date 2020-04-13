
<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index2.php');
	exit;
}
include("db.php");
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM users WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profil</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a class="navbar-brand" href="dashboard.php">Røa barneskole</a>
				<a href="postHome.php"><i class="fas fa-user-circle"></i>Min liste</a>
				<a href="MyBlog.php"><i class="fas fa-user-circle"></i>Min blogg</a>
				<a href="subjects.php"><i class="fas fa-user-circle"></i>Mine fag</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Min profil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logg out</a>
			</div>
		</nav>
		<div class="content">
			<h2>Din profil</h2>
			<div>
				<p>Profil detaljer:</p>
				<table>
					<tr>
						<td>Fullt navn:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Passord:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email adresse:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
</body>
</html>
