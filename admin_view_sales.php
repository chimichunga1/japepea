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

<h2><B>&nbsp;INVOICE</B></h2>
<br>
        <div class="col-md-12">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <center><h3 class="box-title">ADD INVOICE</h3></center>

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
                  <label for="exampleInputInvoiceName">Invoice Serial</label>
                  <input type="text" class="form-control" id="exampleInputInvoiceName" placeholder="Enter Invoice Serial" name="invoice_serial" required>
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_invoice" >Save</button>
              </div>
            </form>





            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

<div class="col-md-12">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <center><h3 class="box-title">ADD ITEMS TO INVOICE</h3></center>

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
                <label>Select Stock Item</label>
                  <select  class='form-control' onchange='showUser(this.value)'>
    <option value="" disabled selected>Select your option</option>  
                      <?php 
                      $table2_stocks = "SELECT * FROM admin_stocks WHERE stocks_quantity != '0' AND isDeleted='0'";



                      $run_query2b_stocks = mysqli_query($connect,$table2_stocks);

                      while($row_stocks = mysqli_fetch_array($run_query2b_stocks))

                      {

                      ?>

                      <option value="<?php echo $row_stocks['stocks_id']; ?>"><?php echo $row_stocks['stocks_itemname'];?></option>

                      <?php
                      }
                      ?>
                    </select>


                <div id='txtHint'><b></b>
                </div>

<p></p>


              </div>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="admin_additems_toinvoice" >Save</button>
              </div>

            </form>
            </div>
            <!-- /.box-body -->

          <!-- /.box -->
        </div>



<div class="col-md-12">
<table class="table table-striped table-bordered" id = "teacher_table">
                <thead>
                <tr>
                  <th>INVOICE ID</th>
                  <th>Invoice Name</th>
                  <th>Date Created</th>                
                  <th>Actions</th>


                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_invoice WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['invoice_id']; ?> </td>
                  <td><?php echo $row['invoice_serial']; ?></td>
                  <td><?php echo $row['invoice_date']; ?></td>   


               

<?php   

$invoice_editmodal="invoice_editmodal".$row['invoice_id'];
$invoice_pulloutmodal="invoice_pulloutmodal".$row['invoice_id'];
$invoice_delmodal="invoice_delmodal".$row['invoice_id'];
    echo '

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$invoice_editmodal.'"><i class="fa fa-eye"></i></button>&nbsp;
    <button class="btn btn-success"   data-toggle="modal" data-target="#'.$invoice_pulloutmodal.'"><i class="fa fa-check"></i></button>&nbsp;
    <button class="btn btn-danger"   data-toggle="modal" data-target="#'.$invoice_delmodal.'"><i class="fa fa-close"></i></button>&nbsp;



</td>
   ';



echo
"
    
    <!-- Modal HTML -->
    <div id='".$invoice_delmodal."' class='modal fade'>
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
                <input type='hidden' name='get_categoryid' value='".$row['invoice_id']."'>
                    <button type='submit' name='admin_delcategory'  class='btn btn-success'>Yes</button>
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
    <div id='".$invoice_pulloutmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='admin_checkpullout.php' method='post' >
    <div class='form-group'>


<center>Would you like to pullout this stock invoice ? </center>
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_invoiceid' value='".$row['invoice_id']."'>
                    <button type='submit' name='admin_pulloutinvoice'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";



echo ' </tr>';




echo
"
    

    <div id='".$invoice_editmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>STOCK ITEMS INVOICE </h4>
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
$table2_ordered = "SELECT * FROM admin_stocks
RIGHT JOIN admin_itemsordered ON admin_stocks.stocks_id = admin_itemsordered.stocks_id WHERE admin_itemsordered.invoice_id='".$row['invoice_id']."'
 AND isDeleted = '0'";



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
<br><br>
                <div class='modal-footer'>

                </div>
            </div>
        </div>
    </div>
";



        }

?>


                </tbody>

              </table>



<script type="text/javascript">
  $(document).ready( function () {
    $('#teacher_tables').DataTable();
} );
</script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","get_stocks.php?q="+str,true);
        xmlhttp.send();
    }
}
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
