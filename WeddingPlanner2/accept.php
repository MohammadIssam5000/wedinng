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

		$request="SELECT * FROM requests WHERE id = '$id' AND ownerEmail = '$email'";
		$requestIn=mysql_query($request,$db);
		$requestInfo=mysql_fetch_array($requestIn);
		
		$Insert="INSERT INTO `reservations`(`productID`, `email`, `weddingDate`, `ownerEmail`)
							VALUES ('$requestInfo[1]','$requestInfo[2]','$requestInfo[4]','$requestInfo[5]')";
		if(mysql_query($Insert,$db)) {
			$update="UPDATE `requests` SET status='Acceptable' WHERE id='$id' AND ownerEmail = '$email'";
			mysql_query($update,$db);
			echo '<script>window.alert("This request has been acceptable.")</script>';
			echo '<script>window.location="requests.php"</script>';
		}
		else {
			echo '<script>window.alert("Sorry an error occurred, please try again.")</script>';
			echo '<script>window.location="requests.php"</script>';
		}
		mysql_close($db);
	}
?>