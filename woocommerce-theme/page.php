<?php get_header(); ?>

<h1><?php the_title();?></h1>

<div class="content">

    <div class="container">

        <img src="<?php the_post_thumbnail_url( 'post_image' )?>">

        <h1>This is post page</h1>

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>

        <?php get_sidebar( );?>
    </div>

</div>

<?php get_footer(); ?>