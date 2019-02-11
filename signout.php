<?php

include('connection.php');

date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');

$username = $_SESSION['username'];




	$logs_remarks = 'USER HAS LOGGED OUT';
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);




session_destroy();

			echo '<script language="javascript">';
			echo 'alert("Logout Successful!")';
			echo '</script>';
			echo"<script>window.location.href='admin_login.php';</script>";	


?>
