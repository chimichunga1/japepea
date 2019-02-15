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
  <h2><B>&nbsp;SUPPLIERS</B></h2>
<br>
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD SUPPLIER &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>

            <div class="box-body">
            <form method="POST" action="save_data.php">
              <div class="box-body">

<div class="row">

  <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputSupplierName">Supplier Name</label>
                  <input type="text" name="supplier_name" class="form-control" id="exampleInputSupplierName" placeholder="Enter Supplier Name" required>
                </div>    
  </div>
<div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputContactName">Contact Person</label>
                  <input type="number" max="99999999999" name="contact_person" class="form-control" id="exampleInputContactName" placeholder="Enter Contat Person" required>
                </div>     
</div>
<div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputSupplierAddress">Supplier Address</label>
                  <input type="text" name="supplier_address" class="form-control" id="exampleInputSupplierAddress" placeholder="Enter Supplier Address" required>
                </div>   
</div>

</div>






              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="admin_add_supplier" >Save</button>
              </div>
            </form>





            </div>
</div>



<br><br>
<div class="col-md-12">
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>Supplier Name</th>
                  <th>Contact Person</th>
                  <th>Supplier Name</th>

                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_suppliers WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['supplier_name'];?></td>
                  <td><?php echo $row['contact_person'];?>
                  </td>
                  <td><?php echo $row['supplier_address'];?></td>



               

<?php   

$supplier_editmodal="supplier_editmodal".$row['supplier_id'];
$supplier_delmodal="supplier_delmodal".$row['supplier_id'];
    echo '

<td><button class="btn btn-success"  data-toggle="modal" data-target="#'.$supplier_editmodal.'"><i class="glyphicon glyphicon-edit"></i></button>&nbsp;<button class="btn btn-danger"   data-toggle="modal" data-target="#'.$supplier_delmodal.'"><i class="glyphicon glyphicon-remove"></i></button></td>
   ';
echo
"
    
    <!-- Modal HTML -->
    <div id='".$supplier_editmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>EDIT SUPPLIER'S FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
";
?>

              <div class="box-body">


                <div class="form-group">
                  <label for="exampleInputSupplierName">Supplier Name</label>
                  <input type="text" name="supplier_name" class="form-control" id="exampleInputSupplierName" placeholder="Enter Supplier Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputContactName">Contact Person</label>
                  <input type="text" name="contact_person" class="form-control" id="exampleInputContactName" placeholder="Enter Contact Person">
                </div>
                <div class="form-group">
                  <label for="exampleInputSupplierAddress">Supplier Address</label>
                  <input type="text" name="supplier_address" class="form-control" id="exampleInputSupplierAddress" placeholder="Enter Supplier Address">
                </div>



              </div>
<?php
echo"
    <div class='form-group'>
    
    </div>
                </div>
                <div class='modal-footer'>
                    <input type='hidden' name='get_supplierid' value='".$row['supplier_id']."'>                
                    <button type='submit' name='admin_editsupplier'  class='btn btn-success'>Yes</button>
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
    <div id='".$supplier_delmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>
Would you like to deactivate this Supplier ? 
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_supplierid' value='".$row['supplier_id']."'>
                    <button type='submit' name='admin_delsupplier'  class='btn btn-success'>Yes</button>
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


    <!-- /.content -->
  </div>
    <!-- /.content -->



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
