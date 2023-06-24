
<?php
require_once 'dbconn.php';
	require_once 'validate.php';
	require 'name.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="Logo 2.svg" type="image/svg+xml">
    <title>SBIT-3G</title>
</head>
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
.row{
    display: flex;
    margin-left: 50px;
align-items: center;
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
</style>
<body>
    

<?php 
                      
                        $servername = "sql985.main-hosting.eu";
                        $username = "u839345553_sbit3g";
                        $password = "sbit3gQCU";
                        $database = "u839345553_SBIT3G";
                      

                        try {
                        
                            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
                            // echo "Connected Successfully";
                            
                        } catch(PDOException $e) {
                        
                            echo "Connection Failed" .$e->getMessage();
                        }        
?>

  
<?php

?>
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
  <a href="report.php">Sales Report</a>
  <a href="graph.php">Graph Sale</a>
  <a href="mostsale.php">Most Sale Product</a>
  <a href="stock.php">Stock Report</a>
  <a href="returnh.php">Replace Report</a>
  <a href="defecth.php">Defect Report</a>
  <a href="ListEmployee_Dept.php">Employee List</a>
  <a href="replaceh.php">Replace History</a>
  <a class="active" href="request.php">Warehouse Request</a>

    


  <div class="social_media">          
    <a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a>        
  </div>
</div>
<div class="row">
  <div class="content">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Product list</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                     <th>ID</th>
                     <th>PRODUCT CODE</th>
                     <th>PRODUCT NAME</th>
                     <th>CATEGORY</th>
                     <th>DESCRIPTION</th>
                     <th>QUANTITY</th>
                     <th>PRICE</th>
                     <th>SUPPLIER</th>
                   
                     <th>Action</th>
                   </tr>
               </thead>
          <tbody>
            
          <?php
$select_products = $conn->prepare("SELECT * FROM `product`");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){ 
?>

                          <tr>
                          <td><?= $fetch_product['id']; ?></td>
                          <td><?= $fetch_product['productcode']; ?></td>
                          <td><?= $fetch_product['productname']; ?></td>
                          <td><?= $fetch_product['category']; ?></td>
                          <td><?= $fetch_product['description']; ?></td>
                          <td><?= $fetch_product['qty']; ?></td>
                          <td><?= $fetch_product['price']; ?></td>
                          <td><?= $fetch_product['supplier']; ?></td>
                         
         <td text-align="right"> <div class="btn-group">
         <a type="button" class="btn btn-primary bg-gradient-primary" href="pro_searchfrm.php?action=edit&id=<?php echo $fetch_product['id']; ?>"><i class="fas fa-fw fa-list-alt"></i> Details</a>
         <div class="btn-group">
                          <a type="button" class="btn btn-primary bg-gradient-primary dropdown no-arrow" data-toggle="dropdown" style="color:white;">
                          ... <span class="caret"></span></a>
                        <ul class="dropdown-menu text-center" role="menu">
                            <li>
                            <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="pro_edit.php?action=edit&id=<?php echo $fetch_product['id']; ?>"><i class="fas fa-fw fa-edit"></i> GET
                              </a>
                            </li>
                        </ul>              
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

                 
   </div>  
  </div>
</div>
</div>
  </body>
</html>

