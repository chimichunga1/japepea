<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  
<?php include('admin-links.php'); ?>
<?php include('connection.php'); ?>


  
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">
<?php include('main-header.php');?>
<?php include('main-sidebar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>

<h2><B>&nbsp;SUPPLIERS</B></h2>
<br>
        <div class="col-md-12">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <center><h3 class="box-title">ADD SUPPLIER</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form method="POST" action="save_data.php">
              <div class="box-body">


                <div class="form-group">
                  <label for="exampleInputSupplierName">Supplier Name</label>
                  <input type="text" name="supplier_name" class="form-control" id="exampleInputSupplierName" placeholder="Enter Supplier Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputContactName">Contact Person</label>
                  <input type="text" name="contact_person" class="form-control" id="exampleInputContactName" placeholder="Enter Contat Person" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputSupplierAddress">Supplier Address</label>
                  <input type="text" name="supplier_address" class="form-control" id="exampleInputSupplierAddress" placeholder="Enter Supplier Address" required>
                </div>



              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="admin_add_supplier" >Save</button>
              </div>
            </form>





            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


<div class="col-md-12">
<table class="table table-striped table-bordered" id = "teacher_table">
                <thead>
                <tr>
                  <th>Supplier ID</th>
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

<td><button class="btn btn-success"  data-toggle="modal" data-target="#'.$supplier_editmodal.'"><i class="fa fa-edit"></i></button>&nbsp;<button class="btn btn-danger"   data-toggle="modal" data-target="#'.$supplier_delmodal.'"><i class="fa fa-close"></i></button></td>
   ';
echo
"
    
    <!-- Modal HTML -->
    <div id='".$supplier_editmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>EDIT FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >

    <div class='form-group'>
    
    </div>
                </div>
                <div class='modal-footer'>
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



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">JPEA Enterprise</a>.</strong> All rights
    reserved.
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include('script-links.php'); ?>
</body>
</html>
