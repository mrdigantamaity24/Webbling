<div class="menu-holder">
    <div class="main-menu">
        <?php wp_nav_menu( array(
            'menu'           => 'Main menu', // Do not fall back to first non-empty menu.
            'theme_location' => '__no_such_location',
            'fallback_cb'    => false // Do not fall back to wp_page_menu()
        ) );?>
    </div>
</div>