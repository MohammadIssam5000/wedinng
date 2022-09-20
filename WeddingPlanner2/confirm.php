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

		
		$counter=0;
		$check="SELECT id,productID FROM cart WHERE email = '$email'";
		$checkCa=mysql_query($check,$db);
		while($checkCart=mysql_fetch_array($checkCa)) {
			// Check reservation
			$checkRes="SELECT workField,name FROM products WHERE id = '$checkCart[1]' AND workField = 'Hotels or Wedding Halls'";
			$checkReserv=mysql_query($checkRes,$db);
			if (mysql_num_rows($checkReserv) == 0) {
				$checkOld="SELECT productID FROM requests WHERE productID = '$checkCart[1]' AND email = '$email' AND weddingDate = '$weddingDate'";
				$checkRequestOld=mysql_query($checkOld,$db);
				if(mysql_num_rows($checkRequestOld) > 0) {
					echo '<script>window.alert("Already added.")</script>';
					echo '<script>window.location="cart.php"</script>';
				} else {
					$ownerE="SELECT email FROM products WHERE id = '$checkCart[1]'";
					$ownerEm=mysql_query($ownerE,$db);
					$ownerEmail=mysql_fetch_array($ownerEm);
					$counter++;
					$Insert="INSERT INTO `requests`(`productID`, `email`, `status`, `weddingDate`, `ownerEmail`)
										VALUES ('$checkCart[1]','$email','Pending','$weddingDate','$ownerEmail[0]')";
					mysql_query($Insert,$db);
					$d="DELETE FROM `cart` WHERE `id` = '$checkCart[0]' AND email = '$email'";
					mysql_query($d,$db);
				}
			} else {
				$checkReservation=mysql_fetch_array($checkReserv);
				$checkResDate="SELECT productID FROM reservations WHERE productID = '$checkCart[1]' AND email != '$email' AND weddingDate = '$weddingDate'";
				$checkReservDate=mysql_query($checkResDate,$db);
				if (mysql_num_rows($checkReservDate) == 0) {
					$checkOld="SELECT productID FROM requests WHERE productID = '$checkCart[1]' AND email = '$email' AND weddingDate = '$weddingDate'";
					$checkRequestOld=mysql_query($checkOld,$db);
					if(mysql_num_rows($checkRequestOld) > 0) {
						echo '<script>window.alert("Already added.")</script>';
						echo '<script>window.location="cart.php"</script>';
					} else {
						$ownerE="SELECT email FROM products WHERE id = '$checkCart[1]'";
						$ownerEm=mysql_query($ownerE,$db);
						$ownerEmail=mysql_fetch_array($ownerEm);
						$counter++;
						$Insert="INSERT INTO `requests`(`productID`, `email`, `status`, `weddingDate`, `ownerEmail`)
											VALUES ('$checkCart[1]','$email','Pending','$weddingDate','$ownerEmail[0]')";
						mysql_query($Insert,$db);
						$d="DELETE FROM `cart` WHERE `id` = '$checkCart[0]' AND email = '$email'";
						mysql_query($d,$db);
					}
				} else {
					echo "<script>window.alert('There is a reservation in $checkReservation[1] on this date.')</script>";
					echo "<script>window.location='cart.php'</script>";
				}
			}
		}
		
		if($counter != 0) {
			echo '<script>window.alert("Your request has been added, please check the status from requests page.")</script>';
			echo '<script>window.location="requests-customer.php"</script>';
		} else {
			echo '<script>window.alert("Sorry an error occurred, please try again.")</script>';
			echo '<script>window.location="cart.php"</script>';
		}
		mysql_close($db);
	}
?>