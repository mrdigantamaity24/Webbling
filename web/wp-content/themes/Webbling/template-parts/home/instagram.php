<?php
$prefix = '_ww_';
$pid = get_the_ID();

$isActive = get_post_meta($pid, $prefix.'insta_active_section', true);
if($isActive === 'on'){    
    $insta_title = get_post_meta($pid, $prefix.'insta_title', true);
?>
    <section class="follow-instagram rel-position">
        <div class="container-fluid px-md-0">
                <div class="row gx-md-0">
                    <div class="col-lg-12">
                        <div class="page-title text-center mb-5">
                        <?php if($insta_title){ ?><h2><?=$insta_title?></h2><?php } ?>
                        </div>
                    </div>
                </div>
                <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>
    </section>
<?php } ?>