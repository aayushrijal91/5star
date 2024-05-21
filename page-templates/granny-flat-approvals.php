<?php
/*
* Template Name: Granny Flat Approvals
* The Granny Flat Approvals Page
*/
get_header();
get_template_part('parts/section', 'banner');
global $post;
$post_slug = "";

if ($post) {
    $post_slug = $post->post_name;
}
?>

<main class="grannyFlatApprovalsPage">
    <section class="list">
        <div class="container px-0 px-md-3">
            <?php
            $project = new WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $post_slug,
                    ),
                ),
            ));

            if ($project->have_posts()) :
                $index = 1; ?>
                <?php while ($project->have_posts()) :
                    $project->the_post(); ?>
                    <?= get_template_part('parts/section', 'grannyFlatList'); ?>
            <?php
                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </section>

    <?php $introduction = get_field('introduction'); ?>
    <?php if (!empty($introduction['title'])) : ?>
        <section class="introduction bg-dark-grey py-5 py-md-9 mt-md-8">
            <div class="container">
                <div class="row align-items-center gx-0 gy-5">
                    <?php if (!empty($introduction['image']['url'])) : ?>
                        <div class="col-lg-6">
                            <div class="rounded-10 rounded-md-20 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-lg-6">
                        <div class="ps-lg-3 px-xl-8 text-white">
                            <p class="fs-30 fs-md-48 font-poppins fw-600 lh-1"><?= $introduction['title'] ?></p>

                            <?php if (!empty($introduction['description'])) : ?>
                                <article class="description fs-18 lh-1_67 pt-4 pt-md-5">
                                    <?= $introduction['description'] ?>
                                </article>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php $approval = get_field('approval'); ?>
    <?php if (!empty($approval['title'])) : ?>
        <section class="approval bg-dark-grey pb-6 pb-md-10">
            <div class="container">
                <div class="d-md-none">
                    <img class="w-100 rounded-6" src="<?= $approval['background_image']['url'] ?>" alt="<?= $approval['background_image']['alt'] ?>">

                    <p class="fs-24 fw-600 font-poppins py-3 text-white text-center"><?= $approval['title'] ?></p>

                    <article class="fs-14 fw-500 lh-1_67 text-white text-center description">
                        <?= $approval['description'] ?>
                    </article>
                </div>

                <div class="w-100 d-none d-md-flex">
                    <div class="serviceCard rounded-11 position-relative overflow-hidden w-100">
                        <img class="h-100 w-100 position-absolute object-fit-cover top-0" src="<?= $approval['background_image']['url'] ?>" alt="<?= $approval['background_image']['alt'] ?>">

                        <div class="overlay position-relative h-100 px-3 py-5 p-lg-5 text-white d-flex align-items-end text-center justify-content-center">
                            <div>
                                <p class="fs-30 fw-600 font-poppins"><?= $approval['title'] ?></p>

                                <article class="fs-18 fw-500 pt-3 lh-1_67 description">
                                    <?= $approval['description'] ?>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $process = get_field('process');
    $index = 1;
    ?>
    <section class="process bg-dark-grey">
        <div class="container">
            <?php if (!empty($process['title'])) : ?>
                <p class="text-white highlight-primary text-center fs-30 fs-md-48 fw-600 lh-1"><?= $process['title'] ?></p>
            <?php endif; ?>

            <?php if (!empty($process['description'])) : ?>
                <article class="text-grey highlight-primary text-center fs-14 fs-md-18 lh-1_67 pt-4 mx-auto col-xl-10 pb-6 pb-md-9"><?= $process['description'] ?></article>
            <?php endif; ?>

            <?php
            if (have_rows('process')) :
                while (have_rows('process')) : the_row();
                    if (have_rows('approval_process')) :
                        while (have_rows('approval_process')) : the_row();
            ?>
                            <div class="row">
                                <div class="col-5 col-md-6">
                                    <p class="fs-18 fs-md-30 text-white text-capitalize fw-500"><?= $index . '. ' . get_sub_field('title') ?></p>
                                </div>
                                <div class="col-7 col-md-6">
                                    <article class="description fs-18 text-white lh-1_67">
                                        <?= get_sub_field('description') ?>
                                    </article>
                                </div>
                            </div>
                            <?php if ($index != count(get_field('process')['approval_process'])) : ?>
                                <hr class="border-grey mb-5">
            <?php
                                $index++;
                            endif;
                        endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </section>

    <?php if (have_rows('why_us')) : ?>
        <section class="why_us bg-dark-grey py-6 py-md-9">
            <div class="container">
                <?php if (have_rows('why_us')) :
                    $counter = 0;
                ?>
                    <div class="bg-dark-grey rounded-17 overflow-hidden">
                        <?php while (have_rows('why_us')) : the_row(); ?>
                            <div class="row g-0">
                                <div class="col-lg-6 d-flex align-items-center <?= $counter % 2 ? 'order-2' : 'order-2 order-lg-1' ?>">
                                    <div class="text-white px-3 py-5 py-xl-8 col-xl-10 <?= $counter % 2 ? 'ms-auto' : 'me-auto' ?>">
                                        <p class="fs-30 fs-md-48 fw-600 lh-1"><?= get_sub_field('title'); ?></p>
                                        <article class="fs-18 fw-500 lh-1_67 mt-4 description">
                                            <?= get_sub_field('description'); ?>
                                        </article>
                                    </div>
                                </div>

                                <div class="col-lg-6 <?= $counter % 2 ? 'order-1' : 'order-1 order-lg-2' ?>">
                                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px">
                                        <img class="w-100 h-100 position-absolute top-0 left-0 object-fit-cover" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter++;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <div class="mt-5 mt-md-13">
        <?= get_template_part('parts/section', 'followus'); ?>
    </div>

    <div class="mt-5 mt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>