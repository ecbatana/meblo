<?php
/**
 * Display the main header of this theme
 *
 * including header navigation and welcome text, till the #content section
 *
 * @package meblo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="main-wrapper">
            <div id="header">
                <div class="nav">
                    <div class="small-wrapper">
                        <div class="logo">
                            <h1>
                                <a href="<?php bloginfo('url'); ?>">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                        </div>
                        <?php
                            $args = array(
                                'container' => '',
                                'menu_class' => 'menus',
                                'link_after' => '<hr />',
                            );
                        
                            wp_nav_menu( $args );
                        ?>
                    </div>
                </div>
                <div class="description small-container">
                    <h1 class="title">
                        <?php bloginfo('name'); ?>
                    </h1>
                    <p class="desc">
                        <?php bloginfo('description'); ?>
                    </p>
                </div>
            </div>