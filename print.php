<?php
//call the FPDF library
include("connection.php");
require('fpdf/fpdf.php');
$get_username = $_POST['get_username'];
$get_invoiceid = $_POST['pullout_invoiceid'];
$total_final = 0;
$table2 = "SELECT * FROM admin_stocks RIGHT JOIN admin_itemsordered ON admin_stocks.stocks_id = admin_itemsordered.stocks_id WHERE admin_itemsordered.invoice_id='".$get_invoiceid."'";
$run_query2b = mysqli_query($connect,$table2);
while($row = mysqli_fetch_array($run_query2b))
{
$total_initial = (int)$row['stocks_priceperunit']*(int)$row['order_quantity'];
$total_final = $total_final + $total_initial;
$_SESSION['invoice_total'] = $total_final; 

}
/*$userid = $_SESSION["user_id"];
$username = $_SESSION["get_user"];
$eventname = $_SESSION["get_event"];
$timestart = $_SESSION["get_start"];
$timeend = $_SESSION["get_end"];
$get_datehere = $_SESSION["get_date"];
            $table2 = "SELECT * FROM event_tbl WHERE event_name = '$eventname'";
            $run_query2b = mysqli_query($c1,$table2);
            while($row = mysqli_fetch_array($run_query2b))
        {
            $get_event = $row["event_id"];
        }
//A4 width :*/ 
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
//create pdf object
$image1 = "logo.png";
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
//output the result
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);
//Cell(width , height , text , border , end line , [align] )
$pdf->Image('logo.png',150,10,60,0,'PNG');

$pdf->Cell(180 ,10,'JAPEA ENTERPRISE',0,0,'C');
$pdf->Cell(59 ,5,'',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);
$pdf->Cell(175 ,12,'#64 C Raymundo Ave. corner Stella Mariz',0,0,'C');
$pdf->Cell(59 ,5,'',0,1);//end of line
$pdf->Cell(183 ,13,'Maybunga, Pasig City',0,0,'C');
/*$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line GET DATE TAS PASOK DITO
$pdf->Cell(130 ,5,'Phone [+578-17-50]',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line RESERVATION ID
$pdf->Cell(25 ,5,'Customer ID : ',0,0);*/

/*$pdf->Cell(34 ,5,$userid,0,1);//end of line USER ID*/
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line
//billing address
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,25,'',0,1);
$pdf->Cell(120 ,5   ,'DATE CREATED: '.date("Y-m-d h:i A"),0,1);//end of line
$pdf->Cell(120 ,5,'PREPARED BY: '.$get_username,0,1);//end of line
$pdf->Cell(120 ,5   ,'DATA AS OF : '.date("Y-m-d h:i A"),0,1);//end of line
$pdf->SetFont('Arial','B',15);
$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(54 ,10,'Item Code  ',1,0,'C');
$pdf->Cell(54 ,10,'Item Name  ',1,0,'C');
$pdf->Cell(54 ,10,'Quantity  ',1,0,'C');
$pdf->Cell(30 ,10,'Price  ',1,0,'C');
$pdf->Cell(25 ,3,'',0,1);
$pdf->SetFont('Arial','',12);

$table2 = "SELECT * FROM admin_stocks RIGHT JOIN admin_itemsordered ON admin_stocks.stocks_id = admin_itemsordered.stocks_id WHERE admin_itemsordered.invoice_id='".$get_invoiceid."'";
$run_query2b = mysqli_query($connect,$table2);
while($row = mysqli_fetch_array($run_query2b))
{
$pdf->Cell(25 ,7,'',0,1);
$pdf->Cell(54 ,7,$row['stocks_code'],1,0,'C');
$pdf->Cell(54 ,7,$row['stocks_itemname'],1,0,'C');
$pdf->Cell(54 ,7,$row['stocks_quantity'],1,0,'C');
$pdf->Cell(30 ,7,"P ".$row['stocks_priceperunit'].".00",1,0,'C');


}
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,15,'',0,1);
$pdf->Cell(54 ,7,$row['stocks_code'],0,0,'C');
$pdf->Cell(54 ,7,$row['stocks_itemname'],0,0,'C');
$pdf->Cell(54 ,7,'SUB-TOTAL : ',0,0,'C');
$pdf->Cell(30 ,7,"P ".$_SESSION['invoice_total'].".00",0,0,'C');
$pdf->Cell(54 ,7,'',0,1);
$pdf->Cell(105 ,7,'',0,0);
$pdf->Cell(54 ,7,'12% VAT : ',0,0,'C');
$pdf->Cell(35 ,7,'P  '.(int)$_SESSION['invoice_total']*.12,0,0,'C');
$pdf->Cell(150 ,7,'',0,1);
$pdf->Cell(102 ,7,'',0,0);
$pdf->Cell(58 ,7,'TOTAL : ',0,0,'C');
$pdf->Cell(35 ,7,"P ".$_SESSION['invoice_total'].".00",0,0,'C');


/*                  <?php 
                  $total_invoice = $_SESSION['invoice_total'] - (int)$_SESSION['invoice_total']*.12;

                  echo  "P".(int)$_SESSION['invoice_total']*.12.".00";

*/


//add dummy cell at beginning of each line for indentation
/*$pdf->Cell(80 ,5,'Customer Name : ',0,0);
$pdf->Cell(20 ,5,$username,0,1);
$pdf->Cell(80 ,5,'Event Reserved : ',0,0);
$pdf->Cell(20 ,5,$eventname,0,1);
$pdf->Cell(80 ,5,'Event Requirements : ',0,0);
$pdf->Cell(20 ,5,$eventname,0,1);*/
/*if( $get_event == "1")
{
    $pdf->Cell(20 ,5,'WEDDING REQUIREMENTS HERE',0,1);
}
elseif( $get_event == "2")
{
    $pdf->Cell(20 ,5,'BAPTISM ( SOLO ) REQUIREMENTS HERE',0,1);
}
elseif( $get_event == "3")
{
    $pdf->Cell(20 ,5,'BAPTISM (MANY) REQUIREMENTS HERE',0,1);
}
else
{
    $pdf->Cell(20 ,5,'FUNERAL REQUIREMENTS HERE',0,1);
}*/
/*$pdf->Cell(80 ,5,'Starting Time : ',0,0);
$pdf->Cell(20 ,5,$timestart,0,1);
$pdf->Cell(80 ,5,'End Time : ',0,0);
$pdf->Cell(20 ,5,$timeend,0,1);
$pdf->Cell(80 ,5,'Scheduled Date : ',0,0);
$pdf->Cell(20 ,5,$get_datehere,0,1);*/
/*$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(20 ,5,'',0,1);
$pdf->Cell(130 ,5,'NOTE : PROCEED TO THE OFFICE OF OUR LADY OF THE HOLY PARISH',0,0);
$pdf->Cell(20 ,5,'',0,1);
$pdf->Cell(80 ,5,'FOR THE SUBMISSION OF REQUIREMENTS',0,0);
$pdf->Cell(20 ,5,'',0,1);*/
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line
//invoice contents
$pdf->SetFont('Arial','B',12);
$pdf->Output();
?>