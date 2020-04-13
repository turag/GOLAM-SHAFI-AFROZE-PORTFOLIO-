<?php
include 'include/head.php';
?>
    <div id="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo strtoupper('SERVICES')?></h1>
                    <hr>
                </div>
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-group">
                <?php

                $sql = "SELECT * FROM b_our_serv";
                $a_data = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($a_data)) {
                    ?>
                    <label for="">Details About Us</label>

                <br>
                <textarea name="sdetails" id="" cols="30" rows="10" class="form-control"><?php echo $row['s_text'];?></textarea>
                <br>
                    <button name="sserv" class="btn btn-dark"> Update</button>
                    <br>
                    <br>
                    <br>
                    <?php
                }
                ?>
                <label for="">Service Title</label>
                <br>
                <input type="text" name="title" placeholder="Title"required class="form-control">
                <br>
                <label for="">Icon Class From FontAwesome</label>
                <br>
                <input type="text" name="icon" placeholder="Icon" required class="form-control">
                <br>
                <textarea name="details" id="" cols="30" rows="10" placeholder="text" required class="form-control"> </textarea>
                <br>
                <button name="serv" class="btn btn-dark"> Add Service</button>
                <br>
                <br>


            </form>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Service Title </th>
                        <th>Icon</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php

                $sql = "SELECT * FROM b_serv";
                $a_data = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($a_data)) {
                    ?>
                    <tr class="">
                        <td> <?php echo $row['title']?></td>
                        <td><i class="<?php echo $row['icon']?>" aria-hidden="true"></i>
                            </td>
                        <td><?php echo $row['details']?></td>
                        <td><a href="?del=<?php echo $row['id']; ?>"  class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>

    </div>
<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM b_serv WHERE id='$id'";
    $del = mysqli_query($con,$sql);
    if ($del) {
        echo "<span class='success'>Deleted Successfully
            
     </span>";
    }else {
        echo "<span class='error'>Not Deleted !</span>";
    }
}
?>
<?php
if (isset($_POST['serv'])) {
    $title= $_POST['title'];
    $details= $_POST['details'];
    $icon= $_POST['icon'];
    $sdetails= $_POST['sdetails'];
    $sql = "UPDATE b_our_serv SET s_text='$sdetails' WHERE id=1";
    $ups = mysqli_query($con,$sql);
    $sql1 = "INSERT INTO b_serv SET  title = '$title', details = '$details', icon = '$icon'";
    $ins = mysqli_query($con,$sql1);
    if ($ins) {
        echo "<span class='success'>Successfully
            
     </span>";
    }else {
        echo "<span class='error'>Not Successfully!</span>";
    }
}
?>
<?php
if (isset($_POST['sserv'])) {

    $sdetails= $_POST['sdetails'];
    $sql = "UPDATE b_our_serv SET s_text='$sdetails' WHERE id=1";
    $ups = mysqli_query($con,$sql);
    if ($ups) {
        echo "<span class='success'>Successfully
            
     </span>";
    }else {
        echo "<span class='error'>Not Successfully!</span>";
    }
}
?>
<?php
include 'include/footer.php';
?>