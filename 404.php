<?php
/**
 * The 404 not found template file.
 * @package meblo
 */
get_header(); ?>

            <div id="content" class="small-wrapper">
                <div class="not-found">
                    <p class="sign">404</p>
                    <h3 class="title">
                        Sorry, your requested page is <i>not found!</i>
                    </h3>
                    <p class="desc">
                        you can 
                        <a href="<?php echo get_home_url(); ?>">
                            back to home
                        </a> 
                        or try to search below
                    </p>
                    <div class="search-box">

                        <?php get_search_form(); ?>
                        
                    </div>
                </div>
            </div>

<?php get_footer(); ?>