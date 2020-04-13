<?php
include 'include/head.php';
?>
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo strtoupper('COUNT')?></h1>
                    <hr>
                </div>
                <div class="col-md-4">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form-group">
                        <?php

                        $sql = "SELECT * FROM b_count";
                        $a_data = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($a_data)) {
                            if ($row["id"] == 1) {
                                ?>
                                <label for="wdone"> Work Done</label>
                                <br>
                                <input id="wdone" type="number" name="wdone" value="<?php echo $row['number'];?>" class="form-control">
                                <br>
                                <button name="done" class="btn btn-dark">Update</button>
                                <br>
                                <br>
                                <?php
                            } else if ($row["id"] == 2) {
                                ?>
                                <label for="hclient"> Happy Client
                                </label>
                                <br>
                                <input id="hclient" type="number" name="hclient" value="<?php echo $row['number'];?>" class="form-control">
                                <br>
                                <button name="client" name="done" class="btn btn-dark">Update</button>
                                <br>
                                <br>
                                <?php
                            } else if ($row["id"] == 3) {
                                ?>
                                <label for="ctaken">Coffee Taken
                                </label>
                                <br>
                                <input id="ctaken" type="number" name="ctaken" value="<?php echo $row['number'];?>" class="form-control">
                                <br>
                                <button name="taken" name="done" class="btn btn-dark">Update</button>
                                <br>
                                <br>
                                <?php
                            }
                            else if ($row["id"] == 4) {
                                ?>
                                <label for="gaward"> Got Award
                                </label>
                                <br>
                                <input id="gaward" type="number" name="gaward" value="<?php echo $row['number'];?>" class="form-control">
                                <br>
                                <button name="award" name="done" class="btn btn-dark">Update</button>
                                <br>
                                <?php
                            }
                            ?>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
            <?php
            if (isset($_POST['done'])){
                $wdone=$_POST['wdone'];
                $done_sql = "UPDATE b_count SET number='$wdone' WHERE id=1";
                $done = mysqli_query($con, $done_sql);
                if($done){
                    echo 'Updated';
                }
                else{
                    echo 'error';
                }
            }
            if (isset($_POST['client'])){
                $hclient=$_POST['hclient'];
                $client_sql = "UPDATE b_count SET number='$hclient' WHERE id=2";
                $client = mysqli_query($con, $client_sql);
                if($client){
                    echo 'Updated';
                }
                else{
                    echo 'error';
                }
            }
            if (isset($_POST['taken'])){
                $ctaken=$_POST['ctaken'];
                $taken_sql = "UPDATE b_count SET number='$ctaken' WHERE id=3";
                $taken = mysqli_query($con, $taken_sql);
                if($taken){
                    echo 'Updated';
                }
                else{
                    echo 'error';
                }
            }
            if (isset($_POST['award'])){
                $gaward=$_POST['gaward'];
                $award_sql = "UPDATE b_count SET number='$gaward' WHERE id=4";
                $award = mysqli_query($con, $award_sql);
                if($award){
                    echo 'Updated';
                }
                else{
                    echo 'error';
                }
            }
            ?>
                </div>
            </div>


<?php
include 'include/footer.php';
?>