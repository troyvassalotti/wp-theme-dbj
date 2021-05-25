<?php
/* Page Template
Used on all pages unless you create a page-specific.php */
?>

<?php get_header(); ?>

<section class="flex col full">
    <header class="page-header center">
        <div class="wrapper">
            <h1><?php the_title(); ?></h1>
        </div>
    </header>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>