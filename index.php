<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unique_munk
 */

get_header(); ?>

		<div class="site-content">
			<div class="container nopadding">
				<main id="main" class="site-main" role="main">

						<?php
                  if ( have_posts() ) :
                  /* Start the Loop */
									$counter = '1';
                  while ( have_posts() ) : the_post();
							?>

                <div class="static-image col-xs-12 col-sm-12 <?php if ($counter % 3 == 1){echo 'col-lg-12 col-md-12';}else {echo 'col-lg-6 col-md-6';} ?>">
                     <?php get_template_part( 'template-parts/content', ''); ?>
								</div>

								<?php
								$counter++;
						    endwhile;

							echo '<div class="clearfix"></div>';

                             the_posts_pagination( array(
                            'mid_size' => 3,
                            'prev_text' => __( '&laquo;&nbsp;Prev', 'unique-munk' ),
                            'next_text' => __( 'Next&nbsp;&raquo;', 'unique-munk' ),
                            ) );

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif; ?>


				</main>
			</div>
		</div>
<?php get_footer(); ?>
