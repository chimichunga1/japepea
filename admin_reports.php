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

<h2><B>&nbsp;REPORTS</B></h2>
<br><br>
<div class="col-md-12">
<table class="table table-striped table-bordered" id = "teacher_table">
                <thead>
                <tr>
                  <th>REPORTS ID</th>
                  <th>INVOICE SERIAL</th>
                  <th>TOTAL AMOUNT</th>           
                  <th>DATE CREATED</th>               
                  <th>Actions</th>


                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_reports
RIGHT JOIN admin_invoice ON admin_reports.invoice_id = admin_invoice.invoice_id WHERE admin_invoice.isDeleted = '1'
";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['reports_id']; ?> </td>
                  <td><?php echo $row['invoice_serial']; ?></td>
                  <td><?php echo $row['total_amount']; ?></td>                  
                  <td><?php echo $row['invoice_date']; ?></td>   


               

<?php   

$reports_viewmodal="reports_viewmodal".$row['reports_id'];
$reports_viewmodal="reports_viewmodal".$row['reports_id'];
    echo '

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$reports_viewmodal.'"><i class="fa fa-eye"></i></button>&nbsp;</td>
   ';
echo
"
    
    <!-- Modal HTML -->
    <div id='".$reports_viewmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>ITEMS ORDERED  </h4>
                </div>
                <div class='modal-body'>

     ";


?>
<div class="col-md-4">
ITEM NAME
</div>
<div class="col-md-4">
QUANTITY
</div>
<div class="col-md-4">
PRICE
</div>
<br><br>
<?php
$table2_ordered = "SELECT * FROM admin_reports
RIGHT JOIN admin_invoice ON admin_reports.invoice_id = admin_invoice.invoice_id
RIGHT JOIN admin_itemsordered ON admin_invoice.invoice_id = admin_itemsordered.invoice_id 
RIGHT JOIN admin_stocks ON admin_itemsordered.stocks_id = admin_stocks.stocks_id
WHERE admin_itemsordered.isDeleted = '1'";



$run_ordered = mysqli_query($connect,$table2_ordered);

while($row_ordered = mysqli_fetch_array($run_ordered))


{

?>

<div class="col-md-4">
<?php echo $row_ordered['stocks_itemname']; ?>
</div>
<div class="col-md-4">
<?php echo $row_ordered['order_quantity']; ?>
</div>
<div class="col-md-4">
<?php echo $row_ordered['stocks_priceperunit']; ?>
</div>


<?php

}

echo "        

                </div>
                <div class='modal-footer'>

  </form>
                </div>
            </div>
        </div>
    </div>
";


echo
"
    
    <!-- Modal HTML -->
    <div id='".$reports_viewmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>
Would you like to deactivate this Category ? 
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_categoryid' value='".$row['reports_id']."'>
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
