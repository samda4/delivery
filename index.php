<?php include("includes/ui_header.php"); ?>
<!-- Start Slider Area -->
<div class="slider__area slider--four">
    <div class="slider__activation--1">
        <!-- Start Single Slide -->
        <div class="slide slider__fixed--height bg-image--21 poss--relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="slider__content">
                            <div class="slider__inner">
                                <div class="slider__video__btn">
                                <div class="slider__btn">
                                    <h2><a class="food__btn" href="#">Хоол захиалгын үйлчилгээ</a></h2>
                                </div>
                                    <a class="video-play-button" href="https://www.youtube.com/watch?v=cxB4ACaaR4I"><img src="images/icon/play.png" alt="viveo play icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
</div>
<!-- End Slider Area -->
<!-- Start Popular Food Area -->
<section class="popular__food__area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section__title title__style--2 service__align--center section__bg__white">
                    <h2 class="title__line">Онцлох хоол</h2>
                    <p>Манай үйлчилгээний явц</p>
                </div>
            </div>
        </div>
        <div class="row mt--30">
            <!-- Start Single Popular Food -->
            <?php
                            $sql = "SELECT * FROM best_food;";
                            $result = mysqli_query($link, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0){
                                while ($row = mysqli_fetch_assoc($result)){ ?>
            <div class="col-lg-4 col-md-6 col-sm-12 foo">
                <div class="popular__food">
                    <div class="pp_food__thumb">
                        <a href="menu-details.html">
                            <img src="images/<?php  echo $row['image'];?>" alt="popular food"width="500" height="200">
                        </a>
                        <div class="pp__food__prize">
                            <span><?php  echo $row['cost'];?></span>
                        </div>
                    </div>
                    <div class="pp__food__inner">
                        <div class="pp__food__details">
                            <h4><a href="menu-details.html"><?php  echo $row['name'];?></a></h4>
                            <ul class="rating">
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                            <p><?php  echo $row['date'];?></p>
                            <div class="pp__food__bottom d-flex justify-content-between align-items-center">
                                <div class="pp__btn">
                                    <a class="food__btn btn--transparent btn__hover--theme btn__hover--theme" href="#">Захиалга хийх</a>
                                </div>
                                <ul class="pp__meta d-flex">
                                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>04</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                                }
                            }
                        ?>
            <!-- End Single Popular Food -->
        </div>
    </div>
</section>
<!-- End Popular Food Area -->
<!-- Start Blog Area -->
<section class="fb__blog__ara pb--130 bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="col-lg-12 col-md-12">
                    <div class="section__title title__style--2 service__align--center">
                        <h2 class="title__line">Сүүлд нэмэгдсэн хоол</h2>
                        <p>Манай үйлчилгээний явц</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt--40">
        <?php
                            $sql = "SELECT * FROM new_food;";
                            $result = mysqli_query($link, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0){
                                while ($row = mysqli_fetch_assoc($result)){ ?>
            <!-- Start Single Blog -->
            <div class="col-md-6 col-lg-4 foo col-sm-12">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details.html">
                            <img src="<?php  echo $row['image'];?>" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <h2><a href="blog-details.html"><?php  echo $row['name'];?></a></h2>
                        <span><?php  echo $row['date'];?></span>
                        <p><?php  echo $row['more'];?></p>
                        <div class="blog__btn">
                            <a class="food__btn btn--green" href="blog-details.html">Захиалга хийх</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                                }
                            }
                        ?>

        </div>
    </div>
</section>
<!-- End Blog Area -->
<!-- Start Testimonial Area -->
<section class="food__testimonial__area testimonial--4 bg-image--15">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                <div class="testimonia__activation">
                    <!-- Start Single Testimonial -->
                    <div class="testimonial-inner--4">
                        <div class="testimonial__inner">
                            <!-- Start Testimonial Text -->
                            <div class="testimonial-text-slider">
                                <div class="testimonial-text-content">
                                    <div class="test__icon">
                                        <i class="zmdi zmdi-quote"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    </div>
                                </div>
                                <div class="testimonial-text-content">
                                    <div class="test__icon">
                                        <i class="zmdi zmdi-quote"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>Nipa ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    </div>
                                </div>
                                <div class="testimonial-text-content">
                                    <div class="test__icon">
                                        <i class="zmdi zmdi-quote"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>Kohinur ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    </div>
                                </div>
                                <div class="testimonial-text-content">
                                    <div class="test__icon">
                                        <i class="zmdi zmdi-quote"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>Maksud Vaia ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Text -->
                            <!-- Start Testimonial Images -->
                            <div class="testimonial-image-slider">
                                <div class="test__info">
                                    <div class="test__img__thumb">
                                        <img src="images/testimonial/clint-2/1.png" alt="testimonial images">
                                    </div>
                                    <h4>Browny</h4>
                                    <span>Food Lovers</span>
                                </div>
                                <div class="test__info">
                                    <div class="test__img__thumb">
                                        <img src="images/testimonial/clint-2/1.png" alt="testimonial images">
                                    </div>
                                    <h4>Irin Pervin</h4>
                                    <span>Food Lovers</span>
                                </div>
                                <div class="test__info">
                                    <div class="test__img__thumb">
                                        <img src="images/testimonial/clint-2/1.png" alt="testimonial images">
                                    </div>
                                    <h4>Najnin Supa</h4>
                                    <span>Food Lovers</span>
                                </div>
                                <div class="test__info">
                                    <div class="test__img__thumb">
                                        <img src="images/testimonial/clint-2/1.png" alt="testimonial images">
                                    </div>
                                    <h4>Hanchika Browny</h4>
                                    <span>Food Lovers</span>
                                </div>
                            </div>
                            <!-- End Testimonial Images -->
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Area -->
<!-- Start Counter Up Area -->
<section class="fd__counterup__area bg--theme fanfact--2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="counter__up__inner d-flex flex-wrap flex-lg-nowrap justify-content-between text-center">
                    <!-- Start Single Fact -->
                    <div class="funfact">
                        <div class="fact__details">
                            <div class="funfact__count__inner">
                                <div class="fact__icon">
                                    <img src="images/icon/flat-icon/4.png" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">2456</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>Food </h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="funfact">
                        <div class="fact__details">
                            <div class="funfact__count__inner">
                                <div class="fact__icon">
                                    <img src="images/icon/flat-icon/5.png" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">2456</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>Chef </h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="funfact">
                        <div class="fact__details">
                            <div class="funfact__count__inner">
                                <div class="fact__icon">
                                    <img src="images/icon/flat-icon/6.png" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">2456</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>Menu </h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="funfact">
                        <div class="fact__details">
                            <div class="funfact__count__inner">
                                <div class="fact__icon">
                                    <img src="images/icon/flat-icon/7.png" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">2456</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>Restaurant </h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Fact -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter Up Area -->
<!-- Start Our Brand Area -->
<div class="food__brand__area ptb--150">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="brand__list d-flex flex-wrap flex-lg-nowrap justify-content-between pb--60">
                    <li>
                        <a href="#"><img src="images/brand/1.png" alt="brand images"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/brand/2.png" alt="brand images"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/brand/3.png" alt="brand images"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/brand/4.png" alt="brand images"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/brand/5.png" alt="brand images"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Our Brand Area -->
<!-- Start Subscribe Area -->
<section class="fd__subscribe__wrapper bg__cat--6 subs--4">
    <div class="fd__subscribe__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="subscribe__inner subscribe--3">
                        <h2>Subscribe to our newsletter</h2>
                        <div id="mc_embed_signup">
                            <div id="enter__email__address">
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                        <div class="news__input">
                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clearfix subscribe__btn"><input type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe" class="sign__up food__btn">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="subs__address__content d-flex justify-content-between">
                            <div class="subs__address d-flex">
                                <div class="sbs__address__icon">
                                    <i class="zmdi zmdi-home"></i>
                                </div>
                                <div class="subs__address__details">
                                    <p>Elizabeth Tower. 6th Floor <br> Medtown, New York</p>
                                </div>
                            </div>
                            <div class="subs__address d-flex">
                                <div class="sbs__address__icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="subs__address__details">
                                    <p><a href="#">+088 01673-453290</a></p>
                                    <p><a href="#">+088 01773-458290</a></p>
                                </div>
                            </div>
                            <div class="subs__address d-flex">
                                <div class="sbs__address__icon">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="subs__address__details">
                                    <p><a href="#">Aahardelivery@email.com</a></p>
                                    <p><a href="#">deliverydotnet@e-mail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Area -->
<!-- Start Footer Area -->
<?php include("includes/ui_footer.php"); ?>