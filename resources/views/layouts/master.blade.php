<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ISRI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <link href="/assets/css/animations.css" rel="stylesheet" media="screen">
    <link href="/assets/css/style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="/assets/css/component.css" />

    @yield('stylesheets')
</head>

<body>
    <!-- navbar navbar-robotic -->
    <nav class="navbar navbar-robotic navbar-static-top">
        <div class="container">
            <header class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ISRI</a>
            </header> <!-- navbar-header -->

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-nav-robotic navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html"><i class="icon-user"></i> Professor</a></li>
                            <li><a href="pricing.html"><i class="icon-group"></i> Students</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="index.html">Project</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Publication <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="typography.html"><i class="icon-font"></i> Paper</a></li>
                            <li><a href="components.html"><i class="icon-th-large"></i> Patent</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="index.html">Notice</a></li>
                    <li class=""><a href="index.html">Contact</a></li>

                </ul> <!-- navbar-nav -->
            </div><!--navbar-collapse -->
        </div> <!--container -->
    </nav> <!-- navbar-robotic -->



    @yield('content')


    <aside id="last-widgets">
        <div class="container">
            <div class="col-md-4">
                <section class="footer-widget">
                    <h3>Sitemap</h3>
                    <ul class="footer-sitemap two_cols">
                        <li><a href="#"><i class="icon-angle-right"></i> Home</a></li>
                        <li><a href="#"><i class="icon-angle-right"></i> Blog</a></li>
                        <li><a href="#"><i class="icon-angle-right"></i>Portafolio</a></li>
                        <li><a href="#"><i class="icon-angle-right"></i>Pricing</a></li>
                        <li><a href="#"><i class="icon-angle-right"></i>About us</a></li>
                        <li><a href="#"><i class="icon-angle-right"></i>Contact</a></li>
                    </ul>
                    <h3>Monthly Newsletter</h3>
                    <p>Lorem ipsum Amet fugiat elit nisi anim mollit in labore ut esse Duis ullamco ad dolor veniam velit.</p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email Adress">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="button">Subscribe</button>
                        </span>
                    </div><!-- /input-group -->
                </section>
            </div>
            <div class="col-md-4">
                <section class="footer-widget">
                    <h3>Recent Post blog</h3>
                    <div class="media footer-post">
                        <a class="pull-left" href="#">
                            <img width="65px" class="media-object" src="/assets/img/b1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <a  href="#">Bigdata</a>
                            <span class="footer-post-date">December 15, 2017</span>
                        </div>
                    </div> <!-- media -->
                    <div class="media footer-post">
                        <a class="pull-left" href="#">
                            <img width="65px" class="media-object" src="/assets/img/b2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <a  href="#">VANET</a>
                            <span class="footer-post-date">January 22, 2017</span>
                        </div>
                    </div> <!-- media -->
                    <div class="media footer-post">
                        <a class="pull-left" href="#">
                            <img width="65px" class="media-object" src="/assets/img/b3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <a  href="#">SDN</a>
                            <span class="footer-post-date">January 7, 2017</span>
                        </div>
                    </div> <!-- media -->
                </section>
            </div>
            <div class="col-md-4">
                <section class="footer-widget">
                    <h3 class="logo"><span>ISR</span>I</h3>
                    <address>
                        Sungkyunkwan University,<br>
                        300 Cheoncheon-dong, jangan-gu,<br>
                         Suwon, Gyeonggi-do, 440-746, Korea<br>
                        Phone: +82-31-299-6471 <br>
                        Fax: - +82-31-299-6479 <br>
                        Email: <a href="mailto:navvis@skku.edu">navvis@skku.edu</a>
                    </address>
                    <div class="footer-social">
                        <h3>Social media</h3>
                        <a href="#" class="i-rss"><i class="icon-rss"></i></a>
                        <a href="#" class="i-google"><i class="icon-google-plus"></i></a>
                        <a href="#" class="i-twitter"><i class="icon-twitter"></i></a>
                        <a href="#" class="i-facebook"><i class="icon-facebook"></i></a>
                        <a href="#" class="i-pinterest"><i class="icon-pinterest"></i></a>
                        <a href="#" class="i-linkedin"><i class="icon-linkedin"></i></a>
                    </div>
                </section>
            </div>
        </div>
    </aside> <!-- last-widgets -->

    <footer id="footer">
        <div class="container">
            <p>&copy; 2017 <a href="#">ISRI(WebPrinciples)</a> All rights reserved.</p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    
    <script src="/assets/js/holder.js"></script>
    <script src="/assets/js/modernizr.custom.js"></script>
    <script src="/assets/js/toucheffects.js"></script>
    <script>
        $('#carousel-home').carousel()
    </script>
    @yield('scripts')
</body>

</html>
