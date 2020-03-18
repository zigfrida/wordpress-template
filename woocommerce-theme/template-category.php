<!--
    Template Name: Category Page
    -->

<?php get_header(); ?>

<div id="category-display" class="container-fluid p-0">

    <div id="cat-overlay"></div>

    <div id="current-cat">
        <img id="category-img">
    </div>

    <div id="category-text"> 
        <div id="category-info" class="d-flex flex-column">
            <h1 class="p-2 text-center" id="category-name"></h1>
            <h4 class="p-2 text-center" id="category-desc"></h4>
            <a id="category-link" class="p-2 text-center"></a>
        </div>
    </div>

    <div id="bottom-navigation" class="text-center">

        <div id="left-arrow" class="arrow" ><i class="fa fa-chevron-left"></i></div>

        <div id="bottom-navigation-contents">
            <?php
                $num_cat = 0;
                $taxonomy     = 'product_cat';
                $orderby      = 'name';  
                $show_count   = 0;      
                $pad_counts   = 0;      
                $hierarchical = 1;        
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

                    $cat_id = $i + 1;

                    echo "<div class='cat-nav-link'>";
                    echo "<span class='cat-id'>$cat_id</span>";
                    echo "<span class='cat-name'>$cat->name</span>";
                    echo "</div>";

                    echo "<div id='$cat->term_id' class='cat-info'>";
                    echo "<input type='hidden' value='$i'>";
                    echo "<input type='hidden' value='$cat->name'>";
                    echo "<input type='hidden' value='$cat->description'>";
                    echo "<input type='hidden' value='$image'>";
                    echo "<input type='hidden' value=' $cat_link'>";
                    echo '</div>';
                }
            ?>
        </div>

        <div id="right-arrow" class="arrow"><i class="fa fa-chevron-right"></i></div>

    </div>

</div>


<?php get_footer(); ?>