<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/contactforanyquery.css">


<!--  Start Here -->
<section class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="contact-heading">
                    <h2>Contact For Any Query</h2>
                </div>
                <form>
                    <div class="problems">
                        <div class="row m-0">
                            <div class="col-md-6 m-0 p-0 ">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lorem">
                                </div>
                            </div>
                            <div class="col-md-6 m-0 p-0">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ipsum" style="background: #FFF5F5">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="problems">
                        <div class="col-md-6 m-0 p-0">
                            <div class="form-group ">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Loremipsum@gmail.com">
                            </div>
                        </div>
                        <div class="col-md-6 m-0 p-0">
                            <div class="form-group ">
                                <label for="exampleInputPassword1">Contact Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ipsum">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.963793630809!2d67.06769231487922!3d24.865086151196206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e987bf7b24d%3A0xbb1256e1c355bf69!2sPFL%20Education%20Pvt.%20Ltd!5e0!3m2!1sen!2s!4v1651845397905!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row contact-info">
            <div class="col-md-4">
                <div class="phone">
                    <div class="icon">
                        <i class='fas fa-phone-alt'></i>
                    </div>
                    <div class="about-phone">
                        <h5>Talk to us</h5>
                    </div>
                    <div class="about-phone">
                        <p>Toll-Free: 123 456 7890</p>
                        <p>Fax: 123 456 7890</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="phone1">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="about-phone">
                        <h5>Contact us</h5>
                    </div>
                    <div class="about-phone">
                        <p>Sayhello@Beads Store.com</p>
                        <p>Sayhello@Beads Store.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="location">
                    <div class="icon">
                        <i class='fas fa-location-arrow'></i>
                    </div>
                    <div class="about-phone">
                        <h5>Location</h5>
                    </div>
                    <div class="about-phone">
                        <p>Lorem Ipsum is simply<br> dummy text of the <br> lorem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End Here -->

<?php include 'inc/footer.php'; ?>