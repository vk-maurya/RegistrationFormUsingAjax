<?php 

	require_once "db.php";


	


	$name=$_POST['name'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];


	$email_query="SELECT * FROM simple where email='$email' ";

	$params = array();
	$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$email_check_result=sqlsrv_query( $connection, $email_query , $params, $options );

	$row_count = sqlsrv_num_rows( $email_check_result );

		

if ($row_count === 1){
   echo "email is already register";
}
else {



	$insert="INSERT INTO simple(name,email,city,gender) VALUES(?,?,?,?)";
	$params_insert=array($name,$email,$city,$gender);
	$insert_result=sqlsrv_query($connection,$insert,$params_insert);

	if ($insert_result) {
		echo 'data inserted';
	}
	else{
		echo 'Error in inserting';
	}

}

 ?>