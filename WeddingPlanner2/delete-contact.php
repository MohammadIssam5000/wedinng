<?php
	session_start();
	if(!isset($_SESSION['emailA'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		include("db/dbCon.php");
		
		if(isset($_GET["id"])) {
			$id = $_GET["id"];
			$email = $_GET["email"];
			
			$dc="DELETE FROM `contact` WHERE id = '$id' AND `email` ='$email'";
			if(mysql_query($dc,$db)) {
				echo '<script>alert("has been successfully deleted.");</script>';
				echo "<script>window.location='feedback.php';</script>";
			}
			else {
				echo '<script>alert("Sorry an error occurred, please try again.");</script>';
				echo "<script>window.location='feedback.php';</script>";
			}
		}
		mysql_close($db);
	}
?>