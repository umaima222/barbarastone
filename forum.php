<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/forum.css">
<!-- Stylesheet -->


<!-- Forum Sec Start Here -->
<section class="forum_sec">
<div class="donation-heading">
        <h1>Forums</h1>
    </div>
    <div class="banner_slide">
        <div class="banner_image">
            <figure><img src="img/banner-img.png" alt="" class="img-fluid"></figure>
        </div>
        <div class="container">
            <div class="banner_content">
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="font-weight-bold title wow animate__animated animate__fadeInDown">No #1 Platform
                            Where<br /> Buyer &
                            Seller Trust Eachother</h2>
                        <p class="wow animate__animated animate__fadeInDown animate__delay-1s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.

                        </p>
                        <div class="filter_form wow animate__animated animate__fadeInDown animate__delay-2s">
                            <div class="heading">
                                <h4 class="font-weight-bold">Search Businesses & Categories</h4>
                            </div>
                            <form>
                                <div class="row align-items-center">
                                    <div class="col-md-5 p-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Business/categories">
                                        </div>
                                    </div>
                                    <div class="col-md-5 p-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="location">
                                        </div>
                                    </div>
                                    <div class="col-md-2 p-2">
                                        <div class="form-group">
                                            <button class="btn">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
    <form>
                                    <div class="row align-items-center">
                                        <div class="col-md-5 p-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search Topic">
                                            </div>
                                        </div>
                                        <div class="col-md-2 p-2">
                                            <div class="form-group">
                                                <button class="btn">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
        <div class="row"> -->
            <div class="col-lg-9">
                <div class="write-post shadow_box">
                    <div class="head">
                        <h4>Tell Us About Your Story</h4>
                    </div>
                    <div class="write_box">
                        <div class="user_img">
                            <figure><img src="img/user.png" class="img-fluid"></figure>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Write Anything" class="form-control">
                            <button class="btn" type="submit">Post</button>
                        </div>
                    </div>
                </div>
                <div class="forum_posts">
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="single-post.php">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/user1.png" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Mason Laew</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum Dolor Sit
                                    Amet,
                                    Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore
                                    Magna
                                    Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris ?
                                </p>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="#">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/category.PNG" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Willam Law</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum Dolor Sit
                                    Amet,
                                    Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore
                                    Magna
                                    Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris ?
                                </p>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio2">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio2">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="#">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/category.PNG" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Pablo Law</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum Dolor Sit
                                    Amet,
                                    Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore
                                    Magna
                                    Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris ?
                                </p>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio3">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio3">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="#">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/group-4785.png" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Rose Rubio</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum Dolor Sit
                                    Amet,
                                    Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore
                                    Magna
                                    Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris ?
                                </p>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio4">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio4">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="#">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/group-4785.png" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Bonita Senior</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum Dolor Sit
                                    Amet,
                                    Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore
                                    Magna
                                    Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris ?
                                </p>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio5">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio5">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="#">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/user1.png" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Maron Law</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum Dolor Sit
                                    Amet,
                                    Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore
                                    Magna
                                    Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris ?
                                </p>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio6">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio6">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="button-group text-center mt-5 mb-4">
                        <a href="#" class="btn">Load More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <?php include 'inc/sidebar.php';?>
            </div>
        </div>
    </div>
</section>
<!-- Forum Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->