<?php
include 'include/head.php';
?>
    <div id="content-wrapper">
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
                   <h1><?php echo strtoupper('OUR PLAN')?></h1>
                   <hr>

               </div>
               <div class="col-md-4">
                   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-group">
                       <?php

                       $sql = "SELECT * FROM b_price";
                       $a_data = mysqli_query($con,$sql);
                       while($row = mysqli_fetch_assoc($a_data)) {
                           if ($row["title"] == 'freelance') {
                               ?>
                               <h5><?php echo strtoupper($row["title"])?></h5>
                               <hr>
                               <label for="fprice">price</label>
                               <br>
                               <input id="fprice" type="number" name="fprice" value="<?php echo $row['price']?>" class="form-control">
                               <br>
                               <label for="ftag1">Tag 1</label>
                               <br>
                               <input id="ftag1" type="text" name="ftag1" value="<?php echo $row['tag_1']?>" class="form-control">
                               <br>
                               <label for="ftag2">Tag 2</label>
                               <br>
                               <input id="ftag2" type="text" name="ftag2" value="<?php echo $row['tag_2']?>" class="form-control">
                               <br>
                               <label for="ftag3">Tag 3</label>
                               <br>
                               <input id="ftag3" type="text" name="ftag3" value="<?php echo $row['tag_3']?>" class="form-control">
                               <br>
                               <button name="freelance" class="btn btn-dark">Update</button>
                               <br>
                               <br>
                               <?php
                           } else if ($row["title"] == 'business') {
                               ?>
                               <h5><?php echo strtoupper($row["title"])?></h5>
                               <hr>
                               <label for="bprice">price</label>
                               <br>
                               <input id="bprice" type="number" name="bprice" value="<?php echo $row['price']?>" class="form-control">
                               <br>
                               <label for="btag1">Tag 1</label>
                               <br>
                               <input id="btag1" type="text" name="btag1" value="<?php echo $row['tag_1']?>" class="form-control">
                               <br>
                               <label for="btag2">Tag 2</label>
                               <br>
                               <input id="btag2" type="text" name="btag2" value="<?php echo $row['tag_2']?>" class="form-control">
                               <br>
                               <label for="btag3">Tag 3</label>
                               <br>
                               <input id="btag3" type="text" name="btag3" value="<?php echo $row['tag_3']?>" class="form-control">
                               <br>
                               <button name="business" class="btn btn-dark">Update</button>
                               <br>
                               <br>
                               <?php
                           } else if ($row["title"] == 'enterprise') {
                               ?>
                               <h5><?php echo strtoupper($row["title"])?></h5>
                               <hr>
                               <label for="eprice">price</label>
                               <br>
                               <input id="eprice" type="number" name="eprice" value="<?php echo $row['price']?>" class="form-control">
                               <br>
                               <label for="etag1">Tag 1</label>
                               <br>
                               <input id="etag1" type="text" name="etag1" value="<?php echo $row['tag_1']?>" class="form-control">
                               <br>
                               <label for="etag2">Tag 2</label>
                               <br>
                               <input id="etag2" type="text" name="etag2" value="<?php echo $row['tag_2']?>" class="form-control">
                               <br>
                               <label for="etag3">Tag 3</label>
                               <br>
                               <input id="etag3" type="text" name="etag3" value="<?php echo $row['tag_3']?>" class="form-control">
                               <br>
                               <button name="enterprise" class="btn btn-dark">Update</button>
                               <br>
                               <br>
                               <?php
                           }
                       }
                       ?>
                   </form>
                   <?php
                   if(isset($_POST['freelance'])){
                       $freelance_price = $_POST['fprice'];
                       $freelance_tag1 = $_POST['ftag1'];
                       $freelance_tag2 = $_POST['ftag2'];
                       $freelance_tag3 = $_POST['ftag3'];
                       $freelance_sql ="UPDATE b_price SET price='$freelance_price', tag_1 = '$freelance_tag1', tag_2 = '$freelance_tag2', tag_3 = '$freelance_tag3' WHERE id=1";
                       $freelance = mysqli_query($con, $freelance_sql);
                       if($freelance){
                           echo 'Updated';
                       }
                       else{
                           echo 'error';
                       }
                   }
                   if(isset($_POST['business'])){
                       $business_price = $_POST['bprice'];
                       $business_tag1 = $_POST['btag1'];
                       $business_tag2 = $_POST['btag2'];
                       $business_tag3 = $_POST['btag3'];
                       $business_sql ="UPDATE b_price SET price='$business_price', tag_1 = '$business_tag1', tag_2 = '$business_tag2', tag_3 = '$business_tag2' WHERE id=2";
                       $business = mysqli_query($con, $business_sql);
                       if($business){
                           echo 'Updated';
                       }
                       else{
                           echo 'error';
                       }
                   }
                   if(isset($_POST['enterprise'])){
                       $enterprise_price = $_POST['eprice'];
                       $enterprise_tag1 = $_POST['etag1'];
                       $enterprise_tag2 = $_POST['etag2'];
                       $enterprise_tag3 = $_POST['etag3'];
                       $enterprise_sql ="UPDATE b_price SET price='$enterprise_price', tag_1 = '$enterprise_tag1', tag_2 = '$enterprise_tag2', tag_3 = '$enterprise_tag3' WHERE id=3";
                       $enterprise = mysqli_query($con, $enterprise_sql);
                       if($enterprise){
                           echo 'Updated';
                       }
                       else{
                           echo 'error';
                       }
                   }
                   ?>
               </div>
           </div>
        </div>
    </div>


<?php
include 'include/footer.php';
?>