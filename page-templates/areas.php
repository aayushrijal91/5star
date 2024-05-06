<?php
/*
* Template Name: Areas
* The Areas Page
*/
get_header();
get_template_part('parts/section', 'banner');

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'title',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/suburb.php'
        )
    )
);
$the_query = new WP_Query($args);
?>

<main class="areasPage">
    <section class="bg-tertiary py-6 py-md-9">
        <div class="container">
            <div class="row gx-xl-8 gx-xxl-10 gy-4">
                <div class="col-12 col-lg-4 border-md-end border-light-grey">
                    <div class="d-flex align-items-center bg-quaternary rounded-pill px-4">
                        <input type="search" id="suburbSearch" class="form-control shadow-none bg-transparent px-0 py-3 border-0 text-primary suburbSearch" placeholder="Search for your service area">

                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.16671 14.7612C11.8486 14.7612 14.8334 11.7764 14.8334 8.09445C14.8334 4.41252 11.8486 1.42773 8.16671 1.42773C4.48479 1.42773 1.5 4.41252 1.5 8.09445C1.5 11.7764 4.48479 14.7612 8.16671 14.7612Z" stroke="#0061E0" stroke-width="1.50001" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.5 16.4278L12.875 12.8027" stroke="#0061E0" stroke-width="1.50001" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <div class="col-12 col-lg-8 py-4">
                    <div class="suburbListContainer">
                        <ul id="suburbList" class="suburbList">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></li>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-6 mt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>