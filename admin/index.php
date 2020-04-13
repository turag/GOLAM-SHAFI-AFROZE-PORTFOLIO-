<?php

include 'include/head.php';
$name = 'SELECT * FROM b_companyname';
$result = $con->query($name);
?>


    <div id="content-wrapper">
        <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <h1><?php echo strtoupper('Welcome To Dashboard')?></h1>
                      <hr>
                      <form action="<?php $_SERVER['PHP_SELF']?>" method="post" name="myform" class="form-group">

                          <?php
                          while($row = $result->fetch_assoc()) {
                          ?>
                      <label for="cname">Update Your Company name</label>
                      <br>
                      <input id="cname" type="text" name="cname" value="<?php echo strtoupper($row["name"]); }?>" required class="form-control">
                      <br>
                      <input type="submit" value="UPDATE" class="btn btn-dark" name="update">
                          <?php
                          if(isset($_POST["update"]))
                          {
                              $name = $_POST['cname'];
                              $sql = "UPDATE b_companyname SET name = '$name' WHERE id = 1";
                              mysqli_query($con, $sql);
                              if (mysqli_query($con, $sql)) {
                                  echo "Record updated successfully";
                              } else {
                                  echo "Error updating record: " . mysqli_error($con);
                              }
                          }
                          ?>
                  </div>
              </div>

        </div>


    </div>
    </form>

<?php
include 'include/footer.php';
?>