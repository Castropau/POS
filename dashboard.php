<!DOCTYPE html>
<?php
require_once 'dbconn.php';
	require_once 'validate.php';
	require 'name.php';
?>
<html>
  <title>SBIT-3G</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-S1wxPg5pt2gS4lulwHvfBTT4ziqExG3n4X9NGv1+IeZdOk+Et3r0f6NvO6UJ+eMjgQJ/An9Ur0JxHjqEgGRukg==" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="shortcut icon" href="Logo 2.svg" type="image/svg+xml">


<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  background-color: white
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
    background-color: #e6f2ff;
}
.table-bordered{
    background-color: #cce6ff;
    
}
.table-responsive{
    max-height: 85vh;
    max-width: 140vh;
   text-align: center;

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
button.productinfo {
  padding: 8px 16px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #4CAF50;
  color: white;
}

button.productinfo:hover {
  background-color: #3e8e41;
}
.row{
    display: flex;
    margin-left: 50px;
align-items: center;
}
.card {
  background-color: #fff;
  border-radius: 10px;
  margin-bottom: 30px;
  padding: 15px;
  text-align: center;
  transition: all 0.3s ease-in-out;
  margin-top: 20px;
  margin-right: 70px;
  width: 100%;
  height: 200px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  position: relative;
  top: 50%;
    left: -7%;
}
.card .btn {
  position: absolute;
  bottom: 40px;
  left: 40px;
}

.card:hover {
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
  transform: translateY(-5px);
}

.card h5 {
  font-size: 24px;
  margin-top: 0;
  margin-bottom: 10px;
}

.card p {
  font-size: 18px;
  margin-bottom: 0;
}

.card .btn {
  margin-top: 15px;
  padding: 10px 20px;
  text-transform: uppercase;
}

.card-product {
  border: 2px solid #3498db;
}

.card-product h5 {
  color: #3498db;
}

.card-product .btn {
  background-color: #3498db;
  color: #fff;
}

.card-product .btn:hover {
  background-color: #2980b9;
  color: #fff;
}

.card-sale {
  border: 2px solid #2ecc71;
}

.card-sale h5 {
  color: #2ecc71;
}

.card-sale .btn {
  background-color: #2ecc71;
  color: #fff;
}

.card-sale .btn:hover {
  background-color: #27ae60;
  color: #fff;
}

.card-average {
  border: 2px solid #f1c40f;
}

.card-average h5 {
  color: #f1c40f;
}

.card-average .btn {
  background-color: #f1c40f;
  color: #fff;
}

.card-average .btn:hover {
  background-color: #f39c12;
  color: #fff;
}

.card-buyers {
  border: 2px solid #ff1a1a;
}

.card-buyers h5 {
  color: #ff1a1a;
}

.card-buyers .btn {
  background-color: #ff1a1a;
  color: #fff;
}

.card-buyers .btn:hover {
  background-color: #ff6666;
  color: #fff;
}
#myChart {
  width: 80%;
  height: 400px;
  margin: 50px auto;
  border: 1px solid #ccc;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.chart-title {
  text-align: center;
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.chart-legend {
  list-style: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

.chart-legend li {
  display: inline-block;
  margin-right: 10px;
}

.chart-legend .label {
  display: inline-block;
  width: 12px;
  height: 12px;
  margin-right: 5px;
}

.chart-legend .sales {
  color: rgba(255, 99, 132, 1);
}
button {
  padding: 10px;
  margin: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  
  
  
}

button:hover {
  background-color: #3e8e41;
  
}

canvas {
  margin-top: 20px;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.graph-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.graph {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  height: 300px;
  width: 100%;
}

.bar {
  width: 50px;
  margin: 0 10px;
  background-color: blue;
}

.buttons {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.buttons button {
  padding: 10px 20px;
  border: none;
  background-color: white;
  color: blue;
  font-size: 16px;
  cursor: pointer;
}

.buttons button.active {
  background-color: blue;
  color: white;
}

.percentage {
  margin-top: 10px;
  font-size: 20px;
  font-weight: bold;
}

#chart_div {
    margin-top: 20px;
    text-align: center;
    height: 1000px;
  }
  .graph-container {
  width: 100%;
  height: 500px;
  margin-top: 50px;
  position: relative;
}
#chart {
  width: 800px;
  height: 500px;
  margin: 0 auto;
}

#button-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

button {
  margin: 0 10px;
  padding: 10px 20px;
  font-size: 16px;
}

.active {
  background-color: #007bff;
  color: #fff;
}
.btn-group button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
      .btn-group button.active {
        background-color: #007bff;
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
  <a class="active" href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
  <a href="productlist.php">Product List</a>
  <a href="report.php">Sales Report</a>
  <a href="graph.php">Graph Sale</a>
  <a href="mostsale.php">Most Sale Product</a>
  <a href="stock.php">Stock Report</a>
  <a href="returnh.php">Replace Report</a>
  <a href="defecth.php">Defect Report</a>
  <a href="ListEmployee_Dept.php">Employee List</a>
  <a href="replaceh.php">Replace History</a>
  <a href="request.php">Warehouse Request</a>
  <form method="post">
  <button type="submit" name="clear">Clear All Data</button>
</form>
    


  <div class="social_media">          
    <a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a>        
  </div>
</div>
<?php
  require 'dbconn.php';
  
  if (isset($_POST['clear'])) {
    $tables = ['defect', 'defect_log', 'payment', 'payment_history', 'receipt', 'receipts', 'request', 'request_log'];
    $success = true;
    foreach ($tables as $table) {
      $query = $conn->query("DELETE FROM $table");
      if (!$query) {
        $success = false;
        break;
      }
    }
    if ($success) {
      echo "<script>swal('Cleared!', 'All tables have been cleared.', 'success');</script>";
    } else {
      echo "<script>swal('Error!', 'Error clearing tables.', 'error');</script>";
    }
  }
?>

<?php 
include "dbconn.php";
$query = "SELECT SUM(subtotal) AS subtotal,SUM(quantity) AS total_quantity FROM receipt"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$subtotal = $row['subtotal']; 
$total_quantity = $row['total_quantity']; 


$query = "SELECT COUNT(*) AS count FROM product"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count']; 


$query = "SELECT COUNT(*) AS pay_id FROM payment"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$total_customers = $row['pay_id']; 
?>


  <div class="row">
  <div class="content">
  <div class="row">
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card card-product">
      <div class="card-body">
        <h5 class="card-title">All Products</h5>
        <p class="card-text"><?php echo $count; ?></p>
        <a href="productlist.php" class="btn btn-product"><i class="fa fa-shopping-cart"></i> View Details</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card card-sale">
      <div class="card-body">
        <h5 class="card-title">Total Sales</h5>
        <p class="card-text"><?php echo $total_quantity; ?></p>
        <a href="report.php" class="btn btn-sale"><i class="fas fa-peso-sign"></i> View Details</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
    <div class="card card-average">
      <div class="card-body">
        <h5 class="card-title">Average Sale</h5>
        <p class="card-text">₱<?php echo $subtotal; ?></p>
        <a href="#table-bordered" class="btn btn-average"><i class="fa fa-chart-bar"></i> View Details</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
    <div class="card card-buyers">
      <div class="card-body">
        <h5 class="card-title">Total buyers</h5>
        <p class="card-text"><?php echo $total_customers; ?></p>
        <a href="#table-bordered" class="btn btn-average"><i class="fa-sharp fa-solid fa-person"></i> View Details</a>
      </div>
    </div>
  </div>
</div>

<!-- <div style="text-align: center;">
  <button id="day-btn">Day</button>
  <button id="week-btn">Week</button>
  <button id="month-btn">Month</button>
  <button id="year-btn">Year</button>
</div>
<canvas id="myChart"></canvas>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div"></div> -->
  <?php 
  $con = new mysqli('sql985.main-hosting.eu','u839345553_sbit3g','sbit3gQCU','u839345553_SBIT3G');
  $query = $con->query("
    SELECT 
      productname as productname,
      SUM(quantity) as quantity
    FROM receipt
    GROUP BY productname
  ");

  $productname = array();
  $quantity = array();

  while($data = mysqli_fetch_array($query))
  {
    $productname[] = $data['productname'];
    $quantity[] = $data['quantity'];
  }

?>

<h2 style=" text-align: center; margin-top: 20px; margin-bottom: 20px; font-size: 28px; font-weight: bold;">Most Sale Product <a href="mostsale.php"><button>Details</button></h2></a>
<div style="width: 1000px;">
  <canvas id="myChart"></canvas>
</div>
 
<script>
  
  const labels = <?php echo json_encode($productname) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Sale',
      data: <?php echo json_encode($quantity) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>














<!-- <div class="btn-group">
      <button id="daily-btn" class="active">Day</button>
      <button id="weekly-btn">Week</button>
      <button id="monthly-btn">Month</button>
      <button id="yearly-btn">Year</button>
    </div>
<div class="graph-container">
  <canvas id="sales-graph"></canvas>
</div> -->

<h2 style="text-align: center; margin-top: 20px; margin-bottom: 20px; font-size: 28px; font-weight: bold;">Daily, Weekly, Monthly and Yearly Sales <a href="graph.php"><button>Details</button></h2></a></h2>
<?php

$host = 'sql985.main-hosting.eu';
$username = 'u839345553_sbit3g';
$password = 'sbit3gQCU';
$database = 'u839345553_SBIT3G';


$mysqli = new mysqli($host, $username, $password, $database);


if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}


$result = $mysqli->query("SELECT DATE_FORMAT(date_order, '%W') AS day, SUM(quantity) AS total FROM receipt WHERE date_order >= DATE_SUB(NOW(), INTERVAL 1 WEEK) GROUP BY DAYOFWEEK(date_order) ORDER BY DAYOFWEEK(date_order)");


$days = [];
$dailyData = [];
while ($row = $result->fetch_assoc()) {
    $days[] = $row['day'];
    $dailyData[] = $row['total'];
}


$weeklyResult = $mysqli->query("SELECT CONCAT('Week ', WEEK(date_order)) AS week, SUM(quantity) AS total FROM receipt WHERE date_order >= DATE_SUB(NOW(), INTERVAL 5 WEEK) GROUP BY WEEK(date_order) ORDER BY WEEK(date_order)");
$monthlyResult = $mysqli->query("SELECT DATE_FORMAT(date_order, '%M') AS month, SUM(quantity) AS total FROM receipt WHERE date_order >= DATE_SUB(NOW(), INTERVAL 6 MONTH) GROUP BY MONTH(date_order) ORDER BY MONTH(date_order)");
$yearlyResult = $mysqli->query("SELECT YEAR(date_order) AS year, SUM(quantity) AS total FROM receipt WHERE date_order >= DATE_SUB(NOW(), INTERVAL 5 YEAR) GROUP BY YEAR(date_order) ORDER BY YEAR(date_order)");


$weeks = [];
$weeklyData = [];
while ($row = $weeklyResult->fetch_assoc()) {
    $weeks[] = $row['week'];
    $weeklyData[] = $row['total'];
}

$months = [];
$monthlyData = [];
while ($row = $monthlyResult->fetch_assoc()) {
    $months[] = $row['month'];
    $monthlyData[] = $row['total'];
}

$years = [];
$yearlyData = [];
while ($row = $yearlyResult->fetch_assoc()) {
    $years[] = $row['year'];
    $yearlyData[] = $row['total'];
}


$mysqli->close();
?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <div id="chart-container">
    <canvas id="chart"></canvas>
</div>

<div id="button-container">
    <button id="daily-button" class="active">Daily</button>
    <button id="weekly-button">Weekly</button>
    <button id="monthly-button">Monthly</button>
    <button id="yearly-button">Yearly</button>
</div>
<script>

var chartCanvas = document.getElementById('chart');
var chart = new Chart(chartCanvas, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($days); ?>,
        datasets: [{
            label: 'Sales',
            data: <?php echo json_encode($dailyData); ?>,
            backgroundColor: '#007bff'
        }]
    },
    options: {
        responsive: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


var dailyButton = document.getElementById('daily-button');
var weeklyButton = document.getElementById('weekly-button');
var monthlyButton = document.getElementById('monthly-button');
var yearlyButton = document.getElementById('yearly-button');
var activeButton = dailyButton;


dailyButton.addEventListener('click', function() {
    if (activeButton !== dailyButton) {
        activeButton.classList.remove('active');
        dailyButton.classList.add('active');
        activeButton = dailyButton;

        
        chart.data.labels = <?php echo json_encode($days); ?>;
        chart.data.datasets[0].data = <?php echo json_encode($dailyData); ?>;
        chart.update();
    }
});

weeklyButton.addEventListener('click', function() {
    if (activeButton !== weeklyButton) {
        activeButton.classList.remove('active');
        weeklyButton.classList.add('active');
        activeButton = weeklyButton;

       
        chart.data.labels = <?php echo json_encode($weeks); ?>;
        chart.data.datasets[0].data = <?php echo json_encode($weeklyData); ?>;
        chart.update();
    }
});

monthlyButton.addEventListener('click', function() {
    if (activeButton !== monthlyButton) {
        activeButton.classList.remove('active');
        monthlyButton.classList.add('active');
        activeButton = monthlyButton;

      
        chart.data.labels = <?php echo json_encode($months); ?>;
        chart.data.datasets[0].data = <?php echo json_encode($monthlyData); ?>;
        chart.update();
    }
});

yearlyButton.addEventListener('click', function() {
    if (activeButton !== yearlyButton) {
        activeButton.classList.remove('active');
        yearlyButton.classList.add('active');
        activeButton = yearlyButton;

       
        chart.data.labels = <?php echo json_encode($years); ?>;
        chart.data.datasets[0].data = <?php echo json_encode($yearlyData); ?>;
        chart.update();
    }
});
</script>
</br>
<div style="background-color: #99ccff; font-family: Calibri(body);"class="col-md-12">
    <div class="panel-body">
    <?php 
    include "dbconn.php";
    $query = "SELECT * FROM payment";
    $result = mysqli_query($conn, $query);
    $row_count = mysqli_num_rows($result); 

    $query = "SELECT SUM(pay_amount) as total_payment FROM payment";
    $result_total = mysqli_query($conn, $query);
    $row_total = mysqli_fetch_assoc($result_total);
    $total_payment = $row_total['total_payment']; 
?>
        <div class="table-responsive">
            <table class="table table-bordered" id="table-bordered">
                <thead>
                    <tr style="background-color: #1a8cff; text-transform: uppercase;">    
                        <th>Receipt ID</th>
                        <th>Customer name</th>
                        <th>Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr class="td">                        
                        <td><?php echo $row['receipt_or']; ?></td>
                        <td><?php echo $row['guest_name'] . '  ' . $row['cus_name']; ?></td>                        
                        <td><?php echo $row['date_order']; ?></td>
                        <td>₱<?php echo $row['pay_amount']; ?></td> 
                    </tr>
                    <?php 
                            $i++;
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                    <td colspan="2" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px; font-weight: bold; color: #1a8cff; text-align: center;">Total Buyers: <?php echo $row_count; ?></td>
                    <td colspan="2" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px; font-weight: bold; color: #1a8cff; text-align: center;">Sales Average: ₱<?php echo $total_payment; ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script>
var dailyBtn = document.getElementById('daily-btn');
      var weeklyBtn = document.getElementById('weekly-btn');
      var monthlyBtn = document.getElementById('monthly-btn');
      var yearlyBtn = document.getElementById('yearly-btn');

    
      dailyBtn.addEventListener('click', function() {
       
        salesChart.data.datasets[0].hidden = false;
        salesChart.data.datasets[1].hidden = true;
        salesChart.data.datasets[2].hidden = true;
        salesChart.data.datasets[3].hidden = true;
        salesChart.update();

        
        dailyBtn.classList.add('active');
        weeklyBtn.classList.remove('active');
        monthlyBtn.classList.remove('active');
        yearlyBtn.classList.remove('active');
      });

      weeklyBtn.addEventListener('click', function() {
       
        salesChart.data.datasets[0].hidden = true;
        salesChart.data.datasets[1].hidden = false;
        salesChart.data.datasets[2].hidden = true;
        salesChart.data.datasets[3].hidden = true;
        salesChart.update();

      
        dailyBtn.classList.remove('active');
        weeklyBtn.classList.add('active');
        monthlyBtn.classList.remove('active');
        yearlyBtn.classList.remove('active');
      });

      monthlyBtn.addEventListener('click', function() {
      
        salesChart.data.datasets[0].hidden = true;
        salesChart.data.datasets[1].hidden = true;
        salesChart.data.datasets[2].hidden = false;
        salesChart.data.datasets[3].hidden = true;
        salesChart.update();

       
        dailyBtn.classList.remove('active');
        weeklyBtn.classList.remove('active');
        monthlyBtn.classList.add('active');
        yearlyBtn.classList.remove('active');
      });

      yearlyBtn.addEventListener('click', function() {
       
        salesChart.data.datasets[0].hidden = true;
        salesChart.data.datasets[1].hidden = true;
        salesChart.data.datasets[2].hidden = true;
        salesChart.data.datasets[3].hidden = false;
        salesChart.update();

       
        dailyBtn.classList.remove('active');
        weeklyBtn.classList.remove('active');
        monthlyBtn.classList.remove('active');
        yearlyBtn.classList.add('active');
      });
    </script>
<script>
  
var canvas = document.getElementById('sales-graph');


var chartData = {
  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
  datasets: [
    {
      label: 'Daily Sales',
      data: [25, 10, 15, 20, 30, 35, 45],
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      tension: 0.1
    },
    {
      label: 'Weekly Sales',
      data: [150, 120, 180, 200, 250, 300, 350, 400, 450, 500, 550, 600],
      fill: false,
      borderColor: 'rgb(255, 99, 132)',
      tension: 0.1
    },
    {
      label: 'Monthly Sales',
      data: [1000, 1250, 1500, 1750, 2000, 2250, 2500, 2750, 3000, 3250, 3500, 3750],
      fill: false,
      borderColor: 'rgb(54, 162, 235)',
      tension: 0.1
    },
    {
      label: 'Yearly Sales',
      data: [10000, 12000, 14000, 16000, 18000, 20000, 22000, 24000, 26000, 28000, 30000, 32000],
      fill: false,
      borderColor: 'rgb(255, 206, 86)',
      tension: 0.1
    }
  ]
};


var salesChart = new Chart(canvas, {
  type: 'bar',
  data: chartData,
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});


document.getElementById('daily-btn').addEventListener('click', function() {
  salesChart.data.datasets[0].data = [25, 10, 15, 20, 30, 35, 45];
  salesChart.data.labels = ['Sunday','Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  salesChart.update();
});

document.getElementById('weekly-btn').addEventListener('click', function() {
  salesChart.data.datasets[0].data = [150, 120, 180, 200];
  salesChart.data.labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
  salesChart.update();
});

document.getElementById('monthly-btn').addEventListener('click', function() {
  salesChart.data.datasets[0].data = [1000, 1250, 1500, 1750, 2000, 2250, 2500, 2750, 3000, 3250, 3500, 3750];
  salesChart.data.labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October','November', 'December'];
salesChart.update();
});

document.getElementById('yearly-btn').addEventListener('click', function() {
salesChart.data.datasets[0].data = [10000, 12000];
salesChart.data.labels = ['2022', '2023'];
salesChart.update();
});
</script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script>
  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['City', '2010 Population',],
        ['New York City, NY', 8175000],
        ['Los Angeles, CA', 3792000],
        ['Chicago, IL', 2695000],
        ['Houston, TX', 2099000],
        ['Philadelphia, PA', 1526000]
      ]);

      var options = {
        title: 'Most Sale',
        chartArea: {width: '50%'},
       
    
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script> -->
  
<!-- <script>
 const salesData = {
  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
  datasets: [
    {
      label: 'Sales',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      data: [100, 150, 200, 175, 225, 125, 225],
    },
  ],
};

const chartOptions = {
  responsive: true,
  maintainAspectRatio: false,
  scales: {
    yAxes: [
      {
        ticks: {
          beginAtZero: true,
        },
      },
    ],
  },
};

const salesChart = document.getElementById('myChart').getContext('2d');
const chart = new Chart(salesChart, {
  type: 'bar',
  data: salesData,
  options: chartOptions,
});

document.getElementById('day-btn').addEventListener('click', function() {
  const today = new Date();
  const dayOfWeek = today.getDay();
  const daysSinceMonday = dayOfWeek === 0 ? 6 : dayOfWeek - 1;
  const monday = new Date(today);
  monday.setDate(monday.getDate() - daysSinceMonday);
  const labels = [];
  const data = [];
  for (let i = 0; i < 7; i++) {
    const date = new Date(monday);
    date.setDate(monday.getDate() + i);
    const dayLabel = date.toLocaleString('default', { weekday: 'short' });
    labels.push(dayLabel);
    data.push(salesData.datasets[0].data[daysSinceMonday + i]);
  }
  chart.data.labels = labels;
  chart.data.datasets[0].data = data;
  chart.update();
});

document.getElementById('month-btn').addEventListener('click', function() {
  const year = new Date().getFullYear();
  const labels = [];
  const data = [];
  const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  for (let i = 0; i < 12; i++) {
    const daysInMonth = new Date(year, i + 1, 0).getDate();
    const monthData = salesData.datasets[0].data.slice(i * daysInMonth, (i + 1) * daysInMonth);
    labels.push(monthNames[i]);
    data.push(monthData.reduce((a, b) => a + b, 0));
  }
  chart.data.labels = labels;
  chart.data.datasets[0].data = data;
  chart.update();
});

document.getElementById('year-btn').addEventListener('click', function() {
  chart.data.labels = ['2020', '2021', '2022'];
  chart.data.datasets[0].data = [750, 1225, 2000];
  chart.update();
});
document.getElementById('week-btn').addEventListener('click', function() {
  const today = new Date();
  const dayOfWeek = today.getDay();
  const daysSinceMonday = dayOfWeek === 0 ? 6 : dayOfWeek - 1;
  const monday = new Date(today);
  monday.setDate(monday.getDate() - daysSinceMonday);

  const labels = [];
  const data = [];

  for (let i = 0; i < 5; i++) {
    const weekStart = new Date(monday);
    weekStart.setDate(weekStart.getDate() - (4 - i) * 7);

    const weekEnd = new Date(monday);
    weekEnd.setDate(weekEnd.getDate() - ((4 - i) * 7 + 6));

    const weekLabel = 'Week ' + (i + 1);
    labels.push(weekLabel);

    let weekSales = 0;
    for (let j = 0; j < 7; j++) {
      const date = new Date(weekEnd);
      date.setDate(weekEnd.getDate() + j);
      weekSales += salesData.datasets[0].data[date.getDay()];
    }
    data.push(weekSales);
  }

  chart.data.labels = labels;
  chart.data.datasets[0].data = data;
  chart.update();
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
<script>
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
        sale: function(response) {
        
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
  </script>
<?php

require_once 'dbconn.php';


if (isset($_POST['submit'])) {
  
  $username_id = $_POST['username-search'];

 
  $sql = "SELECT * FROM customer WHERE username='$username_id' OR id='$username_id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
      $firstname = $row['firstname'];
      $lastname = $row['lastname'];
      echo "<script>
              window.onload = function() {
                document.getElementById('first-name-search-input').value = '$firstname';
                document.getElementById('last-name-search-input').value = '$lastname';
              }
            </script>";
    }
  } else {
   
    echo "<script>
            window.onload = function() {
              swal('Error', 'No customer found with the given username or ID.', 'error');
            }
          </script>";
  }
}
?> 
<script>
 
  var offset = <?php echo date('Z') ?>;
  

  setInterval(function() {
    var date = new Date();
    var localTime = date.getTime();
    var localOffset = date.getTimezoneOffset() * 136500;
    var utcTime = localTime + localOffset;
    var offsetTime = utcTime + (offset * 1000);
    var clockTime = new Date(offsetTime);
    document.getElementById("clock").innerHTML = clockTime.toLocaleTimeString([], {hour: 'numeric', minute: '2-digit', second: '2-digit', hour12: true});
  }, 1000);
</script>
<script>
document.getElementById('clear-cart').addEventListener('click', clearCart);

function clearCart() {
  const tbody = document.querySelector('.cart-table tbody');
  while (tbody.firstChild) {
    tbody.removeChild(tbody.firstChild);
  }
  document.getElementById('total-price').textContent = '₱0.00';
  document.getElementById('totalqty').value = '';
  document.getElementById('discount-code').value = '';
  document.getElementById('payment-amount').value = '';
  document.getElementById('change').value = '';
  document.getElementById('search-input').value = '';
  document.getElementById('first-name-search-input').value = '';
  document.getElementById('last-name-search-input').value = '';
  document.getElementById('balance').value = '';
  
  cart = [];

  const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
  addToCartButtons.forEach(button => button.disabled = false);

  const inputFields = document.querySelectorAll('input[type="text"]');
  inputFields.forEach(field => field.value = '');

  
  const radioButtons = document.querySelectorAll('input[type="radio"]');
  radioButtons.forEach(button => button.checked = false);
}

  </script>
<script>
 const applyDiscountBtn = document.querySelector("#apply-discount");
applyDiscountBtn.addEventListener("click", applyDiscount);

function applyDiscount() {
  const discountInput = document.querySelector("#discount-code");
  const paymentInput = document.querySelector("#payment-amount");
  const changeInput = document.querySelector("#change");

  const discountPercent = discountInput.value;
  const paymentAmount = paymentInput.value;

  if (discountPercent >= 0 && discountPercent <= 100 && paymentAmount >= 0) {
    const discountAmount = paymentAmount * (discountPercent / 100);
    const finalAmount = paymentAmount - discountAmount;
    changeInput.value = finalAmount >= 0 ? finalAmount.toFixed(2) : 0; 
  } else {
    alert("Please enter a valid discount and payment amount.");
  }
}

$("#pay").click(function() {
  var paymentAmount = Number($("#payment-amount").val());
  var totalPrice = Number($("#total-price").text().replace(/[^0-9.-]+/g,""));
  if (!totalPrice) {
    swal("Invalid", "Your cart is empty.", "error");
    return;
  }
  if (!paymentAmount) {
    swal("Invalid", "Please enter a payment amount.", "error");
    return;
  }
  const discountPercent = Number($("#discount-code").val());
  const discountAmount = totalPrice * (discountPercent / 100);
  const finalAmount = totalPrice - discountAmount;
  if (paymentAmount < finalAmount) {
    swal("Invalid payment amount", "The payment amount is not enough to cover the total.", "error");
    $("#change").val("₱" + 0); 
  } else if (discountPercent > 0 && finalAmount > 0 && paymentAmount >= finalAmount) {
    const change = calculateChange(paymentAmount, totalPrice, discountPercent);
    $("#change").val("₱" + change);
    swal("Payment saleful", "Thank you!", "sale");
  } else if (discountPercent === 0 && paymentAmount >= totalPrice) {
    const change = calculateChange(paymentAmount, totalPrice, discountPercent);
    $("#change").val("₱" + change);
    swal("Payment saleful", "Thank you!", "sale");
  } else {
    $("#change").val("");
    swal("Invalid payment amount", "Please enter a valid payment amount.", "error");
  }
});

$("#payment-amount").on("input", function() {
  var paymentAmount = Number($(this).val());
  var totalPrice = Number($("#total-price").text().replace(/[^0-9.-]+/g,""));
  const discountPercent = Number($("#discount-code").val());
  const discountAmount = totalPrice * (discountPercent / 100);
  const finalAmount = totalPrice - discountAmount;
  if (!totalPrice || paymentAmount < finalAmount) {
    $("#change").val("₱" + 0); 
  } else {
    var change = calculateChange(paymentAmount, totalPrice, discountPercent);
    $("#change").val("₱" + change);
  }
});

$("#print").click(function() {
  var totalPrice = Number($("#total-price").text().replace(/[^0-9.-]+/g,""));
  if (!totalPrice) {
    swal("Invalid", "Your cart is empty.", "error");
    return;
  }
  var paymentAmount = Number($("#payment-amount").val());
  if (!paymentAmount) {
    swal("Invalid", "Please enter a payment amount before printing.", "error");
    return;
  }
  const discountPercent = Number($("#discount-code").val());
  const discountAmount = totalPrice * (discountPercent / 100);
  const finalAmount = totalPrice - discountAmount;
  if (paymentAmount < finalAmount) {
    swal("Invalid payment amount", "The payment amount is not enough to cover the total.", "error");
    return;
  }
  var printContents = $(".cart-table").html();

  $("body").html(printContents);
  window.print();
});

function calculateChange(paymentAmount, totalPrice, discountPercent) {
  const discountAmount = totalPrice * (discountPercent / 100);
  const finalAmount = totalPrice - discountAmount;
  return (paymentAmount - finalAmount).toFixed(2);
}
</script>
<script>
$(document).ready(function() {

  var cart = [];

  $(".add-to-cart-btn").click(function() {
    var product = $(this).data("id");
    var productInCart = false;
    $.each(cart, function(index, item) {
      if (item.id === product) {
        productInCart = true;
        return false;
      }
    });

    if (productInCart) {
     
      swal("Product already added", "This product is already in your basket.", "average");
    } else {
    
      var productName = $(this).closest("tr").find("td:eq(2)").text();
      var productQty = $(this).closest("tr").find("input[name=qty]").val();
      var productPrice = $(this).closest("tr").find("td:eq(4)").text();
      var numericPrice = Number(productPrice.replace(/[^0-9.-]+/g,""));
      var subtotal = numericPrice * productQty;
      var item = {
        id: product,
        name: productName,
        qty: productQty,
        price: numericPrice,
        subtotal: subtotal
      };

    
      cart.push(item);

   
      updateCartTable();
    }
  });

  
  $("#clear-cart").click(function() {
    
    cart = [];

   
    updateCartTable();

 
    $("#payment-amount").val("");
    $("#change").val("");
  });

  function updateCartTable() {
  
  }


  
  $("#clear-cart").click(function() {
    
    cart = [];

   
    updateCartTable();
  });

  function updateCartTable() {
  
  }

  $(".cart-table").on("click", ".remove-product-btn", function() {
    var index = $(this).closest("tr").index();
    cart.splice(index, 1);
    updateCartTable();
  });

  function updateCartTable() {
 
  $(".cart-table tbody").empty();

  var totalQty = 0;
  var totalPrice = 0;
  $.each(cart, function(index, item) {
    var rowHtml = "<tr>";
    rowHtml += "<td>" + item.name + "</td>";
    rowHtml += "<td>" + formatPrice(item.price) + "</td>";
    rowHtml += "<td><input type='number' class='quantity-input' min='1' value='" + item.qty + "' data-index='" + index + "'></td>";
    rowHtml += "<td class='subtotal'>" + formatPrice(item.subtotal) + "</td>";
    rowHtml += "<td><button class='remove-product-btn' data-index='" + index + "'><i class='fa-sharp fa-solid fa-circle-xmark'></i></button></td>";
    rowHtml += "</tr>";
    $(".cart-table tbody").append(rowHtml);
    totalQty += Number(item.qty);
    totalPrice += item.subtotal;
  });

  
  $(".quantity-input").on("change", function() {
    var index = $(this).data("index");
    var newQty = $(this).val();
    cart[index].qty = newQty;
    cart[index].subtotal = cart[index].price * newQty;
    updateCartTable();
  });

  $(".remove-product-btn").on("click", function() {
    var index = $(this).data("index");
    cart.splice(index, 1);
    updateCartTable();
  });

$(document).on("change", ".quantity-input", function() {
  var quantity = $(this).val();
  var price = $(this).closest("tr").find("td:eq(1)").text();
  var subtotal = formatPrice(Number(quantity) * parseFloat(price.replace(/[^0-9.-]+/g,"")));
  $(this).closest("tr").find(".subtotal").text(subtotal);
  calculateTotal();
  var total = calculateTotal();
  var finalAmount = formatPrice(total);
  $('#total-price').text(finalAmount);
});

function calculateTotal() {
  var total = 0;
  $('.subtotal').each(function() {
    var subtotal = $(this).text();
    total += parseFloat(subtotal.replace(/[^0-9.-]+/g,""));
  });
  return total;
}

function formatPrice(price) {
  return "₱" + price.toFixed(2);
}
    $("#total-price").text(formatPrice(totalPrice));
    $("#totalqty").val(totalQty);
  }

 
  function formatPrice(price) {
    return "₱" + price.toFixed(2);
  }
});
</script>
<script type="text/javascript">
$(document).ready(function(){  
      $('#table-bordered').DataTable();  
 }); 
</script>
<script type='text/javascript'>
            $(document).ready(function(){  
  $('#table-bordered').DataTable();  
  $(document).on('click', '.productinfo', function(){
    var product = $(this).data('id');
    $.ajax({
      url: 'details.php',
      type: 'post',
      data: {product: product},
      sale: function(response){ 
        $('.modal-body').html(response); 
        $('#productModal').modal('show'); 
      }
    });
  });
});
</script>
            <div class="modal fade" id="productModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Product Details</h4>
                          <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          
                        </div>
                    </div>
                </div>
        </div>
</body>
</html>
