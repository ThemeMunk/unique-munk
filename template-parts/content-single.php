<?php
/**
 * Template part for displaying content on single posts.
 *
 * @package unique_munk
 */
?>


					<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
							<?php if ( has_post_thumbnail() ) { ?>
							<div class="image-holder">
                				<?php the_post_thumbnail( 'uniquemunk-feature', array( 'class' => '' ) ); ?>
								<div class="text">
										<?php
										$categories = get_the_category();
										if ( ! empty( $categories ) ) {
											echo '<a class="category" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '"> <i class="fa fa-tags"></i>' . esc_html( $categories[0]->name ) . '</a>';
										}
										?>
								</div>
							</div>
							<?php } ?>
                            <div class="right-section">
                                <header class="entry-header">
	                                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                                </header>
                            <div class="entry-content">
								<?php
                                the_content( sprintf(
                                /* translators: %s: Name of current post. */
                                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'unique-munk' ), array( 'span' => array( 'class' => array() ) ) ),
                                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                ) );
                                
                                wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'unique-munk' ),
                                'after'  => '</div>',
                                ) );
                                ?>
                            </div>
                            <footer class="entry-meta">
		                            <?php uniquemunk_entry_footer(); ?>
                            </footer><!-- .entry-footer -->
                            </div>
						</article>
