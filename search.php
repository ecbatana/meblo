<?php
/**
 * The main search template file.
 *
 * @package Patio
 */
get_header(); ?>

            <div id="content" class="small-wrapper">
                <ul class="posts">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <?php if(is_home() || is_front_page() || is_archive() || is_search() ):?>
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