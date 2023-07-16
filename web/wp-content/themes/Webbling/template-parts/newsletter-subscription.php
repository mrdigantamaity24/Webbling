<?php $nlcode = cmb2_get_option('weaversweb_theme_options', 'ww_options_nl_code'); 
$nltitle = cmb2_get_option('weaversweb_theme_options', 'ww_options_nl_title'); 
$nlsubtitle = cmb2_get_option('weaversweb_theme_options', 'ww_options_nl_subtitle'); 

if($nlcode){
?>
    <div class="footer-nav-info t-white">
        <h5><?=$nltitle?></h5>
        <p><?=$nlsubtitle?></p>
    </div>
    <div class="subscribe-newsletter">
        <?php echo do_shortcode($nlcode); ?>
    </div>
<?php } ?>