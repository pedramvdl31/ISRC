<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Multiple System Atrophy,
        MSA,
        autoimmune diseases,
        PTSD,
        Adrenal Insufficiency,
        Parole,
        Shamanism,
        Shaman,
        Tantra,
        Tantric Massage,
        Retreats,
        Spiritual,
        Events,
        Workshops,
        Healing,
        Holistic,
        Alternative Modalities,
        OSHO,
        Mediation,
        Yoga,
        Chinese medicine,
        Acupressure,
        Tibetan Bowls,
        Cuddle party">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/ubu-favicon.png">

    <title>UBU Today</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- sub menu -->
    <link rel="stylesheet" href="/packages/bootstrap-submenu/dist/css/bootstrap-submenu.min.css">
    <!-- Custom CSS -->
    <link href="/assets/css/pages/website_pages/landing-page.css" rel="stylesheet">
    <link href="/assets/css/fonts.css" rel="stylesheet">
    <link href="/packages/responsiveSlider/responsiveslides.css" rel="stylesheet">

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <style type="text/css">
        #scrollUp {
            bottom: 35px;
            right: 11px;
            padding: 10px 20px;
            background: #555;
            color: #fff;
            z-index: 10 !important;
        }
        .btn{
            white-space: normal !important;
        }
    </style>

    @yield('stylesheets')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<style type="text/css">
    @media (min-width: 768px)
    {
        .navbar-right {
    float: right!important;
    margin-right: 10px;
}
    }

</style>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NX45XJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NX45XJ');</script>
<!-- End Google Tag Manager -->
<body 
@if(!isset($is_home))
 style="background-color:black" 
@endif

>


@if($smt == 1)


    @if(isset($is_home))
      @if($is_home==1)
        <div id="audio-container"></div>
      @endif
    @endif
    <style type="text/css">

        /* The ribbons */

        .corner-ribbon{
          z-index: 99999 ;
          width: 200px;
          background: #2c7;          
          position: absolute;
            top: 26px;
            right: -59px;
          text-align: center;
          line-height: 31px;
          letter-spacing: 1px;
          color: #f0f0f0;
          transform: rotate(-45deg);
          -webkit-transform: rotate(-45deg);
        }

        /* Custom styles */

        .corner-ribbon.sticky{
          position: fixed;
        }

        .corner-ribbon.shadow{
          box-shadow: 0 0 3px rgba(0,0,0,.3);
        }

        .corner-ribbon.top-right{
          top: 26px;
          right: -59px;
          left: auto;
          transform: rotate(45deg);
          -webkit-transform: rotate(45deg);
        }

        /* Colors */

        .corner-ribbon.white{background: #f0f0f0; color: #555;}
        .corner-ribbon.black{background: #333;}
        .corner-ribbon.grey{background: #999;}
        .corner-ribbon.blue{background: #39d;}
        .corner-ribbon.green{background: #3D72A4;}
        .corner-ribbon.turquoise{background: #1b9;}
        .corner-ribbon.purple{background: #95b;}
        .corner-ribbon.red{background: #e43;}
        .corner-ribbon.orange{background: #e82;}
        .corner-ribbon.yellow{background: #ec0;}

        /* Extra Small Devices, Phones */ 
        @media only screen and (max-width : 480px) {
            .corner-ribbon.top-right {
                top: 46px;
                right: -50px;
            }
            .corner-ribbon {
                width: 221px;
                line-height: 29px;
            }
        }

        /* Custom, iPhone Retina */ 
        @media only screen and (max-width : 320px) {
            .corner-ribbon.top-right {
                top: 46px;
                right: -50px;
            }
            .corner-ribbon {
                width: 221px;
                line-height: 33px;
            }  
        }
        .nav>li>a {
            padding: 15px 6px !important;
        }
    </style>
    <div class="corner-ribbon top-right sticky green"><strong><a href="{!!route('get-donate')!!}" style="color: #f0f0f0;">Pay it Forward</a></strong></div>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img id="pen-logo" class="pull-left" src="/assets/images/brand_image/perm/main-logo.jpg" style="width: 33px;margin-right:9px;">
                <a class="navbar-brand topnav" href="/">UBU Today</a>
                @if(isset($is_home))
                  @if($is_home==1)
                        <a style="line-height:49px;cursor:pointer" id="mute-btn" class="hide sound-btns" > <img class="sound-btns-img" src="/assets/images/icons/mute-icon.png" width="19px" ></a>
                        <a style="line-height:49px;cursor:pointer" id="sound-btn"  class="sound-btns" > <img class="sound-btns-img" src="/assets/images/icons/sound-icon.png" width="19px" ></a>
                  @endif
                @endif

            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @foreach($menus as $menukey => $menuvalue)

                        @if($menuvalue['type']==2)
                            <li class="dropdown" style="cursor: pointer;">
                                <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="true">
                                  {!!$menuvalue['title']!!}<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    @foreach($menus as $menukeys => $menuvalues)
                                        @if($menuvalues['type']==3 && $menuvalues['parent_id']==$menuvalue['id'])
                                            <li class="dropdown-submenu">
                                                <a tabindex="0">{!!$menuvalues['title']!!}</a>
                                                <ul class="dropdown-menu ">
                                                    @foreach($menus as $menukeyt => $menuvaluet)
                                                        @if($menuvaluet['type']==1 && $menuvaluet['parent_id']==$menuvalues['id'])
                                                            
                                                            @if($menuvaluet['out_link']==0)
                                                                <li><a href="/view/{!!$menuvaluet['param_one']!!}/{!!$menuvaluet['param_two']!!}" tabindex="0">{!!$menuvaluet['title']!!}</a></li>
                                                            @elseif($menuvaluet['out_link']==1)
                                                                <li><a href="{!!$menuvaluet['param_two']!!}" tabindex="0">{!!$menuvaluet['title']!!}</a></li>
                                                            @endif

                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @elseif($menuvalues['type']==1 && $menuvalues['parent_id']==$menuvalue['id'])
                                            @if($menuvalues['out_link']==0)
                                                <li><a tabindex="0" href="/view/{!!$menuvalues['param_one']!!}/{!!$menuvalues['param_two']!!}">{!!$menuvalues['title']!!}</a></li>
                                            @elseif($menuvalues['out_link']==1)
                                                <li><a tabindex="0" href="{!!$menuvalues['param_two']!!}">{!!$menuvalues['title']!!}</a></li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @elseif($menuvalue['type']==1 && $menuvalue['parent_id']==0 || $menuvalue['parent_id']==null)
                            <li>
                                @if($menuvalue['out_link']==0)
                                    <a href="/view/{!!$menuvalue['param_two']!!}">{!!$menuvalue['title']!!}</a>
                                @elseif($menuvalue['out_link']==1)
                                    <a href="{!!$menuvalue['param_two']!!}">{!!$menuvalue['title']!!}</a>
                                @endif
                            </li>
                        @endif

                    @endforeach


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    @yield('content')

    <!--Start of Zopim Live Chat Script--> <script type="text/javascript"> window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s= d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set. _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8"); $.src="//v2.zopim.com/?3guFuLi0Br6htBSprOZ8jXpwZs1FmEa0";z.t=+new Date;$. type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script"); </script> <!--End of Zopim Live Chat Script-->
    

    <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="col-md-12  col-sm-12 col-xs-12">

                <div class="col-lg-6">
                    <h2 class="font-jah-h4">Connect to UBU Today:</h2>

                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://www.facebook.com/ubutoday/" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i>&nbsp<span class="network-name">Facebook</span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ubutoday" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i>&nbsp<span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/personnelbranding" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp<span class="network-name">Youtube</span></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+UBUTODAYCocoonMoiUS/posts" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i>&nbsp<span class="network-name">Google+</span></a>
                        </li>
                        <li style="margin-top:20px;">
                            <a href="http://www.meetup.com/UBUTODAY/" class="btn btn-default btn-lg" target="_blank">
                            <img src="/assets/images/icons/meetup.png" width="20px">&nbsp<span class="network-name">MeetUp</span></a>
                        </li>
                        <li style="margin-top:20px;">
                            <a id="Setmore_button_iframe" href="https://my.setmore.com/shortBookingPage/de585b6a-50cb-427f-afb3-ec2a7bcc126c" class="btn btn-success btn-lg" target="_blank"><span class="network-name">Book Appointment</span></a>
                        </li>
                    </ul>
                </div>



                    <!-- BEGIN: Constant Contact Email List Form Button --><div  align="center"><a class="button" style="margin-top: 10px;padding: 8px 10px; border-radius: 10px; border: 1px solid rgb(91, 91, 91); border-image: none; color: rgb(255, 255, 255); display: inline-block; text-shadow: none; background-color: rgb(0, 0, 0);" href="http://visitor.r20.constantcontact.com/d.jsp?llr=tbjqsjxab&p=oi&m=1124529087539&sit=z6hiilrkb&f=7382cfa8-7590-4184-85d8-ed8ef623b65f">UBU Tribe Vibe - Subscribe</a></div>
            </div>


        </div>
        <!-- /.container -->

    </div>

    <!-- /.banner -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="{!!route('get-videos')!!}">Moments Captured</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <script id="setmore_script" type="text/javascript" src="https://my.setmore.com/js/iframe/setmore_iframe.js"></script>
                            <a id="Setmore_button_iframe" href="https://my.setmore.com/shortBookingPage/de585b6a-50cb-427f-afb3-ec2a7bcc126c">Book Appointment</a>  
                        </li>
                    </ul>
                    <p class="copyright text-muted small " style="color:white">Copyright &copy; <a target="_blank" href="http://www.webprinciples.com/">Webprinciples</a> 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Load js libs only when the page is loaded. -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    
    <script src="/assets/js/fjquery1-11-3.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/packages/bootstrap-submenu/dist/js/bootstrap-submenu.min.js" defer></script>
    <script src="/assets/js/jquery.scrollUp.js"></script>
    <script src="/assets/js/pages/website_pages/landing-page.js"></script>
    <script src="/packages/responsiveSlider/responsiveslides.js"></script>
    <script src="/assets/js/home/home.js"></script>


    @yield('scripts')

@elseif($smt == 2)

    <style>
      body { text-align: center; padding: 150px; }
      h1 { font-size: 50px; }
      body { font: 20px Helvetica, sans-serif; color: #333; }
      article { display: block; text-align: left; width: 650px; margin: 0 auto; }
      a { color: #dc8100; text-decoration: none; }
      a:hover { color: #333; text-decoration: none; }
    </style>

    <article>
        <h1>We are currently working on something awesome. Stay tuned!</h1>
        <div>
            <p>Sorry for the inconvenience. We&rsquo;ll be back online shortly!</p>
            <p>&mdash; UBUTODAY</p>
        </div>
    </article>

@endif



</body>

</html>
