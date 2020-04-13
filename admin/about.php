<?php

include 'include/head.php';
?>
    <div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php echo strtoupper('ABOUT')?></h1>
                <hr>
            </div>
        </div>
        <?php
        $sql = 'SELECT * FROM b_about WHERE id=1';
        $a_data = mysqli_query($con,$sql);
        while ($row= mysqli_fetch_assoc($a_data)) {
            ?>
           <div class="row">
               <div class="col-md-4">
                   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="myform" enctype="multipart/form-data" class="form-group">
                       <label for="img">Upload About image</label>
                       <br>
                       <img  src="../image/<?php echo $row['img']; ?>" height="80px"
                            width="100px"/>
                       <input id="img" type="file" name="image" required class="form-control"/>
                       <br>
                       <br>
                       <label for="det">Details</label>
                       <textarea name="details" id="det" cols="50" rows="7" class="form-control"><?php echo $row["details"];?></textarea>

                   <label for="prj">Project </label>
                   <input id="prj" type="number" name="project" min="1" max="100" value="<?php echo$row["project"];?>" required class="form-control">
                   <br>
                   <label for="sat">Satisfaction </label>
                   <input id="sat" type="number" name="satisfaction" min="1" max="100" value="<?php echo $row["satisfaction"];?>" required class="form-control">
                   <br>
                   <label for="rat">Rating </label>
                   <input id="rat" type="number" name="rating" min="1" max="100" value="<?php echo $row["rating"];?>" required class="form-control">
                   <br>
                   <label for="ski">Skills </label>
                   <input id="ski" type="number" name="skills" min="1" max="100" value="<?php echo $row["skills"];?>" required class="form-control">
                   <br>

               </div>
               <div class="col-md-12">
                   <input type="submit" value="UPDATE" class="btn btn-dark" name="about">

                   </form>
               </div>
           </div>
            <?php
        }
        ?>
        <?php
        if(isset($_POST["about"]))
        {
            /** @var TYPE_NAME $details */
            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "../image/".$unique_image;
            $details = $_POST['details'];
            $project = $_POST['project'];
            $satisfaction = $_POST['satisfaction'];
            $rating = $_POST['rating'];
            $skills = $_POST['skills'];
            $details = $_POST['details'];
            if (empty($file_name)) {
                echo "<span class='error'>Please Select any Image !</span>";
            }elseif ($file_size >2048567) {
                echo "<span class='error'>Image Size should be less then 2MB!
     </span>";
            } elseif (in_array($file_ext, $permited) === false) {
                echo "<span class='error'>You can upload only:-"
                    .implode(', ', $permited)."</span>";
            } else{
                move_uploaded_file($file_temp, $uploaded_image);
                $sql = "UPDATE b_about SET details = '$details', img ='$unique_image', project = '$project', satisfaction = '$satisfaction',rating = '$rating',skills = '$skills' WHERE id = 1";
                mysqli_query($con, $sql);
                if (mysqli_query($con, $sql)) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . mysqli_error($con);
                }
            }
        }
        ?>
    </div>
    </div>

<?php
include 'include/footer.php';
?>