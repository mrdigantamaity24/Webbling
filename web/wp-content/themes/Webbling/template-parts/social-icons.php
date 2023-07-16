<?php 
    $fbLink = cmb2_get_option('weaversweb_theme_options', 'ww_options_fb_link'); 
    $twLink = cmb2_get_option('weaversweb_theme_options', 'ww_options_tw_link'); 
    $instaLink = cmb2_get_option('weaversweb_theme_options', 'ww_options_insta_link'); 
    $ldLink = cmb2_get_option('weaversweb_theme_options', 'ww_options_ld_link'); 

    if($fbLink || $twLink || $instaLink || $ldLink){
?>
    <h5>Follow Us</h5>
    <ul>
        <?php if(!empty($fbLink)){ ?>
            <li>
                <a href="<?=$fbLink?>" target="_blank"><i class="fab fa-facebook-f"></i> </a>
            </li>
        <?php } ?>
        <?php if(!empty($twLink)){ ?>
            <li>
                <a href="<?=$twLink?>" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>
        <?php } ?>
        <?php if(!empty($instaLink)){ ?>
            <li>
                <a href="<?=$instaLink?>" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
        <?php } ?>
        <?php if(!empty($ldLink)){ ?>
            <li>
                <a href="<?=$ldLink?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </li>
        <?php } ?>
    </ul>

<?php } ?>    