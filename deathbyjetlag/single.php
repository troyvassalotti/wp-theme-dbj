<?php
/* Single Post Template
Used on all posts unless you create a single-specific.php */
?>

<?php get_header(); ?>

<section>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="flex col">
                <?php the_post_thumbnail('medium'); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php comments_template(); ?>
            </div>   
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<aside>
    <?php dynamic_sidebar('sidebar'); ?>
</aside>

<?php get_footer(); ?>