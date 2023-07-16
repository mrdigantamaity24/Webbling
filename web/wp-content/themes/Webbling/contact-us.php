<?php
// Template Name:Contact
get_header();
?>
<section class="banner-sec inner-banner common-background" style="background: url('<?php echo get_field('banner_background_image')['url']; ?>');">
    <div class="container">
        <div class="main-heading">
            <?php
            if (get_field('banner_heading') != '') {
                the_field('banner_heading');
            }
            ?>
            <?php
            if (get_field('banner_content') != '') {
                the_field('banner_content');
            }
            ?>
        </div>
    </div>
</section>

<section class="contact-pg-sec sec_pad">
    <div class="container">
        <div class="contact-outer-wrap">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contact-form-wrap">
                        <?php if (get_field('contact_heading') != '') { ?>
                            <h2 class="text-uppercase"><?php the_field('contact_heading'); ?></h2>
                        <?php } ?>
                        <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-links">
                        <?php if (get_field('contact_image')['url'] != '') { ?>
                            <figure>
                                <img src="<?php echo get_field('contact_image')['url']; ?>" alt="Contact Image" />
                            </figure>
                        <?php } ?>
                        <ul>
                            <?php
                            if (have_rows('contact_details')) {
                                while (have_rows('contact_details')) {
                                    the_row();
                            ?>
                                    <li>
                                        <span><img src="<?php echo get_sub_field('contact_image')['url']; ?>" alt="Icon Image" /></span><strong><?php echo get_sub_field('contact_info'); ?></strong>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-sec">
    <?php if(get_field('map')['url'] != ''){ ?>
    <div class="container-fluid p-0">
        <img src="<?php echo get_field('map')['url']; ?>" alt="Map Image" />
    </div>
    <?php } ?>
</section>
<?php get_footer(); ?>