<?php
/**
 * Template part for displaying content on archives.
 *
 * @package unique_munk
 */
?>


						<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
							<div class="image-holder">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="post-thumbnail">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'uniquemunk-feature', array( 'class' => '' ) );
                                    } ?>
                                    </a>
								<div class="text">
									<?php
										$categories = get_the_category();
										if ( ! empty( $categories ) ) {
											echo '<a class="category" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '"> <i class="fa fa-tags"></i>' . esc_html( $categories[0]->name ) . '</a>';
										}
                                    ?>
								</div>
							</div>
							<div class="right-section">
								<header class="entry-header">
									<div class="entry-meta">
										<span><?php echo esc_html( get_the_date() ); ?></span>
									</div>
									<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
								</header>
								<div class="entry-content">
								<?php
                                    the_excerpt( sprintf(
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
              </div>
						</article>
