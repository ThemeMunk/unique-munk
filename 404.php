<?php
/**
 * The template file for 404 error page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unique-munk
 */

get_header(); ?>
		<div class="site-content">
			<div class="container">
				<main id="main" class="site-main" role="main">
					<article class="error-page">
						<span><?php esc_html_e( '404', 'unique-munk' ); ?></span>
						<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'unique-munk' ); ?></h2>
						<p><?php esc_html_e( 'The page you are looking for is not here. It may have been deleted, or the address might have been miss-typed. You can use the navigation bar above, or', 'unique-munk' ); ?></p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="homelinks"><?php esc_html_e( 'Return to Homepage', 'unique-munk' ); ?></a>
					</article>
				</main>
			</div>
		</div>
<?php get_footer(); ?>