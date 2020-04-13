<?php
include 'lib/config.php';
include 'lib/Database.php';

$db = new Database();
include 'include/head.php';

?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo strtoupper('MAIN SLIDER')?></h1>
                <hr>
            </div>
        </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $permited  = array('jpg', 'jpeg', 'png');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "../image/".$unique_image;
        $title = $_POST['title'];
        $details =addslashes($_POST['details']) ;
        // $details = $_POST['details'];
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
            $query = "INSERT INTO b_header(images, heading, subtitle) VALUES('$uploaded_image', ' $title', '$details')";
            $inserted_rows = $db->insert($query);

            if ($inserted_rows) {
                echo "<span class='success'>Image Inserted Successfully.
     </span>";
            }else {
                echo "<span class='error'>Image Not Inserted !</span>";
            }
        }
    }
    ?>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" class="form-group">

                    <label for="img">Select Image</label>
                    <input class="form-control form-control-file" type="file" name="image" required class="" id="img"/>

                     <label for="ttl">Title</label>
                    <input class="form-control" type="text" name="title" required id="ttl"/>

                    <label for="dtls">Details</label>
                    <textarea class="form-control"  name="details" id="" cols="30" rows="10" required id="dtls"></textarea>

                       <br>
                    <input type="submit" name="submit" value="Upload" class="btn btn-dark"/>

        </form>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Serial No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    $query = "select * from b_header";
    $getImage = $db->select($query);

    if ($getImage) {
        $i=0;
        while ($result = $getImage->fetch_assoc()) {
        $i++;
        ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td><img src="../image/<?php echo $result['images']; ?>" height="40px"
                     width="50px"/></td>
            <td><?php echo $result['heading'];?></td>
            <td><?php echo $result['subtitle'];?></td>

            <td><a href="?del=<?php echo $result['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>

        <?php } } ?>
        </table>
    <?php
    if (isset($_GET['del'])) {
        $id = $_GET['del'];

        $getquery = "select * from b_header where id='$id'";
        $getImg = $db->select($getquery);
        if ($getImg) {
            while ($imgdata = $getImg->fetch_assoc()) {
                $delimg = $imgdata['images'];
                unlink('../image/'.$delimg);
            }
        }
        $query = "delete from b_header where id='$id'";
        $delImage = $db->delete($query);
        if ($delImage) {
            echo "<span class='success'>Image Deleted Successfully
            
     </span>";
        }else {
            echo "<span class='error'>Image Not Deleted !</span>";
        }
    }
    ?>
</div>
</div>

<?php
include 'include/footer.php';
?>


