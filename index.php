<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Bazinger</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<header class="site-header">
    <div class="container flex-container">
        <div class="site-header__logo">
            <a href="#"><img src="assets/img/logo.png" alt=""/></a>
        </div>
        <nav class="site-header__menu main-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#video">Video</a></li>
                <li><a href="#price">Prices</a></li>
                <li><a href="#testimonial">Testimonials</a></li>
                <li><a href="#download">Download</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
        </nav>
    </div>
</header>
<div class="home-first-screen">
    <div class="home-first-screen-content">
        <!--FIXME: Начало слайда -->
        <div>
            <div class="content-text">

                <span class="content-head">Simple, Beautiful <span class="content-head__bold">and Amazing</span></span>
                <span class="content-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus
                            ullamcorper. Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi
                            fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.</span>
            </div>
            <div class="home-first-screen-button">
                <a class="btn-download" href="#">
                    <!-- FIXME: убрать тег button -->
                    <span>Download</span>
                </a>
                <a class="btn-learn-more" href="#">
                    <!-- FIXME: убрать тег button -->
                    <span>Learn More</span>
                </a>
            </div>
            <div class="home-content-available">
                <span>Available on :</span>

                <!-- FIXME: сделать ссылками -->
                <a href="#" class="mobile-icon"><img src="assets/img/apple.png"></a>
                <a href="#" class="mobile-icon"><img src="assets/img/android.png"></a>
            </div>
        </div>
        <!--FIXME: конец слайда -->
    </div>
</div>
<section class="home-sections__features">
    <div class="container features-container">

        <div class="price-content__heading-content">
            <span class="feature-heading__span">summarise the features</span>
            <span class="feature-content__span">summarise what your product is all about</span>
        </div>
        <!-- FIXME: сделать через сетку -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 ">
                <div class="features-content">
                    <div class="img-features">
                        <img class="" src="assets/img/features1.png">
                    </div>

                    <span class="feature-title">Attractive Layout</span>
                    <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                        idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 ">
                <div class="features-content">
                    <div class="img-features">
                        <img class="" src="assets/img/features2.png">
                    </div>
                    <span class="feature-title">Fresh Design</span>
                    <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta
                        nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 ">
                <div class="features-content">
                    <div class="img-features">
                        <img class="" src="assets/img/features3.png">
                    </div>
                    <span class="feature-title">Multipurpose</span>
                    <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque
                        mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 ">
                <div class="features-content">
                    <div class="img-features">
                        <img class="" src="assets/img/features4.png">
                    </div>
                    <span class="feature-title">Easy to customize</span>
                    <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta
                        nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-sections__gallery">
    <div class="container container-gallery">

        <div class="price-content__heading-content">
            <span class="feature-heading__span">show the gallery</span>
            <span class="feature-content__span">summarise what your product is all about</span>
        </div>

        <div class="row">
            <!-- FIXME: сделать через сетку -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="gallery-content">
                    <div class="img-overlay"><div class="plus"><img src="assets/img/plus.png"></div></div>
                    <img class="img-gallery" src="assets/img/gallery2.png">

                    <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                        idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="gallery-content">

                    <div class="img-overlay"><div class="plus"><img src="assets/img/plus.png"></div></div>
                    <img class="img-gallery" src="assets/img/gallery2.png">
                    <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta
                        nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="gallery-content">
                    <div class="img-overlay"><div class="plus"><img src="assets/img/plus.png"></div></div>
                    <img class="img-gallery" src="assets/img/gallery3.png">
                    <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque
                        mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="gallery-content">
                    <div class="img-overlay"><div class="plus"><img src="assets/img/plus.png"></div></div>
                    <img class="img-gallery" src="assets/img/gallery4.png">
                    <span class="feature-text">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta
                        nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video">
    <div class="container video-container">
        <div class="btn-play-video">
        </div>
        <div class="video-content-text">
                <span class="video-content-text__header">Watch the best Technology in
                    <span class="video-content-text__header-action">Action</span></span>
            <span class="video-content-text__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
                    Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet.
                    Quisque non rhoncus sem.</span>
        </div>
    </div>
</section>


<section class="price">
    <div class="container price-content">

        <div class="price-content__heading-content">
            <span class="feature-heading__span">choose your price</span>
            <span class="feature-content__span">summarise what your product is all about</span>
        </div>

        <div class="price-content__items">
            <div class="price-content__item">
                <div class="price-content__item-header">
                    <span>Basic Package</span>
                </div>
                <div class="price-content__item-value">
                    <span>20$</span>
                </div>
                <div class="price-content__item-descr">
                    <span>Nullam suscipit vitae</span>
                    <span>Etiam faucibus</span>
                    <span>Vivamus viverra</span>
                </div>
                <a class="price-content__item-button" href="#">
                    <!-- FIXME: убрать тег button -->
                    <span>purchase</span>
                </a>
            </div>
            <div class="price-content__item">
                <div class="price-content__item-header">
                    <span>Professional Package</span>
                </div>

                <div class="price-content__item-value">
                    <span>25$</span>
                </div>
                <div class="price-content__item-descr">
                    <span>Nullam suscipit vitae</span>
                    <span>Etiam faucibus</span>
                    <span>Vivamus viverra</span>
                    <span>Praesent pharetra</span>
                </div>
                <a class="price-content__item-button" href="#">
                    <!-- FIXME: убрать тег button -->
                    <span>purchase</span>
                </a>
            </div>
            <div class="price-content__item">
                <div class="price-content__item-header">
                    <span>Advanced Package</span>
                </div>
                <div class="price-content__item-value">
                    <span>30$</span>
                </div>
                <div class="price-content__item-descr">
                    <span>Nullam suscipit vitae</span>
                    <span>Etiam faucibus</span>
                    <span>Vivamus viverra</span>
                </div>
                <a class="price-content__item-button" href="#">
                    <!-- FIXME: убрать тег button -->
                    <span>purchase</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container testimonials-container">
        <span class="testimonials-header">Testimonials</span>
        <div class="testimonials-content">
            <!--FIXME: Начало слайда -->
            <div>
                <div class="testimonials-content__icon">
                    <img src="assets/img/testimonials.png">
                </div>
                <div class="testimonials-content_text">
                        <span class="testimonials-content_text__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Praesent lobortis lectus eget libero blandit venenatis.
                            In blandit tortor vel congue malesuada. Suspendisse
                            molestie lobortis lorem dignissim pretium.<br>
                            <span class="testimonials-content_text__author">John Doe<br> from some company</span>
                        </span>
                </div>
            </div>
            <!--FIXME: конец слайда -->
        </div>
    </div>
</section>

<section class="download">
    <div class="container download-content">
        <span>Do you like this app?</span>
        <a class="download-button" href="#">
            <!-- FIXME: убрать тег button -->
            <span>download now</span>
        </a>
    </div>
</section>

<section class="map">
    <div class="container map-container">
        <div class="contact-form">
            <form method="post" action="form.php">
                <span>Contact</span>
                <div class="form-item">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="form-item">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>

                <div class="form-item">
                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>

                <div class="form-item">
                    <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                </div>

                <input type="hidden" name="dateOpenForm" value="<?echo date('Y-m-d H:i:s');?>"/>
                <button type="submit" class="button">Send</button>
            </form>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <span>Copyright &#169 2013 |BAZINGER| All Rights Reserved</span>
            <!-- FIXME: сделать ссылками "Terms of Service|policy"-->
            <a href="#"> <span>Terms of Service|policy</span> </a>
        </div>
    </div>
</footer>
</body>
</html>