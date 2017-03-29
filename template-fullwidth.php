<?php
/**
 * Template Name: Full Width Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unique-munk
 */

get_header(); ?>
		<div class="site-content">
			<div class="container">
				<main id="main" class="site-main" role="main">
					<?php
                        while ( have_posts() ) : the_post();
                
                            get_template_part( 'template-parts/content', 'page' );                                                              
                
                        endwhile; // End of the loop.
                        ?>
				</main>
			</div>
		</div>
<?php get_footer(); ?>