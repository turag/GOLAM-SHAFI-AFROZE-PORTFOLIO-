<?php
include 'include/head.php';
?>
    <div id="content-wrapper">
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
                   <h1><?php echo strtoupper('TEAM')?></h1>
                   <hr>
               </div>
               <div class="col-md-4">
                   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" class="form-group">
                       <label for="tname">Name</label>

                       <input id="tname" type="text" name="tname" required class="form-control">
                       <br>
                       <label for="designation">Designation</label>

                       <input id="designation" type="text" name="designation" required class="form-control">
                       <br>
                       <label for="img">Image</label>

                       <input id="img" type="file" name="img" required class="form-control">
                       <br>

                       <label for="fb">Facebook(User Name/ID)</label>

                       http://facebok.com/<input id="fb" type="text" name="fb" required class="form-control">
                       <br>

                       <label for="tw">Twitter(User Name/ID)</label>

                       http://twitter.com/<input id="tw" type="text" name="tw" required class="form-control">
                       <br>

                       <label for="li">Twitter(User Name/ID)</label>

                       http://www.linkedin.com/in/<input id="li" type="text" name="li" required class="form-control">
                       <br>

                       <button name="team" class="btn btn-dark">Add Member</button>
                       <br>
                       <br>

                   </form>
               </div>
               <div class="col-md-12">

                   <table class="table table-striped">
                       <thead class="thead-dark">
                           <tr >
                               <th>Service Title </th>
                               <th>Image</th>
                               <th>Facebook</th>
                               <th>Twitter</th>
                               <th>Linkedin</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <?php

                       $sql = "SELECT * FROM b_team";
                       $a_data = mysqli_query($con,$sql);
                       while($row = mysqli_fetch_assoc($a_data)) {
                           ?>
                           <tr class="">
                               <td> <?php echo $row['nm'];?></td>
                               <td><img src="../image/<?php echo $row['img'];?>" alt="" width="150" height="150" > </td>
                               <td><a href="http://facebook.com/<?php echo $row['fb'];?>">http://facebook.com/<?php echo $row['fb'];?></a></td>
                               <td><a href="http://twitter.com/<?php echo $row['twitter'];?>">http://twitter.com/<?php echo $row['twitter'];?></a></td>
                               <td><a href="http://www.linkedin.com/in/<?php echo $row['linkedin'];?>">http://www.linkedin.com/in/<?php echo $row['linkedin'];?></a></td>

                               <td><a href="?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                           </tr>
                           <?php
                       }
                       ?>
                   </table>
               </div>
           </div>
        </div>

    </div>

<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $getquery = "select * from b_team where id='$id'";
    $getImg = mysqli_query($con,$getquery);
    if ($getImg) {
        while ($imgdata = mysqli_fetch_assoc($getImg)) {
            $delimg = $imgdata['img'];
            unlink('../image/'.$delimg);
        }
    }
    $query = "delete from b_team where id='$id'";
    $delImage = mysqli_query($con,$query);
    if ($delImage) {
        echo "<span class='success'>Image Deleted Successfully
            
     </span>";
    }else {
        echo "<span class='error'>Image Not Deleted !</span>";
    }
}
if(isset($_POST['team'])){
    $tname= $_POST['tname'];
    $designation = $_POST['designation'];
    $fb = $_POST['fb'];
    $tw = $_POST['tw'];
    $li = $_POST['li'];
    $permited  = array('jpg', 'jpeg', 'png');
    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $file_temp = $_FILES['img']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "../image/".$unique_image;
    if (empty($file_name)) {
        echo "<span class='error'>Please Select any Image !</span>";
    }elseif ($file_size >2048567) {
        echo "<span class='error'>Image Size should be less then 2MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
        echo "<span class='error'>You can upload only:-"
            .implode(',', $permited)."</span>";
    } else{
        move_uploaded_file($file_temp, $uploaded_image);
        $query = "INSERT INTO b_team SET img='$unique_image', nm='$tname', designation='$designation', fb='$fb', twitter='$tw', linkedin='$li'";
        $inserted_rows = mysqli_query($con, $query);
        if ($inserted_rows) {
            echo "<span class='success'>Image Inserted Successfully.
     </span>";
        }else {
            echo "<span class='error'>Image Not Inserted !</span>";
        }
    }
}

?>

<?php
include 'include/footer.php';
?>