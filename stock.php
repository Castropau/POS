<!DOCTYPE html>
<?php

	require_once 'validate.php';
	require 'name.php';
?>
<?php
$host = "sql985.main-hosting.eu";
$username = "u839345553_sbit3g";
$password = "sbit3gQCU";
$dbname = "u839345553_SBIT3G";

// Create connection
try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<html>
  <title>SBIT-3G</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" /> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<link rel="shortcut icon" href="Logo 2.svg" type="image/svg+xml">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  background-color: white;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: skyblue;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D ;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 100px;
  background-color: white;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 40%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  background-color: #99ccff;
  margin: 3px auto;
  transform: translate(40%);
  text-align: center;
}
::placeholder{
    color: black;
    font-family: "Sans-Serif";
    text-transform: uppercase;
    
}
.td:nth-child(even) {
     background-color: white;
}
.table-bordered{
    background-color: white;
    
}
.table-responsive{
    max-height: 85vh;
    max-width: 140vh;
   text-align: center;
   background-color: whitesmoke;
}
.table-bordered thead tr{
    position: sticky;
    top: -1px;
}
.button2 {
    background-color: #1a75ff;
    text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border: none;
  padding: 15px 70px;
  bottom: 50%;
    }
.social_media{
  position: absolute;
  
  left: 50%;
  top: 90%;
  height: 50px;
  transform: translateX(-50%);
  display: flex;
}
.person-icon {
  display: flex;
  align-items: center;
  padding: 10px;
  font-size: 20px;
}

.person-icon i {
  margin-right: 10px;
}
select#filter-select {
  padding: 8px 16px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
  margin-right: 16px;
}
select#filter-select option {
  font-size: 16px;
}
input#myInput {
  padding: 8px 16px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
table#table-bordered {
  border-collapse: collapse;
  width: 100%;
  margin-top: 16px;
}

table#table-bordered th, table#table-bordered td {
  border: 1px solid #ddd;
  padding: 8px;
  
}
table#table-bordered th {
  background-color: #1a8cff;
  color: white;
  text-transform: uppercase;
}
/* button.productinfo {
  padding: 8px 16px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #4CAF50;
  color: white;
}

button.productinfo:hover {
  background-color: #3e8e41;
} */
.row{
    display: flex;
    margin-left: 50px;
align-items: center;
}
#filter-select {
 
  margin: 0 auto;
  text-align: center;
}
input[name="qty"] {
        width: 40px;
        height: 25px;
    }
    .cart {
  position: fixed;
  top: 0;
  left: 73%;
  width: 400px;
  height: 100%;
  background-color: #f2f2f2;
  padding: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  overflow: auto;
  
}

.cart h1 {
  margin-top: 0;
}

.cart-table {
  width: 100%;
}

.cart-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
  margin-right: 10px;
  margin-left: 10px;
}
#print {
  background-color: blue;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
#print:hover {
  background-color: #6666ff;
}

#pay {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
#pay:hover {
  background-color: #3e8e41;
}
#clear-cart{
  background-color: #ff4d4d;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
#clear-cart:hover{
  background-color: red;
}
.payment-methods {
  margin-bottom: 20px;
}

.payment-methods label {
  font-size: 14px;
  margin-right: 10px;
}
.payment-details {
  margin-bottom: 20px;
}

.payment-details label {
  font-size: 14px;
  margin-right: 10px;
}

.payment-details input[type="number"],
.payment-details input[type="text"] {
  width: 100px;
  margin-right: 10px;
  padding: 5px;
  border: 1px solid #ddd;
}

.payment-details input[readonly] {
  background-color: #eee;
  color: #555;
}
.search-bars input[readonly] {
  background-color: #eee;
  color: #555;
  border: 1px solid #ddd;
  width: 100px;
}
.popup {
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: white;
border: 1px solid black;
padding: 20px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}
table {

	margin-bottom: 20px;
}
.modall td{
	padding: 5px;
}
th, td {
	padding: 10px;
	border: 1px solid #ccc;
  border-spacing: 5px;
}
tfoot td {
	font-weight: bold;
  color: red;
}
.quantity-input {
  width: 60px;
}
.search-bar {
  display: flex;
  align-items: center;
}

.search-bar label {
  margin-right: 10px;
  font-weight: bold;
}
.customer input[type="search"] {
 
  border-radius: 5px;
  padding: 5px 10px;

  outline: none;
  
}
.search-bar input[type="search"] {
  border: 2px solid #ccc;
  border-radius: 5px;
  padding: 5px 10px;
  font-size: 16px;
  outline: none;
  width: 150px;
}

.search-bar input[type="search"]:focus {
  border-color: #007bff;
}
label{
  width: 75%;
}
</style>
</head>
<body>
<div class="sidebar">
<div class="date-time">
    <?php date_default_timezone_set('Etc/GMT+8');?>
    <p style='font-size: 16px; font-weight: bold; margin-bottom: 0; text-align: center;'><i class="far fa-calendar-alt"></i> <?php echo date('l, F j, Y'); ?></p>
    <p style='font-size: 16px; text-align: center;' id="clock"><?php echo date('h:i:s A'); ?></p>
  </div>
  <div class="person-icon">
    <i class="fa fa-user"></i>
    <?php echo $name;?>
  </div>
  <a href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
  <a  href="productlist.php">Product List</a>
  <a href="report.php">Sales Report</a>
  <a href="graph.php">Graph Sale</a>
  <a href="mostsale.php">Most Sale Product</a>
  <a class="active" href="stock.php">Stock Report</a>
  <a href="returnh.php">Replace Report</a>
  <a href="defecth.php">Defect Report</a>
  <a href="ListEmployee_Dept.php">Employee List</a>
  <a href="replaceh.php">Replace History</a>
  <a href="request.php">Warehouse Request</a>
  <div class="social_media">          
    <a href="logout.php"><i class="fa fa-sign-out"></i></a>        
  </div>
</div>


  <div class="row">
  <div class="content">
  <div>
</br>
    <!-- <select id="filter-select">
      <option value="all">All</option>
      <option value="computerparts">Computer Parts</option>
      <option value="clothing">Clothing</option>
      <option value="departmentstore">Department Store</option>
      <option value="hardware">Hardware</option>
      
    </select> -->
   
  </div>
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Inventory</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                   <th>ID</th>
                     <th>PRODUCT CODE</th>
                     <th>PRODUCT NAME</th>
                     <th>QUANTITY STOCK</th>
                     <th>STOCK LEVEL</th>
                     <th>PRICE</th>
                     <th>ACTION</th>
                   </tr>
               </thead>
          <tbody>

          <?php
$select_products = $conn->prepare("SELECT * FROM product_sale");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){ 
?>
    
    <tr>
                          <td><?= $fetch_product['id']; ?></td>
                          <td><?= $fetch_product['productcode']; ?></td>
                          <td><?= $fetch_product['productname']; ?></td>
                          <td><?= $fetch_product['qty']; ?></td>
                          <td>
                          <?php if ($fetch_product['qty'] > 100) { ?>
          <span class="stock" style="color: green;"><i class="fas fa-check" style="margin-right: .5rem;"></i>Over Stock</span>
        <?php } elseif ($fetch_product['qty'] > 9) { ?>
          <span class="stock" style="color: green;"><i class="fas fa-check" style="margin-right: .5rem;"></i>In Stock</span>
        <?php } elseif ($fetch_product['qty'] == 0) { ?>
          <span class="stock" style="color: red;"><i class="fas fa-times" style="margin-right: .5rem;"></i>Out Of Stock</span>
        <?php } else { ?>
          <span class="stock" style="color: red;">Hurry, only <?= $fetch_product['qty']; ?> left</span>
        <?php } ?>   
        <td><?= $fetch_product['price'];?></td>
         <td text-align="right"> <div class="btn-group">
        
                        <div class="btn-group">
                          <a type="button" class="btn btn-primary bg-gradient-primary dropdown no-arrow" data-toggle="dropdown" style="color:white;">
                          ... <span class="caret"></span></a>
                        <ul class="dropdown-menu text-center" role="menu">
                            <li>
                            <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="reqpro_edit.php?action=edit&id=<?php echo $fetch_product['id']; ?>"><i class="fas fa-fw fa-edit"></i> REQUEST STOCK</a>
                            <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="defwarehouse_edit.php?action=edit&id=<?php echo $fetch_product['id']; ?>"><i class="fas fa-fw fa-edit"></i> DEFECT PRODUCT</a>  
                          </li>
                        </ul>
                        </div>
                      </div> </td>
                    </tr>
                    </td>
                          </tr>
<?php
  }
}
?>


                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
            <form method="post" action="export.php">
            <input type="submit" name="exporttt" class="btn btn-success" value="Export" />
        </form>
        </div>
    </div>
</div>
<!-- <form class="" action="#">
                    <div class="form-group">
                      <input type="number" name="asd" class="form-control" placeholder="Quantity Received">
                    </div>
                    <button type="submit" class="btn btn-default" name="submi">Submit</button>
                  </form> -->
                  <!-- <script type="text/javascript">
$(document).ready(function(){  
      $('#table-bordered').DataTable();  
 }); 
</script>
<script>
  $(document).ready(function() {

    // Update button and show modal only after the first click
    $('.productinfo').each(function() {
      var product_id = $(this).data('id');
      var button = $(this);

      // Define a named click event handler function
      function handleButtonClick() {
        var qty = $(this).closest("tr").find(".prod_qty").val();
        button.addClass('disabled').attr('disabled', true);
        $.ajax({
          url: 'process_request.php',
          method: 'POST',
          data: { 
            id: product_id,
            qty:qty,
          },
          success: function(response) {
            if (response == 'success') {
              swal('Success', 'Product added to request table!', 'success');
              
              button.removeClass('productinfo btn-success').addClass('productinfo btn-success')
                .attr('data-toggle', 'modal').attr('data-target', '#flipFlop')
                .find('i').removeClass('fas fa-paper-plane').addClass('fas fa-check-circle');

              // Attach new click event handler after first click
              button.off('click', handleButtonClick); // Remove previous click event handler
              button.on('click', function() {
                // New click event handler logic
                const p_id = $(this).data('id');
                var pqty = $(this).closest("tr").find(".prod_qty").val();
                $("#modal-data-content").html(`<form class="" action="update-req.php" method="POST">
                        <input type="hidden" name="p_id" value="${p_id}">
                        <div class="form-group">
                          <label>Quantity Received</label>
                          <input type="number" name="p_qty" class="form-control" value="${pqty}" placeholder="Quantity Received">
                        </div>
                        <button type="submit" class="btn btn-default" name="receive-btn">Submit</button>
                      </form>`);
              });
            } else if (response == 'already_added') {
              swal('Error', 'Product already added to request table!', 'error');
            } else {
              swal('Error', 'Your request has already been submitted!', 'error');
            }
          },
          error: function(xhr, status, error) {
            console.log(xhr);
            swal('Error', 'Something went wrong!', 'error');
          }
        });
      }

      // Attach initial click event handler to the button
      button.click(handleButtonClick);
    });
    //recieve on load
    $(".mmmmm").on('click', function() {
      // alert("asas");
      // New click event handler logic
      const p_id = $(this).data('id');
      var pqty = $(this).closest("tr").find(".prod_qty").val();
      $("#modal-data-content").html(`<form class="" action="update-req.php" method="POST">
              <input type="hidden" name="p_id" value="${p_id}">
              <div class="form-group">
                <label>Quantity Received</label>
                <input type="number" name="p_qty" class="form-control" value="${pqty}" placeholder="Quantity Received">
              </div>
              <button type="submit" class="btn btn-default" name="receive-btn">Submit</button>
            </form>`);
    });
    // **/
    $('#requestAll').click(function() {
      $('.productinfo').each(function() {
        var product_id = $(this).data('id');
        var button = $(this);

        $.ajax({
          url: 'process_request.php',
          method: 'POST',
          data: { id: product_id },
          success: function(response) {
            if (response == 'success') {
              button.prop('disabled', true);
              button.html('<i class="fas fa-check-circle"></i>');

              if($('.productinfo:enabled').length == 0) {
                swal('Submitted All', '', 'success');
              }
            }
          }
        });
      });
    });
  });
</script> -->
<!-- <script>
  $(document).ready(function(){
    $(".productinfo").click(function(){
      var id = $(this).data("id");

      $.ajax({
        type: "POST",
        url: "process_request.php",
        data: {id: id},
        success: function(data){
          swal({
            title: "Success!",
            text: "Product added to cart successfully.",
            icon: "success",
          }).then(function() {
            location.reload();
          });
        }
      });
    });
  });
</script> -->
<!-- <script>
$(document).ready(function(){
    $(".productinfo").click(function(){
        var id = $(this).data("id");
        var qty = prompt("Enter quantity:");

        if (qty != null) {
            $.ajax({
                type: "POST",
                url: "process_request.php",
                data: {id: id, qty: qty},
                success: function(data){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Product added to cart successfully.'
                    });
                }
            });
        }
    });
});
</script> -->
<!--- <div class="cart">
  <table class="cart-table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3"><strong>Total Amount:</strong></td>
        <td colspan="2" id="total-price">₱0.00</td>

      </tr>
    </tfoot>
  </table>
  <div class="payment-details">
    <label for="change">Total Quantity:</label>
    <input type="text" id="totalqty" readonly>
  </div>
  <div class="discount">
  <label for="discount-code">Discount (%):</label>
  <input type="number" id="discount-code" min="0" max="100">
  <button id="apply-discount">Apply</button>
</div>
<div class="payment-methods">
    <label><input type="radio" name="payment-method" value="credit-card">Credit card</label>
    <label><input type="radio" name="payment-method" value="ewallet">E-Wallet</label>
    <label><input type="radio" name="payment-method" value="cash">Cash</label>
  </div>
<div class="search-bars">
<div class="search-bar">
<label for="search-input">Username or ID</label>
  <input type="text" id="search-input" placeholder="Search...">
  <button id="search-button">Find</button>
</div>
<div class="customer">
  <div class="customer-name">
    <div style="display: inline-block">
      <label for="first-name-search-input">First name</label>
      <input type="search" id="first-name-search-input" name="first-name-search" readonly>
    </div>
    <div style="display: inline-block">
      <label for="last-name-search-input">Last name</label>
      <input type="search" id="last-name-search-input" name="last-name-search" readonly>
    </div>
  </div>
</div>
  <div class="search-bars">
    <label for="balance-search-input">Points:</label>
    <input type="text" id="balance" readonly>
    <button id="apply-balance">Apply</button>
  </div>
</div>
  
<div class="payment-details">
  <label for="payment-amount">Payment amount:</label>
  <input type="number" id="payment-amount" min="0" step="0.01"><br>
  <label for="change">Change:</label>
  <input type="text" id="change" readonly>
</div>
  <div class="cart-buttons">
    <button id="clear-cart">Clear</button>
    <button id="pay">Payment</button>
    <button id="print">Print</button>
  </div>
</div> -->
<!-- <script>
  $(document).ready(function() {
    $('#search-button').on('click', function() {
      var searchValue = $('#search-input').val();

      if (searchValue.length == 0) {
        swal('Error', 'Please enter a search username or ID.', 'error');
      } else if (searchValue.length >= 3) {
        $.ajax({
          url: 'search.php',
          method: 'POST',
          data: {
            'search': searchValue
          },
          success: function(response) {
          
            var customerData = JSON.parse(response);
            if (customerData.length > 0) {
              var foundMatch = false;
              customerData.forEach(function(customer) {
                if (customer.id.toLowerCase() == searchValue.toLowerCase() ||
                    customer.username.toLowerCase() == searchValue.toLowerCase()) {
                  foundMatch = true;
                  $('#first-name-search-input').val(customer.firstname);
                  $('#last-name-search-input').val(customer.lastname);
                }
              });
              if (!foundMatch) {
                $('#first-name-search-input').val('');
                $('#last-name-search-input').val('');
                swal('Error', 'No customer found.', 'error');
              }
            } else {
              $('#first-name-search-input').val('');
              $('#last-name-search-input').val('');
              swal('Error', 'No customer found.', 'error');
            }
          },
          error: function(error) {
            console.log(error);
          }
        });
      } else {
        $('#first-name-search-input').val('');
        $('#last-name-search-input').val('');
        swal('Error', 'Search must be at least 3 characters long.', 'error');
      }
    });
  });
</script> -->

</body>
</html>
