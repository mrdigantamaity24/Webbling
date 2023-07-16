<?php
$prefix = '_ww_';
$pid = get_the_ID();

$isActive = get_post_meta($pid, $prefix.'exposure_active_section', true);
if($isActive === 'on'){
    $image_url = get_post_meta($pid, $prefix.'exposure_image', 1);         
    $image_id = get_post_meta($pid, $prefix.'exposure_image_id', 1);
    $alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true );    
    $srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
    $sizes = wp_get_attachment_image_sizes( $image_id, 'full' );
    
    $exposure_title = get_post_meta($pid, $prefix.'exposure_title', true);
    $exposure_content =  get_post_meta($pid, $prefix.'exposure_content', true) ?  get_post_meta($pid, $prefix.'exposure_content', true)  : '';
    $exposure_button_text = get_post_meta($pid, $prefix.'exposure_button_text', true);
    $exposure_button_link = get_post_meta($pid, $prefix.'exposure_button_link', true);
?>
    <section class="about-sunexposure rel-position">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 sunexposure-left-img">
                    <div class="gliss-left-img wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="0.3s">
                        <?php if($image_id){ ?>
                            <img src="<?php echo $image_url; ?>" srcset="<?php echo esc_attr( $srcset ); ?>" sizes="<?php echo esc_attr( $sizes );?>" alt="<?=esc_html ( $alt );?>">    
                        <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt=""/>
                        <?php } ?>                            
                    </div>
                </div>
                <div class="col-lg-6 sunexposure-right-content">
                    <div class="sunexposure-content p-let-space t-bold small-p wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.3s">
                        <?php if($exposure_title){ ?><h3><?=$exposure_title?></h3><?php } ?>
                            <?=$exposure_content?>
                            <?php if($exposure_button_link){ ?>
                                <div class="btn-wrapper">
                                    <a href="<?=$exposure_button_link?>" class="btn"><?=$exposure_button_text?></a>
                                </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>