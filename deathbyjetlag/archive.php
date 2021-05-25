<?php
/* Archives Template
Used as the template for any archive pages */
?>

<?php get_header(); ?>

<div class="flex col full">
    <header class="page-header center">
        <div class="wrapper">
            <h1><?php the_archive_title(); ?></h1>
        </div>
    </header>
    <div class="blog-home">
        <?php if ( have_posts() ) : ?>
            <section class="all-posts">
                <div class="wrapper">
                    <div class="grid posts-container fluid-col">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article class="post-listing">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_excerpt(); ?>
                                <p><a class="button" href="<?php the_permalink(); ?>">Read More</a></p>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php the_posts_pagination(
            array(
                'prev_text' => 'Previous',
                'next-text' => 'Next'
                )
            );
        ?>
        <aside class="sidebar">
            <div class="wrapper">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        </aside>
    </div>
</div>

<?php get_footer(); ?>