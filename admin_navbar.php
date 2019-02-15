
<nav class="navbar navbar-default" style="background-color: #007E33;color:white;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="color:white;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="color:white;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="admin_dashboard.php" style="color:white;">JAPEA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
<?php 

if($_SESSION["accessright"] == '1')
{
  ?>
               <li><a href="admin_accounts_new.php" style="color:white;">Accounts</a></li>
  <?php
}




 ?>


        <li><a href="admin_logs_new.php" style="color:white;">Logs</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Sales <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin_view_invoice_new.php" style="color:black;">View Invoice</a></li>
            <li><a href="admin_sales_reports_new.php" style="color:black;">Reports</a></li>
            <li><a href="admin_pullout_stocks.php" style="color:black;">Pull out Stocks</a></li>

          </ul>
        </li>
      
  <li><a href="admin_suppliers_new.php" style="color:white;">Suppliers</a></li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Stocks <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin_view_categories_new.php" style="color:black;">View Categories</a></li>
            <li><a href="admin_stocks_new.php" style="color:black;">Add Stock</a></li>
          </ul>
        </li>
        <li><a href="admin_esales.php" style="color:white;">E-sales</a></li>
<!--         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">E-Sales <span class="caret"></span></a>
          <ul class="dropdown-menu">



          <li class="dropdown-submenu">
            <a class="test" href="#">POS 1 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Senior Discount</a></li>
            </ul>
          </li>
          <li class="dropdown-submenu">
            <a class="test" href="#">POS 2 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Senior Discount</a></li>
            </ul>
          </li>





          </ul>


        </li> -->

<?php 

if($_SESSION["accessright"] == '1')
{
  ?>
 <li><a href="admin_employee.php" style="color:white;">Employee</a></li>
  <?php
}




 ?>


      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="color:white;"><i class="glyphicon glyphicon-bell"></i><span class="badge" style="font-size: 10px; position: relative; top: -10px; ">
            
            <?php

  $select_stocks = "SELECT * FROM admin_stocks WHERE stocks_quantity <= 10 AND isDeleted='0'";
  $result=mysqli_query($connect,$select_stocks);
  $run_rowcount = mysqli_num_rows($result);

  echo $run_rowcount;

            ?>
          </span></a>
          <ul class="dropdown-menu">
<?php
  $select_stocks = "SELECT * FROM admin_stocks WHERE stocks_quantity <= 10";
  $run_select_stocks = mysqli_query($connect,$select_stocks);
  while($row = mysqli_fetch_array($run_select_stocks))

        {

?>   
            <li style="color:black;"><a>Stock Name <?php echo $row['stocks_itemname']." has ".$row['stocks_quantity']." left"; ?></a></li>
     
<?php

        }


?>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Welcome, <?php echo $_SESSION["username"]; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
<!--             <li><a href="#">My Profile</a></li> -->
            <li><a href="signout.php" style="color:black;">Logout</a></li>
   
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>