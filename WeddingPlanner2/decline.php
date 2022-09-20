<?php
	session_start();
	if(!isset($_SESSION['emailCom'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		$email = $_SESSION['emailCom'];
		include("db/dbCon.php");
		$id = $_GET['id'];

		$update="UPDATE `requests` SET status='Declined' WHERE id='$id' AND ownerEmail = '$email'";
		if(mysql_query($update,$db)) {
			echo '<script>window.alert("This request has been declined.")</script>';
			echo '<script>window.location="requests.php"</script>';
		}
		else {
			echo '<script>window.alert("Sorry an error occurred, please try again.")</script>';
			echo '<script>window.location="requests.php"</script>';
		}
		mysql_close($db);
	}
?>