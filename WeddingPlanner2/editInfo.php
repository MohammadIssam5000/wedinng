<?php
	session_start();
	if(!isset($_SESSION['emailC'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		$email = $_SESSION['emailC'];
		include("db/dbCon.php");
		extract($_POST);

		$Edit="UPDATE `customers` SET `name`='$name', `phone`='$phone' WHERE `email`='$email';";
		if(mysql_query($Edit,$db)) {
			$_SESSION['nameC']= $name;
			$_SESSION['phoneC']= $phone;
			echo '<script>alert("has been successfully edited.");</script>';
			echo "<script>window.location='myAccount.php';</script>";
		}
		else {
			echo '<script>alert("Sorry an error occurred, please try again.");</script>';
			echo "<script>window.location='myAccount.php';</script>";
		}
	}
	mysql_close($db);
?>