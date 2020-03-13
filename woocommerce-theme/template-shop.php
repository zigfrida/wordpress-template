<!--
Template Name: Shop Page
 -->

<?php get_header(); ?>

<div class="content">

    <div class="container">

        <img src="<?php the_post_thumbnail_url( 'post_image' )?>">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>

        <?php get_sidebar( );?>

        <h1>This is from the shop - post template page</h1>
    </div>

</div>

<?php get_footer(); ?>