<?php
/*
* Template Name: About Us
* The About Us Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="aboutUsPage">
    <?php $introduction = get_field('introduction'); ?>
    <?php if (!empty($introduction['title'])) : ?>
        <section class="introduction py-5 py-md-7 py-lg-10">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-5">
                    <div class="col-12 col-lg-6 col-xxl-5 order-2 order-lg-1">
                        <p class="text-dark highlight-primary fs-30 fs-md-48 fw-600 lh-1 text-capitalize"><?= $introduction['title'] ?></p>

                        <?php if (!empty($introduction['description'])) : ?>
                            <article class="description lh-1_87 fs-18 text-grey pt-4">
                                <?= $introduction['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($introduction['image']['url'])) : ?>
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class="rounded-6 rounded-md-10 overflow-hidden">
                                <img src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?= get_template_part('parts/section', 'promises'); ?>

    <section class="py-9">
        <?= get_template_part('parts/section', 'about'); ?>
    </section>

    <?= get_template_part('parts/section', 'serviceCta'); ?>

    <div class="mt-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>