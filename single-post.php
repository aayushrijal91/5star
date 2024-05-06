<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="blogPost">
    <section class="pt-5 pt-lg-7">
        <div class="container">
            <?php $section_1 = get_field('section_1'); ?>
            <?php if (!empty($section_1['title'])) : ?>
                <div class="row align-items-center justify-content-between gy-4 py-6">
                    <div class="col-12 col-lg-6 col-xxl-5 order-2 order-lg-1">
                        <?php if (!empty($section_1['subtitle'])) : ?>
                            <p class="font-roboto fs-16 fs-md-20 highlight-primary text-dark-grey pb-3"><?= $section_1['subtitle'] ?></p>
                        <?php endif; ?>

                        <p class="text-dark highlight-primary fs-30 fs-md-48 fw-600 lh-1 text-capitalize"><?= $section_1['title'] ?></p>

                        <?php if (!empty($section_1['description'])) : ?>
                            <article class="description lh-1_87 fs-md-16 fs-lg-18 text-grey pt-4">
                                <?= $section_1['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($section_1['image']['url'])) : ?>
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class="rounded-6 rounded-md-10 overflow-hidden">
                                <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php $section_2 = get_field('section_2'); ?>
            <?php if (!empty($section_2['title'])) : ?>
                <div class="row justify-content-between align-items-center gy-4 py-6">
                    <?php if (!empty($section_2['image']['url'])) : ?>
                        <div class="col-12 col-lg-6 col-xxl-5">
                            <div class="rounded-10 rounded-md-20 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $section_2['image']['url'] ?>" alt="<?= $section_2['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-lg-6">
                        <?php if (!empty($section_2['subtitle'])) : ?>
                            <p class="font-roboto fs-16 fs-md-20 highlight-primary text-dark-grey pb-3"><?= $section_2['subtitle'] ?></p>
                        <?php endif; ?>

                        <p class="text-dark-grey font-poppins highlight-primary fs-30 fs-md-48 fw-600"><?= $section_2['title'] ?></p>

                        <?php if (!empty($section_2['description'])) : ?>
                            <article class="description lh-1_87 fs-lg-18 text-grey pt-4 pt-md-5">
                                <?= $section_2['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php $section_3 = get_field('section_3'); ?>
            <?php if (!empty($section_3['title'])) : ?>
                <div class="row justify-content-between align-items-center  gy-4 py-6">
                    <div class="col-12 col-lg-6 col-xxl-5 order-2 order-lg-1">
                        <?php if (!empty($section_3['subtitle'])) : ?>
                            <p class="font-roboto fs-16 fs-md-20 highlight-primary text-dark-grey pb-3"><?= $section_3['subtitle'] ?></p>
                        <?php endif; ?>

                        <p class="text-dark-grey font-poppins highlight-primary fs-30 fs-md-48 fw-600 pt-3"><?= $section_3['title'] ?></p>

                        <?php if (!empty($section_3['description'])) : ?>
                            <article class="description description lh-1_87 fs-lg-18 text-grey pt-4 pt-md-5">
                                <?= $section_3['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($section_3['image']['url'])) : ?>
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class="rounded-10 rounded-md-20 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $section_3['image']['url'] ?>" alt="<?= $section_3['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php $section_4 = get_field('section_4'); ?>
            <?php if (!empty($section_4['title'])) : ?>
                <div class="row justify-content-between align-items-center gy-4 py-6">
                    <?php if (!empty($section_4['image']['url'])) : ?>
                        <div class="col-12 col-md-5">
                            <div class="rounded-10 rounded-md-20 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $section_4['image']['url'] ?>" alt="<?= $section_4['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-md-6">
                        <?php if (!empty($section_4['subtitle'])) : ?>
                            <p class="font-roboto fs-16 fs-md-20 highlight-primary text-dark-grey pb-3"><?= $section_4['subtitle'] ?></p>
                        <?php endif; ?>

                        <p class="text-dark-grey font-poppins highlight-primary fs-30 fs-md-48 fw-600"><?= $section_4['title'] ?></p>

                        <?php if (!empty($section_4['description'])) : ?>
                            <article class="description lh-1_87 fs-18 text-grey pt-4 pt-md-5">
                                <?= $section_4['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <div class="mt-6 mt-md-8">
        <?= get_template_part('parts/section', 'followus'); ?>
    </div>

    <div class="mt-6 mt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>