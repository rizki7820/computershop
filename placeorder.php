<?php  
 //cart.php  
// session_start();  
 include ('connection/connection.php');
 include ('process/action.php');

 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Shopping Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:800px;">  
                <?php  
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
                     foreach($_SESSION["shop"] as $keys => $values)
                     {    
                      $total = $total + ($values["product_quantity"] * $values["product_price"]);
                        }
                     $insert_order = "  
                     INSERT INTO `orders` (`ID_ORDER`, `ID_ADMIN`, `ID_DORDER`, `ID_MEMBER`, `TOTAL`) VALUES ('".$newIDO."', 'admin', '".$newIOD."', 'IDM001', '".$total."');
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
                        }

                     if(mysqli_multi_query($koneksi, $order_details))  
                     {  

                          unset($_SESSION["shop"]);  
                          echo '<script>alert("You have successfully place an order...Thank you")</script>';  
                          echo '<script>window.location.href="placeorder2.php"</script>';  
                     }  
                } 
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
                     while($row = mysqli_fetch_array($result))  
                     {  
                          $customer_details = '  
                          <label>'.$row["NAME"].'</label>  
                          <p>'.$row["ADDRESS"].'</p>  
                          <p>'.$row["EMAIL"].', '.$row["CELLPHONE"].'</p>  
                          <p>'.$row["GENDER"].'</p>  
                          ';  
                          $order_details .= "  
                               <tr>  
                                    <td>".$row["PRODUCT_NAME"]."</td>  
                                    <td>".$row["QTY"]."</td>  
                                    <td>".$row["PRICE"]."</td>  
                                    <td>".number_format($row["QTY"] * $row["PRICE"], 2)."</td>  
                               </tr>  
                          ";  
                          $total = $total + ($row["QTY"] * $row["PRICE"]);  
                     }  
                     echo '  
                     <h3 align="center">Order Summary for Order No. '.$_SESSION["order_id"].'</h3>  
                     <div class="table-responsive">  
                          <table class="table">  
                               <tr>  
                                    <td><label>Customer Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>'.$customer_details.'</td>  
                               </tr>  
                               <tr>  
                                    <td><label>Order Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>  
                                         <table class="table table-bordered">  
                                              <tr>  
                                                   <th width="50%">Product Name</th>  
                                                   <th width="15%">Quantity</th>  
                                                   <th width="15%">Price</th>  
                                                   <th width="20%">Total</th>  
                                              </tr>  
                                              '.$order_details.'  
                                              <tr>  
                                                   <td colspan="3" align="right"><label>Total</label></td>  
                                                   <td>'.number_format($total, 2).'</td>  
                                              </tr>  
                                         </table>  
                                    </td>  
                               </tr>  
                          </table>  
                     </div>  
                     ';  
                }  
                ?>  
           </div>  
      </body>  
 </html> 
