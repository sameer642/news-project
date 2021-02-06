<?php
include "config.php";
session_start();
if($_SESSION["user_role"] == '0'){
  header("location: {$hostname}/admin/post.php");
}
$cat_id = $_GET['cid'];
$sql = "DELETE from category where category_id = {$cat_id}";
if(mysqli_query($conn, $sql)){
	header("location: {$hostname}/admin/category.php");
}else{
	echo "<p>Cant delete data</p>";
}
mysqli_close($conn);


?>