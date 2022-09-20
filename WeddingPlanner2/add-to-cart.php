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

		$check="SELECT productID FROM cart WHERE productID = '$id' AND email = '$email'";
		$checkCart=mysql_query($check,$db);
		if(mysql_num_rows($checkCart) > 0) {
			echo '<script>window.alert("Already added.")</script>';
			echo '<script>window.location="shop.php"</script>';
		} else {
			$Insert="INSERT INTO `cart`(`productID`, `email`)
								VALUES ('$id','$email')";
			if(mysql_query($Insert,$db)) {
				echo '<script>window.alert("Your product has been added.")</script>';
				echo '<script>window.location="shop.php"</script>';
			}
			else {
				echo '<script>window.alert("Sorry an error occurred, please try again.")</script>';
				echo '<script>window.location="shop.php"</script>';
			}
		}
		mysql_close($db);
	}
?>