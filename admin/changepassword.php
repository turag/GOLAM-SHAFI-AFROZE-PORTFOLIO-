<?php
include 'include/head.php';
?>
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h5>Change Password</h5>
                <?php
                if (isset($_POST['change'])){
                    $oldp = $_POST['oldp'];
                    $oldp_has = password_hash($oldp, PASSWORD_DEFAULT);
                    $newp1 = $_POST['newp1'];
                    $newp2 = $_POST['newp2'];
                    $id = $_SESSION['id'];
                    if (!password_verify($oldp, $_SESSION['pass'])){
                        echo 'Wrong Old Password';
                    }
                    else{
                        if($newp1 !== $newp2){
                            echo 'New Password & Password Again Not Match';
                        }
                        else{
                            $new_pass = password_hash($newp1, PASSWORD_DEFAULT);
                            $done_sql = "UPDATE b_user SET pass='$new_pass' WHERE id='$id'";
                            $done = mysqli_query($con, $done_sql);
                            if($done){
                                $_SESSION['pass'] = $new_pass;
                                echo 'Password Change';
                            }
                            else{
                                echo 'error';
                            }
                        }
                    }
                }
                ?>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-group">
                    <label for="oldp">Enter Old Password*</label>
                    <input id="oldp" name="oldp" type="password" class="form-control" placeholder="Enter Your Old Password" required>
                    <label for="newp1">Enter New Password*</label>
                    <input id="newp1" name="newp1" type="password" class="form-control" placeholder="Enter Your New Password" required>
                    <label for="newp2">Enter New Password Again*</label>
                    <input id="oldp2" name="newp2" type="password" class="form-control" placeholder="Enter Your New Password Again" required>
                    <br>
                    <button name="change" class="btn btn-dark"> Change Password</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php
include 'include/footer.php';
?>
