<section id="count">
    <div class="container zindex">
        <div class="row">
           <?php 
            $sql = "SELECT * FROM b_count";
            $a_data = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($a_data)){
                $numb = number_format($row["number"]);
                $count = '<div class="col-lg-3 col-sm-6 text-center">
                            <div class="count-item">
                                <div class="count-icon">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class="count-text">
                                    <h3><span>'. $row["name"] .'</span></h3>
                                    <p class="counter" data-counterup-time="1500" data-counterup-delay="30" data-counterup-beginat="100">'. $numb.'</p>
                                </div>
                            </div>
                        </div>';
                echo $count;
            }
            ?>

        </div>
    </div>
</section>