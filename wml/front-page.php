<?php get_header() ?>

<main class="main front-page">

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

<?php get_footer() ?>