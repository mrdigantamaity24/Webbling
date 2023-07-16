<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="foo-logo-text">
                        <a href="#"><img src="<?php echo get_field('footer_logo', 'option')['url']; ?>" /></a>
                        <?php the_field('footer_content', 'option'); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="foo-links extra-padd">
                        <h4 class="text-uppercase"><?php the_field('navigation_menu_heading', 'option'); ?></h4>
                        <?php wp_nav_menu(array('theme_location' => 'secondary-menu', 'manu_class' => 'nav')); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                        <div id="foo-links">
                            <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
                            <div id="mc_embed_signup" class="newsletter-wrap">
                                <form action="https://weavers-web.us9.list-manage.com/subscribe/post?u=ec4427b9bf2398432efe22924&amp;id=fb236a8c36&amp;f_id=00dc1ae1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                                    <div id="mc_embed_signup_scroll">
                                        <h4 class="text-uppercase">Subscribe newsletter</h4>
                                        <div class="mc-field-group"><input type="email" name="EMAIL" class="form-control required email" id="mce-EMAIL" required="" value="" placeholder="Email"></div>
                                        <div id="mce-responses" class="clear foot">
                                            <div class="response" id="mce-error-response" style="display: none;"></div>
                                            <div class="response" id="mce-success-response" style="display: none;"></div>
                                        </div>
                                        <div aria-hidden="true" style="position: absolute; left: -5000px;">
                                            /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                                            <input type="text" name="b_ec4427b9bf2398432efe22924_fb236a8c36" tabindex="-1" value="">
                                        </div>
                                        <div class="optionalParent">
                                            <div class="clear foot">
                                                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn" value="subscribe">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
                            <script type="text/javascript">
                                (function($) {
                                    window.fnames = new Array();
                                    window.ftypes = new Array();
                                    fnames[0] = 'EMAIL';
                                    ftypes[0] = 'merge';
                                    false
                                }(jQuery));
                                var $mcj = jQuery.noConflict(true);
                            </script>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-end">
        <div class="container">
            <p class="mb-0 text-center">@<?php echo date('Y'); ?> By <?php the_field('company_name', 'option'); ?></p>
        </div>
    </div>
</footer>

<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
</div>
</body>

</html>
<?php wp_footer(); ?>