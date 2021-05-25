<header class="site-header hideOnPrint">
    <nav class="main-navigation" id="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'header',
                'menu_class' => 'main-navigation__links',
                'container' => false,
                'link_class' => 'main-navigation__link animated-link'
            )
        );
        ?>
    </nav>
</header>