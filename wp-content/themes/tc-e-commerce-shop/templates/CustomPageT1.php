<?php
 /* Template Name: CustomPageT1 */
get_header();

//echo "<h1>CUSTOM PAGE</h1>";
$query1 =new wpdb('root','','appleshop','localhost');
$categories = $query1->get_results( 'SELECT `name`FROM wp_terms INNER JOIN wp_term_taxonomy ON wp_terms.term_id=wp_term_taxonomy.term_id WHERE wp_term_taxonomy.parent=19' ,ARRAY_A );

?>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <div style="display: flex;justify-content: space-between">
        <div style="">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'custom-menu',
                'container_class' => 'custom-menu-class' ) );
            ?>
        </div>

    <div class="container">

        <ul class="nav nav-tabs">
    <?php
        for($i=0;$i<sizeof($categories);$i++){
         $href='product-category/'.$categories[$i]["name"] ;?>
            <li><a href="#"><?php echo $categories[$i]["name"] ;} ?></a></li>
        </ul>
        <br>
        <?php
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 10,
//            'product_cat'    => 'products'
        );

        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
            global $product;
            echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
        endwhile;

        wp_reset_query();
        ?>
    </div>
    </div>
    <div>
<!--        --><?php //if( is_active_sidebar( 'dynamic_sidebar' ) ) : ?>
            <aside class="custom_sidebar">
                <?php dynamic_sidebar( '1' ); ?>
            </aside>
<!--        --><?php //endif; ?>
    </div>

<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'home_right_1' ); ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?>

<?php get_footer(); ?>