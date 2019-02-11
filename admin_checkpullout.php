

<?php 
session_start();
if(isset($_POST['admin_pulloutinvoice']))
{



	$_SESSION['pullout_sessionid'] = $_POST['get_invoiceid'];
	$_SESSION['check_num'] = '1';

	echo"<script>window.location.href='admin_payout.php';</script>";	





}




?>