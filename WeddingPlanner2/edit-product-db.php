<?php
	session_start();
	if(!isset($_SESSION['emailCom'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		include("db/dbCon.php");
		extract($_POST);

		$desc=mysql_real_escape_string($description);

		$Edit="UPDATE `products` SET `price`='$price', `pricePackage`='$pricePackage', `description`='$desc' WHERE `id`='$id';";
		if(mysql_query($Edit,$db)) {
			echo '<script>alert("has been successfully edited.");</script>';
			echo "<script>window.location='products.php';</script>";
		}
		else {
			echo '<script>alert("Sorry an error occurred, please try again.");</script>';
			echo "<script>window.location='edit-product.php?id=$id';</script>";
		}
	}
	mysql_close($db);
?>