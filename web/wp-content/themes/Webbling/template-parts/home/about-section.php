<?php
$prefix = '_ww_';
$pid = get_the_ID();

$isActive = get_post_meta($pid, $prefix.'about_active_section', true);
if($isActive === 'on'){
    $image_url = get_post_meta($pid, $prefix.'left_image', 1);         
    $image_id = get_post_meta($pid, $prefix.'left_image_id', 1);
    $alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true );    
    $srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
    $sizes = wp_get_attachment_image_sizes( $image_id, 'full' );

    $top_title = get_post_meta($pid, $prefix.'top_title', true);
    $top_content = get_post_meta($pid, $prefix.'top_content', true);
    $right_title = get_post_meta($pid, $prefix.'right_title', true);
    $right_content = get_post_meta($pid, $prefix.'right_content', true);
    $about_button_text = get_post_meta($pid, $prefix.'about_button_text', true);
    $about_button_link = get_post_meta($pid, $prefix.'about_button_link', true);
?>
    <section class="about-life-immune">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <?php if($top_title){ ?><h2><?=$top_title?></h2><?php } ?>
                            <?php if($top_content){ ?>
                                <p><?=$top_content?></p>
                            <?php } ?>
                    </div>
                </div>
            </div>
            <div class="aboutimmuno-wrapper rel-position">
                <div class="apricoat">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/appricot.png" alt="Banner Image" />
                </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="gliss-left-img wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="0.3s">
                        <?php if($image_id){ ?>
                            <img src="<?php echo $image_url; ?>" srcset="<?php echo esc_attr( $srcset ); ?>" sizes="<?php echo esc_attr( $sizes );?>" alt="<?=esc_html ( $alt );?>">    
                        <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grp-capsule-img.png" alt="">
                        <?php } ?>                          
                    </div>
                </div>
                    <div class="col-lg-6">
                        <div class="gliss-content-sec p-let-space t-bold small-p wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.3s">
                            <?php if($right_title){ ?><h3><?=$right_title?></h3><?php } ?>
                            <?php if($right_content){ ?>
                                <p><?=$right_content?></p>
                            <?php } ?>
                            <?php if($about_button_link){ ?>
                                <div class="btn-wrapper">
                                    <a href="<?=$about_button_link?>" class="btn"><?=$about_button_text?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>