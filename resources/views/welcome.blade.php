    @extends('layouts.header')

@yield('content')

<div id="container">

    <!--Set your own slider options. Look at the v_RevolutionSlider() function in 'theme-core.js' file to see options-->
    <div class="home-slider-wrap fullwidthbanner-container" id="home">
        <div class="v-rev-slider" data-slider-options='{ "startheight": 700 }'>
            <ul>
                
                <li data-transition="fade" data-slotamount="7" data-masterspeed="600">

                    <img src="img/slider/image2.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption v-caption-big-white sfl stl"
                    data-x="450"
                    data-y="245"
                    data-speed="600"
                    data-start="600"
                    data-easing="Power1.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0"
                    data-endelementdelay="0"
                    data-endspeed="300">
                    YOUR BEST CHOICE
                    <br />
                    TO PRINT STUFF
                </div>

                <div class="tp-caption v-caption-h1 sfl stl"
                data-x="450"
                data-y="360"
                data-speed="700"
                data-start="1200"
                data-easing="Power1.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0"
                data-endelementdelay="0"
                data-endspeed="300">
                Built on cutting edge technology.<br>
                Print easily using PrintIT.
            </div>

          

    <div class="tp-caption sfl stl"
    data-x="110"
    data-y="130"
    data-speed="600"
    data-start="1800"
    data-easing="Power1.easeInOut"
    data-splitin="none"
    data-splitout="none"
    data-elementdelay="0"
    data-endelementdelay="0"
    data-endspeed="300">
    <!--<a href='#' class="btn v-btn v-third-light">GET IT NOW!</a>-->
    <img src="img/iphone2.png" />
</div>
</li>

</ul>
</div>

<div class="shadow-right"></div>
</div>

<br>

<div class="container">
    <div class="row center v-counter-wrap">
        <div class="col-sm-3">
            <i class="fa fa-building v-icon icn-holder"></i>
            <div class="v-counter">
                <div class="count-number" data-from="0" data-to="{{$totalPrints}}" data-speed="1500" data-refresh-interval="25"></div>
                <div class="count-divider"><span></span></div>
                <h6 class="v-counter-text">All time printed copies</h6>
            </div>
        </div>
        <div class="col-sm-3">
            <i class="fa fa-flash v-icon icn-holder"></i>
            <div class="v-counter">
                <div class="count-number" data-from="0" data-to="{{$coloredPrints}}" data-speed="1500" data-refresh-interval="25"></div>
                <div class="count-divider"><span></span></div>
                <h6 class="v-counter-text">All time printed Colored Copies</h6>
            </div>
        </div>
        <div class="col-sm-3">
            <i class="fa fa-laptop v-icon icn-holder"></i>
            <div class="v-counter">
                <div class="count-number" data-from="0" data-to="{{$blackPrints}}" data-speed="1500" data-refresh-interval="25"></div>
                <div class="count-divider"><span></span></div>
                <h6 class="v-counter-text">All time printed Black n White</h6>
            </div>
        </div>

        <div class="col-sm-3">
            <i class="fa fa-umbrella v-icon icn-holder"></i>
            <div class="v-counter">
                <div class="count-number" data-from="0" data-to="{{$usersCount}}" data-speed="1500" data-refresh-interval="25"></div>
                <div class="count-divider"><span></span></div>
                <h6 class="v-counter-text">Total Users</h6>
            </div>
        </div>
    </div>
</div>

<!--Services-->
<div class="v-parallax v-parallax-video v-bg-stylish" id="services" style="background-image: url(img/slider/slider4.jpg);">
    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                    <div class="feature-box-icon small">
                        <i class="fa fa-laptop v-icon"></i>
                    </div>
                    <div class="feature-box-text clearfix">
                        <h3>Incredibly Responsive</h3>
                        <div class="feature-box-text-inner">
                            <p>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.
                            </p>                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="200">
                    <div class="feature-box-icon small">
                        <i class="fa fa-leaf v-icon"></i>
                    </div>
                    <div class="feature-box-text">
                        <h3>Fully Customizible</h3>
                        <div class="feature-box-text-inner">
                            <p>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.<br />
                            </p>                               
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="400">
                    <div class="feature-box-icon small">
                        <i class="fa fa-scissors v-icon"></i>
                    </div>
                    <div class="feature-box-text">
                        <h3>Interactive Elements</h3>
                        <div class="feature-box-text-inner">
                            <p>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.<br />
                            </p>                               
                        </div>
                    </div>
                </div>
            </div>

            <div class="v-bg-overlay overlay-colored"></div>
        </div>
    </div>
</div>
<!--End Services-->

<!--Pie Chart-->
<div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="piechart">
    <div class="container">
        <div class="row center">
            <div class="col-sm-12">
                <p class="v-smash-text-large-2x">
                    <span>Graphics</span>
                </p>
                <div class="horizontal-break"></div>
                <p class="lead" style="color: #999;">
                    Black and White vs Colour Prints:
                </p>
            </div>
            <div class="v-spacer col-sm-12 v-height-standard"></div>
        </div>
    </div>
</div>
<!--End Screenshots-->

@extends('layouts.footer')