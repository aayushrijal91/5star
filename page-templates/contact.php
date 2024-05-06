<?php
/*
* Template Name: Contact
* The Contact Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="contactPage">
    <div class="section-help pt-6 pt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>

    <section class="bg-light-black py-8">
        <?= get_template_part('parts/section', 'quoteForm'); ?>
    </section>

    <div class="mt-md-8">
        <?= get_template_part('parts/section', 'followus'); ?>
    </div>
</main>

<?php get_footer(); ?>