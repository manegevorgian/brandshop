<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-aa">
 *
 * @package TC E-Commerce Shop
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'tc-e-commerce-shop' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  <?php if(get_theme_mod('tc_e_commerce_shop_preloader_hide',true)){ ?>
    <?php if(get_theme_mod( 'tc_e_commerce_shop_preloader_type','center-square') == 'center-square'){ ?>
      <div class='preloader'>
        <div class='preloader-squares'>
          <div class='square'></div>
          <div class='square'></div>
          <div class='square'></div>
          <div class='square'></div>
        </div>
      </div>
    <?php }else if(get_theme_mod( 'tc_e_commerce_shop_preloader_type') == 'chasing-square') {?>    
      <div class='preloader'>
        <div class='preloader-chasing-squares'>
          <div class='square'></div>
          <div class='square'></div>
          <div class='square'></div>
          <div class='square'></div>
        </div>
      </div>
    <?php }?>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'tc-e-commerce-shop' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'tc-e-commerce-shop' );?></span></a>
    <?php if( get_theme_mod('tc_e_commerce_shop_topbar_hide') != ''){ ?>
      <div class="topbar">
        <div class="container">
          <div class="baricon">
            <?php if( get_theme_mod( 'tc_e_commerce_shop_mail','' ) != '') { ?>
              <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_mail','') ); ?></span>
            <?php } ?>
            <?php if( get_theme_mod( 'tc_e_commerce_shop_call','' ) != '') { ?>
              <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_call','')); ?></span>
            <?php } ?>
            <?php if( get_theme_mod( 'tc_e_commerce_shop_facebook_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'tc_e_commerce_shop_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Facebook','tc-e-commerce-shop' );?></span></a>
            <?php } ?>
            <?php if( get_theme_mod( 'tc_e_commerce_shop_twitter_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'tc_e_commerce_shop_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Twitter','tc-e-commerce-shop' );?></span></a>
            <?php } ?>
            <?php if( get_theme_mod( 'tc_e_commerce_shop_instagram_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'tc_e_commerce_shop_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_attr_e( 'Instagram','tc-e-commerce-shop' );?></span></a>
            <?php } ?>
            <?php if( get_theme_mod( 'tc_e_commerce_shop_youtube_url') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'tc_e_commerce_shop_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Youtube','tc-e-commerce-shop' );?></span></a>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php }?>
    <div id="header" class="<?php if( get_theme_mod( 'tc_e_commerce_shop_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
      <div class="container">
        <div class="row">
          <div class="logo col-lg-3 col-md-5 col-9">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php if( get_theme_mod( 'tc_e_commerce_shop_site_title',true) != '') { ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php endif; ?>
            <?php }?>
            <?php if( get_theme_mod( 'tc_e_commerce_shop_site_tagline',true) != '') { ?>
              <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
              ?>
                <p class="site-description">
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif; ?>
            <?php }?>
          </div><?php /** logo **/ ?> 
          <div class="col-lg-9 col-md-7 col-3">
              <div class="menubox nav">
                  <div class="toggle-menu responsive-menu">
                   <button role="tab" onclick="tc_e_commerce_shop_menu_open()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','tc-e-commerce-shop'); ?></span></button>
                  </div>
                 <div id="menu-sidebar" class="nav sidebar">
                  <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tc-e-commerce-shop' ); ?>">
                    <?php 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    ?>
                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="tc_e_commerce_shop_menu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','tc-e-commerce-shop'); ?></span></a>
                  </nav>
                </div>
              </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </header>