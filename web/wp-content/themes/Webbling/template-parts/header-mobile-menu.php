<div class="mobile-menu-container">
    <div class="inner-container">
        <div class="mobile-top-section">
        <?php get_template_part( 'template-parts/search-form-mobile' ); ?>
        </div>
        <div class="mobile-menu">
            <?php wp_nav_menu( array(
                'menu'           => 'Mobile menu', // Do not fall back to first non-empty menu.
                'theme_location' => '__no_such_location',
                'fallback_cb'    => false // Do not fall back to wp_page_menu()
            ) );?>
        </div>
    </div>
</div>