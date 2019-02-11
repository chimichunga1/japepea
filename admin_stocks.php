<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->

  
<?php include('admin-links.php'); ?>
<?php include('connection.php'); ?>
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

<h2><B>&nbsp;STOCKS</B></h2>
<br>
        <div class="col-md-12">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <center><h3 class="box-title">ADD STOCKS</h3></center>

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
                  <label for="exampleInputCode">CODE</label>
                  <input type="text" class="form-control" name="stock_code" id="exampleInputCode" placeholder="Enter CODE or Serial " required>
                </div>
                <div class="form-group">
                  <label for="exampleInputItemName">Item Name</label>
                  <input type="text" class="form-control" name="stock_itemname" id="exampleInputItemName" placeholder="Enter Item Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputQuantity">Quantity</label>
                  <input type="number" class="form-control" name="stock_quantity" id="exampleInputQuantity" min="1" max="99999" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPricePerUnit">Price Per Unit</label> 
                  <input type="number" class="form-control"  name="stock_priceperunit" id="exampleInputPricePerUnit" min="1" max="99999" required>
                </div>
                <div class="form-group">
                  <label>Supplier</label>
                  <select name="stock_supplierid" class="form-control">


<?php 


$table2 = "SELECT * FROM admin_suppliers WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
?>
                    <option value="<?php echo $row['supplier_id']; ?>"><?php echo $row['supplier_name']; ?></option>
   
<?php 
        }

?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Supplier</label>
                  <select name="categories_supplierid" class="form-control">


<?php 


$table2 = "SELECT * FROM admin_categories WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
?>
                    <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
   
<?php 
        }

?>
                  </select>
                </div>






              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_stocks">Save</button>
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
                  <th>CODE</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price Per Unit</th>
                  <th>Supplier</th>
                  <th>Category</th>   
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_stocks WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['stocks_code']; ?> </td>
                  <td><?php echo $row['stocks_itemname']; ?></td>
                  <td><?php echo $row['stocks_quantity']; ?> </td>
                  <td><?php echo $row['stocks_priceperunit']; ?></td>
                  <td><?php echo $row['stocks_supplierid']; ?> </td>
                  <td><?php echo $row['stocks_categoriesid']; ?> </td>

<?php   

$category_editmodal="category_editmodal".$row['stocks_id'];
$category_delmodal="category_delmodal".$row['stocks_id'];
    echo '

<td><button class="btn btn-success"  data-toggle="modal" data-target="#'.$category_editmodal.'"><i class="fa fa-edit"></i></button>&nbsp;<button class="btn btn-danger"   data-toggle="modal" data-target="#'.$category_delmodal.'"><i class="fa fa-close"></i></button></td>
   ';
echo
"
    
    <!-- Modal HTML -->
    <div id='".$category_editmodal."' class='modal fade'>
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
                    <button type='submit' name='admin_editcategory'  class='btn btn-success'>Yes</button>
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
    <div id='".$category_delmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>
Would you like to deactivate this Stocks ? 
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_categoryid' value='".$row['stocks_id']."'>
                    <button type='submit' name='admin_delcategory'  class='btn btn-success'>Yes</button>
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



<script type="text/javascript">
  $(document).ready( function () {
    $('#teacher_tables').DataTable();
} );
</script>

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
