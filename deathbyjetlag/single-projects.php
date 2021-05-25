<?php
/* Single Project Template
Used on all projects */
?>

<?php get_header(); ?>

<div class="grid wrapper">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="grid project">
                <section class="project__img">
                    <h1><?php the_title(); ?></h1>
                    <p class="rm-m-bs"><?php the_excerpt(); ?></p>
                    <?php the_post_thumbnail('medium'); ?>
                </section>
                <section class="project__summary">
                    <?php the_content(); ?>
                </section>
                <section class="project__details">
                    <h2>Details</h2>
                    <ul class="no-list rm-m-bs" role="list">
                        <?php if (get_post_meta(get_the_ID(), 'framework', true)) : ?>
                            <li><span class="bold">Built With:</span> <?php echo get_post_meta(get_the_ID(), 'framework', true); ?></li>
                        <?php endif; ?>
                        <?php if (get_post_meta(get_the_ID(), 'website', true)) : ?>
                            <li><span class="bold">Visit Live Website:</span> <a href="<?php echo get_post_meta(get_the_ID(), 'website', true); ?>"><?php echo get_post_meta(get_the_ID(), 'website', true); ?></a></li>
                        <?php endif ?>
                        <?php if (get_post_meta(get_the_ID(), 'repo', true)) : ?>
                            <li><span class="bold">Repository:</span> <a href="<?php echo get_post_meta(get_the_ID(), 'repo', true); ?>"><?php echo get_post_meta(get_the_ID(), 'repo', true); ?></a></li>
                        <?php endif ?>
                    </ul>
                </section>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

