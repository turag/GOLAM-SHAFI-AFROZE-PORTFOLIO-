<?php
include 'include/head.php';
?>
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo strtoupper('CONTACT')?></h1>
                    <hr>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-group">
                        <label for="youtube"> Input Your Youtube Link</label>
                        <input id="youtube" type="text" name="youtube" class="form-control">
                        <br>
                        <button class="btn btn-dark" name="contact">Update Video Link</button>
                    </form>
                    <br>
                    <?php
                    if(isset($_POST["contact"])){
                        $link = $_POST["youtube"];
                        $sql = "UPDATE b_contact SET link ='$link' WHERE id='1'";
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


<?php
include 'include/footer.php';
?>