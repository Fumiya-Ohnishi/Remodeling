<?php
/* 子テーマのstyle.cssを読み込む */
add_action( 'wp_enqueue_scripts', 'my_enqueue_style_child' ); 
function my_enqueue_style_child() { 
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
} 
// テーマのスクリプトを読み込む
function enqueue_scripts()
{
    // css
    wp_enqueue_style("style", get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function imagepassshort($arg)
{
    $content = str_replace('" images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
    return $content;
}
add_action('the_content', 'imagepassshort');

function my_contact_enqueue_scripts(){
    wp_deregister_script('contact-form-7');
    wp_deregister_style('contact-form-7');
    if (is_page('contact')) {
        if (function_exists( 'wpcf7_enqueue_scripts')) {
            wpcf7_enqueue_scripts();
        }
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
        }
    }
    }
    add_action( 'wp_enqueue_scripts', 'my_contact_enqueue_scripts');

//コンタクトフォーム７読み込み制限 
function wpcf7_file_load() {
    add_filter( 'wpcf7_load_js', '__return_false' );
    add_filter( 'wpcf7_load_css', '__return_false' );
    if( is_page( 'otoiawase' ) ){
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
    }
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
    wpcf7_enqueue_styles();
    }
    }
    }
    add_action( 'template_redirect', 'wpcf7_file_load' );

?>
