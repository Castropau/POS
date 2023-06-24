<?php

$servername = "sql985.main-hosting.eu";
$username = "u839345553_sbit3g";
$password = "sbit3gQCU";
$dbname = "u839345553_SBIT3G";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$pname = 'name';
$quantity = 'qty';

$id = $_POST['id'];
$pcode = $_POST['productcode'];
$pname = $_POST['productname'];
$pdesc = $_POST['description'];
$cat = $_POST['category'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$supp = $_POST['supplier'];
$pur = $_POST['purpose'];
$status = $_POST['statuss'];
		
$query = 'INSERT INTO `sales_request` (`id`, `productcode`, `productname`, `category`, `supplier`, `qty`, `price`, `purpose`, `description`, `statuss`) VALUES ("'.$id.'", "'.$pcode.'", "'.$pname.'", "'.$cat.'", "'.$supp.'", "'.$quantity.'", "'.$price.'", "'.$pur.'", "'.$pdesc.'", "'.$status.'")';
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));





?>	
	<script type="text/javascript">
			alert("You've Update Product Successfully.");
			window.location = "request.php";
		</script>
