<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Patio
 */
get_header(); ?>

            <div id="content" class="small-wrapper">
                <ul class="posts">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <?php if(is_home() || is_front_page() || is_archive()): ?>
                            <?php meblo_home_content(); ?>
                        <?php else: ?>
                            <?php meblo_post_content(); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php meblo_post_nav(); ?>
                <?php endif;?>
                </ul>
            </div>

<?php get_footer(); ?>