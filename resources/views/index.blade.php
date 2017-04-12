@extends($layout)
@section('stylesheets')

@stop
@section('scripts')

@stop

@section('content')
<div class="main product" id="main">
    <!-- Main Section-->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <style type="text/css">
                        .bwcar {
                            color: rgb(0, 0, 0) !important;
                            text-shadow: 0 1px 2px rgba(86, 85, 85, 0.6) !important;
                        }
                    </style>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="/assets/images/hero1.jpg" alt="Scanned-model">
                                <div class="carousel-caption">
                                    <h3 class="bwcar">High Precision Scanning</h3>
                                    <p class="bwcar">Scanned images combined in 360° can be exported to all common 3D formats</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="/assets/images/hero2.jpg" alt="Scanned-model">
                                <div class="carousel-caption">
                                    <h3>Structured Light</h3>
                                    <p>High-precision. High-speed.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="/assets/images/hero3.jpg" alt="Alligator">
                                <div class="carousel-caption">
                                    <h3 class="bwcar">Alligator</h3>
                                    <p class="bwcar">Structured Light Based 3D Camera Light Weight, Compact, and Accurate 3D Camera. Output result can be exported to common 3D formats (OBJ, STL, PLY)</p>
                                </div>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay="0s">Powerful 3D Scanner Camera </br><small>Professional. Accurate. Portable.</small></h1>
                        <p class="wow fadeInUp" data-wow-delay="0s">
                            Light Weight, Compact, and Accurate Scanner For Service/Industrial Robots or Personal Use.
                        </p>

                        <a class="btn btn-primary btn-action popup wow fadeInUp" data-wow-delay="0.1s" data-toggle="modal" data-target="#myModal">Know More</a>
                        <a href="#purchase" class="page-scroll btn btn-primary btn-action popup wow fadeInUp" data-wow-delay="0.1s">Product Inquiry</a>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about text-center">
        <div class="container">
            <div class="about-content">
                <h2 class="wow fadeInUp">Aligator 3D camera uses one projector and one camera to capture 3D points. It has a very <span style="font-weight: 900;">high depth accuracy</span> and caplable of <span style="font-weight: 900;">color reconstruction.</span></h2>
                <h3 class="wow fadeInUp">- INGVISION</h3>
            </div>
        </div>
    </div>

    <div id="features" class="features">
        <div class="container">
            <div class="features-inner">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-condensed" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;" colspan="2">Alligator Specification</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Texture Capture</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <td>2D Resolution</td>
                                    <td>640x480 Pixels</td>
                                </tr>
                                <tr>
                                    <td>3D Point Depth Accuracy</td>
                                    <td>0.3mm@1m</td>
                                </tr>
                                <tr>
                                    <td>Color Reconstruction</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <td>Light Source</td>
                                    <td>LED, White Light</td>
                                </tr>
                                <tr>
                                    <td>Working Distance</td>
                                    <td>0.5 ~ 3 m</td>
                                </tr>
                                <tr>
                                    <td>Scan Area(at 1m)</td>
                                    <td>40 x 31 cm</td>
                                </tr>
                                <tr>
                                    <td>Field of View (FOV, at 1m)</td>
                                    <td>Vertical FOV : 17.5 , Horizontal FOV : 22.6 </td>
                                </tr>
                                <tr>
                                    <td>Frame Rate</td>
                                    <td>1 Hz</td>
                                </tr>
                                <tr>
                                    <td>Dimensions</td>
                                    <td>210 x 68 x 95 mm</td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td>0.7 kg</td>
                                </tr>
                                <tr>
                                    <td>Interface</td>
                                    <td>IEEE 1394b, VGA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="features-list">
                            <h1 class="wow fadeInUp">Features & Specifications</h1>
                            <ul class="wow fadeInUp">
                                <li>The accurate pattern boundary estimation technique allows correctly locating the boundary of the light pattern on surface even when it is distorted by variation in surface reflectance.</li>
                                <li>The accurate pattern boundary estimation technique allows correctly locating the boundary of the light pattern on surface even when it is distorted by variation in surface reflectance.</li>
                                <li>The Boundary Inheritance Codec is developed for robustly estimating the correspondences between projector and camera, to make accurate triangulation for 3D point cloud. </li>
                                <li>Auto-exposure control technique is applied to help the camera captures objects in different lighting condition. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="feature-sub" id="videosec">
        <div class="container vcont" style="">
            <div class="sub-innerx" style="">
                <div class="col-md-6 vcont">
                    <div class="features-list">
                        <div class="da-img">
                            <iframe src="http://player.vimeo.com/video/203680587?title=0&amp;byline=0&amp;portrait=0&amp;" width="100%" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding-left: 30px;padding-right: 30px;padding-top: 30px;">
                    <div class="features-list">
                        <h1 style="font-size: 36px;color: #FFFFFF;
            font-weight: 400;
            line-height: 1.2;
            margin-top: 10px;
            margin-bottom: 0;" class="wow fadeInUp" data-wow-delay="0.1s">High Speed IR 3D Camera</h1>
                        <ul style="font-family: Poppins;
            font-size: 14px;
            color: #FFFFFF;
            font-weight: 300;
            line-height: 1.4;
            margin-top: 20px;
            margin-bottom: 40px;" class="wow fadeInUp" data-wow-delay="0.1s">
                            <li>Accurate boundary estimation</li>
                            <li>Boundary inheritance from upper layer to lower layer</li>
                            <li>Region based inheritance for correspondence</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- 
    <div id="review-section" class="review-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="reviews owl-carousel owl-theme">
                        <div class="review-single"><img class="img-circle" src="/assets/images/icon.png" alt="Client Testimonoal" />
                            <div class="review-text wow fadeInDown" data-wow-delay="0.1s">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                <h3>- enjoy a pleasure</h3>
                                <h3>Vice President complete Inc</h3>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/assets/images/icon.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis quis tellus ac vestibulum. Etiam fermentum nisl ac venenatis rhoncus.</p>
                                <h3>- Kate Abbot</h3>
                                <h3>President Proton LLC</h3>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-ios-star-half"></i>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/assets/images/icon.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis quis tellus ac vestibulum. Etiam fermentum nisl ac venenatis rhoncus.</p>
                                <h3>- Alice</h3>
                                <h3>CEO Marga Holdings</h3>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-ios-star-half"></i>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/assets/images/icon.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis quis tellus ac vestibulum. Etiam fermentum nisl ac venenatis rhoncus.</p>
                                <h3>- Robert Hammer</h3>
                                <h3>Chairman Hammer Corp</h3>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/assets/images/icon.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis quis tellus ac vestibulum. Etiam fermentum nisl ac venenatis rhoncus.</p>
                                <h3>- Rita Valentine</h3>
                                <h3>Primal Inc</h3>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-star"></i>
                                <i class="ion ion-ios-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <style type="text/css">
        input[type="text"]:focus,
        textarea:focus,
        textarea.form-control:focus {
            outline: 0;
            background: #FFFFFF;
            border: none !important;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        input[type="email"]:focus,
        textarea:focus,
        textarea.form-control:focus {
            outline: 0;
            background: #FFFFFF;
            border: none !important;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .subscribe-form .name {
            margin-bottom: 3px;
            background-color: #F9F9F9;
            border: none;
            border-radius: 5px;
            outline: none;
            height: 40px;
            box-shadow: none;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            transition: all .3s;
        }
        .form .subscribe-form .submit-button2 {
            border-radius: 5px !important;
        }
    </style>

    <div id="purchase" class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-content">
                        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Product Inquiry</h1>
                        <div class="form wow fadeInUp" data-wow-delay="0.15s">
                            <form class="subscribe-form wow zoomIn" action="/assets/php/subscribe.php" method="post" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
                                <input class="name col-md-11 col-sm-12 col-xs-12" type="text" name="name" placeholder="Name*" autocomplete="off">
                                <input class="name col-md-11 col-sm-12 col-xs-12" type="text" name="organization" placeholder="Organization" autocomplete="off">
                                <input class="name col-md-11 col-sm-12 col-xs-12" type="email" name="email2" placeholder="Email*" autocomplete="off">
                                <input class="name col-md-11 col-sm-12 col-xs-12" type="text" name="phone" placeholder="Phone Number*" autocomplete="off">
                                <select name="model" class="name col-md-11 col-sm-12 col-xs-12" style="padding: 0">
                                    <option value="Aligator-1.0">Aligator-1.0</option>
                                    <option value="Aligator-2.0">Aligator-2.0</option>
                                    <option value="Aligator-3.0">Aligator-3.0</option>
                                    <option value="Aligator-4.0">Aligator-4.0</option>
                                </select>
                                <textarea id="_a12" class="col-md-11 col-sm-12 col-xs-12" rows="29" style="" name="add-comment" placeholder="Additional Comment"></textarea>
                                <div class="col-md-11 col-sm-12 col-xs-12" style="height: 100%;padding: 0 0 0 0;margin-bottom: 10px;">
                                	<center><div class="g-recaptcha" data-sitekey="6Lf7tRwUAAAAACPakeOsQX-vemHqKPKh95YRb5IN"></div></center>
                                </div>

                                <input id="pbtn" class="submit-button submit-button2" type="submit" value="Purchace Request">
                            </form>
                            <div class="success-message"></div>
                            <div class="error-message"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
<!--                     <img class="img-responsive wow fadeIn" src="/assets/images/pricing.jpg" alt="Image Pricing" /> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Subscribe Form -->
    <div class="cta-sub no-color">
        <div class="container">
            <div class="cta-inner">
                <h1 class="wow fadeInUp" data-wow-delay="0s">Love offers and discounts? Subscribe and save.</h1>
                <p class="wow fadeInUp" data-wow-delay="0.1s">
                    Just enter your email address and we'll take care of the rest.
                </p>
                <div class="form wow fadeInUp" data-wow-delay="0.15s">
                    <form class="subscribe-form wow zoomIn" action="/assets/php/subscribe.php" method="post" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
                        <input class="mail" type="email" name="email" placeholder="Join the wait list" autocomplete="off">
                        <input class="submit-button" type="submit" value="Subscribe">
                    </form>
                    <div class="success-message"></div>
                    <div class="error-message"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-circle" src="/assets/logos/ing-logo-sm.png" alt="Image" />
                    <p>
                        A technology company based in South Korea.
                        <br class="hidden-xs"> making the finest 3D scanning camera ever made.
                        <br class="hidden-xs"> You'll know our location if you really love us.
                    </p>

                    <div class="footer-text">
                        <p>
                            Copyright © 2016 INGVISION. All Rights Reserved.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="contact" class="contact text-center">
                        <i class="ion-ios-chatboxes-outline"></i>
                        <h1>Need Help ?</h1>
                        <p>
                            Contact our customer support if you have any
                            <br class="hidden-xs"> questions. We'll help you out.
                        </p>
                        <a href="mailto:support@ingvision.co.kr">support@ingvision.co.kr</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll To Top -->

    <a id="back-top" class="back-to-top page-scroll" href="#main">
        <i class="ion-ios-arrow-thin-up"></i>
    </a>

    <!-- Scroll To Top Ends-->

</div>
<!-- Main Section -->
@stop