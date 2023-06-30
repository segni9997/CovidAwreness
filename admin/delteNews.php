<?php 
session_start();
include "../dbConnection.php";
$imgno = $_GET['imageNo'];

 
//Delete row from database .
$result = mysqli_query($con, "DELETE FROM news WHERE image_id=$imgno");
 
if($result)
{
header("Location: news.php");
}
else
{
	echo "error";
}
?>