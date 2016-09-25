<?php
/**
 * The footer template file
 * @package meblo
 */
?>

            <div style="clear:both;"></div>
            <div id="footer">
                <div class="small-wrapper">
                    <ul class="widget-list">

                        <?php 
                            if( is_active_sidebar('footer') ){
                                dynamic_sidebar('footer');
                            }
                        ?>
                        
                    </ul>
                    <div class="bar">
                        <p class="copy">
                            Handcrafted by 
                            <a href="https://github.com/armenthiz">
                                @armenthiz
                            </a>
                        </p>
                        <ul class="social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/armenthiz">
                                    <i class="fa fa-github"></i>
                                </a>
                            </li>
                        </ul>
                        <p class="wordpress">
                            Proudly powered by 
                            <a href="https://wordpress.org">Wordpress</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    </body>
</html>