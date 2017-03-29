<?php
/**
 * The template file for searchr results page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unique-munk
 */

get_header(); ?>
		<div class="site-content">
			<div class="container">

				<div class="search-heading">
					<h1 class="search-title"><?php printf( __( 'Search Results for: %s', 'unique-munk' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>                    
				</div>
				<main id="main" class="site-main" role="main">
					<div class="row">
						
							<?php
								//Set the counter to 1
							 	$i = 1;						
                            	if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                    
                                    /*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', 'search');
																		
								// After 3 close the row div and open a new one
								if($i % 3 == 0) {echo '<div class="clear"></div>';}						
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