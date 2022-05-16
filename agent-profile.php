
<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/agent-profile.css">
<!-- Blog Pages Start Here -->
<section>
<div class="legal-heading">
        <h1>Account</h1>
    </div>
</section>
<section class="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-sidebar-wrapper">
                    <div class="profile-headin-wrapper text-center">
                        <h3>My Accounts</h3>
                    </div>
                    <div class="profile-img-wrapper text-center">
                        <figure>
                            <img src="img/agent-profile.png" class="img-fluid" alt="">
                        </figure>
                        <div class="profile-content-wrapper">
                            <h6>John Doe</h6>
                            <h6>myemail@gmail.com</h6>
                        </div>
                    </div>
                    <div class="flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <ul class="nav md-pills pills-secondary d-flex flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">My orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-tabs-cotent-wrapper">
                    <div class="tab-content pt-0">
                        <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
                            <div class="profile-tabe-wrapper">
                                <div class="pro-detail-wrapper">
                                    <div class="profile-content-heading">
                                        <h4>Basic Information</h4>
                                    </div>
                                    <div class="profile-info-box-wrapper">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="dp-box-wrapper">
                                                    <div class="profile-box-img-wrapper">
                                                        <img src="img/edit-agent.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="profile-box-content-wrapper">
                                                        <div class="form-group ml-4">
                                                            <label for="Photo">Photo</label>
                                                            <h6>Upload / Change Photo</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-right">
                                                <button class="edit-profile-btn">Edit profile</button>
                                            </div>
                                        </div>

                                        <div class="box-fields-wrapper">
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label for="">First Name</label>
                                                    <input type="text" value="Lorem" disabled class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="">Last Name</label>
                                                    <input type="text" value="Ipsum" disabled class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label for="">Gender</label>
                                                    <input type="text" value="Female" disabled class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="">Date of Birth</label>
                                                    <input type="text" value="17, 02, 2022" disabled class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label for="">Phone</label>
                                                    <input type="text" value="+1-234-567-890" disabled class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                <label for="">Email</label>
                                                    <input type="text" value="Example@gmail.com" disabled class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-lg-2">
                                                    <label class="d-block" for="">Password</label>
                                                    <input type="password" value="**********" disabled>
                                                 
                                                </div>
                                                <div class="col-lg-5 p-0 m-0">
                                                 
                                                    <button class="change-password-btn">Change Password</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-fields-wrapper address-wrapper">
                                            <div class="form-group row">
                                                <div class="col-lg-8">
                                                    <label for="">Home Address</label>
                                                </div>
                                                <div class="col-lg-4 text-right">
                                                    <button class="change-address-btn">Change Address</button>
                                                </div>
                                                <div class="col-lg-10">
                                                    <textarea name="" class="form-control" disabled id="" cols="30" rows="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                                </textarea>
                                                </div>
                                            </div>
                                            <div class="about-personal-information">
                                            <div class="address">
                                            <div class="location">
                                                <span>City</span>
                                            </div>
                                            <div class="loc-info">
                                                <span>Lorem Ipsum</span>
                                            </div>
                                            </div>
                                            <div class="address">
                                            <div class="location">
                                                <span>State</span>
                                            </div>
                                            <div class="loc-info">
                                                <span>Lorem Ipsum</span>
                                            </div>
                                            </div>
                                            <div class="address">
                                            <div class="location">
                                                <span>Province</span>
                                            </div>
                                            <div class="loc-info">
                                                <span>Lorem Ipsum</span>
                                            </div>
                                            </div>
                                            <div class="address">
                                            <div class="location">
                                                <span>Zip Code</span>
                                            </div>
                                            <div class="loc-info">
                                                <span>0000</span>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-edit-wrapper">
                                    <div class="profile-info-box-wrapper">
                                    <div class="profile-content-heading">
                                        <h4>Basic Information</h4>
                                    </div>
                                        <div class="row align-items-center">
                                            <div class="col-lg-8">
                                                <div class="dp-box-wrapper">
                                                    <div class="profile-box-img-wrapper">
                                                        <img src="img/edit-agent.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="profile-box-content-wrapper">
                                                        <div class="form-group ml-4">

                                                            <h6>Jpeg or Png maximum size (5mb)</h6>
                                                            <!-- <input type="file"> -->
                                                            <div id="yourBtn" onclick="getFile()">Upload Photo</div>
                                                            <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" type="file" value="upload" onchange="sub(this)" /></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <div class="processing-wrapper">
                                                    <h6>Processing</h6>
                                                    <img src="img/processing.svg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box-fields-wrapper edit-fields">
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Last Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Phone" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <select name="" class="form-control" id="">
                                                        <option value="Gender" selected disabled>Gender</option>
                                                        <option value="male">male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <input type="password" placeholder="Email" class="form-control">
                                                </div>
                                                <div class="col-lg-6 text-right">
                                                    <div class="buttons-container">
                                                    <div class="col-md-6">
                                                    <button class="btn-cancel">Cancel</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <button class="btn-save">Save</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-edit-password-wrapper">
                                    <div class="profile-info-box-wrapper">
                                        <div class="box-fields-wrapper edit-fields">
                                        <div class="profile-content-heading">
                                        <h4>Change Password</h4>
                                    </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" placeholder="Current Password">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="password" placeholder="New Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <input type="password" placeholder="Confirm Password " class="form-control">
                                                </div>
                                                <div class="col-lg-6 text-right">
                                                    <div class="buttons-container">
                                                    <div class="col-md-6">
                                                    <button class="btn-cancel">Cancel</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <button class="btn-save">Save</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-edit-address-wrapper">
                                    <div class="profile-info-box-wrapper">
                                        <div class="profile-content-heading">
                                            <h4>Change Address </h4>
                                        </div>
                                        <div class="box-fields-wrapper edit-fields">
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Last Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <input type="text" placeholder="Address" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <input type="text" placeholder="Street" class="form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" placeholder="City" class="form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" placeholder="State" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Zip Code" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Country" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-right">
                                                    <div class="buttons-container">
                                                    <div class="col-md-6">
                                                    <button class="btn-cancel">Cancel</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <button class="btn-save">Save</button>
                                                    </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="panel12" role="tabpanel">
                            <!-- my order starts here -->
                            <div class="profile-tabe-wrapper">
                                <div class="pro-detail-wrapper">
                                    <div class="profile-content-headingss">
                                        <h4>My Orders</h4>
                                    </div>
                                    <div class="order-table-wrapper table-responsive">
                                        <table>
                                            <tbody>
                                                <tr class="row1">
                                                    <th class="order-no">OrderNo</th>
                                                    <th class="order-date">Order Date</th>
                                                    <th class="order-status">Status</th>
                                                    <th class="order-pay">Payment Status</th>
                                                    <th class="order-total">Total</th>
                                                    <th class="details"></th>
                                                </tr>
                                                <tr class="row2">
                                                    <td class="number">#1084598423154</td>
                                                    <td class="date">04-12-21</td>
                                                    <td class="status">Confirm</td>
                                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </td>
                                                    <td class="total-price">$590.00</td>
                                                    <td class="order-details">
                                                        <a class="order-details-btn" data-toggle="modal" data-target="#exampleModalLong">view Details</a>
                                                    </td>
                                                </tr>
                                                <tr class="row2">
                                                    <td class="number">#1084598423154</td>
                                                    <td class="date">04-12-21</td>
                                                    <td class="status">Confirm</td>
                                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </td>
                                                    <td class="total-price">$590.00</td>
                                                    <td class="order-details">
                                                        <a href="#">view Details</a>
                                                    </td>
                                                </tr>
                                                <tr class="row2">
                                                    <td class="number">#1084598423154</td>
                                                    <td class="date">04-12-21</td>
                                                    <td class="status">Confirm</td>
                                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </td>
                                                    <td class="total-price">$590.00</td>
                                                    <td class="order-details">
                                                        <a href="#">view Details</a>
                                                    </td>
                                                </tr>
                                                <tr class="row2">
                                                    <td class="number">#1084598423154</td>
                                                    <td class="date">04-12-21</td>
                                                    <td class="status">Confirm</td>
                                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </td>
                                                    <td class="total-price">$590.00</td>
                                                    <td class="order-details">
                                                        <a href="#">view Details</a>
                                                    </td>
                                                </tr>
                                                <tr class="row2">
                                                    <td class="number">#1084598423154</td>
                                                    <td class="date">04-12-21</td>
                                                    <td class="status">Confirm</td>
                                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </td>
                                                    <td class="total-price">$590.00</td>
                                                    <td class="order-details">
                                                        <a href="#">view Details</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- my order ends here -->
                            <!-- Modal starts here-->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="model-header pt-5">
                                            <h5 class="modal-title" id="exampleModalLongTitle">OrderNo</h5>
                                            <h6>Order #1084598423154 was placed on 30 March 2022</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="product-deatail-wrapper my-3">
                                                <div class="product-img">
                                                    <figure>
                                                        <img src="img/details1.png" class="img-fluid" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">Lorem ipsum dolor sit</h5>
                                                    <h6 class="product-size">$ 49.00 <span>Category : <small>(shop by benefit)</small></span></h6>
                                                    <h4 class="stocks">Quantity : <span style="color:#1aac7a">(02)</span></h4>
                                                </div>
                                            </div>
                                            <div class="product-deatail-wrapper my-3">
                                                <div class="product-img">
                                                    <figure>
                                                        <img src="img/details1.png" class="img-fluid" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">Lorem ipsum dolor sit</h5>
                                                    <h6 class="product-size">$ 49.00 <span>Category : <small>(shop by benefit)</small></span></h6>
                                                    <h4 class="stocks">Quantity : <span style="color:#1aac7a">(02)</span></h4>
                                                </div>
                                            </div>
                                            <div class="product-deatail-wrapper my-3">
                                                <div class="product-img">
                                                    <figure>
                                                        <img src="img/details1.png" class="img-fluid" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">Lorem ipsum dolor sit</h5>
                                                    <h6 class="product-size">$ 49.00 <span>Category : <small>(shop by benefit)</small></span></h6>
                                                    <h4 class="stocks">Quantity : <span style="color:#1aac7a">(02)</span></h4>
                                                </div>
                                            </div>
                                            <div class="order-details">
                                                <div class="order-details-wrapper mt-5">
                                                    <h6><span>Sub Total :</span> <span class="date">$ 147.00</span></h6>
                                                    <h6><span>Disscount Code Applied :</span> <span class="subtotal">-$ 14.00</span></h6>
                                                    <h6><span>Shipping Cost :</span> <span class="tax-fee">$ 69.00</span></h6>
                                                    <h6><span>Shipping Address:</span> <span class="shipping-fee">Lorem ipsum dolr sit</span></h6>
                                                    <h6><span>Total Amount :</span> <span class="Coupon">$ 150.00</span></h6>
                                                </div>
                                            </div>
                                            <div class="order-details pb-5">
                                                <div class="order-details-wrapper mt-5">
                                                    <button class="btn form-control" onclick="location.href='shop.php'">Continue Shopping</button>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                            <!-- <div class="row">
                                           
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal ends here-->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- profile end here -->
<!-- end here -->
<?php include 'inc/footer.php'; ?>