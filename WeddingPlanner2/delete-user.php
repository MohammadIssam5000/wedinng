<?php
	session_start();
	if(!isset($_SESSION['emailA'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		include("db/dbCon.php");
		
		if(isset($_GET["email"])) {
			$email = $_GET["email"];
			$target = $_GET["target"];
			$status = $_GET["status"];
			$dc="";
			if($status == 1){
				$dc = "UPDATE `$target` SET status ='0' WHERE email ='$email'";
			}
			else{
				$dc = "UPDATE `$target` SET status ='1' WHERE email ='$email'";
			}
			if(mysql_query($dc)) {
				echo '<script>alert("has been successfully changed.");</script>';
				echo "<script>window.location='$target.php';</script>";
				}
			else {
				echo '<script>alert("Sorry an error occurred, please try again.");</script>';
				echo "<script>window.location='$target.php';</script>";
			}
		}
		mysql_close($db);
	}
?>