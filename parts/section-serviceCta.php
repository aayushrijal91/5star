<?php $serviceCta = get_field('service_cta', 'options'); ?>
<section class="serviceCta py-7">
    <div class="container">
        <div class="serviceResults bg-primary rounded-10 overflow-hidden">
            <div class="row gx-0 align-items-center">
                <div class="col-12 col-xl-8">
                    <div class="rounded-10 overflow-hidden position-relative d-flex justify-content-center align-items-center">
                        <button class="position-absolute border-0 videoBtn bg-opacity-50 bg-white rounded-circle">
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.4165 10.441C21.7498 11.2108 21.7498 13.1353 20.4165 13.9051L3.5515 23.6421C2.21817 24.4119 0.551499 23.4496 0.551499 21.91L0.5515 2.43601C0.5515 0.896409 2.21817 -0.0658428 3.5515 0.703957L20.4165 10.441Z" fill="#0061E0" />
                            </svg>
                        </button>

                        <?php if (!empty($serviceCta['video_thumbnail']['url'])) : ?>
                            <img class="w-100" src="<?= $serviceCta['video_thumbnail']['url'] ?>" alt="<?= $serviceCta['video_thumbnail']['alt'] ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <article class="p-4">
                        <?php if (!empty($serviceCta['title'])) : ?>
                            <p class="fs-24 fs-md-48 text-white text-capitalize fw-700 lh-1"><?= $serviceCta['title'] ?></p>
                        <?php endif; ?>

                        <?php if (!empty($serviceCta['description'])) : ?>
                            <article class="description text-white lh-1_67 fs-18 col-xl-10 py-4 py-lg-5">
                                <?= $serviceCta['description'] ?>
                            </article>
                        <?php endif; ?>

                        <?php if (!empty($serviceCta['link']['url']) && !empty($serviceCta['link']['title'])) : ?>
                            <a href="<?= $serviceCta['link']['url'] ?>" target="<?= $serviceCta['link']['target'] ?>" class="btn btn-dark-grey text-white d-flex d-md-inline-flex rounded-10 px-6"><?= $serviceCta['link']['title'] ?></a>
                        <?php endif; ?>
                    </article>
                </div>
            </div>
        </div>

        <div class="row gy-4 mt-5">
            <?php if (have_rows('service_cta', 'options')) :
                while (have_rows('service_cta', 'options')) : the_row();
                    if (have_rows('cta', 'options')) :
                        while (have_rows('cta', 'options')) : the_row(); ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="ctaCard">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="icon">
                                            <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>">
                                        </div>

                                        <p class="fs-25 fw-500 text-uppercase font-roboto py-4 py-lg-5"><?= get_sub_field('title') ?></p>

                                        <article class="description fs-18 text-grey lh-1_67">
                                            <?= get_sub_field('description') ?>
                                        </article>
                                    </div>

                                    <?php if (!empty(get_sub_field('link')['url'])) : ?>
                                        <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['target'] ?>" class="fs-20 text-primary mt-4">
                                            <span class="pe-4"><?= get_sub_field('link')['title'] ?></span> <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                                                <path d="M20.1276 7.52702C20.4531 7.20158 20.4531 6.67394 20.1276 6.34851L14.8243 1.04521C14.4989 0.719769 13.9713 0.719769 13.6458 1.04521C13.3204 1.37064 13.3204 1.89828 13.6458 2.22372L18.3599 6.93776L13.6458 11.6518C13.3204 11.9772 13.3204 12.5049 13.6458 12.8303C13.9713 13.1558 14.4989 13.1558 14.8243 12.8303L20.1276 7.52702ZM0.307617 7.7711L19.5384 7.77109L19.5384 6.10443L0.307617 6.10443L0.307617 7.7711Z" fill="#0061E0" />
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
            <?php endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>