<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 about-head">
                <h2>OUR TEAM</h2>
                <h3>BEST TEAM RIGHT NOW</h3>
            </div>
        </div>
        <div class="row apt">
           <?php
            $sql = "SELECT * FROM b_team";
            $a_data = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($a_data)){
                $team ='<div class="col-lg-3 col-sm-6">
                            <div class="team-item" style="margin-bottom: 30px">
                                <div class="team-overlay text-center">
                                    <div class="overlay-text">
                                        <h3>'. $row["nm"] .'</h3>
                                        <p>'. $row["designation"] .'</p>
                                    </div>
                                    <div class="t-icon">
                                        <a href="http://www.facebook.com/'. $row["fb"] .'"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="http://twitter.com/'. $row["twitter"] .'"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="http://www.linkedin.com/in/'. $row["linkedin"] .'"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <img src="image/'. $row["img"] .'" alt="team-img" class="img-fluid w-100">
                            </div>
                        </div>';
                echo $team;
            }
            ?>
        </div>

    </div>
</section>