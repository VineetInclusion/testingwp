<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION




// Ensure no direct access to the file.
if (!defined('ABSPATH')) {
    exit;
}

// Function to calculate and display the excerpt size.
function display_excerpt_size() {
    if (is_home() || is_front_page()) {
        
        $excerpt = get_the_excerpt();
       
        $size_in_bytes = strlen($excerpt);
        
        $size_in_kibibytes = $size_in_bytes / 1024;
       
        $formatted_size = number_format($size_in_kibibytes, 3);
        
        
        echo '<div>Excerpt size in kB: <span data-excerpt-kb="' . esc_attr($formatted_size) . '">' . esc_html($formatted_size) . '</span></div>';
    }
}
add_action('astra_entry_content_before', 'display_excerpt_size');


add_filter('the_content', 'add_cool_items_to_content');

function add_cool_items_to_content($content) {
    if (is_single()) {
        global $wpdb;
        $post_id = get_the_ID();

        // Retrieve the cool items associated with the current post
        $cool_items = $wpdb->get_col(
            $wpdb->prepare(
                "SELECT i.name
                FROM {$wpdb->prefix}cool_table_items AS i
                INNER JOIN {$wpdb->prefix}cool_table_relations AS r ON i.id = r.cool_item_id
                WHERE r.post_id = %d",
                $post_id
            )
        );

        // If there are cool items associated with the post
        if (!empty($cool_items)) {
            $cool_items_html = '<div class="cool-items" data-cool-items>';
            foreach ($cool_items as $item) {
                $cool_items_html .= '<span>' . esc_html($item) . '</span> ';
            }
            $cool_items_html .= '</div>';

            // Add the cool items HTML at the beginning of the post content
            $content = $cool_items_html . $content;
        }
    }

    return $content;
}



