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

    <!-- Content Header (Page header) -->
    <br>

<h2><B>&nbsp;LOGS</B></h2>
<br>



<div class="col-md-12">
<table class="table table-striped table-bordered" id = "logs">
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
              <br><br>
</div>



<script>
$(document).ready(function() {
    $('#logs').DataTable();
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
