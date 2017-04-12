<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lorem Multipurpose Landing Page Template</title>
    <link rel="icon" href="/assets/logos/favicon.png" type="image/png" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lorem Multipurpose Landing Page Template">
    <meta name="keywords" content="Lorem HTML Template, Lorem Landing Page, Landing Page Template">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Resource style -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <!-- Resource style -->
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    @yield('stylesheets')
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <nav class="navbar mynavebar navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a style="padding-left: 0" class="navbar-brand page-scroll" href="#main">
                            <div style="width: 100px;text-align: center;">
                                <span>ING</span>
                                </br>
                                <span>VISION</span>
                            </div>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a class="page-scroll" href="#main">Product</a>
                            </li>
                            <li><a class="page-scroll" href="#features">Features</a>
                            </li>
                            <li><a class="page-scroll" href="#videosec">Video</a>
                            </li>
                            <li><a class="page-scroll" href="#purchase">Purchase</a>
                            </li>
                            <li><a class="page-scroll" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

        @yield('content')

    </div>
    <!-- Wrapper-->


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Features & Specifications</h4>
                </div>
                <div class="modal-body">

                    <div class="features-listx">
                        <ul class="wowx">
                            <li>- The structured light 3D camera use one projector and one camera to capture 3D points of the objects and scene. With the advantages of projecting patterns, this type of 3D camera can capture various surface properties, including nontextured surface where stereo camera cannot, and it is very accurate and robust.</li>
                            <p>&nbsp;</p>
                            <li>- The accurate pattern boundary estimation technique allows correctly locating the boundary of the light pattern on surface even when it is distorted by variation in surface reflectance.</li>
                            <p>&nbsp;</p>
                            <li>- The Boundary Inheritance Codec is developed for robustly estimating the correspondences between projector and camera, to make accurate triangulation for 3D point cloud. </li>
                            <p>&nbsp;</p>
                            <li>- Auto-exposure control technique is applied to help the camera captures objects in different lighting condition. </li>
                            <p>&nbsp;</p>
                            <li>- Structured light based 3D camera can provide very dense, high accuracy, and low noise 3D point cloud of the object or scene. </li>
                            <p>&nbsp;</p>
                            <li>- With the developed technologies, the camera can work well in different lighting condition. </li>
                            <p>&nbsp;</p>
                            <li>- The camera can provide not only the 3D point cloud but also the 2D color image; there is no need to do alignment between 3D points and 2D image.</li>
                            <p>&nbsp;</p>
                            <li>- A complete User Interface program as well as C++ programming API are provided to customers.</li>

                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="/assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins.js"></script>
    <script type="text/javascript" src="/assets/js/menu.js"></script>
    <script type="text/javascript" src="/assets/js/custom.js"></script>
    <script type="text/javascript" src="/assets/js/index.js"></script>
    @yield('scripts')
</body>

</html>