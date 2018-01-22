<?php 

	$dbhost="localhost";
	$dbuser="sa";
	$dbpassword="admin@123";
	$dbname="vijay";

	$connectioninfo=array("Database"=>$dbname,"UID"=>$dbuser,"PWD"=>$dbpassword);

	$connection=sqlsrv_connect($dbhost,$connectioninfo);

	if (!$connection) {
		echo 'Connection is  not working';
	}















 ?>