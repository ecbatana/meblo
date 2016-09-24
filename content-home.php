
                            <li class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="post-content">
                                    <h2 class="entry-title title">
                                        <a title="<?php the_title(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="author">
                                        by <a href="<?php the_author_link(); ?>">@<?php the_author(); ?></a> 
                                        at <i><?php the_date(); ?> @ <?php the_time(); ?></i>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="image" 
                                             src="<?php echo meblo_first_post_image(); ?>"
                                             title="<?php echo meblo_first_post_image_alt(); ?>"
                                             alt="<?php echo meblo_first_post_image_alt(); ?>" />
                                    </a>
                                    <?php the_excerpt(); ?>
                                </div>
                            </li>