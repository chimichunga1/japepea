<?php

include('connection.php');
$username = $_SESSION['session_username'];
if(isset($_POST['add_accounts']))
{


	$username = $_POST['username'];

if(empty($_POST['middlename'])){
	$middlename = "";
}else{
	$middlename = $_POST['middlename'];		
}



	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$access_right = $_POST['access_right'];




	$row=mysqli_query($connect,'SELECT * From `admin_accounts` WHERE `username`="'.$_POST["username"].'" AND `isDeleted`="0"   ');

	$search= mysqli_fetch_assoc($row);

if(empty($search))
{
			$insert_user = "INSERT INTO admin_accounts (`user_firstname`,`user_middlename`,`user_lastname`,`username`,`password`,`accessright`) VALUES ('".$firstname."','".$middlename."','".$lastname."','".$username."','".$password."','".$access_right."') ";
			$run_insert_user = mysqli_query($connect,$insert_user);



date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');





	$logs_remarks = 'USER HAS CREATED '.$username;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);

	




			echo '<script language="javascript">';
			echo 'alert("USER SUCCESSFULLY SAVED")';
			echo '</script>';
			echo"<script>window.location.href='admin_accounts_new.php';</script>";		
}

else

{
			echo '<script language="javascript">';
			echo 'alert("USERNAME IS ALREADY TAKEN!")';
			echo '</script>';
			echo"<script>window.location.href='admin_accounts_new.php';</script>";	
}

}








if(isset($_POST['admin_deluser']))
{



	$userid = $_POST['get_userid'];

	$update_user = "UPDATE admin_accounts SET isDeleted = '1' WHERE user_id ='$userid'";
	$run_update_user = mysqli_query($connect,$update_user);

echo '<script language="javascript">';
echo 'alert("User Removed!")';
echo '</script>';
echo"<script>window.location.href='admin_accounts_new.php';</script>";	






}


if(isset($_POST['admin_add_supplier']))
{

	$supplier_name = $_POST['supplier_name'];
	$contact_person = $_POST['contact_person'];
	$supplier_address = $_POST['supplier_address'];




	$insert_supplier = "INSERT INTO admin_suppliers (`supplier_name`,`contact_person`,`supplier_address`) VALUES ('".$supplier_name."','".$contact_person."','".$supplier_address."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);




date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');


$username = $_SESSION['session_username'];

	$logs_remarks = 'USER HAS ADDED SUPPLIER NAME'.$supplier_name;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);














	echo '<script language="javascript">';
	echo 'alert("SUPPLIER SUCCESSFULLY SAVED")';
	echo '</script>';
	echo"<script>window.location.href='admin_suppliers_new.php';</script>";		

}



if(isset($_POST['admin_delsupplier']))
{




	$supplierid = $_POST['get_supplierid'];

	$update_user = "UPDATE admin_suppliers  SET isDeleted = '1' WHERE supplier_id ='$supplierid'";
	$run_update_user = mysqli_query($connect,$update_user);



date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');




$username = $_SESSION['session_username'];
	$logs_remarks = 'USER HAS REMOVED SUPPLIER ID '.$supplierid;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);












echo '<script language="javascript">';
echo 'alert("Suplier has been removed!")';
echo '</script>';
echo"<script>window.location.href='admin_suppliers_new.php';</script>";	







}


if(isset($_POST['add_categories']))

{


	$category_name = $_POST['category_name'];

	$insert_category = "INSERT INTO admin_categories (`category_name`) VALUES ('".$category_name."') ";
	$run_insert_category = mysqli_query($connect,$insert_category);






date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');




$username = $_SESSION['session_username'];
	$logs_remarks = 'USER HAS CREATED CATEGORY '.$category_name;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);







	echo '<script language="javascript">';
	echo 'alert("CATEGORY SUCCESSFULLY SAVED")';
	echo '</script>';
	echo"<script>window.location.href='admin_view_categories_new.php';</script>";		





}

if(isset($_POST['admin_delcategory']))

{





	$categoryid = $_POST['get_categoryid'];

	$update_category = "UPDATE admin_categories SET isDeleted = '1' WHERE category_id ='$categoryid'";
	$run_update_category = mysqli_query($connect,$update_category);




date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');

$username = $_SESSION['username'];


$username = $_SESSION['session_username'];

	$logs_remarks = 'USER HAS REMOVED CATEGORY ID '.$categoryid;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);






echo '<script language="javascript">';
echo 'alert("CATEGORY HAS BEEN DELETED!")';
echo '</script>';
	echo"<script>window.location.href='admin_view_categories_new.php';</script>";	








}




if(isset($_POST['add_stocks']))

{

	//$stock_code = $_POST['stock_code'];
	$stock_itemname = $_POST['stock_itemname'];
	$stock_quantity = $_POST['stock_quantity'];
	$stock_priceperunit = $_POST['stock_priceperunit'];
	$stock_supplierid = $_POST['stock_supplierid'];
	$stock_categoriesid = $_POST['categories_supplierid'];

	$random_num = mt_rand(00000001, 99999999);
/*
	echo $stock_itemname."<br>";
	echo $stock_quantity."<br>";
	echo $stock_priceperunit."<br>";
	echo $stock_supplierid."<br>";
	echo $stock_categoriesid."<br>";

	echo $random_num."<br>";
*/


$day = date('d');
$week = date('W');
$month = date('F');
$year = date('Y');



	$insert_user = "INSERT INTO admin_stocks (`stocks_code`,`stocks_itemname`,`stocks_quantity`,`stocks_priceperunit`,`stocks_supplierid`,`stocks_categoriesid`,`day`,`week`,`month`,`year`) VALUES ('".$random_num."','".$stock_itemname."','".$stock_quantity."','".$stock_priceperunit."','".$stock_supplierid."','".$stock_categoriesid."','".$day."','".$week."','".$month."','".$year."') ";
	$run_insert_user = mysqli_query($connect,$insert_user);




	echo '<script language="javascript">';
	echo 'alert("STOCK SUCCESSFULL ADDED!")';
	echo '</script>';
	echo"<script>window.location.href='admin_stocks_new.php';</script>";	




}


if(isset($_POST['add_invoice']))
{


	$get_date  = date("Y-m-d");

	$invoice_serial = $_POST['invoice_serial'];


	$insert_invoice = "INSERT INTO admin_invoice (`invoice_serial`,`invoice_date`) VALUES ('".$invoice_serial."','".$get_date."') ";
	$run_insert_invoice = mysqli_query($connect,$insert_invoice);




date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');





$username = $_SESSION['session_username'];
	$logs_remarks = 'USER HAS ADDED INVOICE'.$invoice_serial;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);

	echo '<script language="javascript">';
	echo 'alert("INVOICE SUCCESSFULLY SAVED")';
	echo '</script>';
	echo"<script>window.location.href='admin_view_invoice_new.php';</script>";	










}



if(isset($_POST['admin_additems_toinvoice']))


{


$get_quantity =  $_POST['get_quantity'];
$get_stocksid =  $_POST['get_stocksid'];
$get_invoiceid =  $_POST['get_invoiceids'];


      $get_stocks = "SELECT * FROM admin_stocks WHERE stocks_id = '$get_stocksid' AND isDeleted='0'";



      $run_stocks = mysqli_query($connect,$get_stocks);

      while($row_stocks = mysqli_fetch_array($run_stocks))

      {

      	$stocks_quantity = $row_stocks['stocks_quantity'];
      }

      $new_total = (int)$stocks_quantity - (int)$get_quantity;
      


	$update_stocks = "UPDATE admin_stocks SET stocks_quantity = '$new_total' WHERE stocks_id ='$get_stocksid'";
	$run_update_stocks = mysqli_query($connect,$update_stocks);



	$insert_invoice = "INSERT INTO admin_itemsordered (`invoice_id`,`stocks_id`,`order_quantity`) VALUES ('".$get_invoiceid."','".$get_stocksid."','".$get_quantity."') ";
	$run_insert_invoice = mysqli_query($connect,$insert_invoice);




date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');



$username = $_SESSION['session_username'];


	$logs_remarks = 'USER HAS ADDED STOCK ID '.$get_stocksid. 'TO INVOICE ID'.$get_invoiceid;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);


	echo '<script language="javascript">';
	echo 'alert("STOCK SUCCESSFULLY SAVED")';
	echo '</script>';
	echo"<script>window.location.href='admin_view_invoice_new.php';</script>";		



}




if(isset($_POST['admin_pulloutinvoice']))
{











}


if(isset($_POST['pullout_to_reports']))

{

	$invoice_id =  $_POST['pullout_invoiceid'];
	$invoice_total = $_SESSION['invoice_total'];
	$get_date  = date("Y-m-d");


	$insert_reports = "INSERT INTO admin_reports (`invoice_id`,`total_amount`,`date_saved`) VALUES ('".$invoice_id."','".$invoice_total."','".$get_date."') ";
	$run_insert_reports = mysqli_query($connect,$insert_reports);

	$update_admin_invoice = "UPDATE admin_invoice SET isDeleted = '1' WHERE invoice_id ='$invoice_id'";
	$run_update_admin_invoice = mysqli_query($connect,$update_admin_invoice);

	$update_admin_itemsordered = "UPDATE admin_itemsordered SET isDeleted = '1' WHERE invoice_id ='$invoice_id'";
	$run_update_admin_itemsordered = mysqli_query($connect,$update_admin_itemsordered);







date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');



$username = $_SESSION['session_username'];


	$logs_remarks = 'USER HAS PULLED OUT INVOICE ID'.$invoice_id.' TO REPORTS';
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);





	echo '<script language="javascript">';
	echo 'alert("STOCK SUCCESSFULLY PULLED OUT")';
	echo '</script>';
	echo"<script>window.location.href='admin_stocks_new.php';</script>";		




}





if(isset($_POST['add_employee'])){




$employee_name = $_POST['employee_name'];
$employee_address = $_POST['employee_address'];
/*$employee_age = $_POST['employee_age'];*/
$employee_birthday = $_POST['employee_birthday'];
$employee_gender = $_POST['employee_gender'];
$employee_contact_no = $_POST['employee_contact_no'];
$employee_sss_number = $_POST['employee_sss_number'];
$employee_philhealth = $_POST['employee_philhealth'];
$employee_contact_person = $_POST['employee_contact_person'];
$employee_contact_no_person = $_POST['employee_contact_no_person'];

$explodeBirthdate = explode("-", $employee_birthday);
$birthDate = $explodeBirthdate[1]."/".$explodeBirthdate[2]."/".$explodeBirthdate[0];

  //date in mm/dd/yyyy format; or it can be in other formats as well

  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $employee_age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));





$insert_user = "INSERT INTO admin_employee (`employee_name`,`employee_address`,`employee_age`,`employee_birthday`,`employee_gender`,`employee_contact_number`,`employee_sss_number`,`employee_philhealth`,`employee_contact_person`,`employee_no_contact_person`) VALUES ('".$employee_name."','".$employee_address."','".$employee_age."','".$employee_birthday."','".$employee_gender."','".$employee_contact_no."','".$employee_sss_number."','".$employee_philhealth."','".$employee_contact_person."','".$employee_contact_no_person."') ";
			$run_insert_user = mysqli_query($connect,$insert_user);



date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');





	$logs_remarks = 'USER HAS CREATED '.$username;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);

	










			echo '<script language="javascript">';
			echo 'alert("EMPLOYEE SUCCESSFULLY SAVED")';
			echo '</script>';
			echo"<script>window.location.href='admin_employee.php';</script>";





}


if(isset($_POST['admin_delemployee'])){



	$employee_id = $_POST['get_employee_id'];



	
	$update_user = "UPDATE admin_employee SET isDeleted = '1' WHERE employee_id ='$employee_id'";
	$run_update_user = mysqli_query($connect,$update_user);

echo '<script language="javascript">';
echo 'alert("EMPLOYEE DELETED!")';
echo '</script>';
echo"<script>window.location.href='admin_employee.php';</script>";	





}

if(isset($_POST['admin_delinvoice'])){



	$get_invoiceid = $_POST['get_invoiceid'];



	
	$update_user = "UPDATE admin_invoice SET isDeleted = '1' WHERE invoice_id ='$get_invoiceid'";
	$run_update_user = mysqli_query($connect,$update_user);

echo '<script language="javascript">';
echo 'alert("INVOICE DELETED!")';
echo '</script>';
echo"<script>window.location.href='admin_view_invoice_new.php';</script>";	





}


if(isset($_POST['admin_delstocks'])){



	$get_stocksid = $_POST['get_stocksid'];



	
	$update_user = "UPDATE admin_stocks SET isDeleted = '1' WHERE stocks_id ='$get_stocksid'";
	$run_update_user = mysqli_query($connect,$update_user);

echo '<script language="javascript">';
echo 'alert("STOCK DELETED!")';
echo '</script>';
echo"<script>window.location.href='admin_stocks_new.php';</script>";	





}



if(isset($_POST['add_sales'])){

$date = $_POST['date'];
$pos_check = $_POST['posno'];

if($pos_check == '1'){
$posno = "POS 1";
}else{
$posno = "POS 2";
}


$vatmerchsales = $_POST['vatmerchsales'];
$vatcomtrans = $_POST['vatcomtrans'];
$vatsales = $_POST['vatsales'];
$nonvatsales = $_POST['nonvatsales'];
$vatexscsales = $_POST['vatexscsales'];
$vatexsales = $_POST['vatexsales'];
$day = date('d');
$week = date('W');
$month = date('F');
$year = date('Y');


$insert_sales = "INSERT INTO admin_sales (`sales_date`,`sales_posno`,`sales_vatmerchsales`,`sales_vatcomtrans`,`sales_vatsales`,`sales_nonvatsales`,`sales_vatexscsales`,`sales_vatexsales`,`day`,`week`,`month`,`year`) VALUES ('".$date."','".$posno."','".$vatmerchsales."','".$vatcomtrans."','".$vatsales."','".$nonvatsales."','".$vatexscsales."','".$vatexsales."','".$day."','".$week."','".$month."','".$year."') ";
			$run_insert_sales = mysqli_query($connect,$insert_sales);



echo '<script language="javascript">';
echo 'alert("SALES CREATED!")';
echo '</script>';
echo"<script>window.location.href='admin_esales.php';</script>";



}



if(isset($_POST['admin_edituser'])){

	$username = $_POST['username'];
	$get_userid = $_POST['get_userid'];


	$middlename = $_POST['middlename'];			
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$access_right = $_POST['access_right'];
 


$get_user = "SELECT * FROM admin_accounts WHERE isDeleted = '0' and user_id = '$get_userid'";
           
        
$run_get_user = mysqli_query($connect,$get_user);

while($row = mysqli_fetch_array($run_get_user))

{

	$get_firstname = $row['user_firstname'];
	$get_middlename = $row['user_middlename'];	
	$get_lastname = $row['user_lastname'];
	$get_username = $row['username'];
	$get_password = $row['password'];
	$get_accessright = $row['accessright'];

}


if(empty($_POST['username'])){
	$username = $get_username;
}if(empty($_POST['firstname'])){
	$firstname = $get_firstname;
}if(empty($_POST['middlename'])){
	$middlename = $get_middlename;
}if(empty($_POST['lastname'])){
	$lastname = $get_lastname;
}if(empty($_POST['password'])){
	$password = $get_password;
}if(empty($_POST['accessright'])){
	$accessright = $get_accessright;
}

$update_user = "UPDATE admin_accounts SET username = '$username',user_firstname = '$firstname',user_middlename = '$middlename',user_lastname = '$lastname',password = '$password',accessright = '$accessright' WHERE user_id ='$get_userid'";




$run_update_user = mysqli_query($connect,$update_user);


date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');



$username = $_SESSION['session_username'];

	$logs_remarks = 'USER HAS UPDATED USER ACCOUNT '.$username;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);





echo '<script language="javascript">';
echo 'alert("User Updated!")';
echo '</script>';
echo"<script>window.location.href='admin_accounts_new.php';</script>";	


}


if(isset($_POST['admin_editsupplier'])){

$get_supplierid = $_POST['get_supplierid'];
$supplier_name = $_POST['supplier_name'];
$contact_person = $_POST['contact_person'];
$supplier_address = $_POST['supplier_address'];



$get_supplier = "SELECT * FROM admin_suppliers WHERE isDeleted = '0' and supplier_id = '$get_supplierid'";
           
        
$run_get_supplier = mysqli_query($connect,$get_supplier);

while($row = mysqli_fetch_array($run_get_supplier))

{

$get_supplier_name = $row['supplier_name'];
$get_contact_person = $row['contact_person'];
$get_supplier_address = $row['supplier_address'];

}


if(empty($_POST['supplier_name'])){
	$supplier_name = $get_supplier_name;
}if(empty($_POST['contact_person'])){
	$contact_person = $get_contact_person;
}if(empty($_POST['supplier_address'])){
	$supplier_address = $get_supplier_address;
}



$update_user = "UPDATE admin_suppliers SET supplier_name = '$supplier_name',contact_person = '$contact_person',supplier_address = '$supplier_address' WHERE supplier_id ='$get_supplierid'";




$run_update_user = mysqli_query($connect,$update_user);


date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');



$username = $_SESSION['session_username'];

	$logs_remarks = 'USER HAS UPDATED SUPPLIER NAMED '.$get_supplier_name;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);





echo '<script language="javascript">';
echo 'alert("Supplier has been Updated!")';
echo '</script>';
echo"<script>window.location.href='admin_suppliers_new.php';</script>";







}


if(isset($_POST['admin_editemployee'])){


$get_employee_id = $_POST['get_employee_id'];
$employee_name = $_POST['employee_name'];
$employee_address = $_POST['employee_address'];
/*$employee_age = $_POST['employee_age'];*/
$employee_birthday = $_POST['employee_birthday'];
$employee_gender = $_POST['employee_gender'];
$employee_contact_no = $_POST['employee_contact_no'];
$employee_sss_number = $_POST['employee_sss_number'];
$employee_philhealth = $_POST['employee_philhealth'];
$employee_contact_person = $_POST['employee_contact_person'];
$employee_contact_no_person = $_POST['employee_contact_no_person'];



$get_employee = "SELECT * FROM admin_employee WHERE isDeleted = '0' and employee_id = '$get_employee_id'";
           
        
$run_get_employee = mysqli_query($connect,$get_employee);

while($row = mysqli_fetch_array($run_get_employee))

{


$get_employee_name = $row['employee_name'];
$get_employee_address = $row['employee_address'];
$get_employe_age = $row['employee_age'];
$get_employee_birthday = $row['employee_birthday'];
$get_employee_gender = $row['employee_gender'];
$get_employee_contact_no = $row['employee_contact_number'];
$get_employee_sss_number = $row['employee_sss_number'];
$get_employee_philhealth = $row['employee_philhealth'];
$get_employee_contact_person = $row['employee_contact_person'];
$get_employee_contact_no_person = $row['employee_no_contact_person'];

}


if(empty($_POST['employee_name'])){
$employee_name = $get_employee_name;
}if(empty($_POST['employee_address'])){
$employee_address = $get_employee_address;
}if(empty($_POST['employee_birthday'])){
$employee_birthday = $get_employee_birthday;
$explodeBirthdate = explode("-", $employee_birthday);
$birthDate = $explodeBirthdate[1]."/".$explodeBirthdate[2]."/".$explodeBirthdate[0];

  //date in mm/dd/yyyy format; or it can be in other formats as well

  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $employee_age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
}if(empty($_POST['employee_gender'])){
$employee_gender = $get_employee_gender;
}if(empty($_POST['employee_contact_no'])){
$employee_contact_no = $get_employee_contact_no;
}if(empty($_POST['employee_sss_number'])){
$employee_sss_number = $get_employee_sss_number;
}if(empty($_POST['employee_philhealth'])){
$employee_philhealth = $get_employee_philhealth;
}if(empty($_POST['employee_contact_person'])){
$employee_contact_person = $get_employee_contact_person;
}if(empty($_POST['employee_no_contact_person'])){
$employee_no_contact_person = $get_employee_contact_no_person;
}




$insert_user = "UPDATE admin_employee SET  employee_name = '$employee_name',employee_address = '$employee_address',employee_age = '$employee_age',employee_birthday = '$employee_birthday',employee_gender = '$employee_gender',employee_contact_number = '$employee_contact_no',employee_sss_number = '$employee_sss_number',employee_philhealth = '$employee_philhealth',employee_contact_person = '$employee_contact_person',employee_no_contact_person = '$employee_no_contact_person' WHERE employee_id = '$get_employee_id'";
$run_insert_user = mysqli_query($connect,$insert_user);




date_default_timezone_set('Asia/Manila');
$date_ph = date('F j, Y g:i:a  ');





	$logs_remarks = 'USER HAS CREATED EMPLOYEE '.$employee_name;
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);

	




			echo '<script language="javascript">';
			echo 'alert("EMPLOYEE SUCCESSFULLY SAVED")';
			echo '</script>';
			echo"<script>window.location.href='admin_employee.php';</script>";



}


?> 