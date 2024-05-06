<?php $promises = get_field('promises', 'options'); ?>
<section class="d-flex bg-dark-grey flex-wrap">
    <div class="col-xl-6">
        <div class="position-relative overflow-hidden h-100 d-flex justify-content-center align-items-center">
            <img class="h-100 w-100 opacity-10 object-fit-cover position-absolute top-0" src="<?= get_template_directory_uri() ?>/assets/images/lib/floorplan.jpg" alt="">

            <div class="col-xl-11 col-xxl-8 py-7 px-3 px-md-3 py-xl-3">
                <?php if (!empty($promises['title'])) : ?>
                    <p class="text-white highlight-primary fs-30 fs-md-38 fw-600 lh-1"><?= $promises['title'] ?></p>
                <?php endif; ?>

                <?php if (!empty($promises['description'])) : ?>
                    <article class="text-white fw-500 fs-18 lh-1_87 pt-4 pt-md-5 description">
                        <?= $promises['description'] ?>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="col-xl-6 px-3 py-4 p-xxl-7">
        <div class="row gx-2 gy-5 g-md-5">
            <?php
            if (have_rows('promises', 'options')) :
                while (have_rows('promises', 'options')) : the_row();
                    if (have_rows('list', 'options')) :
                        while (have_rows('list', 'options')) : the_row();
            ?>
                            <div class="col-6">
                                <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>">

                                <p class="fs-18 fs-md-30 fw-600 text-white py-3"><?= get_sub_field('title'); ?></p>

                                <article class="description text-white fs-18 lh-1_67"><?= get_sub_field('description'); ?></article>
                            </div>
            <?php
                        endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>