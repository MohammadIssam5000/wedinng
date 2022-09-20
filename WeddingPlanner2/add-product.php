<?php
	session_start();
	if(!isset($_SESSION['emailCom'])) {
		echo '<script>window.alert("You are not authorized to access this page")</script>';
		echo '<script>window.location="login.html"</script>';
	}
	else {
		$name = $_SESSION['nameCom'];
		$workField = $_SESSION['workField'];
		$email = $_SESSION['emailCom'];
		include("db/dbCon.php");
		extract($_POST);

		$desc=mysql_real_escape_string($description);

		$file=$_FILES['file'];
		$nameFile=$file['name'];
		$tmp=$file['tmp_name'];
		$error=$file['error'];
		$size=$file['size'];
		if( isset($_FILES['file'])) {
			$file_ext= explode('.',$nameFile);
			$file_ext= strtolower(end($file_ext));
			$allowed= array('png','jpg','jpeg','gif');
			if(in_array($file_ext,$allowed)) {
				if($error == 0) {
					if($size <= 2097152) {
						$des="upload/" . $nameFile;
						if(move_uploaded_file($tmp,$des)) {
							$Insert="INSERT INTO `products`(`photo`, `workField`, `price`, `pricePackage`, `description`, `email`, `name`)
													VALUES ('$nameFile','$workField','$price','$pricePackage','$desc','$email','$name')";
							if(mysql_query($Insert,$db)) {
								echo '<script>window.alert("Your product has been added.")</script>';
								echo '<script>window.location="products.php"</script>';
							}
							else {
								echo '<script>window.alert("Sorry an error occurred, please try again.")</script>';
								echo '<script>window.location="products.php"</script>';
							}
						}
						else {
							echo '<script>window.alert("Sorry an error occurred during Upload, please try again.")</script>';
							echo '<script>window.location="products.php"</script>';
						}
					}
					else {
						echo '<script>window.alert("The size of the photo is big, please try another photo.")</script>';
						echo '<script>window.location="products.php"</script>';
					}
				}
				else {
					echo '<script>window.alert("Sorry an error occurred during Upload, please try again.")</script>';
					echo '<script>window.location="products.php"</script>';
				}
			}
			else {
				echo '<script>window.alert("The type of photo is not authorized, please try another photo. 
				\nPlease choose the type of the following:
				\n(png / jpg / jpeg / gif).")</script>';
				echo '<script>window.location="products.php"</script>';
			}
		}
		else {
			echo '<script>window.alert("The photo is empty, please choose one.")</script>';
			echo '<script>window.location="products.php"</script>';
		}
		mysql_close($db);
	}
?>