

<section id="about">
    <div class="backtotop">
        <a href="#banner"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    </div>
    <div class="container"><br/>
        <div class="row">
            <div class="col-lg-12 about-head">
                <h2>ABOUT US</h2>
                <h3>KNOW ABOUT OUR COMPANY</h3>
            </div>
        </div>
<?php
include 'includes/db/db.php';
$sql = "SELECT * FROM b_about";
$a_data = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($a_data)){
        $_about = '<div class="row apt">
            <div class="col-lg-5 col-sm-8 m-sm-auto">
                <div class="about-img">
                    <img src="image/'.$row["img"].'" alt="about-img" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 about-text">
                <h2>Our company name is Busco</h2>
                <span>From United State, America</span>
                <div class="about-p">
                    <p>'.$row["details"].'</p>
                </div>
                <div class="row counter-main">
                    <div class="counter-1 col-lg-3 col-sm-6 col-md-3">
                        <div class="chart" data-percent="'.$row["project"].'">
                        </div>
                        <h3>'.$row["project"].'%</h3>
                        <h4>Projects</h4>
                    </div>
                    <div class="counter-1 col-lg-3  col-sm-6 col-md-3">
                        <div class="chart" data-percent="'.$row["satisfaction"].'">
                        </div>
                        <h3>'.$row["satisfaction"].'%</h3>
                        <h4>Satisfaction</h4>
                    </div>
                    <div class="counter-1 col-lg-3 col-sm-6 col-md-3">
                        <div class="chart" data-percent="'.$row["rating"].'">
                        </div>
                        <h3>'.$row["rating"].'%</h3>
                        <h4>Rating</h4>
                    </div>
                    <div class="counter-1 col-lg-3 col-sm-6 col-md-3">
                        <div class="chart" data-percent="'.$row["skills"].'">
                        </div>
                        <h3>'.$row["skills"].'%</h3>
                        <h4>New Skills</h4>
                    </div>
                </div>
            </div>
        </div>';

    }
echo $_about;
?>

        
    </div>
</section>

