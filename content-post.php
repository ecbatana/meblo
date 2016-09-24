
                            <li class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <h2 class="entry-title title">
                                    <a title="<?php the_title(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="author">
                                    by <a href="<?php the_author_link(); ?>">@<?php the_author(); ?></a> 
                                    at <i><?php the_date(); ?> @ <?php the_time(); ?></i>
                                </p>
                                <?php the_content(); ?>
                            </li>
                            <ul>
                                <?php 
                                    if( is_active_sidebar('bottom-post') ){
                                        dynamic_sidebar('bottom-post');
                                    }
                                ?>
                            </ul>