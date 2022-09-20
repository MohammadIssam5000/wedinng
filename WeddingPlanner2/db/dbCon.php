<?php
	$db=mysql_connect("localhost","root","rootroot") or die("Error connection!! please try agian");
	mysql_query('set names "utf8";');
	mysql_select_db("weddingplanner",$db) or die("Error in DATABASE");
?>
