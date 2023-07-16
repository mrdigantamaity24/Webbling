<?php
$prefix = '_ww_';
$pid = get_the_ID();

$isActive = get_post_meta($pid, $prefix.'banner_active_section', true);
if($isActive === 'on'){
    $image_url = get_post_meta($pid, $prefix.'banner_image', 1);         
    $image_id = get_post_meta($pid, $prefix.'banner_image_id', 1);
    $alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true );    
    $srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
    $sizes = wp_get_attachment_image_sizes( $image_id, 'full' );

    $ticker = get_post_meta($pid, $prefix.'banner_bg_text', true);
    $banner_title = get_post_meta($pid, $prefix.'banner_title', true);
    $banner_excerpt = get_post_meta($pid, $prefix.'banner_excerpt', true);
    $banner_button_text = get_post_meta($pid, $prefix.'banner_button_text', true);
    $banner_button_link = get_post_meta($pid, $prefix.'banner_button_link', true);
?>
    <section class="homepage-banner-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-bg-main.png);">
        <?php if($ticker){ ?>
            <div class="title-ticker smallspace"><div class="ticker-oval"><h2 class="text-roller" id="text-roller1"> <span><?=$ticker?></span> </h2></div></div>   
        <?php } ?>             
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="banner-image">
                        <?php if($image_id){ ?>
                            <img src="<?php echo $image_url; ?>" srcset="<?php echo esc_attr( $srcset ); ?>" sizes="<?php echo esc_attr( $sizes );?>" alt="<?=esc_html ( $alt );?>">    
                        <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-item.png" alt="Banner Image" />
                        <?php } ?>                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="banner-content">
                        <?php if($banner_title){ ?><h1><?=$banner_title?></h1><?php } ?>
                        <?php if($banner_excerpt){ ?>
                            <p><?=$banner_excerpt?></p>
                        <?php } ?>
                        <?php if($banner_button_link){ ?>
                            <div class="btn-wrapper">
                                <a href="<?=$banner_button_link?>" class="btn"><?=$banner_button_text?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
