<?php

$conn = mysqli_connect("sql985.main-hosting.eu", "u839345553_sbit3g", "sbit3gQCU", "u839345553_SBIT3G");

// check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$id = $_GET['id'];
     $sql = "SELECT * FROM product_sale WHERE product_sale.id = '$id' ";
     $result = mysqli_query($conn, $sql);

     
        
      // check if SELECT statement was successful
     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while ($row = mysqli_fetch_assoc($result)) {
          
          
          $id = $row['id'];
          $pcode = $row['productcode'];
          $pname = $row['productname'];
          $cat = $row['category'];
          $qty = $row['qty'];
          $pdesc = $row['description'];
          $price = $row['price'];
          $supp = $row['supplier'];
        
         


                     
         }
     } else {
         echo "0 results";
     }
?>

  <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">ADD PRODUCT</h4>
            </div>
            <a href="stock.php?action=add" type="button" class="btn btn-primary bg-gradient-primary">Back</a>
            <div class="card-body">

            <form role="form" method="post" action="reqpro_edit1.php">
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 PRODUCT ID:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Product Code" name="pro_id" value="<?php echo $id; ?>" requrired>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 PRODUCT CODE:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Product Code" name="productcode" value="<?php echo $pcode; ?>" requrired>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 PRODUCT NAME:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Product Name" name="productname" value="<?php echo $pname; ?>" requrired>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 CATEGORY:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Category" name="category" value="<?php echo $cat; ?>" requrired>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 QUANTITY:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Category" name="qty" value="<?php echo $qty; ?>" requrired>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 DESCRIPTION:
                </div>
                <div class="col-sm-9">
                   <input class="form-control" placeholder="Description" name="description" value="<?php echo $pdesc; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 PRICE:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Price" name="price" value="<?php echo $price; ?>" requrired>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 SUPPLIER:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Supplier" name="supplier" value="<?php echo $supp; ?>" requrired>
                </div>
              </div>  
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 STATUS:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Supplier" name="status" value="Pending" requrired>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Purpose:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Supplier" name="purpose" value="GET" requrired>
                </div>
              </div>
                

                <button type="submit" name="insert" class="btn btn-warning btn-block"><i class="fa fa-edit fa-fw"></i>RESTOCK</button>    
              </form>  
            </div>
          </div></center>