<?php

include_once("db.php");

$result = mysqli_query($con, "SELECT * FROM list ORDER BY id DESC"); // DESC, for descending order, latest first
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">


<div class="w3-content" style="max-width:1200px""max-height: 50%">



<header class="w3-container w3-center w3-padding-32"> 
	<div class="w3-container">
  		<a class="navbar-brand" href="dashboard.php">Gå tilbake</a>
  <h1><b>Mario's movie list</b></h1>
</div>
</header>

<body>
<a href="add.html">Legg til</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Tittel</td>
		<td>Sjanger</td>
		<td>Beskrivelse</td>
		<td>Oppdater</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['title']."</td>". "";
		echo "<td>".$res['genre']."</td>";
		echo "<td>".$res['description']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>

</body>
</html>
