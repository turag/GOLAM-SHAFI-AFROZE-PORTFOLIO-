<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 about-head">
                <h2>OUR TESTIMONIAL</h2>
                <h3>LOOK WHAT PEOPLE SAYS</h3>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="news-main">
                    <?php 
$sql = "SELECT * FROM b_testimonial";
$a_data = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($a_data)){
        $newDate = date("d M, Y", strtotime($row['cdate']));
        $testimonial = '<div class="col-lg-6 col-md-6">
                        <div class="news-item-main">
                            <div class="news-items">
                                <div class="testimonial-text">
                                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>'.$row["comment"].'</p>
                                </div>
                                <div class="testimonial-img">
                                    <div class="user-img">
                                        <img src="image/'.$row["img"].'"  width="90px" height="90px" alt="user-img">
                                    </div>
                                    <div class="testimonial-img-text">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <h4>'.$row["nm"].'</h4>
                                        <span>'.$newDate.'</span>
                                    </div>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                    </div>';
        echo $testimonial;
    }
                    
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>