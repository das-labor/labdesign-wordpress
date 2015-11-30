<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 * and the left sidebar conditional
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?><!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class( 'basic' ); ?>>
	<div id="page">
		<div id="header-wrap" class="grid wfull">
			<header id="header" class="grid <?php echo $bavotasan_theme_options['width']; ?> row" role="banner">
				<div class="c12">
					<div id="mobile-menu" class="clearfix">
						<a href="#" class="left-menu fl dashicons dashicons-menu"></a>
						<a href="#" class="fr dashicons dashicons-search"></a>
					</div>
					<div id="drop-down-search"><?php get_search_form(); ?></div>
				</div>
				<div class="header-logo img-circle">
					<a href="<?php echo site_url(); ?>">
						<img src="/images/LaborLogoBootstrapped.png" alt="" />
					</a>
				</div>
				<aside class="sitetitle">
					<?php echo get_bloginfo('name'); ?>
				</aside>

				<div class="right-header fr">
					<nav id="site-navigation" class="navbar navbar-inverse" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'navbar-inner', 'menu_class' => 'nav', 'fallback_cb' => 'bavotasan_default_menu', 'depth' => 2 ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #header .row -->

			<?php
			if ( is_front_page() )
				bavotasan_jumbotron();
			?>

		</div>

		<div id="main" class="grid <?php echo $bavotasan_theme_options['width']; ?> row">
			<div id="left-nav"></div>

			<script type="text/javascript">
				document.getElementById('bavotasan_custom_text_widget-5').getElementByTagName('img').src += '?' + Date.now();
			</script>


			<?php
			bavotasan_home_page_default_widgets();
