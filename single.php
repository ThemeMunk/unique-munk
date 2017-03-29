<?php
/**
 * The main template file to display single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unique-munk
 */

get_header(); ?>
		<div class="site-content">
			<div class="container">
                <div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'single' );
							
							the_post_navigation();																	

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

					</main>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php get_footer(); ?>
