<section id="service">
    <div class="container">
        <div class="row">
           <div class="col-lg-12">
           <div class="row">
            <div class="col-lg-12 service-p">
                <div class="about-head">
                    <h2>OUR SERVICE</h2>
                    <h3>CHECKOUT OUR SERVICE</h3>
                </div>
                <div class="service-details">
                    <p>
                    <?php 
                        $sql = "SELECT * FROM b_our_serv";
                        $a_data = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($a_data)){
                            echo $row["s_text"];
                        }

                    ?>
                    </p>

                </div>
            </div>
            <?php 
                $sql = "SELECT * FROM b_serv";
                $a_data = mysqli_query($con, $sql);
                $n_row= mysqli_num_rows($a_data);

                    $i = 1;
                    while($row = mysqli_fetch_assoc($a_data)){

                            $itm1='<div class="col-lg-4 col-sm-6">
                                    <div class="service-item1 '.'service-item'.$i++.'">
                                        <div class="service-icon">
                                            <i class="'.$row["icon"].'" aria-hidden="true"></i>
                                        </div>
                                        <h3><span>'.$row["title"].'</span></h3>
                                        <p>'.$row["details"].'</p>
                                    </div></div>';

                            echo $itm1;

                    }
                    ?>
          
                    
               <div class="col-lg-12 text-center">
               <br>
               <br>
   
               <a href="#contact" class="startWorkNow">Start Working Now</a></div>
          </div>
        </div>
        </div>
    </div>
</section>