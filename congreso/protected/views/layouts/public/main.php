<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="es">

<head>

    <!-- Basic -->
    <title>CITEC | ITC</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- favicon -->
    <link href="images/itc.png" rel="icon" type="image/x-icon" />

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />
    
<!-- <link id="callCss"rel="stylesheet" href="themes/css/style.css" type="text/css" media="screen" charset="utf-8" /> -->

    <!-- Margo JS  -->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

    <!-- Full Body Container -->
    <div id="container">
        
        
        <!-- Start Header Section --> 
        <div class="hidden-header"></div>
        <header class="clearfix">
            
            <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info -->
                            <ul class="contact-details">
                                <li><a href="#"><i class="fa fa-map-marker"></i> Av. Garc&iacute;a Cubas 1200, Celaya, Gto. M&eacute;xico.</a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> www.itcelaya.edu.mx</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i> +01 461 617 7770</a>
                                </li>
                            </ul>
                            <!-- End Contact Info -->
                        </div><!-- .col-md-6 -->
                        <div class="col-md-5">
                            <!-- Start Social Links -->
                            <ul class="social-list">
                                <li>
                                    <a target="_blank" class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/itcelayaOficial"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/itcelayaoficial"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="https://plus.google.com/108807866126938532844/about?hl=es"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" class="instagram itl-tooltip" data-placement="bottom" title="Instagram" href="https://instagram.com/itcelaya/"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" class="youtube itl-tooltip" data-placement="bottom" title="youtube" href="https://www.youtube.com/user/ItcelayaOficial"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                            <!-- End Social Links -->
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .top-bar -->
            <!-- End Top Bar -->
            
            
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="#">
                            <img alt="" src="images/citec_logo.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            $attr = "";
                            foreach ($this->menu as $key => $value):
                                if (isset($value['attr'])) {
                                    foreach ($value['attr'] as $key2 => $value2) {
                                        //echo "Key: $key2; Value: $value2<br />\n";
                                        $attr .= $key2 . '="' . $value2 .'" ';
                                    }
                                }
                            ?>
                          <li>
                            <a href="<?php echo $value['url']; ?>" <?php echo $attr; ?>>
                                <?php 
                                    $attr = "";
                                    echo $value['label']; ?>
                            </a>
                          </li>
                        <?php endforeach; ?>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header> 
        <!-- End Header Section -->
        
        
        <!-- CONTENIDO DE LA PAGINA -->
        <?php echo $content; ?>   

</body>

</html>