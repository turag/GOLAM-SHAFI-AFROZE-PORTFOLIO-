<section id="contact">
    <div class="container zindex">
        <div class="row">
            <div class="col-lg-12 about-head heading-bg form-head">
                <h2>CONTACT US</h2>
                <h3>STAY CONNETED EVERYTIME</h3>
            </div>
        </div>
    </div>
    <div class="container zindex">
        <div class="row">
            <div class="col-lg-6 form-p">
                <div class="user-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> <i class="fa fa-user-o" aria-hidden="true"></i> Your first name</label>
                                    <input type="text" class="form-control" placeholder="Ex. Shakib">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> <i class="fa fa-user-o" aria-hidden="true"></i> Your last name</label>
                                    <input type="text" class="form-control" placeholder="Ex. Alam">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><i class="fa fa-envelope-o" aria-hidden="true"></i> Your email address</label>
                                    <input type="email" class="form-control" placeholder="name@example.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"><i class="fa fa-comments-o" aria-hidden="true"></i> Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type here...."></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send It</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 form-icon text-center">
                <?php
                $sql = "SELECT * FROM b_contact";
                $a_data = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($a_data)) {
                    ?>
                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                       href="<?php echo $row['link']?>"><i class="fa fa-play" aria-hidden="true"></i></a>
                    <div class="watch-text">
                        <a class="venobox" data-autoplay="true" data-vbtype="video"
                           href="<?php echo $row['link']?>">Watch Our Story</a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>