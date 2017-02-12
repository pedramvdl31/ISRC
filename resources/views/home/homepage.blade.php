@extends($layout)
@section('stylesheets')
      {!! Html::style('/assets/css/home/homepage.css') !!}
      <link rel="stylesheet" type="text/css" href="/assets/css/home/homepage-countdown.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/packages/magnific-popup/magnific-popup.css" media="screen">
@stop
@section('scripts')
    <script src="/packages/jquery_countdown/jquery.countdown.min.js"></script>
    <script src="/packages/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/homepage.js"></script>
@stop

@section('content')
    <!-- Header -->

    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="intro-message">
                        <h1 class="font-jah-h3">
                        @if(isset($isoff))
                            <span style="color: #f0ad4e">UBU Today</span>
                        @else
                            UBU Today
                        @endif
                        </h1>
                        @if(isset($slogans))
                            @foreach($slogans as $sk => $sv)
                                @if($sk == 0)
                                    <h3 this-id="{{$sk}}" class="act font-jah-h4 slogans slogan-{{$sk}} ">
                                        {{$sv}}
                                    </h3>
                                @else
                                    <h3 this-id="{{$sk}}" class="font-jah-h4 hide slogans slogan-{{$sk}} ">
                                        {{$sv}}
                                    </h3>
                                @endif
                            @endforeach
                        @endif
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons font-merienda" >
                            <li style="margin-top: 10px; width: 100%" >
                                <a id="Setmore_button_iframe" style="float:none" href="https://my.setmore.com/shortBookingPage/de585b6a-50cb-427f-afb3-ec2a7bcc126c"><img border="none" src="https://my.setmore.com/images/bookappt/SetMore-book-button.png"alt="Book an appointment with UBU Today using SetMore" /></a>  
                            </li>
                            <li>
                                <a class="btn btn-default btn-lg" href="#vid">What is UBU Today? ~ Watch Video</a>
                            </li>
                            <li style="margin-top: 10px;">
                                <a class="btn btn-default btn-lg" href="#rad">Truth Train Radio</a>
                            </li>
                        </ul>
                        <div align="center"><a class="button" style="padding: 8px 10px; border-radius: 10px; border: 1px solid rgb(91, 91, 91); border-image: none; color: rgb(255, 255, 255); display: inline-block; text-shadow: none; background-color: rgb(0, 0, 0);" href="http://visitor.r20.constantcontact.com/d.jsp?llr=tbjqsjxab&p=oi&m=1124529087539&sit=z6hiilrkb&f=7382cfa8-7590-4184-85d8-ed8ef623b65f">UBU Tribe Vibe - Subscribe</a><!-- BEGIN: Email Marketing you can trust -->
                        </div>
                    </div>


                </div>                
                <div class="col-lg-6 col-md-6">

                    <div class="intro-message" style="padding-top: 10%;">

                       <div class="slider-wrapper col-md-12 col-sm-12 col-xs-12 pull-left" style="max-height: 500px; overflow: hidden;">
                            @if($slider_option == true)
                                   {!! View::make('partials.homepage.slider')
                                        ->with('slider_images',$slider_images)
                                        ->with('param1_lowered',$param1_lowered)
                                        ->__toString()
                                   !!}
                            @endif
                       </div>

                    </div>


                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->






    
    <!-- Page Content -->
    <a  name="rad"></a>
    <div class="content-section-b" style="padding: 5px 0;
">
        
        <div class="container">
            <div class="row ">
                <div class="clock_cd textcenter">
                    <center><h2 class="font-jah-h4-no-shad" style="color: #777" >Wendy Morrison's Survivor Episode on Discovery <a target="_blank" href="http://www.amazon.com/Sensory-Recall/dp/B01CJ9WJNA/ref=sr_1_fkmr0_1?s=movies-tv&ie=UTF8&qid=1462720673&sr=1-1-fkmr0&keywords=House+of+Horrors+Kidnapped+season+3+episode+11"><i style="font-size: 34px;" class="glyphicon glyphicon-new-window"></i></a></h2></center>
                    

                <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Z3xVyETYT_A" frameborder="0" allowfullscreen></iframe>
                </div>    
                <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3UsaZ5WBH7Y" frameborder="0" allowfullscreen></iframe>
                </div>                
                <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WHhQzeJhPEU" frameborder="0" allowfullscreen></iframe>
                </div>



                </div>
                <h4 class="section-heading font-jah-h4-no-shad"><small>Jo Morris on Truth Train Radio 4</small></h4>
                <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EocV3e-Q8Y8" frameborder="0" allowfullscreen></iframe>
                </div>
                <a  name="vid"></a>
                <h4 class="section-heading font-jah-h4-no-shad"><small>UBU Today Video</small></h4>
                    <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aGIrOLyGna0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>

  <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row ">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <center style="margin-top: 20px"><div class="test-popup-link" href="/assets/images/img/wendy-2.jpg" style="cursor: zoom-in;">
                        <img class="img-responsive" src="/assets/images/img/wendy-2.jpg" style="max-width:300px;max-height: 200px ">
                    </div></center>
                    <h2 class="section-heading font-jah-h4-no-shad">Wendy Jo Morrison aka "Jo Morris"<br><small>UBU Today Founder</small></h2>
                    <p class="lead">Wendy is an avid advocate for alternative healing
                        modalities specifically related to trauma resolution and disease
                        management. <a href="http://wendyjomorrison.com/">Read More</a></p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6" style="color: white">
                        <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"
                        SRC="http://syndicate.dailyom.com/cgi-bin/syndicate/syndicate.cgi?headline=0">
                        </script>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

      <div class="container">

            <div class="row">
            <style type="text/css">
            h4{
                color: white;
            }
            .ei{
                transition: all 0.5s ease;
            }
            .ei:hover{

                 -moz-transform: scale(1.1);
                  -webkit-transform: scale(1.1);
                  transform: scale(1.1);
            }
            </style>
            <style type="text/css">
            .fa-star-o{
                color:#FFA500;
            }
            </style>
                @if(isset($_events))
                    @foreach($_events as $ek => $ev)
                        @if($ek==0)
                            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6 text-center">
                                <div>
                                    <img src="/assets/images/events/perm/{!!$ev['image_srcs']!!}" style="border: 1px solid white;" height="180px" width="180px" class="img-circle ei">    
                                </div>

                                <div class="clearfix"></div>
                                <h2 class="section-heading font-jah-h5-no-shad">{!!$ev['title']!!}</h2>
                                <h4 style="color:white">{!!$ev['new_description']!!}</h4>
                                <p><a href="{!!route('events_ind',$ev['id'])!!}"><i class="fa fa-star-o"></i>&nbspGo to Events&nbsp<i class="fa fa-star-o"></i></a></p>
                            </div>
                        @else
                            <div class="col-lg-5 col-sm-pull-6 col-sm-6 text-center">
                                <img style="border: 1px solid white;" src="/assets/images/events/perm/{!!$ev['image_srcs']!!}" height="180px" width="180px" class="ei img-circle">
                                <div class="clearfix"></div>
                                <h2 class="section-heading font-jah-h5-no-shad">{!!$ev['title']!!}</h2>
                                <h4 style="color:white">{!!$ev['new_description']!!}</h4>
                                <p><a href="{!!route('events_ind',$ev['id'])!!}"><i class="fa fa-star-o"></i>&nbspGo to Events&nbsp<i class="fa fa-star-o"></i></a></p>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
      </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->


@stop