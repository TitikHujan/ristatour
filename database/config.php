<?php
	$host='localhost';
	$user='root';
	$pass='admin';

	$dbname='kmm';

	$connect=mysql_connect($host,$user,$pass) or die(mysql_error());

	$dbselect=mysql_select_db($dbname);
?>