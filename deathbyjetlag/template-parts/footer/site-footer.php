<footer class="site-footer hideOnPrint" id="site-footer">
    <div class="flex align-end space-between gap">
        <?php if(is_active_sidebar('footer_left')) : ?>
            <?php dynamic_sidebar('footer_left'); ?>
        <?php endif ?>
        <?php if(is_active_sidebar('footer_center')) : ?>
            <?php dynamic_sidebar('footer_center'); ?>
        <?php endif ?>
        <?php if(is_active_sidebar('footer_right')) : ?>
            <?php dynamic_sidebar('footer_right'); ?>
        <?php endif ?>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'menu_class' => 'footer-navigation__links',
                    'container' => 'nav',
                    'container_class' => 'footer-navigation',
                    'container_id' => 'footer-navigation',
                    'link_class' => 'footer-navigation__link animated-link'
                )
            );
        ?>
    </div>
    <p id="copyright">&copy; <a href="<?php esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> <?php echo date("Y"); ?></p>
</footer>