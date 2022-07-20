<?php include 'inc/app.php'; ?>
    <!-- css file starts here -->
    <link rel="stylesheet" href="css/sign-in.css">
    <!-- css file ends here -->
    <!-- sign up as a user section starts here -->
    <section class="signup">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="sign-up-box-wrapper">

                        <div class="sign-up-heading-wrapper">
                            <h4>Registration Form</h4>
                            <!--                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor</h6>-->
                        </div>
                        <div class="sign-up-form-wrapper">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Contact Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Case Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="County" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Names of Judges involved" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Any Comments"></textarea>
                                </div>
                                <!--                                <div class="form-group">-->
                                <!--                                    <select id="myselect">-->
                                <!--                                        <option>Select Option</option>-->
                                <!--                                        <option value="Model 1">Guardianship</option>-->
                                <!--                                        <option value="Model 2">Family Court</option>-->
                                <!--                                    </select>-->
                                <!--                                </div>-->
                                <div class="form-group ">
                                    <button class="form-control btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
    <!-- sign up as a user section ends here -->
<?php include 'inc/footer.php'; ?>