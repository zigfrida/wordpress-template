
<?php get_header(); ?>

<div id="top-content" class="container-fluid">
    <div id="text-container">
        <div class="d-flex h-100">
            <div class="justify-content-center align-self-center">
                <div class="p-2" id="owner-name">AMANDA GOLUBICS</div>
                <div class="p-2">Photographer |  Artist</div>
            </div>
        </div>
        <div class="social-container">
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-codepen"></i></a></li>
            </ul>
        </div>
    </div>
    <div id="image-container">
        <img src="<?php echo get_theme_file_uri('images/paisagem2.jpg');?>" class="img-responsive" id="main-img">    
    </div>
</div>

<h1>Test Categories</h1>

<div id="category-box">
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

    echo '<div class="container-fluid">';
    for ($i = 0; $i < $num_cat; $i++) {
        if($i == 0) {
            echo '<div class="row">';
        } 
        else if ($i % 12 == 0){
            echo '</div>';
            echo '<div class="row">';
        } 

        $cat = $all_categories[$i];
        $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
        $cat_link = esc_url(get_category_link($cat->term_id));
        echo "<div class='col-md-4 col-sm-6 nopadding'>";
        echo "<a href='$cat_link'><div class='category-effect'>";
        echo "<img class='img-responsive fit-image' src='$image' alt='$cat->name'>";
        echo "<div class='overlay-cat'>";
        echo "<h2>$cat->name</h2>";
        echo "<p>$cat->description</p>";
        echo '</div></div></a>';
        echo '</div>';

        if($i == $num_cat - 1){
            echo '</div>';
        }
    }
    echo '</div>';
?>
</div>

<?php get_footer(); ?>