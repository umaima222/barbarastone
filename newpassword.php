<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/newpassword.css">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->
<section class="forget-sec">
    <div class="forget-heading">
        <h1>Forget Password</h1>
    </div>
</section>
<section class="sign-up">
    <div class="container">
        <div class="row account">
            <div class="col-lg-6">
                <div class="sign-up-imgbox">
                    <img src="img/forget-pass.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">

                    <div class="sign-up-heading-wrapper">
                        <h4>New Password</h4>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor</h6>
                    </div>
                    <div class="sign-up-form-wrapper">
                    <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="New Password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            
                            <div class="form-group ">
                                <button class="form-control btn">Save Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- sign up as a user section ends here -->
<?php include 'inc/footer.php'; ?>