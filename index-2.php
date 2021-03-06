<?php
include_once 'classes/Language/language.common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>about us</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" ><!-- dialog --><link href="css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<script src="js/jquery.ui.totop.js"></script>

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<!--header-->
<div class="container bars"><em class="bars_"></em></div>

<header>
    <?php
include_once 'classes/Menu/menu.php';
?>
    <h1 class="navbar-brand navbar-brand_"><a href="index.php"><img src="img/<?php echo $lang['Lang0004']; ?>" alt="logo"></a></h1>
</header>

    <!--content-->
    <div class="content">
        <div class="stellar-section">
        <div class="who-box" data-stellar-background-ratio="0.1">
            <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h2>About Us</h2>
                    <div class="thumb-pad4 clearfix">
                        <div class="thumbnail">
                            <figure><img src="img/page3_pic1.jpg" alt=""></figure>
                            <div class="caption">
                                <h3>Praesent justo dolor, lobortis quis, lobortis dignissim.</h3>
                                <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem. Maecenas tristique orci ac sem.</p>
                                <a href="#" class="btn-default btn1">read more</a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Our History</h2>
                    <ul class="list4">
                        <li>
                            <time datetime="2014-01-01">1998-2001</time>
                            <div class="extra-wrap">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem. Maecenas tristique orci ac sem.</p>
                            </div>
                        </li>
                        <li>
                            <time datetime="2014-01-01">2003-2006</time>
                            <div class="extra-wrap">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem.</p>
                            </div>
                        </li>
                        <li>
                            <time datetime="2014-01-01">2009-2013</time>
                            <div class="extra-wrap">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp">
                    <h2>Jobs</h2>
                    <p>Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <ul class="list2">
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Praesent vestibulum molestie</a></li>
                        <li><a href="#">Aenean nonummy hendrerit</a></li>
                        <li><a href="#">porta Fusce suscipit varius miursu</a></li>
                        <li><a href="#">Etiam cursus leo vel metus</a></li>
                        <li><a href="#">Aenean nec eros</a></li>
                        <li><a href="#">Vestibulum ante ipsum primis</a></li>
                    </ul>
                    <p>Morbi nunc odio, gravida at, cursus necluctus a, lorem. Maecenas tristique orci ac sem.</p>
                    <ul class="list2">
                        <li><a href="#">In faucibus orci luctus et</a></li>
                        <li><a href="#">Ultrices posuere cubilia Curae</a></li>
                        <li><a href="#">Suspendisse sollicitudin velit sed leo</a></li>
                        <li><a href="#">Ut pharetra augue nec</a></li>
                        <li><a href="#">Nam elit agna,endrerit sit amet</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="thumb-box7">
            <div class="container">
                <h2 class="indent">Our Doctors</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 wow fadeIn maxheight">
                        <div class="thumb-pad2-1">
                            <div class="thumbnail">
                                <figure><img src="img/page3_pic2.jpg" alt=""></figure>
                                <div class="caption">
                                    <a href="#">Julia Berzkalna</a>
                                    <p>Beciegast nveriti vitaesaert asety kertya aset apicaboserdenerafae kertyu erauas vitaesa ertyasnemo</p>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 wow fadeIn maxheight" data-wow-delay="0.1s">
                        <div class="thumb-pad2-1">
                            <div class="thumbnail">
                                <figure><img src="img/page3_pic3.jpg" alt=""></figure>
                                <div class="caption">
                                    <a href="#">Marta Healy</a>
                                    <p>Beciegast nveriti vitaesaert asety kertya aset apicaboserdenerafae kertyu erauas vitaesa ertyasnemo</p>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 wow fadeIn maxheight" data-wow-delay="0.2s">
                        <div class="thumb-pad2-1">
                            <div class="thumbnail">
                                <figure><img src="img/page3_pic4.jpg" alt=""></figure>
                                <div class="caption">
                                    <a href="#">Patrick Pool</a>
                                    <p>Beciegast nveriti vitaesaert asety kertya aset apicaboserdenerafae kertyu erauas vitaesa ertyasnemo</p>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 wow fadeIn maxheight" data-wow-delay="0.3s">
                        <div class="thumb-pad2-1">
                            <div class="thumbnail">
                                <figure><img src="img/page3_pic5.jpg" alt=""></figure>
                                <div class="caption">
                                    <a href="#">Bradley Grosh</a>
                                    <p>Beciegast nveriti vitaesaert asety kertya aset apicaboserdenerafae kertyu erauas vitaesa ertyasnemo</p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumb-box8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <h2>Why Choose Us?</h2>
                        <ul class="list7">
                            <li>
                                <strong><span>01/</span>Pellentesque sed</strong>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem. Maecenas tristique orci ac sem.</p>
                            </li>
                            <li>
                                <strong><span>02/</span>Vestibulum</strong>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem.</p>
                            </li>
                            <li>
                                <strong><span>03/</span>Nulla venenatis</strong>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. </p>
                            </li>                          
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Mision & Vision</h2>
                        <h3>Praesent justo dolor, lobortis quis, lobortis dignissim.</h3>
                        <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. </p>
                        <ul class="list2">
                            <li><a href="#">Aenean nec eros</a></li>
                            <li><a href="#">Vestibulum ante ipsum primis</a></li>
                            <li><a href="#">In faucibus orci luctus et</a></li>
                            <li><a href="#">Ultrices posuere cubilia Curae</a></li>
                            <li><a href="#">Suspendisse sollicitudin velit sed leo</a></li>
                        </ul>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. </p>
                        <ul class="list2">
                            <li><a href="#">Ut pharetra augue nec augue</a></li>
                            <li><a href="#">Nam elit agna,endrerit sit amet</a></li>
                            <li><a href="#">Mauris accumsan nulla</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp testim_box">
                        <h2>Testimonials</h2>
                        <figure><img src="img/quote.png" alt=""></figure>
                        <p><i>Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </i></p>
                        <strong>Cindy Crawford</strong>
                        <figure><img src="img/quote.png" alt=""></figure>
                        <p><i>Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus necluctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
                        <strong>Eva Savits</strong>
                    </div>
                </div>
        </div>
    </div>
    </div>
<!--footer-->
<?php
include_once 'classes/Footer/Footer.php';
?>
<?php
include_once 'classes/Language/For_JS_multi_lang.php';
?>
<script src="js/bootstrap.min.js"></script><!-- dialog --><script src="js/bootstrap-dialog.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/main/pub.js"></script>
<script src="js/main/index-2.js"></script>
</body>
</html>