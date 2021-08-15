<?php 
$like_data = $_POST['like'];
$like_data++;
echo $like_data;

include('database.php');
mysqli_query($connection, "UPDATE `likes` SET `value` = '$like_data'");
?>