<?php include('connection.php'); ?>
<?php 

if(!isset($_SESSION['check_num']))
{
      echo '<script language="javascript">';
      echo 'alert("ERROR! YOU WILL NOW BE REDIRECTED")';
      echo '</script>';
      echo"<script>window.location.href='admin_view_sales.php';</script>";    
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  
<?php include('admin-links.php'); ?>



  
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
  


    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Admin, Inc. </strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: info@almasaeedstudio.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>John Doe</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
            Email: john.doe@example.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Serial #</th>
              <th>Price Per Unit</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>

<?php

  $get_invoiceid = $_SESSION['pullout_sessionid'];

$table2_ordered = "SELECT * FROM admin_stocks
RIGHT JOIN admin_itemsordered ON admin_stocks.stocks_id = admin_itemsordered.stocks_id WHERE admin_itemsordered.invoice_id='".$get_invoiceid."'
";



$run_ordered = mysqli_query($connect,$table2_ordered);

while($row_ordered = mysqli_fetch_array($run_ordered))


{

?>




            <tr>
              <td><?php echo $row_ordered['order_quantity']; ?> </td>
              <td><?php echo $row_ordered['stocks_itemname']; ?> </td>
              <td><?php echo $row_ordered['stocks_code']; ?> </td>
              <td>P<?php echo $row_ordered['stocks_priceperunit']; ?>.00</td>
              <td>P<?php echo (int)$row_ordered['stocks_priceperunit']*(int)$row_ordered['order_quantity']; ?>.00</td>
            </tr>








<?php
if(!isset($total))
  $total = 0;

            $total = $total + (int)$row_ordered['stocks_priceperunit']*(int)$row_ordered['order_quantity'];
}

  $_SESSION['invoice_total'] = $total;

?>

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="credit/visa.png" alt="Visa">
          <img src="credit/mastercard.png" alt="Mastercard">
          <img src="credit/american-express.png" alt="American Express">
          <img src="credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
<!--           <p class="lead">Invoice Date 2/22/2014</p> -->

          <div class="table-responsive">
            <table class="table">
<!--               <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$250.30</td>
              </tr>
              <tr>
                <th>Tax (9.3%)</th>
                <td>$10.34</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>$5.80</td>
              </tr>
              <tr> -->
                <th>Total:</th>
                <td>P <?php echo $_SESSION['invoice_total']; ?>.00</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<form action="save_data.php" method="POST">
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>




          <input type="hidden" value="<?php echo $get_invoiceid; ?>" name="pullout_invoiceid">
          <button type="submit" class="btn btn-success pull-right" name="pullout_to_reports"><i class="fa fa-credit-card"></i> Save to Reports
          </button>



          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
</form>
    </section>
    <!-- /.content -->


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

