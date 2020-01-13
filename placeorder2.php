<?php
// memanggil library FPDF
 include ('connection/connection.php');
 include ('process/action.php');
 //include ('process/loginprocess.php');
 if(isset($_POST["place_order"]))  
                {   
                   


                    $query="SELECT max(ID_ORDER) as maxID FROM orders";
                    $hasil=mysqli_query($koneksi,$query);
                    $data=mysqli_fetch_array($hasil);
                    $ID_ORDER=$data['maxID'];

                    $nourut=(int) substr($ID_ORDER,3,3);
                    $nourut++;
                    $char="IDO";
                    $newIDO=$char.sprintf("%03s",$nourut);

                   $query="SELECT max(ID_DORDER) as maxID FROM order_details";
                    $hasil=mysqli_query($koneksi,$query);
                    $data=mysqli_fetch_array($hasil);
                    $ID_DORDER=$data['maxID'];

                    $nourut=(int) substr($ID_ORDER,3,3);
                    $nourut++;
                    $char="IOD";
                    $newIOD=$char.sprintf("%03s",$nourut);
                      $total = 0; 
                     $dates=date("Y-m-d");
                     foreach($_SESSION["shop"] as $keys => $values)
                     {    
                      $total = $total + ($values["product_quantity"] * $values["product_price"]);
                        }
                     $insert_order = "  
                     INSERT INTO `orders` (`ID_ORDER`, `ID_ADMIN`, `ID_DORDER`, `ID_MEMBER`, `DATE`, `TOTAL`) VALUES ('".$newIDO."', 'admin', '".$newIOD."', 'IDM001', '".$dates."', '".$total."');
                     ";  

                 
                     $order_id = "";  

                     if(mysqli_query($koneksi, $insert_order))  
                     {  
                         
                          $order_id =$newIOD;
                     }  

                     $_SESSION["order_id"] = $order_id;  
                     $order_details = "";  

                     
                      
                    
                     foreach($_SESSION["shop"] as $keys => $values)
                     {    
                           
                           
                          $order_details .= "  
                          INSERT INTO `order_details` (`ID_DORDER`, `PRODUCT_NAME`, `QTY`, `PRICE`) VALUES ('".$newIOD."', '".$values["product_name"]."', '".$values["product_quantity"]."', '".$values["product_price"]."');
                          ";  
                          $query1="SELECT STOCK From product WHERE NAME = '".$values["product_name"]."'";
                             $totstock=mysqli_query($koneksi,$query1); 
						     $tes=mysqli_fetch_array($totstock);
						     $tes2=$tes['STOCK'];
                         $tes2=$tes2-$values["product_quantity"];
                           $change_qty_product = "  
                          UPDATE `product` SET `STOCK` = '".$tes2."' WHERE `product`.`NAME` = '".$values["product_name"]."'
                          ";  
                        }

                     if(mysqli_multi_query($koneksi, $order_details))  
                     {  
                     		mysqli_multi_query($koneksi, $change_qty_product);
                          unset($_SESSION["shop"]);  
                          echo '<script>alert("You have successfully place an order...Thank you")</script>';  
                          echo '<script>window.location.href="placeorder2.php"</script>';  
                     }  
                } 
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm',array(210,210));
// membuat halaman baru
$pdf->AddPage();
    $query1="SELECT STOCK  From product WHERE ID_PRODUCT = 'IDP003' ";

  

        
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(210,7,'Order Summary for Order No. '.$_SESSION["order_id"],0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(0,25);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(210,7,'Customer Details',0,1,'C','M');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 if(isset($_SESSION["order_id"]))  
                {  

                     $customer_details = '';  
                     $order_details = '';  
                     $total = 0;  
                     $query = '  
                     SELECT *  FROM orders
                     INNER JOIN order_details 
                     ON  order_details.ID_DORDER = orders.ID_DORDER 

                     INNER JOIN member  
                     ON member.ID_MEMBER = orders.ID_MEMBER 
                     WHERE orders.ID_DORDER = "'.$_SESSION["order_id"].'"  
                     ';  
                  
                     $result = mysqli_query($koneksi, $query);  
                    $row = mysqli_fetch_array($result);
                    
                        
                    


						/*$pdf->SetFont('Arial','B',10);
						$pdf->Cell(70,6,$row["NAME"],1,0);
						$pdf->Cell(70,6,$row["ADDRESS"],1,0);
						$pdf->Cell(70,6,$row["EMAIL"].', '.$row["CELLPHONE"],1,0);
						$pdf->Cell(70,6,$row["GENDER"],1,1);
*/
						$pdf->SetFont('Arial','B',10);
						$pdf->SetTextColor(0,0,0);
						$pdf->Cell(70,7,'NAME                   : '.$row["NAME"],0,1);
						$pdf->Cell(70,7,'ADDRESS              : '.$row["ADDRESS"],0,1);
						$pdf->Cell(70,7,'CONTACT              : '.$row["EMAIL"].', '.$row["CELLPHONE"],0,1);
						$pdf->Cell(70,7,'GENDER               : '.$row["GENDER"],0,1);
$pdf->SetXY(0,75);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(210,7,'Order Details',0,1,'C','M');
$pdf->Cell(10,7,'',0,1);
$pdf->SetTextColor(0,0,0);
		$pdf->Cell(70,7,'Product Name',1,0);
		$pdf->Cell(30,7,'Quantity',1,0);
		$pdf->Cell(40,7,'Price',1,0);
		$pdf->Cell(45,7,'Total',1,1);
		$pdf->SetFont('Arial','',10);
		$result = mysqli_query($koneksi, $query); 
while($row = mysqli_fetch_array($result))  
                     {  
 							$pdf->Cell(70,7,$row["PRODUCT_NAME"],1,0);
							$pdf->Cell(30,7,$row["QTY"],1,0);
							$pdf->Cell(40,7,$row["PRICE"],1,0);
							$pdf->Cell(45,7,number_format($row["QTY"] * $row["PRICE"], 2),1,1);

 					 $total = $total + ($row["QTY"] * $row["PRICE"]);
				}
           $result = mysqli_query($koneksi, $query);  
                    $row = mysqli_fetch_array($result);
        $pdf->SetFont('Arial','B',10);

				$pdf->Cell(140,7,'ORDER DATE  : '.$row["DATE"],1,0);
				$pdf->Cell(45,7,$total,1,0);
							
			}

$pdf->SetFont('Arial','',10);

                 







$pdf->Output();
?>