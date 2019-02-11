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

<h2><B>&nbsp;LOGS</B></h2>
<br>



<div class="col-md-12">
<table class="table table-striped table-bordered" id = "teacher_table">
                <thead>
                <tr>
                  <th>LOGS ID</th>
                  <th>USERNAME</th>  
                  <th>REMARKS</th>
                  <th>DATE</th>

                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_logs";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['logs_id']; ?> </td>
                  <td><?php echo $row['logs_username']; ?></td>
                  <td><?php echo $row['logs_remarks']; ?></td>  
                  <td><?php echo $row['logs_date']; ?></td>  


      


<?php 
  
  echo '</tr>';
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
