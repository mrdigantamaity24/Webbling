<?php
/**
 * Template Name: Home Template
 * Template Post Type: page
 */

get_header();
?>

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-home' );
		}
	}

	?>

<?php
get_footer();