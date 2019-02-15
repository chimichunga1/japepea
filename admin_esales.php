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


<h2><B>&nbsp;E-SALES</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD SALES RECORD &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form method="POST" action="save_data.php">

<?php 
date_default_timezone_set('Asia/Manila');
$date =  date('F j Y'); 


?>

<div class="row">

<div class="col-md-3">
                <div class="form-group">
                  <label for="date">Date : </label>
                  <input type="text" class="form-control" id="date" value="<?php echo $date;?>" name="date" readonly="">
                </div>
</div>

<div class="col-md-3">
                <div class="form-group">
                  <label>POS NO : </label>
                  <select name="posno" class="form-control">
                    <option value="1">POS 1</option>
                    <option value="2">POS 2</option>
                  </select>
                </div>
</div>

<div class="col-md-3">
                <div class="form-group">
                  <label for="vatmerch">VAT Merch Sales : </label>
                  <input type="number" class="form-control" min="1" id="vatmerch" placeholder="Vatable Merch Sales" name="vatmerchsales" required>
                </div>
</div>

<div class="col-md-3">
                <div class="form-group">
                  <label for="VatComTrans">VAT Commission Transaction : </label>
                  <input type="number" class="form-control" min="1" id="VatComTrans" placeholder="Vatable Commission Transaction" name="vatcomtrans" required>
                </div>
</div>

</div>


<div class="row">
<div class="col-md-3">
                <div class="form-group">
                  <label for="vatsales">VAT Sales : </label>
                  <input type="number" class="form-control" min="1" id="vatsales" placeholder="Vatable Sales" name="vatsales" required>
                </div>
</div>
<div class="col-md-3">
                <div class="form-group">
                  <label for="nonvatsales">Non Vat Sales : </label>
                  <input type="number" class="form-control" min="1" id="nonvatsales" placeholder="Non Vatable Sales" name="nonvatsales" required>
                </div>
</div>
<div class="col-md-3">
                <div class="form-group">
                  <label for="vatexscsales">Vat Exempt SC Sales : </label>
                  <input type="number" class="form-control" min="1" id="vatexscsales" placeholder="Enter Exempt SC Sales" name="vatexscsales" required>
                </div>
</div>
<div class="col-md-3">

                <div class="form-group">
                  <label for="vatexsales">Vat Exempt Sales : </label>
                  <input type="number" class="form-control" min="1" id="vatexsales" placeholder="Enter Exempt Sales" name="vatexsales" required>
                </div>
</div>


</div>


              </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-success col-md-12" name="add_sales" >Save</button>
              </div>
</form>
</div>

<br><br>

<a class="btn btn-primary col-md-12" href="sales_pos1.php"> <center>POS 1 &nbsp;</center></a>

<br>
<br>
<a class="btn btn-primary col-md-12" href="sales_pos2.php"> <center>POS 2 &nbsp;</center></a>


<br>




  </div>





























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
