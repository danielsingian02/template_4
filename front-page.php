<?php
get_header();
?>
<body id="Front-Page">
    <div class="bg" style="background-image:url('<?php echo get_theme_mod('Background_image',get_bloginfo('template_directory').'/assets/images/banner.png' ); ?>')">
        <div class="banner">
        <div class="container-header clear">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    if ( has_custom_logo() ) {
                    echo '<img class="header_logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                ?>
            </a>
        </div>
            <p><?php printf( get_theme_mod('banner_heading', __( 'Blue Lake Homes', 'banner_heading' ) )); ?></p>
            <button class="banner_button"><a class= "banner_link" href="<?php echo get_theme_mod('banner_button_url', __( '#', 'banner_button_url' ) ); ?>"><?php printf( get_theme_mod('banner_button_text', __( 'Sign in', 'banner_button_text' ) )); ?></a></button>
        </div>
        <div class="intro">
            <h1><?php printf( get_theme_mod('welcome_heading', __( 'Welcome To Our Home', 'welcome_heading' ) )); ?></h1>
            <p><?php printf( get_theme_mod('description', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.', 'description' ) )); ?></p>
        </div>
        <div class="gallery">
                <div class="leftimg"><img class="img-gallery" src="<?php echo get_theme_mod('firts_iamge',get_bloginfo('template_directory').'/assets/images/Rectangle1.png' )?>" border="0" alt="map"></div>
                <div class="centerimg"><img class="img-gallery" src="<?php echo get_theme_mod('second_image',get_bloginfo('template_directory').'/assets/images/Rectangle2.png' )?>" border="0" alt=""></div>
                <div class="rightimg"><img class="img-gallery" src="<?php echo get_theme_mod('third_image',get_bloginfo('template_directory').'/assets/images/Rectangle3.png' )?>" border="0" alt=""></div>
        </div>
        <div class="latest-news">
            <div class="col1">
                <h1><?php printf( get_theme_mod('latest_heading', __( 'Latest News', 'latest_heading' ) )); ?></h1>
                <p><?php printf( get_theme_mod('latest_description', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor.', 'latest_description' ) )); ?></p>
                <div class="col2mob">
                <span><?php printf( get_theme_mod('latest_sale', __( 'Backyard Sale 12-15-2021<br>Easter Egg Hunt 04-23-2021<br>Coffee Hours 02-08-2021<br>Backyard Together 11-16-2021<br>Pet Celebration 07-10-2021', 'latest_sale' ) )); ?></span>
            </div>
            </div>
            <div class="col2">
            <span><?php printf( get_theme_mod('latest_sale', __( 'Backyard Sale 12-15-2021<br>Easter Egg Hunt 04-23-2021<br>Coffee Hours 02-08-2021<br>Backyard Together 11-16-2021<br>Pet Celebration 07-10-2021', 'latest_sale' ) )); ?></span>
            </div>

        </div>
        <div class="map">
            <img class="img-map" src="<?php echo get_theme_mod('map',get_bloginfo('template_directory').'/assets/images/map.png' )?>" border="0" alt="">
        </div>
        <div class="copyright">
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
        </div>
   </div>

<?php
get_footer();
?>
