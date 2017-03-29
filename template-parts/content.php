<?php
/**
 * Template part for displaying content on index.
 *
 * @package unique_munk
 */
?>


		<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
					<?php  if( has_post_thumbnail() ){ ?>
                        <div class="post_holder" style="background-image:url(<?php echo esc_url( the_post_thumbnail_url('uniquemunk-feature') ); ?>);">
                                <div class="text">
                                    <span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span>
                                    <span><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                </div>
                              <div class="story_cat">
                                  <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );
                                    }
                                    ?>
                              </div>
                        </div>
         			<?php } ?>
                    <div class="text_holder">
                        <?php  if( ! has_post_thumbnail() ){ ?>
                           <span><a class="no-thumb" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                        <?php } ?>
                        <?php the_excerpt(); ?>
                        <?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
                    </div>                            
		</article>
