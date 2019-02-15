<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>

      <!-- Bootstrap -->
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">

   <!-- Start your project here-->
  
           <script src="new_js/jquery.min.js"></script> 
  <!-- /Start your project here-->

    <script src="bs/js/bootstrap.min.js"></script>
 <script src="new_js/jquery.dataTables.min.js"></script> 
   <link rel="stylesheet" href="new_css/dataTables.bootstrap.min.css" />
<!--            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />   -->

           


 <!--    <link href="bs/css/bootstrap.min.css" rel="stylesheet">


           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

    <script src="bs/js/bootstrap.min.js"></script>


           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />   -->
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>

<style type="text/css">
  
body {
    height: 670px;
    background: linear-gradient(to bottom, #33ccff 0%, #66ff99 100%)
}
  
</style>
</head>

<body>
<?php



include("admin_navbar.php");



?>

<div class="container">

<h2><B>&nbsp;EMPLOYEES</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD EMPLOYEE &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>

            <form method="POST" action="save_data.php">

<div class="row">

<div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFirstName">Employee Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter Employee Name" name="employee_name" required>
                </div>
</div>

<div class="col-md-4">
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="employee_address" required>
                </div>
</div>
<div class="col-md-2">
                <div class="form-group">
                  <label for="birthday">Birthday</label>
                  <input type="date" class="form-control" id="birthday" placeholder="Password" name="employee_birthday" max="2000-12-31" required>
                </div>
</div>

<div class="col-md-2">
                <div class="form-group">
                  <label>Gender</label>
                  <select name="employee_gender" class="form-control">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
</div>


</div>


<div class="row">

<div class="col-md-6">

                <div class="form-group">
                  <label for="sssNo">SSS Number</label>
                  <input type="number" class="form-control" id="sssNo" placeholder="Enter the SSS Number" name="employee_sss_number" max="99999999999" required>
                </div>
</div>

<div class="col-md-6">
                <div class="form-group">
                  <label for="philhealth">Philhealth</label>
                  <input type="number" class="form-control" id="philhealth" placeholder="Enter the Philhealth number" name="employee_philhealth" max="99999999999" required>
                </div>

</div>



</div>



<div class="row">
<div class="col-md-4">
                <div class="form-group">
                  <label for="contactNo">Contact Number</label>
                  <input type="number" class="form-control" id="contactNo" placeholder="Contact Number" name="employee_contact_no" max="99999999999" required>
                </div>

</div>

<div class="col-md-4">
                <div class="form-group">
                  <label for="contactPerson">Contact Person</label>
                  <input type="text" class="form-control" id="contactPerson" placeholder="Contact Person" name="employee_contact_person" required>
                </div>
</div>
<div class="col-md-4">
                <div class="form-group">
                  <label for="contactNoperson">Contact Person's Contact Number</label>
                  <input type="number" class="form-control" id="contactNoperson" placeholder="Contact Person's Contact Number" name="employee_contact_no_person" max="99999999999" required>
                </div>
</div>



</div>







<!--                 <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" placeholder="Enter Age" name="employee_age" required>
                </div> -->















              </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-success col-md-12" name="add_employee" >Save</button>
              </div>
</form>
</div>

<br>
<br>

  </div>
<!--         <div class="col-md-12">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <center><h3 class="box-title">ADD ACCOUNTS</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
       
            </div>
         
            <div class="box-body">
            <form method="POST" action="save_data.php">
              <div class="box-body">


                <div class="form-group">
                  <label for="exampleInputFirstName">First Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" name="firstname" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputLastName">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" name="lastname" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter Username" name="username" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                  <label>Access Right</label>
                  <select name="access_right" class="form-control">
                    <option value="1">ADMIN</option>
                    <option value="2">USER</option>

                  </select>
                </div>

              </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_accounts" >Save</button>
              </div>
            </form>





            </div>

          </div>

        </div>
 -->

<div class="col-md-12">
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>Employee Name</th>
                  <th>Employee Age</th>
                  <th>Employee Contact No.</th>
                  <th>Employee Contact Person</th>                  
                  <th>Actions</th>


                </tr>
                </thead>
                              <tbody>




<?php 
$table2 = "SELECT * FROM admin_employee WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['employee_id']; ?> </td>
                  <td><?php echo $row['employee_name']?></td>
                  <td><?php echo $row['employee_age']?></td>
                  <td><?php echo $row['employee_contact_number']; ?></td>
                  <td><?php echo $row['employee_contact_person']; ?></td>


               

<?php   
$user_viewmodal="user_viewmodal".$row['employee_id'];
$user_editmodal="user_editmodal".$row['employee_id'];
$user_delmodal="user_delmodal".$row['employee_id'];
    echo '

<td><button class="btn btn-info"  data-toggle="modal" data-target="#'.$user_viewmodal.'"><i class="glyphicon glyphicon-eye-open"></i></button>&nbsp;<button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_editmodal.'"><i class="glyphicon glyphicon-edit"></i></button>&nbsp;<button class="btn btn-danger"   data-toggle="modal" data-target="#'.$user_delmodal.'"><i class="glyphicon glyphicon-remove"></i></button></td>
   ';

   echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_delmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>
Would you like to deactivate this user ? 
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_employee_id' value='".$row['employee_id']."'>
                    <button type='submit' name='admin_delemployee'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";

echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_editmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>EDIT EMPLOYEE INFORMATION </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >

    <div class='form-group'>
";
?>

                <div class="form-group">
                  <label for="exampleInputFirstName">Employee Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter Employee Name" name="employee_name" >
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="employee_address" >
                </div>
<!--                 <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" placeholder="Enter Age" name="employee_age" >
                </div> -->
                <div class="form-group">
                  <label for="birthday">Birthday</label>
                  <input type="date" class="form-control" id="birthday" placeholder="Password" name="employee_birthday" max="2000-12-31" >
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select name="employee_gender" class="form-control">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="contactNo">Contact Number</label>
                  <input type="number" class="form-control" id="contactNo" placeholder="Contact Number" name="employee_contact_no" >
                </div>

                <div class="form-group">
                  <label for="sssNo">SSS Number</label>
                  <input type="number" class="form-control" id="sssNo" placeholder="Enter the SSS Number" name="employee_sss_number" >
                </div>

                <div class="form-group">
                  <label for="philhealth">Philhealth</label>
                  <input type="number" class="form-control" id="philhealth" placeholder="Enter the Philhealth number" name="employee_philhealth" >
                </div>

                <div class="form-group">
                  <label for="contactPerson">Contact Person</label>
                  <input type="text" class="form-control" id="contactPerson" placeholder="Contact Person" name="employee_contact_person" >
                </div>

                <div class="form-group">
                  <label for="contactNoperson">Contact Person's Contact Number</label>
                  <input type="number" class="form-control" id="contactNoperson" placeholder="Contact Person's Contact Number" name="employee_contact_no_person" >
                </div>
<?php
echo"
    </div>
                </div>
                <div class='modal-footer'>

                    <input type='hidden' name='get_employee_id' value='".$row['employee_id']."'>               
                    <button type='submit' name='admin_editemployee'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";




   echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_viewmodal."' class='modal fade'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>EMPLOYEE INFORMATION</h4>
                </div>
                <div class='modal-body'>

                ";?>


<div class='col-md-2'>
<strong>Birthday</strong><br>
<?php echo $row['employee_birthday']; ?>
</div>
<div class='col-md-2'>
<strong>Gender</strong><br>
<?php


if($row['employee_gender'] = '1'){
 echo 'Male'; 
}else{
   echo 'Female'; 
}





 ?>
</div>
<div class='col-md-2'>
<strong>SSS Number</strong><br>
<?php echo $row['employee_sss_number']; ?>
</div>
<div class='col-md-2'>
<strong>Philhealth</strong><br>
<?php echo $row['employee_philhealth']; ?>
</div>
<div class='col-md-2'>
<strong>Contact Person No.</strong><br>
<?php echo $row['employee_no_contact_person']; ?>
</div>
<div class='col-md-2'>
<strong>Employee Address</strong><br>
<?php echo $row['employee_address']; ?>
</div>




            </div>
            <br><br><br>     <br><br><br> 

                            <div class='modal-footer'>
     
                </div>

        </div>
    </div>
<?php





echo ' </tr>';








        }

?>


                </tbody>

              </table>

</div>



<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>

</html>
