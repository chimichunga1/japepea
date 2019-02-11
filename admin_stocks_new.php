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

<body>
<?php



include("admin_navbar.php");



?>

<div class="container">


<h2><B>&nbsp;STOCKS</B></h2>
<br>


<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD STOCKS &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
  <br><br>
            <!-- /.box-header -->
            <div class="box-body">
            <form method="POST" action="save_data.php">
              <div class="box-body">

<div class="row">

  <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputItemName">Item Name</label>
                  <input type="text" class="form-control" name="stock_itemname" id="exampleInputItemName" placeholder="Enter Item Name" required>
                </div>          
  </div>
<div class="col-md-4">
 
                <div class="form-group">
                  <label for="exampleInputQuantity">Quantity</label>
                  <input type="number" class="form-control" name="stock_quantity" id="exampleInputQuantity" min="1" max="99999" required>
                </div>             
</div>
<div class="col-md-4">
      
                <div class="form-group">
                  <label for="exampleInputPricePerUnit">Price Per Unit</label> 
                  <input type="number" class="form-control"  name="stock_priceperunit" id="exampleInputPricePerUnit" min="1" max="99999" required>
                </div>   
</div>

</div>
      <!--           <div class="form-group">
                  <label for="exampleInputCode">CODE</label>
                  <input type="text" class="form-control" name="stock_code" id="exampleInputCode" placeholder="Enter CODE or Serial " required>
                </div> -->
<div class="row">

<div class="col-md-6">
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
  </div>
<div class="col-md-6">
                <div class="form-group">
                  <label>Category</label>
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

</div>








              </div>
              <!-- /.box-body -->


<br>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_stocks">Save</button>
              </div>
            </form>



            </div>

</div>

<div class="col-md-12">
<table class="table table-striped table-bordered" id = "teacher_table">
  <br><br>
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

<td><button class="btn btn-danger"   data-toggle="modal" data-target="#'.$category_delmodal.'"><i class="glyphicon glyphicon-remove"></i></button></td>
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
                <input type='hidden' name='get_stocksid' value='".$row['stocks_id']."'>
                    <button type='submit' name='admin_delstocks'  class='btn btn-success'>Yes</button>
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
    $('#teacher_table').DataTable();
} );
</script>

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
