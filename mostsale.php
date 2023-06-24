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
    left: 10%;
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
  <a href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
  <a href="productlist.php">Product List</a>
  <a href="report.php">Sales Report</a>
  <a href="graph.php">Graph Sale</a>
  <a class="active"href="">Most Sale Product</a>
  <a href="stock.php">Stock Report</a>
  <a href="returnh.php">Replace Report</a>
  <a href="defecth.php">Defect Report</a>
  <a href="ListEmployee_Dept.php">Employee List</a>
  <a href="replaceh.php">Replace History</a>
  <a href="request.php">Warehouse Request</a>

  <div class="social_media">          
    <a href="logout.php"><i class="fa fa-sign-out"></i></a>        
  </div>
</div>

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

<h2 style=" text-align: center; margin-top: 20px; margin-bottom: 20px; font-size: 28px; font-weight: bold;">Most Sale Product</h2>
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

<!-- <h2 style="text-align: center; margin-top: 20px; margin-bottom: 20px; font-size: 28px; font-weight: bold;">Daily, Weekly, Monthly and Yearly Sales</h2>
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
// Set up the chart
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

// Set up the buttons
// Set up the buttons
var dailyButton = document.getElementById('daily-button');
var weeklyButton = document.getElementById('weekly-button');
var monthlyButton = document.getElementById('monthly-button');
var yearlyButton = document.getElementById('yearly-button');
var activeButton = dailyButton;

// Add event listeners to the buttons
dailyButton.addEventListener('click', function() {
    if (activeButton !== dailyButton) {
        activeButton.classList.remove('active');
        dailyButton.classList.add('active');
        activeButton = dailyButton;

        // Update the chart with daily data
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

        // Update the chart with weekly data
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

        // Update the chart with monthly data
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

        // Update the chart with yearly data
        chart.data.labels = <?php echo json_encode($years); ?>;
        chart.data.datasets[0].data = <?php echo json_encode($yearlyData); ?>;
        chart.update();
    }
});
</script>
</div>
<script>
var dailyBtn = document.getElementById('daily-btn');
      var weeklyBtn = document.getElementById('weekly-btn');
      var monthlyBtn = document.getElementById('monthly-btn');
      var yearlyBtn = document.getElementById('yearly-btn');

      // Add event listeners to the buttons
      dailyBtn.addEventListener('click', function() {
        // Update chart data to show daily sales
        salesChart.data.datasets[0].hidden = false;
        salesChart.data.datasets[1].hidden = true;
        salesChart.data.datasets[2].hidden = true;
        salesChart.data.datasets[3].hidden = true;
        salesChart.update();

        // Set the active button
        dailyBtn.classList.add('active');
        weeklyBtn.classList.remove('active');
        monthlyBtn.classList.remove('active');
        yearlyBtn.classList.remove('active');
      });

      weeklyBtn.addEventListener('click', function() {
        // Update chart data to show weekly sales
        salesChart.data.datasets[0].hidden = true;
        salesChart.data.datasets[1].hidden = false;
        salesChart.data.datasets[2].hidden = true;
        salesChart.data.datasets[3].hidden = true;
        salesChart.update();

        // Set the active button
        dailyBtn.classList.remove('active');
        weeklyBtn.classList.add('active');
        monthlyBtn.classList.remove('active');
        yearlyBtn.classList.remove('active');
      });

      monthlyBtn.addEventListener('click', function() {
        // Update chart data to show monthly sales
        salesChart.data.datasets[0].hidden = true;
        salesChart.data.datasets[1].hidden = true;
        salesChart.data.datasets[2].hidden = false;
        salesChart.data.datasets[3].hidden = true;
        salesChart.update();

        // Set the active button
        dailyBtn.classList.remove('active');
        weeklyBtn.classList.remove('active');
        monthlyBtn.classList.add('active');
        yearlyBtn.classList.remove('active');
      });

      yearlyBtn.addEventListener('click', function() {
        // Update chart data to show yearly sales
        salesChart.data.datasets[0].hidden = true;
        salesChart.data.datasets[1].hidden = true;
        salesChart.data.datasets[2].hidden = true;
        salesChart.data.datasets[3].hidden = false;
        salesChart.update();

        // Set the active button
        dailyBtn.classList.remove('active');
        weeklyBtn.classList.remove('active');
        monthlyBtn.classList.remove('active');
        yearlyBtn.classList.add('active');
      });
    </script>
<script>
  // Get the canvas element
var canvas = document.getElementById('sales-graph');

// Set the chart data
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

// Create the chart
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

// Add event listeners to buttons
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
</script> -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <div style="background-color: #99ccff; font-family: Calibri(body); width: 145vh;"class="col-md-12">
    <div style="width: 150%;"class="panel-body">
        <?php 
            include "dbconn.php";
            $query = "SELECT prod_id, productname, SUM(quantity) AS total_quantity FROM receipt GROUP BY prod_id ORDER BY total_quantity DESC";
            $result = mysqli_query($conn, $query);
        ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="table-bordered">
                <thead>
                    <tr style="background-color: #1a8cff; text-transform: uppercase;">    
                        <th>TOP</th>
                       
                        <th>Product name</th>
                        <th>Quantity</th>                           
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $rank = 1;
                    while($row = mysqli_fetch_array($result)){ 
                ?>
                    <tr class="td">                        
                        <td><?php echo $rank; ?></td>
                       
                        <td><?php echo $row['productname']; ?></td>                        
                        <td><?php echo $row['total_quantity']; ?></td>                            
                    </tr>
                <?php 
                        $rank++;
                    } 
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){  
      $('#table-bordered').DataTable();  
 }); 
</script>
</body>
</html>
