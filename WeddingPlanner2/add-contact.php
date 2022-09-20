<?php
	include ('db/dbCon.php');
	extract($_POST);

    $q= "INSERT INTO `contact` (`name`, `email`, `message`)
                        VALUES ('$name','$email','$message')";
    if (mysql_query($q,$db)) {
        echo "<script>window.alert('Your message has been sent.');</script>";
        echo "<script>window.location='contact-us.php'</script>";
    } else {
        echo "<script>window.alert('Sorry an error is occurred , please try again');</script>";
        echo "<script>window.location='contact-us.php'</script>";
    }
	mysql_close($db);