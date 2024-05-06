<?php
/*
* Template Name: Process
* The Process Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="processPage">
    <?php if (have_rows('steps')) :
        $index = 1; ?>
        <?php while (have_rows('steps')) : the_row(); ?>
            <section class="<?= $index % 2 == 1 ? 'bg-tertiary' : 'bg-white' ?> py-5 py-md-9">
                <div class="container">
                    <div class="row align-items-center justify-content-between gy-4">
                        <div class="col-lg-6 <?= $index % 2 == 0 ? 'order-2' : 'order-2 order-md-1' ?>">
                            <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>">

                            <p class="fs-28 fs-md-48 text-primary fw-600 py-3 py-md-4"><?= get_sub_field('title') ?></p>

                            <article class="fs-18 description">
                                <p class="text-primary"> To qualify 5 Star Granny Flats will require the below information</p>
                                <?= get_sub_field('description') ?>
                            </article>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-5 <?= $index % 2 == 0 ? 'order-1' : 'order-1 order-md-2' ?>">
                            <div class="position-relative h-100">
                                <div class="rounded-20 overflow-hidden h-100">
                                    <img class="w-100 h-100 object-fit-cover" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                                </div>

                                <div class="number"><?= sprintf("%02d", $index); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
            $index++;
        endwhile; ?>
    <?php endif; ?>

    <div class="mt-md-8 mb-md-11">
        <?= get_template_part('parts/section', 'quoteForm'); ?>
    </div>

    <?= get_template_part('parts/section', 'serviceCta'); ?>

    <div class="mt-6">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>