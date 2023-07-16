<?php get_header();
// $page_id = get_queried_object_id();
?>

<!-- banner section  -->
<section class="banner-sec common-background fixed-bg" style="background: url('<?php echo get_field('banner_image')['url']; ?>');">
    <div class="container">
        <div class="main-heading">
            <?php
            if (get_field('banner_heading') != '') {
                the_field('banner_heading');
            }
            if (get_field('banner_circle_image')['url']) {
            ?>
                <div class="circle-btn">
                    <a href="<?php the_field('banner_circle_image_link'); ?>">
                        <span><img src="<?php echo get_field('banner_circle_image')['url']; ?>" alt="Circle image" /></span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- service section  -->
<section class="our-services-sec sec_pad">
    <div class="container">
        <div class="sub-heading text-center text-uppercase">
            <h2><?php the_field('service_text'); ?></h2>
        </div>
        <div class="row">
            <?php
            $page = get_field('page_name');
            foreach ($page as $page) {
                $name = get_the_title($page);   // page name
                $image = get_the_post_thumbnail_url($page, 'large');    // page image
                $excerpt = get_the_excerpt($page);  // page excerpt
            ?>
                <div class="col-lg-6">
                    <div class="single-service">
                        <figure>
                            <img src="<?php echo $image; ?>" alt="Content Image" />
                        </figure>
                        <figcaption>
                            <h4 class="text-uppercase"><?php echo $name; ?></h4>
                            <p><?php echo $excerpt; ?></p>
                            <div class="text-end">
                                <a href="<?php the_permalink($page); ?>">
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/s-arrow.svg" alt="Arrow Image" /></span>
                                </a>
                            </div>
                        </figcaption>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- who we are section  -->
<section class="who-we-are-sec sec_pad pb-0">
    <div class="container">
        <div class="sub-heading text-center mb-0">
            <h2 class="text-uppercase"><?php the_field('who_are_we_heading'); ?></h2>
            <?php the_field('who_are_we_content'); ?>
        </div>
        <div class="who-img-wrap sec_pad pb-0">
            <figure>
                <img src="<?php echo get_field('who_are_we_image')['url']; ?>" alt="Who Image" />
            </figure>
        </div>
    </div>
</section>

<!-- service repeater section  -->
<section class="left-right-sec sec_pad">
    <div class="container">
        <?php
        if (have_rows('service_list')) {
            while (have_rows('service_list')) {
                the_row();
        ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-text-wrap">
                            <h2 class="text-uppercase"><?php echo get_sub_field('service_heading'); ?></h2>
                            <?php echo get_sub_field('service_content'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-img-wrap">
                            <div class="img-one">
                                <img src="<?php echo get_sub_field('1st_service_image')['url']; ?>" alt="1st Service Image" />
                            </div>
                            <div class="img-two">
                                <img src="<?php echo get_sub_field('2nd_service_image')['url']; ?>" alt="2nd Service Image" />
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</section>

<!-- traning section  -->
<section class="training-sec common-background fixed-bg sec_pad" style="background: url('<?php echo get_field('traning_background_image')['url']; ?>');">
    <div class="container">
        <div class="sub-heading text-center mb-0">
            <h2 class="text-uppercase"><?php the_field('traning_heading'); ?></h2>
            <?php the_field('traning_content'); ?>
            <div class="circle-btn">
                <a href="#">
                    <span><img src="<?php echo get_field('traning_circle_image')['url']; ?>" alt="arrow icon" /></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- coffee togather  -->
<section class="coffe-together-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <figure>
                    <img src="<?php echo get_field('coffee_image')['url']; ?>" alt="coffee image" />
                </figure>
            </div>
            <div class="col-lg-7">
                <div class="figcaption">
                    <h2 class="text-uppercase"><?php the_field('coffee_heading'); ?></h2>
                    <?php the_field('coffee_content'); ?>
                    <div class="text-end">
                        <a href="<?php the_field('arrow_image_link'); ?>">
                            <span><img src="<?php echo get_field('arrow_image')['url']; ?>" alt="Arrow Image" /></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- price section  -->
<section class="get-price-sec sec_pad">
    <div class="container">
        <div class="sub-heading text-center">
            <h2 class="text-uppercase"><?php the_field('price_heading'); ?></h2>
            <?php the_field('price_content'); ?>
            <a href="<?php echo get_field('get_price_button')['url']; ?>" class="btn mt-3"><?php echo get_field('get_price_button')['title']; ?></a>
        </div>
    </div>
</section>


<!-- contact section  -->
<section class="contact-sec common-background fixed-bg sec_pad" style="background: url('<?php echo get_field('contact_background_image')['url']; ?>');">
    <div class="container">
        <div class="contact-text-with-form">
            <div class="row align-items-center m-0">
                <div class="col-lg-5 p-0">
                    <div class="contact-links">
                        <h3 class="text-uppercase"><?php the_field('contact_heading'); ?></h3>
                        <ul>
                            <?php
                            if (have_rows('contact_info')) {
                                while (have_rows('contact_info')) {
                                    the_row();
                            ?>
                                    <li>
                                        <span><img src="<?php echo get_sub_field('info_image')['url']; ?>" alt="Icon Image" /></span><strong><?php echo get_sub_field('info_name'); ?></strong>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 p-0">
                    <div class="contact-form-wrap">
                        <h2 class="text-uppercase"><?php the_field('contact_form_heading'); ?></h2>
                        <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>