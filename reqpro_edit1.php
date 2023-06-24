<?php
$servername = "sql985.main-hosting.eu";
$username = "u839345553_sbit3g";
$password = "sbit3gQCU";
$dbname = "u839345553_SBIT3G";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$pcode = $_POST['productcode'];
$pname = $_POST['productname'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$pdesc = $_POST['description'];
$cat = $_POST['category'];
$supp = $_POST['supplier'];
$pur = $_POST['purpose'];
$status = $_POST['status'];

		
$query = 'INSERT INTO sales_request (id, productcode, productname, category, price, description, qty, supplier, purpose, statuss) VALUES ("'.$id.'", "'.$pcode.'", "'.$pname.'" , "'.$cat.'", "'.$price.'", "'.$pdesc.'" , "'.$qty.'", "'.$supp.'", "'.$pur.'", "'.$status.'")';
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

?>
<script type="text/javascript">
			alert("You've Update Product Successfully.");
			window.location = "stock.php";
		</script>