
 <form  role='form' action='save_data.php' method='post' >

<?php
$q = intval($_GET['q']);

$connect = mysqli_connect("localhost", "root", "miguel", "inventory");

mysqli_select_db($connect,"ajax_demo");
$sql="SELECT * FROM admin_stocks WHERE stocks_id = '$q'";
$result = mysqli_query($connect,$sql);


while($row = mysqli_fetch_array($result)) {


?>

<h4>Item Selected : <?php echo $row['stocks_itemname']; ?></h4>
<h4>Current Stock : <?php echo $row['stocks_quantity']; ?></h4>
<h4>Price per quantity : <?php echo $row['stocks_priceperunit'].".00"; ?></h4>
<input type="number" name="get_quantity" min="1" max="<?php echo $row['stocks_quantity']; ?>">
<input type="hidden" name="get_stocksid" value="<?php echo $row['stocks_id']; ?>">

<P></P>
<label>Select Invoice Serial</label>
                  <select  class='form-control' name='get_invoiceids'>

                      <?php 
                      $table2_invoice = "SELECT * FROM admin_invoice WHERE isDeleted='0'";



                      $run_query2b_invoice = mysqli_query($connect,$table2_invoice);

                      while($row_invoice = mysqli_fetch_array($run_query2b_invoice))

                      {

                      ?>

                      <option value="<?php echo $row_invoice['invoice_id']; ?>"><?php echo $row_invoice['invoice_serial'];?></option>

                      <?php
                      }
                      ?>
                    </select>




                <div class='modal-footer'>
                    <button type='submit' name='admin_additems_toinvoice'  class='btn btn-success'>Pull Out</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>

                </div>


<?php



}

?>
</form>