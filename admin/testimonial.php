<?php
include 'include/head.php';
$date = date("Y-m-d");



?>
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <h1><?php echo strtoupper('Testimonial')?></h1>
                <hr>
                <?php
                if(isset($_POST['testi'])){
                    $permited = array('jpg', 'jpeg', 'png');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
                    $uploaded_image = "../image/" . $unique_image;
                    $name = $_POST['name'];
                    $cdate = $_POST['date'];
                    $comment = $_POST['comment'];
                    if (empty($file_name)) {
                        echo "<span class='error'>Please Select any Image !</span>";
                    } elseif ($file_size > 2048567) {
                        echo "<span class='error'>Image Size should be less then 2MB! </span>";
                    } elseif (in_array($file_ext, $permited) === false) {
                        echo "<span class='error'>You can upload only:-"
                            . implode(',', $permited) . "</span>";
                    } else {
                        move_uploaded_file($file_temp, $uploaded_image);
                        $query = "INSERT INTO b_testimonial(img, nm, comment, cdate ) VALUES('$unique_image', ' $name', '$comment', '$cdate')";
                        $inserted_rows = mysqli_query($con, $query);

                        if ($inserted_rows) {
                            echo "<span class='success'>Image Inserted Successfully.</span>";
                        } else {
                            echo "<span class='error'>Image Not Inserted !</span>";
                        }
                    }

                }
              ?>
              <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" class="form-group">

                  <br>
                  <label for="name">Name</label>
                  <br>
                  <input id="name" name ="name" type="text" class="form-control" required>
                  <br>
                  <label for="img">Image</label>
                  <br>
                  <input id="img" name="image" type="file" class="form-control" required>
                  <br>
                  <label for="cmnt">Comment</label>
                  <br>
                  <input type="hidden" name="date" value="<?php echo $date;?>" class="form-control">
                  <textarea  name="comment" id="cmnt" cols="30" rows="10" class="form-control" required></textarea>
                  <br>
                  <button name="testi" class="btn btn-dark"> ADD</button>
                  <br>
              </form>
              <br>
              <table class="table table-striped">
                  <thead class="thead-dark">
                  <tr>
                      <th>Serial No</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Comment</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <?php
                  $query = "select * from b_testimonial";
                  $getImage = mysqli_query($con, $query);

                  if ($getImage) {
                      $i=0;
                      while ($result = $getImage->fetch_assoc()) {
                          $i++;
                          ?>

                          <tr>
                              <td><?php echo $i; ?></td>
                              <td><img src="../image/<?php echo $result['img']; ?>" height="40px"
                                       width="50px"/></td>
                              <td><?php echo $result['nm'];?></td>
                              <td><?php echo $result['comment'];?></td>
                              <td><a href="?del=<?php echo $result['id']; ?>" class="btn btn-danger">Delete</a></td>
                          </tr>

                      <?php } } ?>
                  <?php
                  if (isset($_GET['del'])) {
                      $id = $_GET['del'];

                      $getquery = "select * from b_testimonial where id='$id'";
                      $getImg =mysqli_query($con, $getquery);
                      if ($getImg) {
                          while ($imgdata = mysqli_fetch_assoc($getImg)) {
                              $delimg = $imgdata['img'];
                              unlink('../image/'.$delimg);
                          }
                      }
                      $query = "delete from b_testimonial where id='$id'";
                      $delImage = mysqli_query($con, $query);
                      if ($delImage) {
                          echo "<span class='success'>Image Deleted Successfully
                    
             </span>";
                      }else {
                          echo "<span class='error'>Image Not Deleted !</span>";
                      }
                  }
                  ?>
              </table>
          </div>
      </div>
    </div>
</div>

<?php
include 'include/footer.php';
?>
