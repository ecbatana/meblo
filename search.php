<?php
/**
 * The main search template file.
 * @package meblo
 */
get_header(); ?>

            <div id="content" class="small-wrapper">
                <div class="search-result">
                    <h3 class="title">
                        Search result for 
                        <i>

                            <?php echo get_search_query(); ?>
                        </i>
                    </h3>
                </div>
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
                    <?php else: ?>

                    <div class="search-result">
                        <p class="search-not-found">
                            Oops, your requested search is not matched in any post!
                            <br />
                            you can 
                            <a href="<?php echo get_home_url(); ?>">
                                back to home
                            </a>
                            , or try to search again ..
                        </p>
                    </div>

                <?php endif;?>

                </ul>
            </div>

<?php get_footer(); ?>