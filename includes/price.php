<section id="price">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 about-head">
                <h2>PRICE PLAN</h2>
                <h3>GET THINGS DONE EASILY</h3>
            </div>
        </div>
    </div>
</section>
<section id="price2">
    <div class='pricing pricing-palden'>
       <?php
        
        $sql = "SELECT * FROM b_price";
        $a_data = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($a_data)){
    if ($row["title"] == 'freelance' )
    {
        $freelance ="<div class='pricing-item'>
            <div class='pricing-deco'>
                <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                    <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                    <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                    <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                    <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                </svg>
                <div class='pricing-price'><span class='pricing-currency'>$</span>". $row['price'] ."
                    <span class='pricing-period'>/ mo</span>
                </div>
                <h3 class='pricing-title'>Freelance</h3>
            </div>
            <ul class='pricing-feature-list'>
                <li class='pricing-feature'>". $row['tag_1'] ."</li>
                <li class='pricing-feature'>". $row['tag_2'] ."</li>
                <li class='pricing-feature'>". $row['tag_3'] ."</li>
            </ul>
            <a href='#contact' class='pricing-action'>Order Now</a>
        </div>";
        echo $freelance;
    }
    else if ($row["title"] == 'business')
    {
        $business = "<div class='pricing-item pricing__item--featured'>
            <div class='pricing-deco'>
                <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                    <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                    <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                    <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                    <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                </svg>
                <div class='pricing-price'><span class='pricing-currency'>$</span>". $row['price'] ."
                    <span class='pricing-period'>/ mo</span>
                </div>
                <h3 class='pricing-title'>Business</h3>
            </div>
            <ul class='pricing-feature-list'>
                <li class='pricing-feature'>". $row['tag_1'] ."</li>
                <li class='pricing-feature'>". $row['tag_2'] ."</li>
                <li class='pricing-feature'>". $row['tag_3'] ."</li>
            </ul>
            <a href='#contact' class='pricing-action pa-act'>Order Now</a>
        </div>";
        echo $business;
    }
        else
        {
            $enterprise ="<div class='pricing-item'>
            <div class='pricing-deco'>
                <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                    <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                    <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                    <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                    <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                </svg>
                <div class='pricing-price'><span class='pricing-currency'>$</span>". $row['price'] ."
                    <span class='pricing-period'>/ mo</span>
                </div>
                <h3 class='pricing-title'>Enterprise</h3>
            </div>
            <ul class='pricing-feature-list'>
                <li class='pricing-feature'>". $row['tag_1'] ."</li>
                <li class='pricing-feature'>". $row['tag_2'] ."</li>
                <li class='pricing-feature'>". $row['tag_3'] ."</li>
            </ul>
            <a href='#contact' class='pricing-action'>Order Now</a>
        </div>";
            echo $enterprise;
        }
     
}
?>
        
        
        
    </div>
</section>