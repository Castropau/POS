<?php  

$connect = mysqli_connect("localhost", "root", "", "sale");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM defect_log";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Product Code</th>  
                         <th>Product Name</th>  
                         <th>Price</th>  
       <th>Quantity</th>
       <th>Reason</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["productcode"].'</td>  
                         <td>'.$row["productname"].'</td>  
                         <td>'.$row["price"].'</td>  
       <td>'.$row["requestqty"].'</td>  
       <td>'.$row["message"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}


if(isset($_POST["exportt"]))
{
 $query = "SELECT * FROM receipts";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Receipt Number</th>  
                         <th>Product Code</th>  
                         <th>Product Name</th>  
       <th>Quantity</th>
       <th>Subtotal</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["ornum"].'</td>  
                         <td>'.$row["prod_id"].'</td>  
                         <td>'.$row["productname"].'</td>  
       <td>'.$row["quantity"].'</td>  
       <td>'.$row["subtotal"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
if(isset($_POST["exporttt"]))
{
 $query = "SELECT * FROM request_log";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>Product Code</th>  
                    <th>Product Name</th>  
                         <th>Price</th>  
       <th>Quantity</th>
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["productcode"].'</td>  
                         
                         <td>'.$row["productname"].'</td>  
       <td>'.$row["price"].'</td>  
       <td>'.$row["requestqty"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
if(isset($_POST["export1"]))
{
 $query = "SELECT * FROM receipts";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>Receipt Number</th>  
                    <th>Product Code</th>  
                         <th>Product Name</th>  
       <th>Quantity</th>
       <th>Subtotal</th>
       <th>Date Replaced</th>
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["ornum"].'</td>  
                         
                         <td>'.$row["prod_id"].'</td>  
       <td>'.$row["productname"].'</td>  
       <td>'.$row["quantity"].'</td>
       <td>'.$row["subtotal"].'</td>
       <td>'.$row["date_order"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
