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
  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
  <!-- /Start your project here-->

    <script src="bs/js/bootstrap.min.js"></script>


           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
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

<style>
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

<h2><B>&nbsp;ACCOUNTS</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD ACCOUNTS &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form method="POST" action="save_data.php">
<div class="row">

  <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputFirstName">First Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" name="firstname" required>
                </div>
  </div>
<div class="col-md-4">
                <div class="form-group">
                  <label for="tester">Middle Name</label>
                  <input type="text" class="form-control" id="tester" placeholder="Enter Middle Name" name="middlename" >
                </div>
</div>
<div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputLastName">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" name="lastname" required>
                </div>
</div>

</div>
<div class="row">

  <div class="col-md-4">
                 <div class="form-group">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter Username" name="username" required>
                </div>        
  </div>
<div class="col-md-4">
                 <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                </div>        
</div>
<div class="col-md-4">
                   <div class="form-group">
                  <label>Access Right</label>
                  <select name="access_right" class="form-control">
                    <option value="1">ADMIN</option>
                    <option value="2">USER</option>

                  </select>
                </div>    
</div>

</div>




              </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_accounts" >Save</button>
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
                  <th>Account ID</th>
                  <th>Full Name</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Actions</th>


                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];
$table2 = "SELECT * FROM admin_accounts WHERE isDeleted = '0' and username != '$username_check'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['user_id']; ?> </td>
                  <td><?php echo $row['user_firstname'].' '.$row['user_middlename'].' '.$row['user_lastname']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['password']; ?></td>
    


               

<?php   

$user_editmodal="user_editmodal".$row['user_id'];
$user_delmodal="user_delmodal".$row['user_id'];
    echo '

<td><button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_editmodal.'"><i class="glyphicon glyphicon-edit"></i></button>&nbsp;<button class="btn btn-danger"   data-toggle="modal" data-target="#'.$user_delmodal.'"><i class="glyphicon glyphicon-remove"></i></button></td>
   ';
echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_editmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>UPDATE USER INFORMATION</h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
";
?>

              <div class="box-body">


                <div class="form-group">
                  <label for="exampleInputFirstName">First Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" name="firstname">
                </div>
                <div class="form-group">
                  <label for="middle">Middle Name</label>
                  <input type="text" class="form-control" id="middle" placeholder="Enter Last Name" name="middlename">
                </div>
                <div class="form-group">
                  <label for="exampleInputLastName">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" name="lastname">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter Username" name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <label>Access Right</label>
                  <select name="access_right" class="form-control">
                    <option value="1">ADMIN</option>
                    <option value="2">USER</option>

                  </select>
                </div>

              </div>
              <!-- /.box-body -->

<?php
echo"
    <div class='form-group'>
    
    </div>
                </div>
                <div class='modal-footer'>
                    <input type='hidden' name='get_userid' value='".$row['user_id']."'>
                    <button type='submit' name='admin_edituser'  class='btn btn-success'>Update</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancel</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";


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
                <input type='hidden' name='get_userid' value='".$row['user_id']."'>
                    <button type='submit' name='admin_deluser'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";




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
