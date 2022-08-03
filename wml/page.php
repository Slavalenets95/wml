<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package onlinegroup
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php
    	if(have_rows('constructor')) {
    	    while(have_rows('constructor')) {
    	        the_row();
			
    	        $part = get_row_layout();
			
    	        get_template_part('template-parts/' . $part);
    	    }
    	}
	?>

	
	<?php get_template_part('template-parts/front_page_advantages'); ?>
	<?php get_template_part('template-parts/front_page_team'); ?>
	<?php if(get_field('enable_contact_form')) get_template_part('template-parts/contact_form'); ?>

	</main>

<?php

get_footer();
