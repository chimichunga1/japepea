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



<button class="btn btn-primary col-md-12" data-toggle="collapse" data-target="#invoice"> <center>GENERATE REPORTS &nbsp;<i class="glyphicon glyphicon-print"></i></center></button>

<div id="invoice" class="collapse">
  <br>
  <br><br>
            <!-- /.box-header -->
            <div class="box-body">
<form method="POST" action="generate_pullout_weekly.php">
              <div class="box-body">


                  <div class="form-group">
                    <label>Select Week :</label>
                  <input type="number" class="form-control" min="1" max="52" id="week" placeholder="Enter week" name="week" required>
                  </div>

                  <br>

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2012" max="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<button type="submit" name="weekly" class="btn btn-primary col-md-12">Generate Data <i class="glyphicon glyphicon-print"></i></button>
<br>

</form>
            <form method="POST" action="generate_pullout_monthly.php">
                  <div class="form-group">
                    <label>Select Month :</label>
                    <select name="month" class="form-control">
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>

                  <br>

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2012" max="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<br>
<button type="submit" name="monthly" class="btn btn-primary col-md-12">Generate Data <i class="glyphicon glyphicon-print"></i></button>
<br>

</form>

            <form method="POST" action="generate_pullout_monthly.php">

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2012" max="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<button type="submit" name="yearly" class="btn btn-primary col-md-12">Generate Data <i class="glyphicon glyphicon-print"></i></button>

</form>




              </div>
              <!-- /.box-body -->


<br>
              <div class="box-footer">

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
            
                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_pullout WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['stocks_code']; ?> </td>
                  <td><?php echo $row['stocks_itemname']; ?></td>
                  <td><?php echo $row['stocks_quantity']; ?> </td>
                  <td><?php echo "P".$row['stocks_priceperunit'].".00"; ?></td>
                  <td><?php echo $row['supplier_name']; ?> </td>
                  <td><?php echo $row['category_name']; ?> </td>

<?php   

$category_editmodal="category_editmodal".$row['pullout_id'];
$category_delmodal="category_delmodal".$row['pullout_id'];
$add_stocks_modal="add_stocks_modal".$row['pullout_id'];
    echo '


   


   ';

   echo
"
    
    <!-- Modal HTML -->
    <div id='".$add_stocks_modal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>ADD STOCK</h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >

    <div class='form-group'>

    ";



    ?>




<label>Add Stocks to <?php echo $row['stocks_itemname'];?></label>

<?php 

    echo"
<input type='number' class='form-control' name='add_stock' min='1' required>
<input type='hidden' name='get_stocksid' value='".$row['pullout_id']."'>





    </div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='add_extra_stocks'  class='btn btn-success'>Yes</button>
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
                <input type='hidden' name='get_stocksid' value='".$row['pullout_id']."'>
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
