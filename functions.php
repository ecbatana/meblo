<?php
/**
 * Meblo theme functions
 * @package  meblo
 */

/**
 * Run the main setup
 */
if ( ! function_exists('meblo_setup') ) {
    /**
     * meblo_setup
     * Function which used to setup or register various Wordpress feature. 
     */
    function meblo_setup() {
        /**
         * let meblo got menus feature.
         */
        add_theme_support('menus');

        /**
         * and get the title-tag feature.
         *
         * used to set the title automatically provide by Wordpress, and not
         * using the <title> tag manually.
         */
        add_theme_support( 'title-tag' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );
    }
}
add_action('after_setup_theme', 'meblo_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function meblo_widgets_init() {

    /**
     * Setting up footer widget
     */
    $args = array(
        'name'          => __( 'footer', 'meblo' ),
        'id'            => 'footer',
        'class'         => '',
        'before_widget' => '<li class="widget">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="title">',
        'after_title'   => '</h3>'
    );
    register_sidebar($args );

    /**
     * Setting up bottom post widget
     */
    $args = array(
        'name'          => __( 'bottom-post', 'meblo' ),
        'id'            => 'bottom-post',
        'class'         => '',
        'before_widget' => '<li class="widget">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="title">',
        'after_title'   => '</h3>'
    );
    register_sidebar($args );
}
add_action( 'widgets_init', 'meblo_widgets_init' );

/**
 * meblo_excerpt_more
 * used to modify the default excerpt.
 */
function meblo_excerpt_more($output) {
    /**
     * remove the '[...]' characters on content excerpt.
     */
    $output = substr_replace($output, '', -10);
    return $output . '.. <a href="'. get_permalink() . '">' . 'Read More' . ' <i class="fa fa-long-arrow-right fa-fw"></i></a>';
}
add_filter('excerpt_more', 'meblo_excerpt_more');

/**
 * meblo_excerpt_length
 * used to set the content excerpt length, default value 40.
 */
function meblo_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'meblo_excerpt_length');

/**
 * meblo_first_post_image description
 * used to get the first included image on the post
 */
function meblo_first_post_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    return $first_img;
}

/**
 * meblo_first_post_image_alt
 * used to get the first included alt image on the post.
 */
function meblo_first_post_image_alt() {
    global $post, $posts;
    $first_img_alt = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+alt=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img_alt = $matches [1] [0];

    if(empty($first_img_alt)){
        $first_img_alt = the_title();
    }
    return $first_img_alt;
}

/**
 * meblo_post_nav
 * used to get the custom post navigation.
 */
function meblo_post_nav() {
    $separator = '<p class="post-separator"></p>';
    $prev = '<p class="post-prev"><i class="fa fa-long-arrow-left"></i>&nbsp;Previous page</p>';
    $next = '<p class="post-next">Next page&nbsp;<i class="fa fa-long-arrow-right"></i></p>';

    return posts_nav_link($separator, $prev, $next);
}

/**
 * meblo_home_content
 * used to get content if state is in homepage or front page or archive page
 * which will used in index.php 
 */
function meblo_home_content() {
    require_once('content-home.php');
}

/**
 * meblo_post_content
 * used to get content if state is in post page or single page which will used
 * in index.php
 */
function meblo_post_content() {
    require_once('content-post.php');
}