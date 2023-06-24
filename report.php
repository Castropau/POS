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
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saver/dist/FileSaver.min.js"></script>
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
  
      main {
        margin: 20px;
      }
      
      form {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom: 20px;
        text-align: center;
      }
      label {
        font-weight: bold;
        margin-right: 10px;
      }
      input[type="date"], input[type="submit"] {
        margin-bottom: 10px;
        padding: 5px;
      }
      input[type="submit"] {
        background-color: #007bff;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 1em;
        padding: 10px 20px;
        transition: background-color 0.2s ease;
      }
      input[type="submit"]:hover {
        background-color: #0056b3;
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
      th {
        background-color: #007bff;
        color: #fff;
      }

      
      @media screen and (max-width: 600px) {
        form {
          flex-direction: column;
        }
        input[type="date"], input[type="submit"] {
          width: 100%;
        }
      }
      h1{
        text-align: center;
      }
      .container {
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
<?php
    $host = 'sql985.main-hosting.eu';
    $username = 'u839345553_sbit3g';
    $password = 'sbit3gQCU';
    $database = 'u839345553_SBIT3G';
    $connection = mysqli_connect($host, $username, $password, $database);
    
    if(mysqli_connect_errno()){
      die('Failed to connect to database: ' . mysqli_connect_error());
    }
    ?>
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
  <a  href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
  <a href="productlist.php">Product List</a>
  <a class="active"href="salesreport.php">Sales Report</a>
  <a href="graph.php">Graph Sale</a>
  <a href="mostsale.php">Most Sale Product</a>
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
    $query = "select * from product";
    $result = mysqli_query($conn,$query);
    $row_count = mysqli_num_rows($result);
?>
<div class="row">
    <div class="container">
        <h1>Sales Report</h1>
        <form method="post" action="">
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" required style="margin-right: 10px;" value="<?php if(isset($_POST['submit'])) { echo $_POST['start_date']; } ?>">
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" required value="<?php if(isset($_POST['submit'])) { echo $_POST['end_date']; } ?>">
            <input type="submit" name="submit" value="Filter">
        </form>
        <?php
            
            if(isset($_POST['submit'])){
            
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];

               
                $query = "SELECT ornum, date_order, productname, quantity, subtotal FROM receipt WHERE date_order BETWEEN '$start_date' AND '$end_date' ORDER BY date_order DESC";

              
                $results = mysqli_query($connection, $query);

              
                if (mysqli_num_rows($results) > 0) {
                  
                    echo '<div style="max-height: 500px; overflow: auto;">';
                    echo '<table id="sales-table" style="width: 100%;">';
                    echo '<tr><th>Receipt Number</th><th>Date</th><th>Product</th><th>Quantity</th><th>Subtotal</th></tr>';
                    while($row = mysqli_fetch_assoc($results)){
                        echo '<tr>';
                        echo '<td>' . $row['ornum'] . '</td>';
                        echo '<td>' . $row['date_order'] . '</td>';
                        echo '<td>' . $row['productname'] . '</td>';
                        echo '<td>' . $row['quantity'] . '</td>';
                        echo '<td>' . $row['subtotal'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    echo '</div>';
                } else {
                    echo '<p>No Sales</p>';
                }
            }
        ?>
<button onclick="exportToExcel()">Export to Excel</button>
<script>
function exportToExcel() {
  var table = document.getElementById("sales-table");
  var wb = XLSX.utils.table_to_book(table, { sheet: "Sales Report" });
  var wbout = XLSX.write(wb, { bookType: "xlsx", type: "binary" });

  function s2ab(s) {
    var buf = new ArrayBuffer(s.length);
    var view = new Uint8Array(buf);
    for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xff;
    return buf;
  }

  var startDate = document.getElementById("start_date").value;
  var endDate = document.getElementById("end_date").value;

  var fileName = "sales_report_" + startDate + "_to_" + endDate + ".xlsx";

  saveAs(
    new Blob([s2ab(wbout)], { type: "application/octet-stream" }),
    fileName
  );
}
</script>
</div>

<!-- <script>
// Listen for click events on the "Filter" button
document.getElementById("filter-btn").addEventListener("click", function() {
  // Get the start and end dates from the form
  var startDate = document.getElementById("start_date").value;
  var endDate = document.getElementById("end_date").value;
  
  // Send an AJAX request to the server
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Update the sales data on the page
      document.getElementById("sales-data").innerHTML = this.responseText;
    }
  };
  xhr.open("POST", "sales_report.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("start_date=" + startDate + "&end_date=" + endDate);
});
</script> -->
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

</body>
</html>
