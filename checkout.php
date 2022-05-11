<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/checkout.css">
<!-- start here -->
<section>
<div class="legal-heading">
        <h1>Checkout</h1>
    </div>
</section>
<section class="checkout">
    <div class="container">
        <form action="thank-you.php">
            <div class="row">
                <div class="col-lg-6">
                    <div class="first-top-bar">
                        <h3>Shipment Details</h3>
                    </div>

                    <div class="saved-address">
                        <div class="title">
                            <h5>Use Saved Addresses</h5>
                        </div>

                        <label class="container">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark">
                                <div class="select-address">
                                    <div class="selection">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="radio-btn">
                                        <span></span>
                                    </div>
                                    <div class="address-detail">
                                        <h5><span class="property">Country:</span><span class="value">United
                                                States</span><span class="property pl-4">State:</span><span class="value">Texas</span>
                                        </h5>
                                        <h5><span class="property">Address:</span><span class="value">10515 Fox Ave
                                                Fairdale, Kentucky(KY), 40118</span></h5>
                                        <h5><span class="property">Phone:</span><span class="value">+44-123-456-789</span>
                                        </h5>
                                        <button class="btn default disabled">Default</button>
                                    </div>
                                </div>
                            </span>
                        </label>

                        <label class="container">
                            <input type="radio" name="radio">
                            <span class="checkmark">
                                <div class="select-address">
                                    <div class="selection">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="radio-btn">
                                        <span></span>
                                    </div>
                                    <div class="address-detail">
                                        <h5><span class="property">Country:</span><span class="value">United
                                                States</span><span class="property pl-4">State:</span><span class="value">Texas</span>
                                        </h5>
                                        <h5><span class="property">Address:</span><span class="value">10515 Fox Ave
                                                Fairdale, Kentucky(KY), 40118</span></h5>
                                        <h5><span class="property">Phone:</span><span class="value">+44-123-456-789</span>
                                        </h5>
                                    </div>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div class="add-new-address">
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> Add New Address</label>
                        </div>
                        <div class="form-group mb-4">
                            <label for="method">Shipment Method</label>
                            <select id="method" class="form-control">
                                <option selected="">Select Shipment method</option>
                                <option>Select Shipment method 1</option>
                                <option>Select Shipment method 2</option>
                                <option>Select Shipment method 3</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="apartmnt">Suite, Apartment, etc </label>
                                    <input type="text" id="apartmnt" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" id="city" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="region">Country/Region</label>
                                    <input type="text" id="region" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" id="state" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="zip-code">Zip Code</label>
                                    <input type="text" id="zip-code" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Save Shipping Details</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="heading">
                            <h3>Payment Details</h3>
                        </div>
                        <div class="saved-payment-method">
                            <h5>Use Saved Payments</h5>
                            <!-- Saved payments Method -->
                            <label class="container">
                                <input type="radio" checked="checked" name="payment-radio">
                                <span class="checkmark">
                                    <div class="card-details">
                                        <div class="radio-btn">
                                            <span></span>
                                        </div>
                                        <div class="visa-card">
                                            <div class="img-box">
                                                <figure><img src="img/visa.png" alt="No Image Found" class="img-fluid">
                                                </figure>
                                            </div>
                                            <div class="input-box">
                                                <label for="card-number">My Personal Card</label>
                                                <input id="card-number" value="**********1239" type="text" readonly="">
                                            </div>
                                        </div>
                                        <div class="extra-btn">
                                            <button class="btn default disabled">Default</button>
                                        </div>
                                    </div>
                                </span>
                            </label>

                            <label class="container second-card">
                                <input type="radio" name="payment-radio">
                                <span class="checkmark">
                                    <div class="card-details">
                                        <div class="radio-btn">
                                            <span></span>
                                        </div>
                                        <div class="visa-card">
                                            <div class="img-box">
                                                <figure><img src="img/visa.png" alt="No Image Found" class="img-fluid">
                                                </figure>
                                            </div>
                                            <div class="input-box">
                                                <label for="card-number">My Personal Card</label>
                                                <input id="card-number" value="**********1239" type="text" readonly="">
                                            </div>
                                        </div>
                                        <div class="extra-btn">
                                            <button class="btn default disabled">Default</button>
                                            <div class="selection">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </label>

                            <div class="add-new-method">
                                <div class="form-check py-3">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Add New Payment</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                                <button type="button">Add Card <img src="img/right-arrow.svg" alt=""></button>
                            </div>
                            <!-- Saved payments Method -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="second-top-bar">
                        <div class="title pb-4">
                            <h3>Order Summery</h3>
                        </div>
                        <label for="Enter Voucher Code : ">Enter Voucher Code : </label>
                        <div class="form-group">

                            <input type="text" class="form-control">
                            <button type="button">SUBMIT <img src="img/right-arrow.svg" alt=""></button>
                        </div>
                    </div>
                    <div class="cart-product-detail">
                        <div class="title">
                            <h3>Products Details</h3>
                        </div>
                        <div class="checkout-products">
                            <div class="products br-right">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/checkout-pic.png" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Barbara T.shirt</h5>
                                        <ul class="variations">
                                            <li>Items (2)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$ 740.15</h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/checkout-pic.png" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Barbara T.shirt</h5>
                                        <ul class="variations">
                                            <li>Items (2)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$ 740.15</h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/checkout-pic.png" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Barbara T.shirt</h5>
                                        <ul class="variations">
                                            <li>Items (2)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$ 740.15</h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/checkout-pic.png" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Barbara T.shirt</h5>
                                        <ul class="variations">
                                            <li>Items (2)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$ 740.15</h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/checkout-pic.png" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Barbara T.shirt</h5>
                                        <ul class="variations">
                                            <li>Items (2)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$ 740.15</h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/checkout-pic.png" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Barbara T.shirt</h5>
                                        <ul class="variations">
                                            <li>Items (2)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$ 740.15 </h4>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <div class="item-total">
                                <h4 class="property">Item Total :</h4>
                                <h4 class="value">$50</h4>
                            </div>
                            <div class="item-total">
                                <h4 class="property">Delivery charges</h4>
                                <h4 class="value">$0</h4>
                            </div>

                            <div class="order-total">
                                <h3 class="property">Order Total</h3>
                                <h3 class="value">$3025.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-last"></div>
                <div class="confirm-orderDv">
                    <div class="form-check ">
                        <input type="checkbox" class="form-check-input" id="for-checkbox">
                        <label class="form-check-label" for="exampleCheck1">Proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum</label>
                    </div>

                    <div class="button-group">
                        <button type="submit">Confirm Order <img src="img/right-arrow.svg" alt=""></button>
                    </div>
                </div>
        </form>
    </div>
</section>
<!-- checkout-section ends here -->
<!-- end here -->
<?php include 'inc/footer.php'; ?>