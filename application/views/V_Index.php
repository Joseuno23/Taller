<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?=NAME_PAGE?> | Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <!--<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>dist/img/favicon.png">-->  

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url()?>dist/css/normalize.css">
        <link rel="stylesheet" href="<?=base_url()?>dist/css/main.css">
        <link rel="stylesheet" href="<?=base_url()?>dist/css/bootstrap.min.css">

        <!-- Animate CSS --> 
        <link rel="stylesheet" href="<?=base_url()?>dist/css/animate.min.css">

        <!-- font-awesome CSS-->
        <link rel="stylesheet" href="<?=base_url()?>dist/css/font-awesome.min.css">

        <!-- Flaticon CSS-->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>dist/css/font/flaticon.css">

        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="<?=base_url()?>dist/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url()?>dist/css/owl.theme.default.min.css">

        <!-- main menu CSS-->		
        <link rel="stylesheet" href="<?=base_url()?>dist/css/meanmenu.min.css">

        <!-- Color box CSS-->		
        <link rel="stylesheet" href="<?=base_url()?>dist/css/colorbox.css">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="<?=base_url()?>dist/lib/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="<?=base_url()?>dist/lib/custom-slider/css/preview.css" type="text/css" media="screen" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?=base_url()?>dist/css/style.css">

        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?=base_url()?>dist/css/responsive.css">
       
        <!-- Modernizr Js -->
        <script src="<?=base_url()?>dist/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="wrapper-area">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->
            <!-- Header Area Start Here -->
            <header>
                <div class="header-style2-area">
                    <div class="header-top-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                    <div class="header-top-left">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1234567890">Call : +786 760 4090</a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">team@vexden.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="header-top-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?=$menu?>
                </div>
            </header>
            <!-- Header Area End Here -->
            <!-- Slider Area Start Here -->
            <div class="slider-area">
                <div class="overlay"></div>
                <div class="bend-2 niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">	
                        <img src="<?=base_url()?>dist/img/slider-2/1.jpg" alt="" title="#slider-direction-1"  />
                        <img src="<?=base_url()?>dist/img/slider-2/2.jpg" alt="" title="#slider-direction-2"  />
                        <img src="<?=base_url()?>dist/img/slider-2/3.jpg" alt="" title="#slider-direction-3"  />
                    </div>
                    <!-- Direction 1 -->
                    <div id="slider-direction-1" class="t-cn slider-direction">
                        <div class="slider-content t-cn s-tb slider-1">
                            <div class="title-container s-tb-c title-compress">
                                <p>Koncrete<span><i class="flaticon-transport"></i></span>Construction</p>
                                <h1 class="title1">High Quality Materials</h1>
                                <div class="read-more">
                                    <ul>
                                        <li><a href="#" class="btn-read-more-fill">Read More <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>	
                    </div>
                    <!-- Direction 2 -->
                    <div id="slider-direction-2" class="t-cn slider-direction">
                        <div class="slider-content t-cn s-tb slider-2">
                            <div class="title-container s-tb-c title-compress">
                                <p>Koncrete<span><i class="flaticon-transport"></i></span>Construction</p>
                                <h1 class="title1">We Build <span>Your</span> Dreams</h1>
                                <div class="read-more">
                                    <ul>
                                        <li><a href="#" class="btn-read-more-fill">Read More <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>	
                    </div>
                    <!-- Direction 3 -->
                    <div id="slider-direction-3" class="t-cn slider-direction">
                        <div class="slider-content t-cn s-tb slider-3">
                            <div class="title-container s-tb-c title-compress">
                                <p>Construction Company</p>
                                <h1 class="title1">We Build <span> Your Home</span> Safely</h1>
                                <div class="read-more">
                                    <ul>
                                        <li><a href="#" class="btn-read-more-fill">Read More <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
            <!-- Slider Area End Here -->
            <!-- Services 2 Area Start Here -->
            <div class="services-2-area">	        	
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-b-30">
                            <div class="services-2-top">
                                <div class="overlay">
                                    <a href="#" title=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                                <a href="#"><img src="<?=base_url()?>dist/img/services/services-2-1.jpg" class="img-responsive" alt="about-2"></a>
                            </div>
                            <div class="services-2-bottom">
                                <h3><a href="#" title="">Professional Team</a></h3>
                                <p>Our team of experts continuously update and refresh their extensive knowledge to better assist you. From our colleagues in sales and customer service.</p>
                            </div>
                            <a href="#" class="btn-read-more-fill">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-b-30">
                            <div class="services-2-top">
                                <div class="overlay">
                                    <a href="#" title=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                                <a href="#"><img src="<?=base_url()?>dist/img/services/services-2-2.jpg" class="img-responsive" alt="about-2"></a>
                            </div>
                            <div class="services-2-bottom">
                                <h3><a href="#" title="">Smart Services</a></h3>
                                <p>With solid and reliable distribution and logistics channels, we serve the North and Latin American markets. </p>
                            </div>
                            <a href="#" class="btn-read-more-fill">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-b-30">
                            <div class="services-2-top">
                                <div class="overlay">
                                    <a href="#" title=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                                <a href="#"><img src="<?=base_url()?>dist/img/services/services-2-3.jpg" class="img-responsive" alt="about-2"></a>
                            </div>
                            <div class="services-2-bottom">
                                <h3><a href="#" title="">Smart Work</a></h3>
                                <p><p>We are hardworking professionals who work smart to leverage our knowledge, experience, and unique skills. Our personnel are leaders of the digital platforms.</p></p>
                            </div>
                            <a href="#" class="btn-read-more-fill">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Services 2 Area End Here -->
            <!-- About 2 Area Start Here -->
            <div class="about-2-area section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="about-2-left">
                                <h2>We Are <span>Professional</span></h2>
                                <div class="row">
                                    <div class="about-2-tab-area">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <ul>
                                                <li class="active"><a href="#building" data-toggle="tab" aria-expanded="false">Building</a><span></span></li>
                                                <li><a href="#industrial" data-toggle="tab" aria-expanded="false">Industrial</a><span></span></li>
                                                <li><a href="#factory" data-toggle="tab" aria-expanded="false">Factory</a><span></span></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="building">
                                                    <p>Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    <p>It has survived not only fiveBimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                                                </div>
                                                <div class="tab-pane fade" id="industrial">
                                                    <p>Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    <p>It has survived not only fiveBimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>						
                                                </div>
                                                <div class="tab-pane fade" id="factory">
                                                    <p>Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    <p>It has survived not only fiveBimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                                                </div>								
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="about-2-right">								
                                <p>Industrial</p>
                                <a href="#"><img src="<?=base_url()?>dist/img/about-2.png" class="img-responsive" alt="about-2"></a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- About 2 Area End Here -->
            <!-- Featured-2 Area Start Here -->
            <div class="featured-2-area section-space-88-100">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title-area">
                                <h2 class="section-title">Featured Works</h2>
                                <div class="title-bottom-icon">
                                    <span class="title-bottom-icon-left"></span>
                                    <i class="fa fa-cubes" aria-hidden="true"></i>
                                    <span class="title-bottom-icon-right"></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm dipisicing elit, sed do eiusmod tempor. incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="kon-carousel inner-section-space-top"
                         data-loop="true"
                         data-items="3"
                         data-margin="0"
                         data-autoplay="false"
                         data-autoplay-timeout="10000"
                         data-smart-speed="2000"
                         data-dots="false"
                         data-nav="true"
                         data-nav-speed="false"
                         data-r-x-small="1"
                         data-r-x-small-nav="true"
                         data-r-x-small-dots="false"
                         data-r-x-medium="1"
                         data-r-x-medium-nav="true"
                         data-r-x-medium-dots="false"
                         data-r-small="2"
                         data-r-small-nav="true"
                         data-r-small-dots="false"
                         data-r-medium="3"
                         data-r-medium-nav="true"
                         data-r-medium-dots="false"
                         data-r-large="3"
                         data-r-large-nav="true"
                         data-r-large-dots="false">
                        <div class="featured-2-box">
                            <div class="overlay">
                                <div class="overlay-top">
                                    <div class="overlay-top-content">
                                        <h3>Road Construction</h3>
                                        <p>Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. In hac habitasse platea dictumst. Phasellus ullamcorper ipsum rutrum nunc Donec ven</p>
                                    </div>
                                    <a href="<?=base_url()?>dist/img/featured/featured-2-1.jpg" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                               	</div>
                               	<div class="overlay-bottom">	                            	
                                    <h3>Road Construction</h3>
                                </div>
                            </div>
                            <a href="#"><img src="<?=base_url()?>dist/img/featured/featured-2-1.jpg" alt="featured1"></a>
                        </div>
                        <div class="featured-2-box">
                            <div class="overlay">
                                <div class="overlay-top">
                                    <div class="overlay-top-content">
                                        <h3>Industrial Project</h3>
                                        <p>Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. In hac habitasse platea dictumst. Phasellus ullamcorper ipsum rutrum nunc Donec ven</p>
                                    </div>
                                    <a href="<?=base_url()?>dist/img/featured/featured-2-2.jpg" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                               	</div>
                               	<div class="overlay-bottom">	                            	
                                    <h3>Industrial Project</h3>
                                </div>
                            </div>
                            <a href="#"><img src="<?=base_url()?>dist/img/featured/featured-2-2.jpg" alt="featured1"></a>
                        </div>
                        <div class="featured-2-box">
                            <div class="overlay">
                                <div class="overlay-top">
                                    <div class="overlay-top-content">
                                        <h3>Architecture Design</h3>
                                        <p>Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. In hac habitasse platea dictumst. Phasellus ullamcorper ipsum rutrum nunc Donec ven</p>
                                    </div>
                                    <a href="<?=base_url()?>dist/img/featured/featured-2-3.jpg" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                               	</div>
                               	<div class="overlay-bottom">	                            	
                                    <h3>Architecture Design</h3>
                                </div>
                            </div>
                            <a href="#"><img src="<?=base_url()?>dist/img/featured/featured-2-3.jpg" alt="featured1"></a>
                        </div>
                        <div class="featured-2-box">
                            <div class="overlay">
                                <div class="overlay-top">
                                    <div class="overlay-top-content">
                                        <h3>Road Construction</h3>
                                        <p>Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. In hac habitasse platea dictumst. Phasellus ullamcorper ipsum rutrum nunc Donec ven</p>
                                    </div>
                                    <a href="<?=base_url()?>dist/img/featured/featured-2-1.jpg" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                               	</div>
                               	<div class="overlay-bottom">	                            	
                                    <h4>Road Construction</h4>
                                </div>
                            </div>
                            <a href="#"><img src="<?=base_url()?>dist/img/featured/featured-2-1.jpg" alt="featured1"></a>
                        </div>
                        <div class="featured-2-box">
                            <div class="overlay">
                                <div class="overlay-top">
                                    <div class="overlay-top-content">
                                        <h3>Industrial Project</h3>
                                        <p>Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. In hac habitasse platea dictumst. Phasellus ullamcorper ipsum rutrum nunc Donec ven</p>
                                    </div>
                                    <a href="<?=base_url()?>dist/img/featured/featured-2-2.jpg" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                               	</div>
                               	<div class="overlay-bottom">	                            	
                                    <h3>Industrial Project</h3>
                                </div>
                            </div>
                            <a href="#"><img src="<?=base_url()?>dist/img/featured/featured-2-2.jpg" alt="featured1"></a>
                        </div>
                        <div class="featured-2-box">
                            <div class="overlay">
                                <div class="overlay-top">
                                    <div class="overlay-top-content">
                                        <h3>Architecture Design</h3>
                                        <p>Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. In hac habitasse platea dictumst. Phasellus ullamcorper ipsum rutrum nunc Donec ven</p>
                                    </div>
                                    <a href="<?=base_url()?>dist/img/featured/featured-2-3.jpg" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                               	</div>
                               	<div class="overlay-bottom">	                            	
                                    <h3>Architecture Design</h3>
                                </div>
                            </div>
                            <a href="#"><img src="<?=base_url()?>dist/img/featured/featured-2-3.jpg" alt="featured1"></a>
                        </div>

                    </div> 
                </div>
            </div>
           
            
            <div class="news-area section-space-88-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title-area">
                                <h2 class="section-title">Our Latest News</h2>
                                <div class="title-bottom-icon">
                                    <span class="title-bottom-icon-left"></span>
                                    <i class="fa fa-cubes" aria-hidden="true"></i>
                                    <span class="title-bottom-icon-right"></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm dipisicing elit, sed do eiusmod tempor. incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row inner-section-space-top">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="inner-news-box-top">
                                <div class="news-published">
                                    <p class="news-date">05 <br> Jul</p>
                                    <p class="news-year">2016</p>
                                </div>	
                                <img class="img-responsive" src="<?=base_url()?>dist/img/news/1.jpg" alt="news1">
                            </div>
                            <div class="inner-news-box-bottom">
                                <h4><a href="#" title="">How To Make Impressive Designs</a></h4>
                                <p>In pro diam quas interesset, eu sit partem inimicusumsan assentior mei,consetetur…</p>
                                <a href="#" class="btn-read-more">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="inner-news-box-top">
                                <div class="news-published">
                                    <p class="news-date">05 <br> Jul</p>
                                    <p class="news-year">2016</p>
                                </div>	
                                <img class="img-responsive" src="<?=base_url()?>dist/img/news/2.jpg" alt="news2">
                            </div>
                            <div class="inner-news-box-bottom">
                                <h4><a href="#" title="">How To Make Impressive Designs</a></h4>
                                <p>In pro diam quas interesset, eu sit partem inimicusumsan assentior mei,consetetur…</p>
                                <a href="#" class="btn-read-more">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="inner-news-box-top">
                                <div class="news-published">
                                    <p class="news-date">05 <br> Jul</p>
                                    <p class="news-year">2016</p>
                                </div>	
                                <img class="img-responsive" src="<?=base_url()?>dist/img/news/3.jpg" alt="news3">
                            </div>
                            <div class="inner-news-box-bottom">
                                <h4><a href="#" title="">How To Make Impressive Designs</a></h4>
                                <p>In pro diam quas interesset, eu sit partem inimicusumsan assentior mei,consetetur…</p>
                                <a href="#" class="btn-read-more">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
          
            <div class="brand-area">
                <div class="container">
                    <div class="brand kon-carousel"
                         data-loop="true"
                         data-items="6"
                         data-margin="30"
                         data-autoplay="true"
                         data-autoplay-timeout="10000"
                         data-smart-speed="2000"
                         data-dots="false"
                         data-nav="true"
                         data-nav-speed="false"
                         data-r-x-small="2"
                         data-r-x-small-nav="true"
                         data-r-x-small-dots="false"
                         data-r-x-medium="3"
                         data-r-x-medium-nav="true"
                         data-r-x-medium-dots="false"
                         data-r-small="4"
                         data-r-small-nav="true"
                         data-r-small-dots="false"
                         data-r-medium="5"
                         data-r-medium-nav="true"
                         data-r-medium-dots="false"
                         data-r-large="6"
                         data-r-large-nav="true"
                         data-r-large-dots="false">
                        <div class="brand-box">
                            <a href="#">CATERPILLAR</a>
                        </div>
                        <div class="brand-box">
                            <a href="#">KOMATSU</a>
                        </div>
                        <div class="brand-box">
                            <a href="#">JHON DEERE</a>
                        </div>
                        <div class="brand-box">
                            <a href="#">HITACHI</a>
                        </div>
                        <div class="brand-box">
                            <a href="#">CASE</a>
                        </div>
                        <div class="brand-box">
                            <a href="#">BOBCAT</a>
                        </div>
                        <div class="brand-box">
                            <a href="#">VOLVO</a>
                        </div>
<!--                        <div class="brand-box">
                            <a href="#"><img class="img-responsive" src="<?=base_url()?>dist/img/brand/6.png" alt="brand6"></a>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- Brand Area End Here -->
            <!-- Footer Area Start Here -->
            <footer>
                <div class="footer-area-top section-space-b-less-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
                                <h3>About Company</h3>
                                <p>Praesent vel rutrum purus. Nam vel dui eu risus duis dignissim dignissim. Suspen disse at eros tempus, congue metus ac consequat.</p>
                                <p>Fusce sit amet urna feugiat.</p>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
                                <h3>Twitter Feed</h3>
                                <ul class="twitter-feed">
                                    <li>
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <p>Looking for an awesome CREATIVE WordPress Theme? Esquise  run even better.</p>
                                        <a href="#">http://t.co/0WWEMQEQ48</a>
                                        <p><span>3 Days ago</span></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <p>Looking for an awesome CREATIVE WordPress Theme? Esquise  run even better.</p>
                                        <a href="#">http://t.co/0WWEMQEQ48</a>
                                        <p><span>3 Days ago</span></p>
                                    </li>							
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
                                <h3>Flickr Photos</h3>
                                <ul class="flickr-photos">
                                    <li><a href="#"><img class="img-responsive" src="<?=base_url()?>dist/img/flickr/1.jpg" alt="flickr1"></a></li>				
                                    <li><a href="#"><img class="img-responsive" src="<?=base_url()?>dist/img/flickr/2.jpg" alt="flickr2"></a></li>				
                                    <li><a href="#"><img class="img-responsive" src="<?=base_url()?>dist/img/flickr/3.jpg" alt="flickr3"></a></li>				
                                    <li><a href="#"><img class="img-responsive" src="<?=base_url()?>dist/img/flickr/4.jpg" alt="flickr4"></a></li>				
                                    <li><a href="#"><img class="img-responsive" src="<?=base_url()?>dist/img/flickr/5.jpg" alt="flickr5"></a></li>				
                                    <li><a href="#"><img class="img-responsive" src="<?=base_url()?>dist/img/flickr/6.jpg" alt="flickr6"></a></li>				
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
                                <h3>Corporate Office</h3>
                                <ul class="corporate-address">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>44 New Design Street, rne 005</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>(01) 800 433 633</li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@koncrete.com</li>
                                    <li><i class="fa fa-fax" aria-hidden="true"></i>Fax : (123) 123 005040</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p>Copyrights Koncrete construction 2016. All Rights Reserved. &nbsp; Powered by<a href="radiustheme.com" target="_blank"> RadiusTheme</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- jquery-->	
        <script src="<?=base_url()?>dist/js/vendor/jquery-1.12.0.min.js"></script>

        <!-- bootstrap js -->
        <script src="<?=base_url()?>dist/js/bootstrap.min.js"></script>

        <!-- Owl Cauosel JS -->
        <script src="<?=base_url()?>dist/js/owl.carousel.min.js"></script>

        <!-- Nivo slider js -->		
        <script src="<?=base_url()?>dist/lib/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="<?=base_url()?>dist/lib/custom-slider/home.js" type="text/javascript"></script>

        <!-- Meanmenu Js -->
        <script src="<?=base_url()?>dist/js/jquery.meanmenu.min.js"></script>

        <!-- WOW JS -->		
        <script src="<?=base_url()?>dist/js/wow.min.js"></script>

        <!-- plugins js -->
        <script src="<?=base_url()?>dist/js/plugins.js"></script>

        <!-- jQuery Srollup -->
        <script src="<?=base_url()?>dist/js/jquery.scrollUp.min.js" type="text/javascript"></script>

        <!-- jQuery Isotope -->
        <script src="<?=base_url()?>dist/js/isotope.pkgd.js" type="text/javascript"></script>

        <!-- Colorbox js -->
        <script src="<?=base_url()?>dist/js/jquery.colorbox-min.js" type="text/javascript"></script>

        <!-- Custom Js -->
        <script src="<?=base_url()?>dist/js/main.js"></script>  
    </body>
</html>
