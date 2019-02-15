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
  
           <script src="js/jquery.min.js"></script> 
  <!-- /Start your project here-->

    <script src="bs/js/bootstrap.min.js"></script>


           <script src="js/jquery.dataTables.min.js"></script>  
           <script src="js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />  
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

<h2><B>&nbsp;FILTER DATA</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>Filter Data &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form method="POST" action="sales_pos1.php">
                <div class="form-group">
                    <label>Select Week :</label>
                  <input type="number" class="form-control" min="1" max="52" id="week" placeholder="Enter week" name="week" required>
                </div>


                  <div class="form-group">
                    <label>Select Week :</label>
                    <select name="week" class="form-control">
                      <option value="01">Week 1</option>
                      <option value="02">Week 2</option>
                      <option value="03">Week 3</option>
                      <option value="04">Week 4</option>
                      <option value="05">Week 5</option>
                    </select>
                  </div>

                  <br>

<!--                   <div class="form-group">
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
 -->
                  <br>

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<button type="submit" name="weekly" class="btn btn-primary col-md-12">Filter By Week</button>
<br>

</form>
            <form method="POST" action="sales_pos1.php">
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
                  <input type="number" class="form-control" min="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<br>
<button type="submit" name="monthly" class="btn btn-primary col-md-12">Filter By Month</button>
<br>

</form>

            <form method="POST" action="sales_pos1.php">

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<button type="submit" name="yearly" class="btn btn-primary col-md-12">Filter By Year</button>

</form>
</div>
</div>
<br>
<br>



<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#invoice"> <center>GENERATE REPORTS &nbsp;<i class="glyphicon glyphicon-print"></i></center></button>

<div id="invoice" class="collapse">
  <br>
  <br><br>
            <!-- /.box-header -->
            <div class="box-body">
<form method="POST" action="generate_pos_weekly.php">
              <div class="box-body">


                  <div class="form-group">
                    <label>Select Week :</label>
                  <input type="number" class="form-control" min="1" max="52" id="week" placeholder="Enter week" name="week" required>
                  </div>

                  <br>

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>

<input type="hidden" name="pos_id" value="pos2">
<button type="submit" name="weekly" class="btn btn-primary col-md-12">Generate Data <i class="glyphicon glyphicon-print"></i></button>
<br>

</form>
            <form method="POST" action="generate_pos_monthly.php">
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
                  <input type="number" class="form-control" min="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<br>
<input type="hidden" name="pos_id" value="pos2">
<button type="submit" name="monthly" class="btn btn-primary col-md-12">Generate Data <i class="glyphicon glyphicon-print"></i></button>
<br>

</form>

            <form method="POST" action="generate_pos_yearly.php">

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>
<input type="hidden" name="pos_id" value="pos2">

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



<br><br>

<?php 


if(isset($_POST['weekly'])){

  if((int)$_POST['week'] < 10){
  $week = "0".$_POST['week'];
}else{
  $week = $_POST['week'];
}



  $year = $_POST['year'];

 ?>

<b><h4>Week # <?php echo $week." Week of Year ".$year;?></h4></b>

<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>SALES ID</th>
                  <th>Date</th>  
                  <th>Sales Vat Sales</th>
                  <th>Sales Non-Vat Sales</th>

                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_sales WHERE posid = '2' AND week = '$week' AND year = '$year' AND  isDeleted = '0' ORDER BY week ASC";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['sales_id']; ?> </td>
                  <td><?php echo $row['sales_date']; ?></td>
                  <td><?php echo $row['sales_vatsales']; ?></td>  
                  <td><?php echo $row['sales_nonvatsales']; ?></td>  


      


<?php 
  
  echo '</tr>';
        }

?>


                </tbody>

              </table>


 <?php
}elseif (isset($_POST['monthly'])) {
 $month = $_POST['month'];
  $year = $_POST['year'];

 ?>
<b><h4><?php echo $month." of ".$year;?></h4></b>
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>SALES ID</th>
                  <th>Date</th>  
                  <th>Sales Vat Sales</th>
                  <th>Sales Non-Vat Sales</th>

                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_sales WHERE posid = '2' AND month = '$month' AND year = '$year' AND  isDeleted = '0' ORDER BY week ASC";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['sales_id']; ?> </td>
                  <td><?php echo $row['sales_date']; ?></td>
                  <td><?php echo $row['sales_vatsales']; ?></td>  
                  <td><?php echo $row['sales_nonvatsales']; ?></td>  


      


<?php 
  
  echo '</tr>';
        }

?>


                </tbody>

              </table>
<?php
}elseif (isset($_POST['yearly'])) {

  $year = $_POST['year'];

 ?>
 <b><h4><?php echo "Year ".$year;?></h4></b>
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>SALES ID</th>
                  <th>Date</th>  
                  <th>Sales Vat Sales</th>
                  <th>Sales Non-Vat Sales</th>

                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_sales WHERE posid = '2' AND year = '$year' AND  isDeleted = '0' ORDER BY month ASC";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['sales_id']; ?> </td>
                  <td><?php echo $row['sales_date']; ?></td>
                  <td><?php echo $row['sales_vatsales']; ?></td>  
                  <td><?php echo $row['sales_nonvatsales']; ?></td>  


      


<?php 
  
  echo '</tr>';
        }

?>


                </tbody>

              </table>
<?php
}
else{
$day = date('d');

$month = date('F');
$year = date('Y');


?>
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>SALES ID</th>
                  <th>Date</th>  
                  <th>Sales Vat Sales</th>
                  <th>Sales Non-Vat Sales</th>

                </tr>
                </thead>
                <tbody>




<?php 
$table2 = "SELECT * FROM admin_sales WHERE posid = '2' AND day = '$day' AND month = '$month' AND year = '$year' AND isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['sales_id']; ?> </td>
                  <td><?php echo $row['sales_date']; ?></td>
                  <td><?php echo $row['sales_vatsales']; ?></td>  
                  <td><?php echo $row['sales_nonvatsales']; ?></td>  


      


<?php 
  
  echo '</tr>';
        }

?>


                </tbody>

              </table>


              <?php 


            }



            ?>
              <br><br>

















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
