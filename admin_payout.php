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


</head>

<body>
<?php



include("admin_navbar.php");



?>


<div class="container">
<!--     <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
            <strong>Billed To:</strong><br>
              John Smith<br>
              1234 Main<br>
              Apt. 4B<br>
              Springfield, ST 54321
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Shipped To:</strong><br>
              Jane Smith<br>
              1234 Main<br>
              Apt. 4B<br>
              Springfield, ST 54321
            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Payment Method:</strong><br>
              Visa ending **** 4242<br>
              jsmith@email.com
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Order Date:</strong><br>
              March 7, 2014<br><br>
            </address>
          </div>
        </div>
      </div>
    </div>
     -->
<div class="row">

  <div class="col-md-4">

  </div>
    <div class="col-md-4">
    <center><h4> JAPEA ENTERPRISE</h4></center>
<center><h4>#64 C Raymundo Ave. corner Stella Mariz, Maybunga, Pasig City</h4></center>
  </div>
    <div class="col-md-3">
<img src="css/logo.png">
  </div>



</div>


<div class="row">

<div class="col-md-3">
<b>DATE CREATED : <?php echo date("Y-m-d h:i A") ?></b><br>
<b>PREPARED BY : <?php $username = $_SESSION['session_username']; echo $username; ?></b><br>
<b>DATA AS OF : <?php echo date("Y-m-d h:i A") ?></b><br>



</div>
</div>
<br><br>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>




                <tr>
                      <td><strong>Qty</strong></td>
                      <td class="text-left"><strong>Product</strong></td>
                      <td class="text-left"><strong>Serial #</strong></td>
                      <td class="text-left"><strong>Price Per Unit </strong></td>
                      <td class="text-left"><strong>Subtotal </strong></td>
                 </tr>
                </thead>
                <tbody>
  
<?php

  $get_invoiceid = $_SESSION['pullout_sessionid'];
$total_final = 0;
$table2_ordered = "SELECT * FROM admin_stocks
RIGHT JOIN admin_itemsordered ON admin_stocks.stocks_id = admin_itemsordered.stocks_id WHERE admin_itemsordered.invoice_id='".$get_invoiceid."'
";



$run_ordered = mysqli_query($connect,$table2_ordered);

while($row_ordered = mysqli_fetch_assoc($run_ordered))


{

?>




            <tr>
              <td><?php echo $row_ordered['order_quantity']; ?> </td>
              <td><?php echo $row_ordered['stocks_itemname']; ?> </td>
              <td><?php echo $row_ordered['stocks_code']; ?> </td>
              <td>P<?php echo $row_ordered['stocks_priceperunit']; ?>.00</td>
              <td>P<?php 


              echo (int)$row_ordered['stocks_priceperunit']*(int)$row_ordered['order_quantity']; 
              $total_initial = (int)$row_ordered['stocks_priceperunit']*(int)$row_ordered['order_quantity'];


              ?>.00</td>
            </tr>








<?php

  $total_final = $total_final + $total_initial;
 $_SESSION['invoice_total'] = $total_final; 



}




?>

                </tbody>
              </table>
            </div>
          </div>
                <div class="row">
        <!-- accepted payments column -->
<!--         <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="credit/visa.png" alt="Visa">
          <img src="credit/mastercard.png" alt="Mastercard">
          <img src="credit/american-express.png" alt="American Express">
          <img src="credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div> -->
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

            <!-- /.row -->
<form action="print.php" method="POST">
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
         <!--  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Print</a> -->



          <input type="hidden" value="<?php echo $username; ?>" name="get_username">
          <input type="hidden" value="<?php echo $get_invoiceid; ?>" name="pullout_invoiceid">
         <!--  <button type="submit" class="btn btn-success pull-right" name="pullout_to_reports"><i class="fa fa-credit-card"></i> Save to Reports
          </button> -->



          <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px;" href="print.php">
            <i class="glyphicon glyphicon-print"></i> Print
          </button>

          <br><br>
        </div>
      </div>
</form>
 

        </div>
      </div>
    </div>
</div>

</body>

</html>
