<?php
  session_start();
  include('dbconn.php');

  if(isset($_POST["id"])) {
    //pr id
   
    $id = $_POST['id'];
$pcode = $_POST['productcode'];
$pname = $_POST['productname'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$pdesc = $_POST['description'];
$cat = $_POST['category'];
$supp = $_POST['supplier'];
$statuss = $_POST['statuss'];

    // Get product details from the products table
    // $sql = "SELECT * FROM product_sale WHERE id = '$id'";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);

    // Insert product into the request table
    // Retrieve the qty value for the product
    // $productcode = $row['productcode'];
    // $query = "SELECT qty FROM product WHERE productcode = '$productcode'";
    // $result = mysqli_query($conn, $query);
    // $qty = mysqli_fetch_assoc($result)['qty'];
    // $checkReq = $conn->query("SELECT * FROM request WHERE productcode='$row[productcode]'");
    // if(mysqli_num_rows($checkReq) > 0)
    // {
    //   // $sql = "UPDATE request SET photo='$row[photo]', productname='$row[productname]', available='$qty', price='$row[price]', requestqty='$req_qty' WHERE productcode='$row[productcode]'";
    //   // mysqli_query($conn, $sql);
    // }
    // else
    {
      // Insert the values into the request table, using the retrieved qty value
      $sql = "INSERT INTO sales_request (photo, productcode, productname, available, price, requestqty, statuss) 
              VALUES ('".$row['photo']."', '".$row['productcode']."', '".$row['productname']."', '$qty', '".$row['price']."','$req_qty', '".$row['statuss']."')";
      mysqli_query($conn, $sql);
    }
    
    //insert re logs
    $query = 'INSERT INTO `sales_request` (`id`, `productcode`, `productname`, `category`, `price`, `description`, `qty`, `supplier`, `purpose`) VALUES ("'.$id.'", "'.$pcode.'", "'.$pname.'" , "'.$cat.'", "'.$price.'", "'.$pdesc.'" , "'.$qty.'", "'.$supp.'", "'.$pur.'")';
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    // Remove product from the products table
  //   $sql = "DELETE FROM product WHERE id = '$id'";
  //   mysqli_query($conn, $sql);

    echo "success";
  }
?>