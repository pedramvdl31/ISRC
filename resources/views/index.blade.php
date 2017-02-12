@extends($layout)
@section('stylesheets')

@stop
@section('scripts')

@stop

@section('content')
<!-- Carousel Home -->
<div class="wrap-home-header">
    <div class="container">
        <div class="lcd">
            <!-- change the value of data-interval to change the speed (milliseconds) --> 
            <section id="carousel-home" class="carousel slide " data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-home" data-slide-to="1"></li>
                    <li data-target="#carousel-home" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <article class="item active">
                        <div class="row">
                            <div class="col-md-8 col-md-push-4">
                                <div class="video hidden-xs hidden-sm">
                                    <iframe src="http://player.vimeo.com/video/102998774?title=0&amp;byline=0&amp;portrait=0&amp;"></iframe>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-pull-8">
                                <div class="carousel-caption">
                                    <h2>Intelligent Systems Research Institute</h2>
                                    <ul>
                                        <li>Lorem ipsum Nostrud ad nulla est in</li>
                                        <li>Lorem ad nulla est in...</li>
                                        <li>Lorem ad nulla est inLorem ad nulla est in.</li>
                                        <li>Lorem ad</li>
                                        <li>nulla est in</li>
                                    </ul> 
                                    <a href="#" class="btn btn-robotic-inverse">Publications</a>
                                    <a href="#" class="btn btn-robotic-inverse">Contact</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item">
                        <div class="row">
                            <div class="col-md-8 col-md-push-4">
                                <div class="video hidden-xs hidden-sm">
                                    <iframe src="http://player.vimeo.com/video/203680587?title=0&amp;byline=0&amp;portrait=0&amp;"></iframe>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-pull-8">
                                <div class="carousel-caption">
                                    <h2>Intelligent Systems Research Institute</h2>
                                    <ul>
                                        <li>Lorem ipsum Nostrud ad nulla est in</li>
                                        <li>Lorem ad nulla est in...</li>
                                        <li>Lorem ad nulla est inLorem ad nulla est in.</li>
                                        <li>Lorem ad</li>
                                        <li>nulla est in</li>
                                    </ul> 
                                    <a href="#" class="btn btn-robotic-inverse">Publications</a>
                                    <a href="#" class="btn btn-robotic-inverse">Contact</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item">
                        <div class="row">
                            <div class="col-md-8 col-md-push-4">
                                <div class="video hidden-xs hidden-sm">
                                    <iframe src="http://player.vimeo.com/video/203680893?title=0&amp;byline=0&amp;portrait=0&amp;"></iframe>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-pull-8">
                                <div class="carousel-caption">
                                    <h2>Intelligent Systems Research Institute</h2>
                                    <ul>
                                        <li>Lorem ipsum Nostrud ad nulla est in</li>
                                        <li>Lorem ad nulla est in...</li>
                                        <li>Lorem ad nulla est inLorem ad nulla est in.</li>
                                        <li>Lorem ad</li>
                                        <li>nulla est in</li>
                                    </ul> 
                                    <a href="#" class="btn btn-robotic-inverse">Publications</a>
                                    <a href="#" class="btn btn-robotic-inverse">Contact</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div> <!-- carousel-inner -->
            </section> <!-- carousel-home -->
        </div> <!-- lcd -->
    </div> <!-- container -->
</div> <!-- wrap-header-home -->

    <!-- home-features -->
<div class="wrap-home-features">
    <div class="container">
        <section class="home-features">
            <div class="row">
                <style type="text/css">
/*                  .ph{
                    height: 150px !important;
                    overflow: hidden;
                  }
                  .h2h{
                    height: 100px !important;
                    overflow: hidden;
                  }*/
                </style>
                <div class="col-md-3 col-sm-6">
                    <article class="home-features-item">
                        <i class="icon-globe"></i>
                        <h2 class="h2h">LOREM IPSUM</h2>
                        <p class="ph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a class="btn btn-default">Read More</a>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6">
                    <article class="home-features-item">
                        <i class="icon-html5"></i>
                        <h2 class="h2h">LOREM IPSUM</h2>
                        <p class="ph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a class="btn btn-default">Read More</a>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6">
                    <article class="home-features-item">
                        <i class="icon-beaker"></i>
                        <h2 class="h2h">LOREM IPSUM</h2>
                        <p class="ph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a class="btn btn-default">Read More</a>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6">
                    <article class="home-features-item">
                        <i class="icon-group"></i>
                        <h2 class="h2h">LOREM IPSUM</h2>
                        <p class="ph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a class="btn btn-default">Read More</a>
                    </article>
                </div>
            </div> <!-- row -->
        </section> <!-- home-features -->
    </div> <!-- container -->
</div> <!-- wrap-home-features -->

<div class="container">
        <div class="row">                             
            <div class="col-lg-8 col-md-12">
                <section class="home-works">            
                    <h1 class="section-title">Latest Works</h1>
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <figure class="caption cs-style-3">
                                <img src="/assets/img/med1.jpg" alt="img04">
                                <figcaption>
                                    <h3>BigData</h3>
                                    <span>ISRI</span>
                                    <a class="btn btn-robotic-inverse" href="#">Take a look</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <figure class="caption cs-style-3">
                                <img src="/assets/img/med2.jpg" alt="img01">
                                <figcaption>
                                    <h3>Vanet</h3>
                                    <span>Jacob Cummings</span>
                                    <a class="btn btn-robotic-inverse" href="#">Take a look</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <figure class="caption cs-style-3">
                                <img src="/assets/img/med3.jpg" alt="img02">
                                <figcaption>
                                    <h3>SDN</h3>
                                    <span>ISRI</span>
                                    <a class="btn btn-robotic-inverse" href="#">Take a look</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <figure class="caption cs-style-3">
                                <img src="/assets/img/med4.png" alt="img02">
                                <figcaption>
                                    <h3>SDN</h3>
                                    <span>ISRI</span>
                                    <a class="btn btn-robotic-inverse" href="#">Take a look</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>    
                </section> <!-- home-works -->
            </div> <!-- col-md-8 -->
        </div> <!-- row -->
    


    <div class="row">
        <div class="col-md-12">
            <section class="team-home">
                <h1 class="section-title">Our Team</h1>
                <p class="lead">&laquo;Lorem ipsum Eu velit irure velit officia ut sit irure excepteur aliquip velit nisi aute aliqua velit amet nostrud occaecat nisi ea consequat.&raquo;</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="team-home-item">
                            <div class="team-home-img">
                                <img src="/assets/img/pip1.png" alt="">
                            </div>
                            <div class="team-home-content">
                                <h3>Sukhan Lee - Professor and Director</h3>
                                <p>Lorem ipsum Culpa qui eu dolore non culpa pariatur mollit qui sint occaecat nisi ea consequat occaecat dolor nisi nostrud dolor consectetur occaecat.</p>
                                <p>Eiusmod laboris aliqua velit amet nostrud in magna reprehenderit Excepteur tempor amet reprehenderit voluptate proident consectetur elit.</p>
                            </div>
                            <div class="team-home-footer">
                                <a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-home-item">
                            <div class="team-home-img">
                                <img src="/assets/img/pip2.jpg" alt="">
                            </div>
                            <div class="team-home-content">
                                <h3>Pariatur Mollit - Postdoctoral</h3>
                                <p>Lorem ipsum Culpa qui eu dolore non culpa pariatur mollit qui sint occaecat nisi ea consequat occaecat dolor nisi nostrud dolor consectetur occaecat.</p>
                                <p>Eiusmod laboris aliqua velit amet nostrud in magna reprehenderit Excepteur tempor amet reprehenderit voluptate proident consectetur elit.</p>
                            </div>
                            <div class="team-home-footer">
                                <a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-home-item">
                            <div class="team-home-img">
                                <img src="/assets/img/pip3.jpg" alt="">
                            </div>
                            <div class="team-home-content">
                                <h3>Pariatur Mollit - Postdoctoral</h3>
                                <p>Lorem ipsum Culpa qui eu dolore non culpa pariatur mollit qui sint occaecat nisi ea consequat occaecat dolor nisi nostrud dolor consectetur occaecat.</p>
                                <p>Eiusmod laboris aliqua velit amet nostrud in magna reprehenderit Excepteur tempor amet reprehenderit voluptate proident consectetur elit.</p>
                            </div>
                            <div class="team-home-footer">
                                <a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- team-home -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-7">
            <section class="home-about">
                <div class="section-title">
                    <h1>About us</h1>
                </div>
                <p>Lorem ipsum Non magna in sit in Excepteur elit amet minim do eu quis ut sed fugiat sint ut est velit ut dolor sunt et veniam in culpa dolor cupidatat in incididunt laborum occaecat eu deserunt est amet tempor <strong>proident velit irure</strong> veniam elit mollit dolor laborum exercitation exercitation et minim est consectetur minim dolore aute veniam Duis quis dolor non ea irure ea Duis qui culpa culpa irure Ut consectetur sit dolor dolor labore.</p>
                <p>cillum ut reprehenderit proident fugiat ad et non id ea cupidatat veniam id ex et mollit ut Excepteur cupidatat ea anim tempor sunt quis ut id sunt tempor nostrud quis tempor do incididunt eu enim et labore nulla veniam mollit <strong>eiusmod</strong> dolore in enim in ea veniam ullamco aliquip eu laborum esse laborum qui non labore dolor dolore est mollit laboris laborum qui dolor dolore laboris in reprehenderit veniam ex quis Excepteur nostrudin voluptate proident consectetur elit.</p>
            </section>
        </div>
        <div class="col-lg-4 col-md-5">
            <section class="home-clients">
                <div class="section-title">
                    <h1>Our Publications</h1>
                </div>
                <a href="#"><img src="/assets/img/cc.jpg" class="img-responsive" alt="Image"></a>
                <a href="#"><img src="/assets/img/cc.jpg" class="img-responsive" alt="Image"></a>
                <a href="#"><img src="/assets/img/cc.jpg" class="img-responsive" alt="Image"></a>
                <a href="#"><img src="/assets/img/cc.jpg" class="img-responsive" alt="Image"></a>
                <a href="#"><img src="/assets/img/cc.jpg" class="img-responsive" alt="Image"></a>
                <a href="#"><img src="/assets/img/cc.jpg" class="img-responsive" alt="Image"></a>
            </section>
        </div>
    </div> <!-- row -->

    <!-- latest-posts -->
    <section class="latest-post">
        <h1 class="section-title">Latest Blog Entries</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="home-post-item"> 
                    <a href="#"><img src="/assets/img/med1.jpg" class="img-responsive" alt="Image"></a>
                    <h3><a href="#">Lorem ipsum Mollit culpa qui cillum</a></h3>
                    <p>Lorem ipsum Mollit culpa qui cillum do sunt exercitation in minim reprehenderit veniam ex quis Excepteur nostrudin reprehenderit nisi nisi non elit sed velit reprehenderit nisi nisi non elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="home-post-item">
                    <a href="#"><img src="/assets/img/med3.jpg" class="img-responsive" alt="Image"></a>
                    <h3><a href="#">Lorem ipsum Mollit culpa qui cillum</a></h3>
                    <p>Lorem ipsum Mollit culpa qui cillum do sunt exercitation in minim reprehenderit veniam ex quis Excepteur nostrudin reprehenderit nisi nisi non elit sed velit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="home-post-item">
                    <a href="#"><img src="/assets/img/med4.png" class="img-responsive" alt="Image"></a>
                    <h3><a href="#">Lorem ipsum Mollit culpa qui cillum</a></h3>
                    <p>Lorem ipsum Mollit culpa qui cillum do sunt exercitation in minim reprehenderit veniam ex quis Excepteur nostrudin reprehenderit nisi nisi non elit sed velit magna incididunt.</p>
                </div>
            </div>
        </div> <!-- row -->
    </section> <!-- latest-post -->
</div> <!--container -->
@stop