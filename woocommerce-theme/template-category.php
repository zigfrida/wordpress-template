<!--
    Template Name: Category Page
    -->

<?php get_header(); ?>

<div id="category-display" class="container-fluid p-0">

    <div id="cat-overlay"></div>

    <div id="current-cat">
        <?php
            $num_cat = 0;
            $taxonomy     = 'product_cat';
            $orderby      = 'name';  
            $show_count   = 0;      // 1 for yes, 0 for no
            $pad_counts   = 0;      // 1 for yes, 0 for no
            $hierarchical = 1;      // 1 for yes, 0 for no  
            $title        = '';  
            $empty        = 0;

            $args = array(
                    'taxonomy'     => $taxonomy,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title,
                    'hide_empty'   => $empty
            );
            $all_categories = get_categories( $args );
            $cat = $all_categories[0];
            $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
            $image = wp_get_attachment_url( $thumbnail_id );
            $cat_link = esc_url(get_category_link($cat->term_id));
            echo "<img src='$image' alt='$cat->name'>";
        ?>

    </div>

    <div id="category-info" class="d-flex flex-column">
        <h1 class="p-2 text-center" id="category-name">Name</h1>
        <h4 class="p-2 text-center" id="category-desc">Description @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@hhhhhhhhhhhhh@@@@@</h4>
        <a id="category-link" class="p-2 text-center">View More</a>
    </div>

    <div id="bottom-navigation" class="text-center">

        <div id="left-arrow" class="arrow" ><i class="fa fa-chevron-left"></i></div>
        
        <!-- <div id="bottom-outer-nav-contents"> -->
            <div id="bottom-navigation-contents">
                <div class="cat-nav-link"><span class="cat-id">01</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">02</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">03</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">04</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">05</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">06</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">07</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">08</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">09</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">10</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">11</span><span class="cat-name">This Name Photo</span></div>
                <div class="cat-nav-link"><span class="cat-id">12</span><span class="cat-name">This Name Photo</span></div>
                <?php
                    $num_cat = 0;
                    $taxonomy     = 'product_cat';
                    $orderby      = 'name';  
                    $show_count   = 0;      // 1 for yes, 0 for no
                    $pad_counts   = 0;      // 1 for yes, 0 for no
                    $hierarchical = 1;      // 1 for yes, 0 for no  
                    $title        = '';  
                    $empty        = 0;

                    $args = array(
                            'taxonomy'     => $taxonomy,
                            'orderby'      => $orderby,
                            'show_count'   => $show_count,
                            'pad_counts'   => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li'     => $title,
                            'hide_empty'   => $empty
                    );
                    $all_categories = get_categories( $args );
                    $num_cat = count($all_categories);

                    for ($i = 0; $i < $num_cat; $i++) {
                        $cat = $all_categories[$i];
                        $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                        $cat_link = esc_url(get_category_link($cat->term_id));
                        $current_id = "cat-" . $i;

                        // echo "<div id='$i' class='cat-nav-link' onclick='changeInfo(this)'><span>$id</span><span>$cat->name</span></div>";
                        
                        echo "<div id='$cat->term_id' class='cat-info'>";
                        echo "<input type='hidden' value='$i'>";
                        echo "<input type='hidden' value='$cat->name'>";
                        echo "<input type='hidden' value='$cat->description'>";
                        echo "<input type='hidden' value='$image'>";
                        echo '</div>';
                    }
                ?>
            </div>
        <!-- </div> -->

        <div id="right-arrow" class="arrow"><i class="fa fa-chevron-right"></i></div>

    </div>

</div>


<?php get_footer(); ?>