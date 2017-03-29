<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unique-munk
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">

						<?php
						$socialheader = get_theme_mod('uniquemunk_social_ed_footer', '0');
						$fb = get_theme_mod('uniquemunk_button_url_fb');
						$tw = get_theme_mod('uniquemunk_button_url_tw');
						$pin = get_theme_mod('uniquemunk_button_url_pin');
						$insta = get_theme_mod('uniquemunk_button_url_ins');
						$gplus = get_theme_mod('uniquemunk_button_url_gp');
						if ($socialheader) {
						?>
                        <ul class="social-networks">
							<?php if ($fb) { ?><li><a href="<?php echo esc_url($fb); ?>"><?php esc_html_e( 'FACEBOOK', 'unique-munk' ); ?></a></li><?php } ?>
							<?php if ($tw) { ?><li><a href="<?php echo esc_url($tw); ?>"><?php esc_html_e( 'TWITTER', 'unique-munk' ); ?></a></li><?php } ?>
							<?php if ($pin) { ?><li><a href="<?php echo esc_url($pin); ?>"><?php esc_html_e( 'PINTEREST', 'unique-munk' ); ?></a></li><?php } ?>
							<?php if ($insta) { ?><li><a href="<?php echo esc_url($insta); ?>"><?php esc_html_e( 'INSTAGRAM', 'unique-munk' ); ?></a></li><?php } ?>
							<?php if ($gplus) { ?><li><a href="<?php echo esc_url($gplus); ?>"><?php esc_html_e( 'GOOGLE+', 'unique-munk' ); ?></a></li><?php } ?>
						</ul>
                        <?php
						}
						?>

			<div class="site-info">
				<?php do_action( 'uniquemunk_footer' ); ?>        
			</div><!-- .site-info -->

			</div>
		</footer>
	</div>

<?php wp_footer(); ?>
</body>
</html>
