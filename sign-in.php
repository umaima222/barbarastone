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
                        <h4>Sign In To Your Account</h4>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor</h6>
                    </div>
                    <div class="sign-up-form-wrapper">
                        <form action="">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email/Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <a href="">Forgot Password?</a>
                            </div>
                            
                            <div class="form-group ">
                                <button class="form-control btn">Submit</button>
                            </div>
                            <span>Don't have account?</span> <a href="createanaccount.php"> Sign Up</a>
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