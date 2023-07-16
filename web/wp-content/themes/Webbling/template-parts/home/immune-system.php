<?php
$prefix = '_ww_';
$pid = get_the_ID();

$isActive = get_post_meta($pid, $prefix.'immune_active_section', true);
if($isActive === 'on'){

    
    $immune_group_meta = get_post_meta($pid, 'immune_group_meta', true); 
?>
    <section class="immune-system-chains">
        <div class="container">
            <?php
                if ( count((array) $immune_group_meta ) > 0) {
            ?>
                <div class="row chain-row">
                    <?php
                        foreach ( (array) $immune_group_meta as $key => $entry ) {

                            $image_url = $entry['immune_image'];         
                            $image_id = $entry['immune_image_id'];
                            $alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true );    
                            $srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
                            $sizes = wp_get_attachment_image_sizes( $image_id, 'full' );

                            $immune_title = $entry['immune_title'];
                            $immune_description = isset( $entry['immune_description'] ) ? wpautop( $entry['immune_description'] ) : '';

                    ?>
                        <div class="col-lg-4">
                            <div class="immune-chains-col">
                                <?php if(isset($immune_title)){ ?><h5><?=$immune_title?></h5><?php } ?>
                                <div class="immune-chains-icon">
                                    <?php if($image_id){ ?>
                                        <img src="<?php echo $image_url; ?>" srcset="<?php echo esc_attr( $srcset ); ?>" sizes="<?php echo esc_attr( $sizes );?>" alt="<?=esc_html ( $alt );?>">    
                                    <?php }else{ ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-item.png" alt="Banner Image" />
                                    <?php } ?>   
                                </div>                                
                                <?=$immune_description?>
                            </div>
                        </div>
                    <?php } //end foreach ?>
                </div>
            <?php } // end if ?>
        </div>
    </section>
<?php } ?>