<?php
/**
 * My Awesome WordPress Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage mawt
 * @since 1.0.0
 * @version 1.1.0
 */

if ( !function_exists( 'mawt_scripts' ) ) :
  function mawt_scripts () {
    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700', array(), '1.0.0', 'all' );
    wp_register_style('style', get_stylesheet_uri(), array('google-fonts'), '1.0.0', 'all');

    wp_enqueue_style( 'google-fonts' );
    wp_enqueue_style( 'style' );

    wp_register_script('scripts', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'scripts' );
  }
endif;

add_action( 'wp_enqueue_scripts', 'mawt_scripts' );


if ( !function_exists( 'mawt_setup' ) ):
  function mawt_setup () {
    //https://developer.wordpress.org/reference/functions/add_theme_support/
    add_theme_support( 'post-thumbnails' );
  }
endif;

add_action( 'after_setup_theme', 'mawt_setup' );
