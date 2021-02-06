<?php
include "config.php";
if($_SESSION["user_role"] == '0'){
  header("location: {$hostname}/admin/post.php");
}
$user_id = $_GET['id'];
$sql = "DELETE from user where user_id = {$user_id}";
if(mysqli_query($conn, $sql)){
	header("location: {$hostname}/admin/users.php");
}else{
	echo "<p>Cant delete data</p>";
}
mysqli_close($conn);


?>