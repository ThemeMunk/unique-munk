<?php
/**
 * uniquemunk Theme Customizer.
 *
 * @package unique_munk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function uniquemunk_customize_register( $wp_customize ) {
			       
    /** Social Settings */
    $wp_customize->add_section(
        'uniquemunk_social_settings',
        array(
            'title' => __( 'Social Media Settings', 'unique-munk' ),
            'priority' => 30,
            'capability' => 'edit_theme_options',
        )
    );
    
    /** Enable/Disable Social Link in Header */
    $wp_customize->add_setting(
        'uniquemunk_social_ed',
        array(
            'sanitize_callback' => 'uniquemunk_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'uniquemunk_social_ed',
        array(
            'label' => __( 'Enable Social Links in Header', 'unique-munk' ),
            'section' => 'uniquemunk_social_settings',
            'type' => 'checkbox',
        )
    );
    /** Enable/Disable Social Link in Footer */
    $wp_customize->add_setting(
        'uniquemunk_social_ed_footer',
        array(
            'sanitize_callback' => 'uniquemunk_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'uniquemunk_social_ed_footer',
        array(
            'label' => __( 'Enable Social Links in Footer', 'unique-munk' ),
            'section' => 'uniquemunk_social_settings',
            'type' => 'checkbox',
        )
    );	

    /** Facebook Button Url */
    $wp_customize->add_setting(
        'uniquemunk_button_url_fb',
        array( 
            'sanitize_callback' => 'uniquemunk_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'uniquemunk_button_url_fb',
        array(
            'label' => __( 'Facebook Page Url', 'unique-munk' ),
            'section' => 'uniquemunk_social_settings',
            'type' => 'text',
        )
    );
        /** Twiter Button Url */
    $wp_customize->add_setting(
        'uniquemunk_button_url_tw',
        array( 
            'sanitize_callback' => 'uniquemunk_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'uniquemunk_button_url_tw',
        array(
            'label' => __( 'Twitter Page Url', 'unique-munk' ),
            'section' => 'uniquemunk_social_settings',
            'type' => 'text',
        )
    );
    /** Pinterest Button Url */
    $wp_customize->add_setting(
        'uniquemunk_button_url_pin',
        array( 
            'sanitize_callback' => 'uniquemunk_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'uniquemunk_button_url_pin',
        array(
            'label' => __( 'Pinterest Page Url', 'unique-munk' ),
            'section' => 'uniquemunk_social_settings',
            'type' => 'text',
        )
    );
    /** Instagram Button Url */
    $wp_customize->add_setting(
        'uniquemunk_button_url_ins',
        array( 
            'sanitize_callback' => 'uniquemunk_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'uniquemunk_button_url_ins',
        array(
            'label' => __( 'Instagram Page Url', 'unique-munk' ),
            'section' => 'uniquemunk_social_settings',
            'type' => 'text',
        )
    );

    /**  Google Plus Button Url */
    $wp_customize->add_setting(
        'uniquemunk_button_url_gp',
        array( 
            'sanitize_callback' => 'uniquemunk_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'uniquemunk_button_url_gp',
        array(
            'label' => __( 'Google Plus Url', 'unique-munk' ),
            'section' => 'uniquemunk_social_settings',
            'type' => 'text',
        )
    );
    /** Social Settings Ends */

    /**
     * Sanitization Functions
     * 
     * @link https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php 
     */
     function uniquemunk_sanitize_checkbox( $checked ){
        // Boolean check.
        return ( ( isset( $checked ) && true == $checked ) ? true : false );
     }
         
     
     function uniquemunk_sanitize_url( $url ){
        return esc_url_raw( $url );
     }     
    
}
add_action( 'customize_register', 'uniquemunk_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function uniquemunk_customize_preview_js() {
	wp_enqueue_script( 'uniquemunk-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'uniquemunk_customize_preview_js' );