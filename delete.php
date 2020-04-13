<?php
include("db.php");

//getting id of the data from url
$id = $_GET['id'];

//Delete row
$result = mysqli_query($con, "DELETE FROM list WHERE id=$id");

header("Location:index3.php");
?>
