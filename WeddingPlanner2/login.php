<?php
	session_start();
	extract($_POST);
	include ("db/dbCon.php");
	
	$newPassword = sha1($password);
	
	// Admin
	$A="SELECT * FROM admin 
		WHERE email ='$email'           
		AND password ='$newPassword'";
	$Ad=mysql_query($A,$db);

    // Companies
    $Com="SELECT * FROM companies 
        WHERE email ='$email'
        AND password ='$newPassword'
				AND status='1'";
    $Comp=mysql_query($Com,$db);

    // Customers
	$C="SELECT * FROM customers 
		WHERE email ='$email'
		AND password ='$newPassword'
		AND status='1'";
	$Cus=mysql_query($C,$db);    


	if(mysql_num_rows($Ad) > 0) {
        $Admin=mysql_fetch_array($Ad);
		$_SESSION["emailA"]=$Admin[0];
		$_SESSION["nameA"]=$Admin[2];
        echo "<script>window.location='companies.php'</script>";
	} elseif(mysql_num_rows($Comp) > 0) {
        $Company=mysql_fetch_array($Comp);
        $_SESSION["nameCom"]=$Company[1];
        $_SESSION["phoneCom"]=$Company[2];
        $_SESSION["address"]=$Company[3];
        $_SESSION["workField"]=$Company[4];
		$_SESSION["emailCom"]=$Company[5];
        echo "<script>window.location='products.php'</script>";
    } elseif(mysql_num_rows($Cus) > 0) {
		$Customer=mysql_fetch_array($Cus);
		$_SESSION["nameC"]=$Customer[1];
        $_SESSION["phoneC"]=$Customer[2];
        $_SESSION["emailC"]=$Customer[3];
        echo "<script>window.location='shop.php'</script>";
	} else {
        echo "<script>window.alert('Email or password not correct, please try again');</script>";
 		echo "<script>window.location='login.html'</script>";
    }
    mysql_close($db);