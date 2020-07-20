<footer class="footer__area footer--4">
    <div class="copyright bg__cat--7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="copyright__inner">
                        <div class="cpy__right--left">
                            <p>@All Right Reserved.<a href="https://devitems.com/">Devitems</a></p>
                        </div>
                        <div class="cpy__right--right">
                            <a href="#">
                                <img src="images/icon/shape/2.png" alt="payment images">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->
<!-- Login Form -->
<div class="accountbox-wrapper">
    <div class="accountbox text-left">
        <ul class="nav accountbox__filters" id="myTab" role="tablist">
            <li>
                <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
            </li>
            <li>
                <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
            </li>
        </ul>
        <div class="accountbox__inner tab-content" id="myTabContent">
            <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                <form action="#">
                    <div class="single-input">
                        <input class="cr-round--lg" type="text" placeholder="User name or email">
                    </div>
                    <div class="single-input">
                        <input class="cr-round--lg" type="password" placeholder="Password">
                    </div>
                    <div class="single-input">
                        <button type="submit" class="food__btn"><span>Go</span></button>
                    </div>
                    <div class="accountbox-login__others">
                        <h6>Or login with</h6>
                        <div class="social-icons">
                            <ul>
                                <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form action="#">
                    <div class="single-input">
                        <input class="cr-round--lg" type="text" placeholder="User name">
                    </div>
                    <div class="single-input">
                        <input class="cr-round--lg" type="email" placeholder="Email address">
                    </div>
                    <div class="single-input">
                        <input class="cr-round--lg" type="password" placeholder="Password">
                    </div>
                    <div class="single-input">
                        <input class="cr-round--lg" type="password" placeholder="Confirm password">
                    </div>
                    <div class="single-input">
                        <button type="submit" class="food__btn"><span>Sign Up</span></button>
                    </div>
                </form>
            </div>
            <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
        </div>
    </div>
</div>
<!-- //Login Form -->
<!-- Cartbox -->
<div class="cartbox-wrap">
    <div class="cartbox text-right">
        <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
        <div class="cartbox__inner text-left">
            <div class="cartbox__items">
                <!-- Cartbox Single Item -->
                <div class="cartbox__item">
                    <div class="cartbox__item__thumb">
                        <a href="product-details.html">
                            <img src="images/blog/sm-img/1.jpg" alt="small thumbnail">
                        </a>
                    </div>
                    <div class="cartbox__item__content">
                        <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                        <p>Qty: <span>01</span></p>
                        <span class="price">$15</span>
                    </div>
                    <button class="cartbox__item__remove">
                        <i class="fa fa-trash"></i>
                        </button>
                </div>
                <!-- //Cartbox Single Item -->
                <!-- Cartbox Single Item -->
                <div class="cartbox__item">
                    <div class="cartbox__item__thumb">
                        <a href="product-details.html">
                            <img src="images/blog/sm-img/2.jpg" alt="small thumbnail">
                        </a>
                    </div>
                    <div class="cartbox__item__content">
                        <h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
                        <p>Qty: <span>01</span></p>
                        <span class="price">$25</span>
                    </div>
                    <button class="cartbox__item__remove">
                        <i class="fa fa-trash"></i>
                        </button>
                </div>
                <!-- //Cartbox Single Item -->
                <!-- Cartbox Single Item -->
                <div class="cartbox__item">
                    <div class="cartbox__item__thumb">
                        <a href="product-details.html">
                            <img src="images/blog/sm-img/3.jpg" alt="small thumbnail">
                        </a>
                    </div>
                    <div class="cartbox__item__content">
                        <h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
                        <p>Qty: <span>01</span></p>
                        <span class="price">$30</span>
                    </div>
                    <button class="cartbox__item__remove">
                        <i class="fa fa-trash"></i>
                        </button>
                </div>
                <!-- //Cartbox Single Item -->
            </div>
            <div class="cartbox__total">
                <ul>
                    <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                    <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
                    <li class="grandtotal">Total<span class="price">$75</span></li>
                </ul>
            </div>
            <div class="cartbox__buttons">
                <a class="food__btn" href="cart.html"><span>View cart</span></a>
                <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- //Main wrapper -->
<!-- JS Files -->
<script src="js/vendor/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/jquery.yu2fvl.js"></script>
<script src="js/active.js"></script>
</body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/aahar/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jul 2020 05:26:06 GMT -->

</html>