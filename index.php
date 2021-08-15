<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php') ?>
<body>
	<?php 
	include('vendor/database.php');
	$likes = mysqli_query($connection, "SELECT * FROM `likes`");
	$likes = mysqli_fetch_assoc($likes);

	
	?>
	<h3 class="mt-5 mb-5 tac">Демонстрация асихронного обновления данных</h3>

	<div like="<?php echo $likes['value']; ?>" class="btn">
		<?php echo $likes['value']; ?>
	</div>



	<?php include('includes/scripts.php') ?>
	<script src="js/index.js"></script>
</body>
</html>