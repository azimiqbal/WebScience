<?php
include_once("db.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($con, $_POST['id']);
	
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$genre = mysqli_real_escape_string($con, $_POST['genre']);
	$description = mysqli_real_escape_string($con, $_POST['description']);	
	
	// checking if data was submitted correctly
	if(empty($title) || empty($genre) || empty($description)) {	
			
		if(empty($title)) {
			echo "<font color='red'>Title field is empty.</font><br/>";
		}
		
		if(empty($genre)) {
			echo "<font color='red'>Genre field is empty.</font><br/>";
		}
		
		if(empty($description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}		
	} else {	
		//if it was, update table
		$result = mysqli_query($con, "UPDATE list SET title='$title',genre='$genre',description='$description' WHERE id=$id");
		
		header("Location: index3.php");
	}
}
?>
<?php
//id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM list WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$title = $res['title'];
	$genre = $res['genre'];
	$description = $res['description'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index3.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Title</td>
				<td><input type="text" name="title" value="<?php echo $title;?>"></td>
			</tr>
			<tr> 
				<td>Genre</td>
				<td><input type="text" name="genre" value="<?php echo $genre;?>"></td>
			</tr>
			<tr> 
				<td>Description</td>
				<td><input type="text" name="description" value="<?php echo $description;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
