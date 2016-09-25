<?php 
/**
 * The content post template file.
 * @package meblo
 */
?>
                            <li class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="post-content">
                                    <h2 class="entry-title title">
                                        <a title="<?php the_title(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="author">
                                        <i>by</i> 
                                        <a href="<?php the_author_link(); ?>">@<?php the_author(); ?></a> 
                                        <i>at</i>

                                        <?php the_date(); ?> @ <?php the_time(); ?>

                                    </p>

                                    <?php the_content(); ?>

                                </div>
                                <ul class="widget-list">
                                
                                    <?php 
                                        if( is_active_sidebar('bottom-post') ){
                                            dynamic_sidebar('bottom-post');
                                        }
                                    ?>

                                </ul>

                                <?php comments_template(); ?>

                            </li>