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


</head>
<style type="text/css">
  
body {
    height: 670px;
    background: linear-gradient(to bottom, #33ccff 0%, #66ff99 100%)
}
  
</style>

<body>
<?php



include("admin_navbar.php");



?>

<div class="container">

<br>

<h2><B>&nbsp;REPORTS</B></h2>
<br><br>
<div class="col-md-12">
<table class="table table-striped table-bordered" id = "teacher_tables">
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

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$reports_viewmodal.'"><i class="glyphicon glyphicon-eye-open"></i></button>&nbsp;</td>
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




</div>

</div>


<script type="text/javascript">
  $(document).ready( function () {
    $('#teacher_tables').DataTable();
} );
</script>

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
