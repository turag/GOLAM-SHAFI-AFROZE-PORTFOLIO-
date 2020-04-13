<?php
include 'include/head.php';
include 'functions/fun_portfillio.php';
include 'lib/config.php';
include 'lib/Database.php';
$db = new Database();
?>
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo strtoupper('PORTFOLIO')?></h1>
                    <hr>
                </div>
                <div class="col-md-4">

                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" class=" form-group">
                        <label for="topimg">Select Top Image</label>
                        <input type="file" name="file1" required class="form-control form-control-xs input-group-file" id="topimg">
                        <br>
                        <label for="btmimg">Select Bottom Image</label>
                        <input type="file" name="file2" required class="form-control form-control-xs input-group-file" id="btmimg">
                        <br>
                        <br>
                        <button name="portfolio" class="btn btn-dark">Add Portfolio</button>
                    </form>
                    <br>
                </div>
            </div>



            <div class="row">

            <?php

            $sql = "SELECT * FROM b_porfolio";
            $a_data = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($a_data)){


                ?>
                <div class="col-md-3">
                    <a href="?del=<?php echo $row['id']; ?>" style="display: block; margin-bottom: -40px; margin-left: 20px;"><i class="fa fa-trash" aria-hidden="true" style="color: black; font-size: 18px;"></i></a>
                    <div class="jumbotron">
                        <img class="txt-centre" src="../image/<?php echo $row["topimg_2"]?>" alt="port1" class="img-fluid" width="100px" height="80px">
                        <img src="../image/<?php echo $row["btmimg_2"]?>" alt="port2" class="img-fluid" width="100px" height="80px">

                    </div>

                </div>


            <?php }?>

            <?php
                if(isset($_POST["portfolio"])){
                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                    /*file 1*/
                    $fileName1 = $_FILES["file1"]["name"];
                    $fileTmpLoc1 = $_FILES["file1"]["tmp_name"];
                    $fileType1 = $_FILES["file1"]["type"];
                    $fileSize1 = $_FILES["file1"]["size"];
                    $fileErrorMsg1 = $_FILES["file1"]["error"];
                    $kaboom1 = explode(".", $fileName1);
                    $fileExt1 = strtolower(end($kaboom1));
                    $unique_image1 = substr(md5(time()), 0, 10).'.'.$fileExt1;
                    $uploaded_image1 = "../image/".$unique_image1;

                    /*file 2*/
                    $fileName2 = $_FILES["file2"]["name"];
                    $fileTmpLoc2 = $_FILES["file2"]["tmp_name"];
                    $fileType2 = $_FILES["file2"]["type"];
                    $fileSize2 = $_FILES["file2"]["size"];
                    $fileErrorMsg2 = $_FILES["file2"]["error"];
                    $kaboom2 = explode(".", $fileName2);
                    $fileExt2 =strtolower(end($kaboom2));
                    $unique_image2 = substr(md5(time()), 0, 10).'.'.$fileExt2;
                    $uploaded_image2 = "../image/".$unique_image2;
                    if (empty($fileName1)) {
                        echo "<span class='error'>Please Select any Image For 1!</span>";
                    }elseif ($fileSize1 >5242880) {
                        echo "<span class='error'>Image Size should be less then 5MB!
     </span>";
                    } elseif (in_array($fileExt1, $permited) === false) {
                        echo "<span class='error'>You can upload only:-"
                            .implode(', ', $permited)."</span>";
                    } else{
                        move_uploaded_file($fileTmpLoc1, $uploaded_image1);
                        $target_file1 = $uploaded_image1;
                        $resized_file1 = "../image/resized_$unique_image1";
                        resize($target_file1, $resized_file1, 350, 350, $fileExt1);
// ----------- End Adams Universal Image Resizing Function ----------
// ------ Start Adams Universal Image Thumbnail(Crop) Function ------
                        $target_file_thumb1= "../image/resized_$unique_image1";
                        $thumb1 = 'thumb1_'.$unique_image1;
                        $thumbnail1 = "../image/$thumb1";
                        thumb($target_file_thumb1, $thumbnail1, 270, 300, $fileExt1);


                        move_uploaded_file($fileTmpLoc2, $uploaded_image2);
                        $target_file2 = $uploaded_image2;
                        $resized_file2 = "../image/resized_$unique_image2";
                        resize($target_file2, $resized_file2, 350, 350, $fileExt2);
// ----------- End Adams Universal Image Resizing Function ----------
// ------ Start Adams Universal Image Thumbnail(Crop) Function ------
                        $target_file_thumb2= "../image/resized_$unique_image2";
                        $thumb2 = 'thumb2_'.$unique_image2;
                        $thumbnail2 = "../image/$thumb2";
                        thumb($target_file_thumb2, $thumbnail2, 270, 300, $fileExt2);


                    }

                    $sql = "INSERT INTO b_porfolio SET topimg_1 ='$unique_image1', topimg_2 = '$thumb1', btmimg_1= '$unique_image2', btmimg_2='$thumb2'";
                    mysqli_query($con, $sql);

                    
                }
            ?>
        </div>
        </div>
    </div>
<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $getquery = "select * from b_porfolio where id='$id'";
    $getImg = $db->select($getquery);
    if ($getImg) {
        while ($imgdata = $getImg->fetch_assoc()) {
            $topimg_1 = $imgdata['topimg_1'];
            $topimg_2 = $imgdata['topimg_2'];
            $btmimg_1 = $imgdata['btmimg_1'];
            $btmimg_2 = $imgdata['btmimg_2'];
            unlink('../image/'.$topimg_1);
            unlink('../image/'.$topimg_2);
            unlink('../image/resized_'.$topimg_1);
            unlink('../image/'.$btmimg_1);
            unlink('../image/'.$btmimg_2);
            unlink('../image/resized_'.$btmimg_1);

        }
    }
    $query = "delete from b_porfolio where id='$id'";
    $delImage = $db->delete($query);
    if ($delImage) {
        echo "<span class='success'>Image Deleted Successfully
            
     </span>";
    }else {
        echo "<span class='error'>Image Not Deleted !</span>";
    }
}
?>

<?php
include 'include/footer.php';
?>