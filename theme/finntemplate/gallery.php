<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         gallery.php
* @Package:      GetSimple
* @Action:       finntemplate theme for GetSimple CMS
*
*****************************************************/
?>

<!DOCTYPE html>

<html lang=en>
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/base-min.css">
		
		<!--[if lte IE 8]>
			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
		<![endif]-->
		
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/adjust.css" type="text/css" />
		
		<script src='<?php get_theme_url(); ?>/js/jscript-topload.js'></script>
		
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
			<div id="sidebar-container">
				<div id="side-header">
					<div id="side-heading">
						<img src="/data/uploads/img/menu-header.jpg" width="208" height="123" alt="Sidebar Menu Header" />
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
						<img src="/data/uploads/img/sidebar.png" width="83" height="65" alt="open sidebar menu button" /> 
					</div>
					
					<div id="horizon-logo">
						<img src="/data/uploads/img/horizon_logo_v3.jpg" width="524" height="125" alt="Horizon Logo" /> 
						<img id="build-serv-logo" src="/data/uploads/img/build_services_logo.jpg" width="242" height="125" alt="Building Services Logo" />
					</div>
			
					<ul id="navibar">
						<?php get_navigation(return_page_slug()); ?>
					</ul>
				</div>
			</div>		
			
			<!--CONTAINER DIV-->
			<div id="container">			
				<!--MAIN CMS CONTENT-->
				<?php get_page_content(); ?>					
			</div>
		</div>
			
		<!--JS FILES-->
		<script src='<?php get_theme_url(); ?>/js/jscript-bottomload.js'></script>
		
		<!--FOR GSCMS PLUGINS-->
		<?php get_footer(); ?>
	</body>

</html>
