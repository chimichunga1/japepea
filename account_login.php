<?php 
  session_start();






    date_default_timezone_set("Asia/Manila");
    $connect = mysqli_connect("localhost", "root", "miguel", "inventory");
/*     $connect = mysqli_connect("localhost", "id7459861_pstut_dbase", "Superlove:3", "id7459861_pstut_dbase");*/


/* $connect = mysqli_connect("localhost", "root", "", "pstut_dbase");*/



if(isset($_POST['Login']))
{


	if(!isset($_SESSION['login_attempts'])){

		$_SESSION['login_attempts'] = $_POST['username'];


	}

	$username = $_POST['username'];
	$password = $_POST['password'];
	 	

	$row=mysqli_query($connect,'SELECT * From `admin_accounts` WHERE `username`="'.$_POST["username"].'" AND `password`="'.$_POST["password"].'" AND `isDeleted`="0"  AND `isBlocked`="0"  ');

	$search= mysqli_fetch_assoc($row);

	if(!empty($search['accessright'] == '1'))

		{


		    $_SESSION['username']=$search['username'];
		    $_SESSION["user_id"] = $search["user_id"];
		    $_SESSION["accessright"] = $search['accessright'];
			$_SESSION["check_login"] = $search['username'];	    

			echo '<script language="javascript">'; ?>
				<?php echo 'alert("Welcome ' . $_SESSION['check_login'] . '")'; ?>
			<?php echo '</script>';
			echo"<script>window.location.href='admin_dashboard.php';</script>";



			
    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $_SESSION['session_username'] = $search['username'];
	$logs_remarks = 'USER HAS LOGGED IN';
  
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$search['username']."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);




		
		}
	elseif(!empty($search['accessright'] == '2'))

		{


		    $_SESSION['username']=$search['username'];
		    $_SESSION["user_id"] = $search["user_id"];
		    $_SESSION["accessright"] = $search['accessright'];

			echo '<script language="javascript">'; ?>
				<?php echo 'alert("Welcome ' . $_SESSION['check_login'] . '")'; ?>
			<?php echo '</script>';
			echo"<script>window.location.href='admin_dashboard.php';</script>";



			
    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');

	$logs_remarks = 'USER HAS LOGGED IN';
  
	$insert_supplier = "INSERT INTO admin_logs (`logs_username`,`logs_remarks`,`logs_date`) VALUES ('".$search['username']."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);




		
		}

		else
		{


			if($username == $_SESSION['login_attempts']){

				if(!isset($_SESSION['attempt_counter'])){

					$_SESSION['attempt_counter'] = 3;
				}

				$_SESSION['final_count'] = $_SESSION['attempt_counter'] - 1;
				$_SESSION['attempt_counter'] = $_SESSION['final_count'];
				if($_SESSION['attempt_counter'] == 0){
						$block_account = "UPDATE admin_accounts SET isBlocked = '1' WHERE username ='$username'";
						$run_block_account = mysqli_query($connect,$block_account);
					echo '<script language="javascript">';
					echo 'alert("This Account has been blocked!")';
					echo '</script>';
					echo"<script>window.location.href='admin_login.php';</script>";
				}

			}else{ 

				$_SESSION['login_attempts'] = $username;
				$_SESSION['attempt_counter'] = 2;
			

			}

					echo '<script language="javascript">';
					echo 'alert("Invalid Username or Password!")';
					echo '</script>';
					echo"<script>window.location.href='admin_login.php';</script>";

		}


}






?>
