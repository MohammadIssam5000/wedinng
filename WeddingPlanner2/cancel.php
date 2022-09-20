<?php
	session_start();
	if(!isset($_SESSION['emailC'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		$email = $_SESSION['emailC'];
		$id = $_GET['id'];
		include("db/dbCon.php");
			
		$q="DELETE FROM `requests` WHERE id = '$id' AND email = '$email'";
		if(mysql_query($q,$db)) {
			echo '<script>alert("has been successfully canceled.");</script>';
			echo "<script>window.location='requests-customer.php';</script>";
		}
		else {
			echo '<script>alert("Sorry an error occurred, please try again.");</script>';
			echo "<script>window.location='requests-customer.php';</script>";
		}
		mysql_close($db);
	}
?>