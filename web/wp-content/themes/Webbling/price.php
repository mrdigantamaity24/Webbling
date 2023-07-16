<?php
// Template Name: Price
get_header();
$id = base64_decode($_GET['price']);
?>
<section class="banner-sec inner-banner common-background" style="background: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')['0']; ?>');">
    <div class="container">
        <div class="main-heading">
            <h5>Our Services</h5>
            <h1 class="text-uppercase"><?php echo get_the_title($id); ?></h1>
            <p><?php echo get_the_excerpt($id); ?></p>
        </div>
    </div>
</section>

<section class="get-price-form-sec sec_pad">
    <div class="container">
        <form id="msform">
            <input type="hidden" value="<?php echo $id; ?>">
            <div class="step-wrap">
                <ul id="progressbar">
                    <li class="active" id="company-type"><span>1</span><strong>Company Type</strong></li>
                    <li id="registration"><span>2</span><strong>Registration</strong></li>
                    <li id="company-details"><span>3</span><strong>Company Details</strong></li>
                    <li id="pay-price"><span>4</span><strong>Pay & Pricing</strong></li>
                </ul>
            </div>

            <!-- step form 1 -->
            <fieldset id="step-1">
                <div class="get-price-form-wrap">
                    <div class="sub-heading">
                        <h4 class="text-uppercase"><?php the_field('step-1_heading'); ?></h4>
                        <?php the_field('step-1_content'); ?>
                    </div>
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Team" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Company Type" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Contact Name" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Job Title" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="State" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Lorem ipsum" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-froup text-center mb-0">
                                <button class="btn btn-border cancle">Cancel</button>
                                <button class="btn next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </fieldset>

            <!-- step form 2 -->
            <fieldset id="step-2" style="display: none;">
                <div class="get-price-form-wrap">
                    <div class="sub-heading">
                        <h4 class="text-uppercase"><?php the_field('step-2_heading'); ?></h4>
                        <?php the_field('step-2_content'); ?>
                    </div>
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="First Name" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Last Name" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="email" class="form-control" placeholder="Email" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="tel" class="form-control" placeholder="Phone" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="State" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Country" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-froup text-center mb-0">
                                <button class="btn btn-border previous">Privious</button>
                                <button class="btn next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </fieldset>

            <!-- step form 3 -->
            <fieldset id="step-3" style="display: none;">
                <div class="get-price-form-wrap">
                    <div class="sub-heading">
                        <h4 class="text-uppercase"><?php the_field('step-3_heading'); ?></h4>
                        <?php the_field('step-3_content'); ?>
                    </div>
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Company Name" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Entry Ending" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-froup">
                                <input type="text" class="form-control" placeholder="Company Industry" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-froup text-center mb-0">
                                <button class="btn btn-border previous">Privious</button>
                                <button class="btn next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </fieldset>

            <!-- step form 4 -->
            <fieldset id="step-4" style="display: none;">
                <div class="get-price-form-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="pay-price-wrap">
                                <h2><?php the_field('payment_type'); ?></h2>
                                <?php the_field('payment_descrption'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pay-price-wrap">
                                <?php
                                if (have_rows('subscribtion_details')) {
                                    while (have_rows('subscribtion_details')) {
                                        the_row();
                                ?>
                                        <p><?php echo get_sub_field('subscribtion_name'); ?></p>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pay-price-wrap">
                                <div class="price-only">
                                    <h2>€69.49 <small>/month</small></h2>
                                </div>
                                <a href="#" class="btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

        </form>
    </div>
</section>
<?php get_footer(); ?>

<script>
    jQuery(document).on('submit','#msform' ,function(){
        alert('Hi');
    });
</script>