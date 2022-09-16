<?php
    wp_footer();
    ?>

<div class="copyright-footer">
<img src="<?php echo get_theme_mod('footer_image_logo',get_bloginfo('template_directory').'/assets/images/footer_logo.png' )?>" border="0" alt="">
            <h1><?php printf( get_theme_mod('Footer_text', __( 'Blue Lake Homes', 'Footer_text' ) )); ?></h1>
            <p>
                        <?php 
                            printf( 
                                '%s. %s &copy; %s', 
                                get_theme_mod('copyright_text', __( '© Copyright 2021 HOA Management', 'copyright_text' ) ),
                                get_bloginfo('name'), 
                                date_i18n( 'Y' )
                            ); 
                        ?>
                    </p>

</body>

</html>