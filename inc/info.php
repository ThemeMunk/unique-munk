<?php
/**
 * Unique Munk Theme Info
 *
 * @package unique_munk
 */

function uniquemunk_customizer_theme_info( $wp_customize ) {
	
    $wp_customize->add_section( 'theme_info' , array(
		'title'       => __( 'Information Links' , 'unique-munk' ),
		'priority'    => 6,
		));

	$wp_customize->add_setting('theme_info_theme',array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
		));
    
    $theme_info = '';
	$theme_info .= '<h3 class="sticky_title">' . __( 'Need help?', 'unique-munk' ) . '</h3>';
    $theme_info .= '<span class="sticky_info_row"><a href="' . esc_url( 'http://demo.thememunk.com/uniquemunk/' ) . '" target="_blank">' . __( 'View demo', 'unique-munk' ) . '</a></span>';
	$theme_info .= '<span class="sticky_info_row"><a href="' . esc_url( 'https://thememunk.com/article/unique-munk-documentation/' ) . '" target="_blank">' . __( 'View documentation', 'unique-munk' ) . '</a></span>';
    $theme_info .= '<span class="sticky_info_row"><a href="' . esc_url( 'https://thememunk.com/support/' ) . '" target="_blank">' . __( 'Support Ticket', 'unique-munk' ) . '</a></span>';
	$theme_info .= '<span class="sticky_info_row"><a href="' . esc_url( 'https://thememunk.com/theme/unique-munk/' ) . '" target="_blank">' . __( 'More Details', 'unique-munk' ) . '</a></span>';
	

	$wp_customize->add_control( new uniquemunk_Theme_Info( $wp_customize ,'theme_info_theme',array(
		'label' => __( 'About Unique Munk' , 'unique-munk' ),
		'section' => 'theme_info',
		'description' => $theme_info
		)));

	$wp_customize->add_setting('theme_info_more_theme',array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
		));

}
add_action( 'customize_register', 'uniquemunk_customizer_theme_info' );


if( class_exists( 'WP_Customize_control' ) ){

	class uniquemunk_Theme_Info extends WP_Customize_Control
	{
    	/**
       	* Render the content on the theme customizer page
       	*/
       	public function render_content()
       	{
       		?>
       		<label>
       			<strong class="customize-text_editor"><?php echo esc_html( $this->label ); ?></strong>
       			<br />
       			<span class="customize-text_editor_desc">
       				<?php echo wp_kses_post( $this->description ); ?>
       			</span>
       		</label>
       		<?php
       	}
    }//editor close
    
}//class close