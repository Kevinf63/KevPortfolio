<?php
if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}
/* * **************************************************
 *
 * @File:         template.php
 * @Package:      GetSimple
 * @Action:       finntemplate theme for GetSimple CMS
 *
 * *************************************************** */
$echo = false;
$siteurl = get_site_url($echo);
$themeurl = get_theme_url($echo);
?>

<!DOCTYPE html>

<html lang=en>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--FAVICON AND DESKTOP ICONS-->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $siteurl ?>apple-touch-icon-57x57.png?v3=E6vx09KgLX">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $siteurl ?>apple-touch-icon-60x60.png?v3=E6vx09KgLX">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $siteurl ?>apple-touch-icon-72x72.png?v3=E6vx09KgLX">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $siteurl ?>apple-touch-icon-76x76.png?v3=E6vx09KgLX">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $siteurl ?>apple-touch-icon-114x114.png?v3=E6vx09KgLX">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $siteurl ?>apple-touch-icon-120x120.png?v3=E6vx09KgLX">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $siteurl ?>apple-touch-icon-144x144.png?v3=E6vx09KgLX">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $siteurl ?>apple-touch-icon-152x152.png?v3=E6vx09KgLX">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $siteurl ?>apple-touch-icon-180x180.png?v3=E6vx09KgLX">
        <link rel="icon" type="image/png" href="<?php echo $siteurl ?>favicon-32x32.png?v3=E6vx09KgLX" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo $siteurl ?>android-chrome-192x192.png?v3=E6vx09KgLX" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo $siteurl ?>favicon-96x96.png?v3=E6vx09KgLX" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo $siteurl ?>favicon-16x16.png?v3=E6vx09KgLX" sizes="16x16">
        <link rel="manifest" href="<?php echo $siteurl ?>manifest.json?v3=E6vx09KgLX">
        <link rel="shortcut icon" href="<?php echo $siteurl ?>favicon.ico?v3=E6vx09KgLX">
        <meta name="msapplication-TileColor" content="#2ecc71">
        <meta name="msapplication-TileImage" content="<?php echo $siteurl ?>mstile-144x144.png?v3=E6vx09KgLX">
        <meta name="theme-color" content="#ffffff">

        <!--ADAPTIVE IMAGES RESIZER-->
        <script>document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';</script>

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/base-min.css">

        <!--[if lte IE 8]>
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
        <![endif]-->

        <link rel="stylesheet" href="<?php echo $themeurl ?>/css/general.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $themeurl ?>/css/adjust.css" type="text/css" />
        <link rel="stylesheet"  href="<?php echo $themeurl ?>/js/styles/default.css">

        <script src='<?php echo $themeurl ?>/js/jscript-topload.js'></script>


        <!--FOR GSCMS PLUGINS-->
        <?php get_header(); ?>

        <?php
        if (isset($_SERVER['HTTP_USER_AGENT']) &&
                (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
            header('X-UA-Compatible: IE=edge,chrome=1');
        }
        ?>

        <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>

        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body id="<?php get_page_slug(); ?>">
        <div id="body-container">
            <!--SIDEBAR DIV CONTAINER-->
            <div id="sidebar-container" style="background-image:url(<?php echo $themeurl ?>/images/noise_pale.jpg)">
                <div id="side-header">
                    <div id="side-heading">
                        <img src="<?php echo $themeurl ?>/images/menu_header.jpg" width="208" height="123" alt="Sidebar Menu Header" />
                    </div>
                </div>
                <!--SIDEBAR LIST--> 
                <ul id="sidebar">
<?php get_navigation(return_page_slug()); ?>
                </ul>		
            </div>

            <!--HEADER/NAVIBAR DIV-->		
            <div id="header">
                <div id="header-container">				
                    <div id="side-button" onclick="showSidebar()">
                        <img src="<?php echo $themeurl ?>/images/sidebar2.png" width="83" height="65" alt="open sidebar menu button" /> 
                    </div>

                    <div id="horizon-logo">
                        <img src="<?php echo $themeurl ?>/images/logo_banner.png" width="930" height="210" alt="Kevin Finnegan Logo" /> 
                    </div>

                    <ul id="navibar">
<?php get_navigation(return_page_slug()); ?>
                    </ul>
                </div>
            </div>		

            <!--CONTAINER DIV-->
            <div id="container" style="background-image:url(<?php echo $themeurl ?>/images/noise_pale.jpg)">			
                <!--MAIN CMS CONTENT-->
<?php get_page_content(); ?>					
            </div>
        </div>

        <!--JS FILES-->
        <script src='<?php echo $themeurl ?>/js/jscript-bottomload.js'></script>
        <script src='<?php echo $themeurl ?>/js/highlight.pack.js'></script>
        <script>hljs.initHighlightingOnLoad();</script>

        <!--FOR GSCMS PLUGINS-->
<?php get_footer(); ?>
    </body>

</html>
