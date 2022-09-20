<?php
	session_start();
	if(!isset($_SESSION['emailCom'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		include("db/dbCon.php");
		extract($_POST);
		
		if(isset($_GET["id"])) {
			$id = $_GET["id"];
			$img = $_GET["img"];
			unlink("upload/$img");
			$dp="DELETE FROM `products` WHERE `id` ='$id'";
			if(mysql_query($dp,$db)) {
				$dc="DELETE FROM `cart` WHERE `productID` = '$id'";
				mysql_query($dc,$db);
				$dr="DELETE FROM `requests` WHERE `productID` ='$id';";
				mysql_query($dr,$db);
				echo '<script>alert("has been successfully deleted.");</script>';
				echo "<script>window.location='products.php';</script>";
			}
			else {
				echo '<script>alert("Sorry an error occurred, please try again.");</script>';
				echo "<script>window.location='products.php';</script>";
			}
		}
		mysql_close($db);
	}
?>