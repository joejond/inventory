<?php
	include ("conn-db.php");
	$q = "DELETE FROM supplyer WHERE sup_id = '".$_GET['kode']."'";
	$r = mysql_query($q) or die (mysql_error());
	header("location:data_supplyer.php");
?>
