<?php
	session_start();
	if(!isset($_SESSION['emailC'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		$email = $_SESSION['emailC'];
		include("db/dbCon.php");
		
		if(isset($_GET["id"])) {
			$id = $_GET["id"];
			$q="DELETE FROM `cart` WHERE `id` = '$id' AND email = '$email'";
			if(mysql_query($q,$db)) {
				echo '<script>alert("has been successfully deleted.");</script>';
				echo "<script>window.location='cart.php';</script>";
			}
			else {
				echo '<script>alert("Sorry an error occurred, please try again.");</script>';
				echo "<script>window.location='cart.php';</script>";
			}
		}
		mysql_close($db);
	}
?>