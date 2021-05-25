<?php
/* Homepage Template
Used on the homepage */
?>

<?php get_header(); ?>

<?php if (get_post_meta(get_the_ID(), 'hero video', true)) : ?>
    <section class="hero">
        <video src="<?php echo get_post_meta(get_the_ID(), 'hero video', true); ?>" autoplay controls muted preload="auto"></video>
        <div class="content">
            <p>Thank You For Visiting</p>
        </div>
    </section>
<?php endif; ?>

<section class="full">
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