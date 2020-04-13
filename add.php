<html>
<body>
<?php
//including the database connection file
include_once("db.php");

if(isset($_POST['Submit'])) {	
	$title = mysqli_real_escape_string($con, $_POST['title']);  //using real esaceape string to protect injection of malicious code
	$genre = mysqli_real_escape_string($con, $_POST['genre']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
		
	// see if user forgot to add to any fields
	if(empty($title) || empty($genre) || empty($description)) {
				
		if(empty($name)) {
			echo "<font color='red'>Title field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Genre field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Tilbake</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($con, "INSERT INTO list(title,genre,description) VALUES('$title','$genre','$description')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index3.php'>View Result</a>";
	}
}
?>
</body>
</html>
