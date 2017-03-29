<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unique-munk
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
      <div class="header-top">
				<div class="container">
					<div class="left-section">
						<nav class="top-nav">
							<?php wp_nav_menu( array( 'theme_location' => 'topmenu', 'menu_class' => 'top-menu', 'fallback_cb'  => false, 'depth' => 1 ) ); ?>
						</nav>
            </div>
					<div class="right-section">
						<?php
							$socialheader = get_theme_mod('uniquemunk_social_ed', '0');
							$fb = get_theme_mod('uniquemunk_button_url_fb');
							$tw = get_theme_mod('uniquemunk_button_url_tw');
							$pin = get_theme_mod('uniquemunk_button_url_pin');
							$insta = get_theme_mod('uniquemunk_button_url_ins');
							$gplus = get_theme_mod('uniquemunk_button_url_gp');
						if ($socialheader) {
						?>
            <ul class="social-networks">
							<?php if ($fb) { ?><li><a href="<?php echo esc_url($fb); ?>"><i class="fa fa-facebook"></i></a></li><?php } ?>
							<?php if ($tw) { ?><li><a href="<?php echo esc_url($tw); ?>"><i class="fa fa-twitter"></i></a></li><?php } ?>
							<?php if ($pin) { ?><li><a href="<?php echo esc_url($pin); ?>"><i class="fa fa-pinterest-p"></i></a></li><?php } ?>
							<?php if ($insta) { ?><li><a href="<?php echo esc_url($insta); ?>"><i class="fa fa-instagram"></i></a></li><?php } ?>
							<?php if ($gplus) { ?><li><a href="<?php echo esc_url($gplus); ?>"><i class="fa fa-google-plus"></i></a></li><?php } ?>
						</ul>
            <?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">

                    <div class="site-branding">
                        <?php
                        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                            the_custom_logo();
                        }
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                                <p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
                        <?php
                            endif;
                        ?>
                    </div><!-- .site-branding -->

					<div id="mobile-header">
				    	<a id="responsive-menu-button" href="#sidr-main"></a>
					</div>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
				</div>
			</div>
		</header>
