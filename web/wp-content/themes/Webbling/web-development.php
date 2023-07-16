<?php
// Template Name:Web Development
get_header();
$page_id = get_queried_object_id();
?>

<section class="banner-sec inner-banner common-background" style="background: url('<?php echo get_field('banner_background_image')['url']; ?>');">
    <div class="container">
        <div class="main-heading">
            <h5>Our Services</h5>
            <?php the_field('banner_heading'); ?>
            <?php the_field('banner_description'); ?>
        </div>
    </div>
</section>

<section class="left-right-sec web-development sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="right-img-wrap">
                    <div class="img-one">
                        <img src="<?php echo get_field('1st_service_image')['url']; ?>" alt="1st Image" />
                    </div>
                    <div class="img-two">
                        <img src="<?php echo get_field('2nd_service_image')['url']; ?>" alt="2nd Image" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="left-text-wrap">
                    <h2 class="text-uppercase"><?php the_field('service_heading'); ?></h2>
                    <?php the_field('service_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="left-right-sec bg-gray-sec sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-text-wrap">
                    <h2 class="text-uppercase"><?php the_field('after_service_heading'); ?></h2>
                    <?php the_field('after_service_content'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <figure>
                    <img src="<?php echo get_field('after_service_image')['url']; ?>" alt="" />
                </figure>
            </div>
        </div>

        <div class="get-price-sec common-background fixed-bg sec_pad" style="background: url('<?php echo get_field('price_background_image')['url']; ?>');">
            <div class="sub-heading text-center">
                <h2 class="text-uppercase"><?php the_field('price_heading'); ?></h2>
                <?php the_field('price_content'); ?>
                <a href="<?php echo get_field('price_button')['url']; ?>?price=<?php echo base64_encode($page_id); ?>" class="btn mt-3"><?php echo get_field('price_button')['title']; ?></a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>