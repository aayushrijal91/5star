<?php
$about_1 = get_field('about_1', 'options');
$about_2 = get_field('about_2', 'options');
?>
<div class="container">
    <div class="row justify-content-between align-items-center gy-5">
        <?php if (!empty($about_1['image']['url'])) : ?>
            <div class="col-12 col-lg-6 col-xxl-5">
                <div class="rounded-12 rounded-md-20 overflow-hidden">
                    <img class="h-100 w-100 object-fit-cover" src="<?= $about_1['image']['url'] ?>" alt="<?= $about_1['image']['alt'] ?>">
                </div>
            </div>
        <?php endif; ?>

        <div class="col-12 col-lg-6">
            <?php if (!empty($about_1['subtitle'])) : ?>
                <p class="font-roboto fs-14 fs-md-20 highlight-primary text-dark-grey"><?= $about_1['subtitle'] ?></p>
            <?php endif; ?>

            <?php if (!empty($about_1['title'])) : ?>
                <p class="text-dark-grey font-poppins highlight-primary fs-30 fs-md-48 fw-600 pt-3"><?= $about_1['title'] ?></p>
            <?php endif; ?>

            <?php if (!empty($about_1['description'])) : ?>
                <article class="description fs-18 text-grey lh-1_67 pt-4 pt-md-5">
                    <?= $about_1['description'] ?>
                </article>
            <?php endif; ?>
        </div>
    </div>

    <div class="row justify-content-between align-items-center pt-5 pt-md-9 gy-4">
        <div class="col-12 col-lg-6 col-xxl-5 order-2 order-lg-1">
            <?php if (!empty($about_2['subtitle'])) : ?>
                <p class="font-roboto fs-14 fs-md-20 highlight-primary text-dark-grey"><?= $about_2['subtitle'] ?></p>
            <?php endif; ?>

            <?php if (!empty($about_2['title'])) : ?>
                <p class="text-dark-grey font-poppins highlight-primary fs-30 fs-md-48 fw-600 pt-3"><?= $about_2['title'] ?></p>
            <?php endif; ?>

            <?php if (!empty($about_2['description'])) : ?>
                <article class="description fs-18 text-grey lh-1_67 pt-4 pt-md-5">
                    <?= $about_2['description'] ?>
                </article>
            <?php endif; ?>
        </div>

        <?php if (!empty($about_2['image']['url'])) : ?>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <div class="rounded-20 overflow-hidden">
                    <img class="h-100 w-100 object-fit-cover" src="<?= $about_2['image']['url'] ?>" alt="<?= $about_2['image']['alt'] ?>">
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>