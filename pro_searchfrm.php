
     <?php
     $conn = mysqli_connect("sql985.main-hosting.eu", "u839345553_sbit3g", "sbit3gQCU", "u839345553_SBIT3G");

     // check if connection was successful
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }
 
     // execute a SELECT statement to retrieve data from the table

     $id = $_GET['id'];
     $sql = "SELECT * FROM item_list WHERE item_list.id = '$id'";
     $result = mysqli_query($conn, $sql);
      // check if SELECT statement was successful
     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while ($row = mysqli_fetch_assoc($result)) {
          
             $id = $row['id'];
             $pname = $row['name'];
             $pdesc = $row['description'];
             $cat = $row['category'];
             $price = $row['price'];
             $supp = $row['supplier'];
             $date = $row['date_created'];
             
             
         }
     } else {
         echo "0 results";
     }
     


?>
          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Product's Detail</h4>
            </div>
            <a href="request.php" type="button" class="btn btn-primary bg-gradient-primary btn-block"> <i class="fas fa-flip-horizontal fa-fw fa-share"></i> Back </a>
            <div class="card-body">
          

                
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                          ID<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          :  <?php echo $id; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                      <h5>
                          PRODUCT NAME<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          :  <?php echo $pname; ?> <br> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                      <h5>
                          DESCRIPTION<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          :  <?php echo $pdesc; ?> <br> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                      <h5>
                          CATEGORY<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          :  <?php echo $cat; ?> <br> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                          PRICE<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $price; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                           SUPPLIER<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $supp; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3 text-primary">
                        <h5>
                           DATE<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $date; ?> <br>
                        </h5>
                      </div>
                    </div>
                    


                      </div>
                    </div>

          </div>
          </div>

