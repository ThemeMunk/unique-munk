<?php
/**
 * The template file for archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unique-munk
 */

get_header(); ?>

		<div class="site-content">
			<div class="container">
				<main id="main" class="site-main" role="main">
					<div class="row">
						<?php
							//Set the counter to 1 for clearing rows
							$i = 1;
            	if ( have_posts() ) :
						 ?>
              <header class="page-header">
                  <?php
                      the_archive_title( '<h1 class="page-title">', '</h1>' );
                      the_archive_description( '<div class="taxonomy-description">', '</div>' );
                  ?>
              </header><!-- .page-header -->
						<?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
						?>

					<div class="static-image col-xs-12 col-sm-12 col-lg-6 col-md-6">
						<?php get_template_part( 'template-parts/content' ); ?>
					</div>

					<?php
					// After 3 close the row div and open a new one
					if($i % 2 == 0) {echo '<div class="clear"></div>';}
					$i++;  endwhile;

					echo '<div class="clear"></div>';

                          the_posts_pagination( array(
                          'mid_size' => 3,
                          'prev_text' => __( '<i class="fa fa-angle-double-left"></i>Prev', 'unique-munk' ),
                          'next_text' => __( 'Next<i class="fa fa-angle-double-right"></i>', 'unique-munk' ),
                          ) );

                      else :

                          get_template_part( 'template-parts/content', 'none' );

          endif; ?>
					
					</div>

				</main>
			</div>
		</div>
<?php get_footer(); ?>
