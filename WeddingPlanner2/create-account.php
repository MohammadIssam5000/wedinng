<?php
    include ('db/dbCon.php');
    extract($_POST);

	$return;
	if ($account == "customers") {
		$return = "<script>window.location='create-account.html'</script>";
	} else if ($account == "companies") {
		$return = "<script>window.location='create-account-company.html'</script>";
	}
	
    $emA="SELECT `email` FROM `companies` WHERE `email` ='$email'";
    $emaA=mysql_query($emA,$db);
    $emC="SELECT `email` FROM `customers` WHERE `email` ='$email'";
    $emaC=mysql_query($emC,$db);
    if(mysql_num_rows($emaA) > 0 || mysql_num_rows($emaC) > 0) {
        echo "<script>window.alert('This email address existing, please change it.')</script>";
        echo $return;
    } else {
		$newPassword = sha1($password);
		$confirmPassword = sha1($confirmPassword);
		if ($account == "customers") {
			$Insert="INSERT INTO `customers`(`email`, `password`, `name`, `phone`,`address`,`confirmpassword`) 
									  VALUES ('$email','$newPassword','$name','$phone','$address','$confirmPassword');";
			if(mysql_query($Insert,$db)) {
				echo "<script>window.alert('You have been successfully registered, now you can login to your account.')</script>";
				echo "<script>window.location='login.html'</script>";
			}
			else {
				echo "<script>window.alert('Sorry an error is occurred, please try again')</script>";
				echo $return;;
			}
		} else if ($account == "companies") {
			$Insert="INSERT INTO `companies`(`email`, `password`, `name`, `phone`, `address`, `workField`, `fax`, `confirmpassword`) 
									  VALUES ('$email','$newPassword','$name','$phone','$address','$workField','$fax','$confirmPassword')";
			if(mysql_query($Insert,$db)) {
				echo "<script>window.alert('You have been successfully registered, now you can login to your account.')</script>";
				echo "<script>window.location='login.html'</script>";
			}
			else {
				echo "<script>window.alert('Sorry an error is occurred, please try again')</script>";
				echo $return;;
			}
		}
    }
    mysql_close($db);