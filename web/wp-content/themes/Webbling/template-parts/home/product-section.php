<?php
$prefix = '_ww_';
$pid = get_the_ID();

$isActive = get_post_meta($pid, $prefix.'product_active_section', true);
if($isActive === 'on'){
    $product_title = get_post_meta($pid, $prefix.'product_title', true);
    $product_number = get_post_meta($pid, $prefix.'product_number', true);
?>
    <section class="products-we-deliver">
        <div class="container-md">
                <div class="row">
                    <div class="col-12">
                            <div class="page-title text-center t-white">
                            <?php if($product_title){ ?><h2><?=$product_title?></h2><?php } ?>
                            </div>
                    </div>
                </div>
        </div>
        <?php        
        $tax_query[] = array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
            'operator' => 'IN', // or 'NOT IN' to exclude feature products
        );

        $args = array( 'post_type' => 'product','post_status' => 'publish', 'posts_per_page' => $product_number, 'tax_query' => $tax_query);
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
        ?>
            <div class="product-carousel-wrap">
                <div class="container-md">
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel owl-theme product-item-slider" id="product-item-slider">
                                <?php
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();

                                    $_product = wc_get_product( get_the_ID() ); 
                                    $regularPrice = $_product->get_regular_price();
                                    $salePrice = $_product->get_sale_price();
                                    $price = $_product->get_price();
                                    $regularPrice = $regularPrice <= 0 ? $price : $regularPrice;

                                    $image_url = wp_get_attachment_image( $_product->get_image_id(), 'large' );         
                                    $image_id = $_product->get_image_id();
                                    $alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true );    
                                    $srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
                                    $sizes = wp_get_attachment_image_sizes( $image_id, 'full' );
                                ?>
                                    <div class="item">
                                        <div class="product-capsule-immune text-center rel-position">
                                            <div class="gmp-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blackicon.png" alt="" /></div>
                                            <h4><?=get_the_title()?></h4>
                                            <?=wpautop( strip_tags(substr(get_the_excerpt(), 0, 100)))?>
                                            <div class="price-item">                                                
                                                <?php if($salePrice > 0){ ?>
                                                    <span class="old-price">$<?=$regularPrice?></span><span class="sale-price">$<?=$salePrice?></span>
                                                <?php }else{ ?>
                                                    <span class="sale-price">$<?=$regularPrice?></span>
                                                <?php } ?>
                                            </div>
                                            <a href="<?=get_permalink()?>" class="btn addtocart">Add to cart</a>
                                            <div class="product-immune-img">
                                            <?php if($image_id){ ?>
                                                <?php echo $image_url; ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/capsule-1.png" alt="<?=get_the_title()?>" />
                                            <?php } ?>                                                 
                                            </div>
                                        </div>
                                    </div>

                                <?php } // end wp_query while
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } // end wp_query if ?>
    </section>
<?php } ?>