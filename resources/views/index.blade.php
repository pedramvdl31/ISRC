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
                                <img src="/assets/images/sx1.jpg" alt="Scanned-model">
                                <div class="carousel-caption">
                                    <div class="ccap-wrapper">
                                        <h3>High Precision Scanning</h3>
                                        <p>Scanned images combined in 360° can be exported to all common 3D formats</p>       
                                    </div>
 
                                </div>
                            </div>
                            <div class="item">
                                <img src="/assets/images/sx2.jpg" alt="Scanned-model">
                                <div class="carousel-caption">
                                    <div class="ccap-wrapper">
                                        <h3>Structured Light</h3>
                                        <p>High-precision. High-speed.</p>
                                    </div>
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
        <span id="features"></span>
    </div>
    <div class="features">
        <div class="container">
            <div class="features-inner">
                <div class="row">
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
                </div>
            </div>

        </div>
        <span id="videosec"></span>
    </div>


    <div class="feature-sub" >
        <div class="container vcont" style="">
            <div class="sub-innerx" style="">
                <div class="col-md-6" style="">
                    <div class="features-list">
                        <h1 id="_x1" style="" class="wow fadeInUp" data-wow-delay="0.1s">High Speed IR 3D Camera</h1>
                        <ul id="_x2" style="" class="wow fadeInUp" data-wow-delay="0.1s">
                            <li>Accurate boundary estimation</li>
                            <li>Boundary inheritance from upper layer to lower layer</li>
                            <li>Region based inheritance for correspondence</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 vcont">
                    <div class="features-list">
                        <div class="da-img">
                            <iframe src="http://player.vimeo.com/video/203680587?title=0&amp;byline=0&amp;portrait=0&amp;" width="100%" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="review-section" class="review-sectionx">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <h1 class="wow fadeInUp" data-wow-delay="0">News and Articles</h1>
                    <div id="media-wrapper">
                        @foreach ($all_news as $all_new)
                            <div class="media"> 
                                <div class="media-body"> 
                                    <div class="row">
                                        <h4 style="float: left;" class="media-heading html-title-{{$all_new['id']}}">{{$all_new['title']}}</h4>
                                        <span style="float: right;" class="label label-default">{{$all_new['created_at_html']}}</span>
                                    </div> 
                                    <p>{{$all_new['description']}}&nbsp;&nbsp;<span data-id="{{$all_new['id']}}" class="label label-primary rdmore">Read More</span></p> 
                                </div>
                                <span class="html-content hide html-content-{{$all_new['id']}}">{!!$all_new['section_content']!!}</span>
                            </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="purchase" class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-content">
                        <h1 class="wow fadeInUp" data-wow-delay="0">Product Inquiry</h1>
                        <div class="form wow fadeInUp" data-wow-delay="0">
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
                                	<div class="g-recaptcha" data-sitekey="6Lf7tRwUAAAAACPakeOsQX-vemHqKPKh95YRb5IN"></div>
                                </div>

                                <input id="pbtn" class="submit-button submit-button2" type="submit" value="Purchace Request">
                            </form>
                            <div class="success-message"></div>
                            <div class="error-message"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding: 60px 0 0 0;">
                    <img class="img-responsive wow fadeIn" src="/assets/images/xf4.jpg" alt="Image Pricing" />
                </div>
            </div>
        </div>
    </div>


    <!-- Subscribe Form -->
    <div class="cta-sub no-color">
        <div class="container">
            <div class="cta-inner">
                <h1 class="wow fadeInUp" data-wow-delay="0s">Love offers and discounts? Subscribe and save.</h1>
                <p class="wow fadeInUp" data-wow-delay="0">
                    Just enter your email address and we'll take care of the rest.
                </p>
                <div class="form wow fadeInUp" data-wow-delay="0">
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