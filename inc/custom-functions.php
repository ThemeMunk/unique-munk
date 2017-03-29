<?php
/**
 * Custom functions for this theme.
 *
 * @package unique_munk
 */


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
if ( ! function_exists( 'uniquemunk_body_classes' ) ) :
 
function uniquemunk_body_classes( $classes ) {
  
	if ( ! is_active_sidebar( 'sidebar' ) ) {	
		$classes[] = 'full-width';
	}    
	
	else {
		$classes[] = '';
	}

	return $classes;
}
endif;

add_filter( 'body_class', 'uniquemunk_body_classes' );

/**
 * Footer Credits 
*/
if ( ! function_exists( 'uniquemunk_footer_credit' ) ) :

function uniquemunk_footer_credit(){
    
    $text  = '<span class="copyright">';
    $text .=  esc_html__( 'Copyright &copy; ', 'unique-munk' ) . date_i18n( 'Y' ); 
    $text .= ' <a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>. ';
    $text .= '</span><span class="site-info">';
    $text .= '<a href="' . esc_url( 'http://thememunk.com/theme/unique-munk/' ) .'" rel="author" target="_blank">' . esc_html__( 'Theme Unique Munk by ThemeMunk', 'unique-munk' ) .'</a>. ';
    $text .= sprintf( esc_html__( 'Powered by %s', 'unique-munk' ), '<a href="'. esc_url( __( 'https://wordpress.org/', 'unique-munk' ) ) .'" target="_blank">WordPress</a>.' );
    $text .= '</span>';
    
    echo apply_filters( 'uniquemunk_footer_text', $text );    
}
endif;

add_action( 'uniquemunk_footer', 'uniquemunk_footer_credit' );