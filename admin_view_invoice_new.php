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
  position: relative
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
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD INVOICE &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
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

<br>



            </div>

</div>
<br><br>
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#addItems"> <center>ADD ITEMS TO INVOICE &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>
<div id="addItems" class="collapse">
  <br>
          <div class="box-body">
            <form method="POST" action="save_data.php">
              <div class="box-body">
                <br>
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
<br>
</div>


<br>
<br>




<div class="col-md-12">
<table class="table table-striped table-bordered" id = "teacher_tables">
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

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$invoice_editmodal.'"><i class="glyphicon glyphicon-eye-open"></i></button>&nbsp;
    <button class="btn btn-success"   data-toggle="modal" data-target="#'.$invoice_pulloutmodal.'"><i class="glyphicon glyphicon-check"></i></button>&nbsp;
    <button class="btn btn-danger"   data-toggle="modal" data-target="#'.$invoice_delmodal.'"><i class="glyphicon glyphicon-remove"></i></button>&nbsp;



</td>
   ';


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
QUANTITY ON HAND
</div>
<div class="col-md-4">
PRICE
</div>
<br><br>
<?php
$thisval = $row['invoice_id'];

$table2_ordered = "SELECT * FROM admin_stocks RIGHT JOIN admin_itemsordered ON admin_stocks.stocks_id = admin_itemsordered.stocks_id WHERE admin_itemsordered.invoice_id='$thisval' AND admin_stocks.isDeleted = '0'";



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
<?php echo $row_ordered['stocks_priceperunit'].".00"; ?>
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
Would you like to deactivate this Invoice ? 
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_invoiceid' value='".$row['invoice_id']."'>
                    <button type='submit' name='admin_delinvoice'  class='btn btn-success'>Yes</button>
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


 }



?>


                </tbody>

              </table>




</div>
    <!-- /.content -->
  </div>




  </div>

</div>



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
