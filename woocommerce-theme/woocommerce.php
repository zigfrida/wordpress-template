<?php get_header(); ?>

<!-- <div id="cat_products_content">

    <div class="container"> -->


        <?php woocommerce_content();?>

        <?php 
            // $category = get_queried_object();
            // echo $category->name;

            // $args = array(
            //         'post_type' => 'product',
            //         'product_cat' => $category->name,
            //     );

            // $loop = new WP_Query( $args );

            // if ( $loop->have_posts() ) {
            //     while ( $loop->have_posts() ) : $loop->the_post();
            //         the_title();
            //         the_content();
            //         //wc_get_template_part( 'content', 'product' );
            //     endwhile;
            // } else {
            //     echo __( 'No products found' );
            // }

            // wp_reset_postdata();
        
        ?>

    <!-- </div>

</div> -->

<?php get_footer(); ?>