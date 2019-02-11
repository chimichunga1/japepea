<?php
    session_start();


if(empty($_SESSION["check_login"]))

{

	echo '<script language="javascript">';
	echo 'alert("you must login first!")';
	echo '</script>';
	echo"<script>window.location.href='admin_login.php';</script>";		





}



















    date_default_timezone_set("Asia/Manila");
    $connect = mysqli_connect("localhost", "root", "miguel", "inventory");
/*     $connect = mysqli_connect("localhost", "id7459861_pstut_dbase", "Superlove:3", "id7459861_pstut_dbase");*/


/* $connect = mysqli_connect("localhost", "root", "", "pstut_dbase");*/
?>