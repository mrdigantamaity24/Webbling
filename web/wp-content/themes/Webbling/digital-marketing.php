<?php
// Template Name:Digital Marketing
get_header();
$page_id = get_queried_object_id();
?>

<section class="banner-sec inner-banner common-background" style="background: url('<?php echo get_field('background_image')['url']; ?>');">
    <div class="container">
        <div class="main-heading">
            <h5>Our Services</h5>
            <?php the_field('banner_heading'); ?>
            <!--  <p>Today a website is much more than just a business card for your business.</p>-->
        </div>
    </div>
</section>

<section class="left-right-sec web-development sec_pad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="right-img-wrap">
                    <div class="img-one">
                        <img src="<?php echo get_field('1st_image')['url']; ?>" alt="1st image" />
                    </div>
                    <div class="img-two">
                        <img src="<?php echo get_field('2nd_image')['url']; ?>" alt="2nd image" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="left-text-wrap">
                    <h2 class="text-uppercase"><?php the_field('after_banner_heading'); ?></h2>
                    <?php the_field('after_banner_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="left-right-sec bg-gray-sec sec_pad">
    <div class="container">
        <div class="sub-heading text-center mb-0">
            <h2 class="text-uppercase"><?php the_field('heading'); ?></h2>
        </div>
        <div class="how-do-it-wrap">
            <div class="row justify-content-center">
                <?php
                if (have_rows('working_list')) {
                    while (have_rows('working_list')) {
                        the_row();
                ?>
                        <div class="col-lg-4">
                            <div class="single-how-do-it">
                                <figure>
                                    <img src="<?php echo get_sub_field('how_we_do_image')['url']; ?>" alt="Working Image" />
                                </figure>
                                <figcaption>
                                    <h4 class="text-uppercase"><?php echo get_sub_field('how_we_do_heading'); ?></h4>
                                    <?php echo get_sub_field('how_we_do'); ?>
                                    <a href="#">Read more</a>
                                </figcaption>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
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