
<nav class="navbar navbar-default" style="background-color: :black;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="admin_dashboard.php">JAPEA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
<?php 

if($_SESSION["accessright"] == '1')
{
  ?>
               <li><a href="admin_accounts_new.php">Accounts</a></li>
  <?php
}




 ?>


        <li><a href="admin_logs_new.php">Logs</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sales <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin_view_invoice_new.php">View Invoice</a></li>
            <li><a href="admin_sales_reports_new.php">Reports</a></li>
            <li><a href="admin_pullout_stocks.php">Pull out Stocks</a></li>

          </ul>
        </li>
      
  <li><a href="admin_suppliers_new.php">Suppliers</a></li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stocks <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin_view_categories_new.php">View Categories</a></li>
            <li><a href="admin_stocks_new.php">Add Stock</a></li>
          </ul>
        </li>
        <li><a href="admin_esales.php">E-sales</a></li>
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
 <li><a href="admin_employee.php">Employee</a></li>
  <?php
}




 ?>


      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-bell"></i><span class="badge" style="font-size: 10px; position: relative; top: -10px; ">
            
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
            <li><a>Stock Name <?php echo $row['stocks_itemname']." has ".$row['stocks_quantity']." left"; ?></a></li>
     
<?php

        }


?>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?php echo $_SESSION["username"]; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
<!--             <li><a href="#">My Profile</a></li> -->
            <li><a href="signout.php">Logout</a></li>
   
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>