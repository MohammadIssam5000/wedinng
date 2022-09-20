<?php
	session_start();
	if(!isset($_SESSION['emailCom'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		$email = $_SESSION['emailCom'];
		include("db/dbCon.php");
		extract($_POST);

		$desc=mysql_real_escape_string($description);

		$Edit="UPDATE `companies` SET `name`='$name', `phone`='$phone', `address`='$address' WHERE `email`='$email';";
		if(mysql_query($Edit,$db)) {
			$_SESSION['nameCom']= $name;
			$_SESSION['phoneCom']= $phone;
			$_SESSION['address']= $address;
			echo '<script>alert("has been successfully edited.");</script>';
			echo "<script>window.location='my-account.php';</script>";
		}
		else {
			echo '<script>alert("Sorry an error occurred, please try again.");</script>';
			echo "<script>window.location='my-account.php';</script>";
		}
	}
	mysql_close($db);
?>