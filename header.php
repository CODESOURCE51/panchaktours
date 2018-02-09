<?php 
$exp = explode('/',$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Panchak Tours and Travels</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <script src="js/modernizr.js"></script>

    <link rel="stylesheet" href="css/switcher.css" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/salem.css" title="salem" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/hippie-blue.css" title="hippie-blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/mandy.css" title="mandy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/green-smoke.css" title="green-smoke" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/horizon.css" title="horizon" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/cerise.css" title="cerise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/brick-red.css" title="brick-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/de-york.css" title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/shamrock.css" title="shamrock" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/studio.css" title="studio" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/leather.css" title="leather" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/denim.css" title="denim" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/scarlet.css" title="scarlet" media="all" />
</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.php">
                                <img src="img/logo_panchak.png" alt="Panchak Tours and Travels" title="Panchak Tours and Travels" />
                            </a>
                        </div>
                       
                       
                        <div class="col-md-3 col-md-offset-2">
                           
                        </div>
                        
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="#">
                                            <i class="fa fa-mobile"></i> +91 9830071017</a> | <a href="#"><i class="fa fa-phone"></i> 033 64502916</a> </li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> Commerce House, 2, Ganesh Chandra Avenue, Room No - 7, Cabin No - 01, Kolkata - 13</a> </li>
                                </ul>
                                   
                            </div> 
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li <?php if($exp[1] == 'index.php' || $exp[1] == ''){?>class="active"<?php } ?>><a href="index.php">Home</a> </li>
                        <li <?php if($exp[1] == 'sikkim.php'){?>class="active"<?php } ?>><a href="sikkim.php">Sikkim</a> </li>
                                <li <?php if($exp[1] == 'dooars.php'){?>class="active"<?php } ?>><a href="dooars.php">Dooars & Hills</a> </li>
                                <li <?php if($exp[1] == 'bhutan.php'){?>class="active"<?php } ?>><a href="bhutan.php">Bhutan</a></li>
                                <li <?php if($exp[1] == 'assam.php'){?>class="active"<?php } ?>><a href="assam.php">Asaam & Meghalaya</a></li>
                                <li <?php if($exp[1] == 'property.php'){?>class="active"<?php } ?>><a href="property.php">Our Property</a></li>
                                <li <?php if($exp[1] == 'contact.php'){?>class="active"<?php } ?>><a href="contact.php">Contact Us</a>
                                </li>
                                
                                
                        
                                    </ul>
                                
                </div>
            </div>
        </header>