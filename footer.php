<?php $footer = get_field('footer', 'options'); ?>
<div class="container mt-9 mt-md-13">
    <section class="footer_visit">
        <div class="row align-items-center gy-5">
            <div class="col-12 col-lg">
                <div class="col-xl-9 mx-auto text-white">
                    <?php if (!empty($footer['display_home_title'])) : ?>
                        <p class="fs-30 fs-md-48 fw-600 highlight-primary lh-1"><?= $footer['display_home_title'] ?></p>
                    <?php endif; ?>

                    <?php if (!empty($footer['display_home_description'])) : ?>
                        <article class="description fs-14 fs-md-20 lh-1_67 py-4 py-md-5">
                            <?= $footer['display_home_description'] ?>
                        </article>
                    <?php endif; ?>

                    <p class="fw-700 fs-14 fs-md-20 lh-1">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="36" height="36" fill="url(#pattern0_268_1301)" />
                            <defs>
                                <pattern id="pattern0_268_1301" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_268_1301" transform="scale(0.01)" />
                                </pattern>
                                <image id="image0_268_1301" width="100" height="100" xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>

                        <?= get_field('address', 'options') ?>
                    </p>
                </div>
            </div>

            <?php if (!empty($footer['display_home_image']['url'])) : ?>
                <div class="col-12 col-lg-6">
                    <img class="rounded-15 rounded-md-32" src="<?= $footer['display_home_image']['url'] ?>" alt="<?= $footer['display_home_image']['alt'] ?>">
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>


<footer>
    <div class="container-fluid">
        <div class="h-100 rounded-20 overflow-hidden d-md-none">
            <iframe class="m-0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13260.628432027534!2d151.01220619999998!3d-33.80825850000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1712878687714!5m2!1sen!2sau" width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-xl-11 mx-auto">
            <div class="row align-items-center justify-content-between d-xl-none gy-3 py-5">
                <?php if (!empty(get_field('footer_logo', 'options')['url'])) : ?>
                    <div class="col-12 text-center">
                        <a href="<?= home_url() ?>">
                            <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= get_field('footer_logo', 'options')['alt'] ?>">
                        </a>
                    </div>
                <?php endif; ?>

                <div class="col-12">
                    <hr class="border-grey border-2">
                </div>

                <div class="col-4 text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/lib/high-quality.png" alt="">

                    <p class="text-white fw-500 fs-12 pt-3">Great Attention to Detail</p>
                </div>

                <div class="col-4 text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/lib/years-experience.png" alt="">

                    <p class="text-white fw-500 fs-12 pt-3">15 Years Building Experience</p>
                </div>

                <div class="col-4 text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/lib/australian_business.png" alt="">

                    <p class="text-white fw-500 fs-12 pt-3">A family owned Australian Business</p>
                </div>
            </div>

            <div class="row gy-5">
                <div class="col-6 col-md-8 col-lg-6 col-xl-4">
                    <p class="text-primary fs-20 fw-600 pb-3 pb-md-5">Quick Links</p>

                    <?php wp_nav_menu(array(
                        'menu' => 'Quick Links',
                        'item_class' => 'nav-item py-2',
                        'link_class' => 'text-white fs-14 fs-md-18',
                        'menu_class' => 'ps-0 column-count-2'
                    )); ?>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <p class="text-primary fs-20 fw-600 pb-3 pb-md-5">Our Work</p>

                    <?php wp_nav_menu(array(
                        'menu' => 'Our Work',
                        'item_class' => 'nav-item py-2',
                        'link_class' => 'text-white fs-14 fs-md-18',
                        'menu_class' => 'ps-0'
                    )); ?>

                    <div class="d-md-none">
                        <p class="text-primary fs-20 fw-600 py-3">Support</p>

                        <?php wp_nav_menu(array(
                            'menu' => 'Support',
                            'item_class' => 'nav-item py-2',
                            'link_class' => 'text-white fs-14 fs-md-18',
                            'menu_class' => 'ps-0'
                        )); ?>

                        <p class="text-primary fs-20 fw-600 py-3">Granny Flats</p>

                        <?php wp_nav_menu(array(
                            'menu' => 'Granny Flats',
                            'item_class' => 'nav-item py-2',
                            'link_class' => 'text-white fs-14 fs-md-18',
                            'menu_class' => 'ps-0'
                        )); ?>
                    </div>
                </div>

                <div class="col-4 col-lg-3 col-xl-2 d-none d-md-block">
                    <p class="text-primary fs-20 fw-600 pb-5">Support</p>

                    <?php wp_nav_menu(array(
                        'menu' => 'Support',
                        'item_class' => 'nav-item py-2',
                        'link_class' => 'text-white fs-14 fs-md-18',
                        'menu_class' => 'ps-0'
                    )); ?>
                </div>

                <div class="col-4 col-lg-6 col-xl-2 d-none d-md-block">
                    <p class="text-primary fs-20 fw-600 pb-5">Granny Flats</p>

                    <?php wp_nav_menu(array(
                        'menu' => 'Granny Flats',
                        'item_class' => 'nav-item py-2',
                        'link_class' => 'text-white fs-14 fs-md-18',
                        'menu_class' => 'ps-0'
                    )); ?>
                </div>

                <div class="col-12 col-md-4 col-lg-6 col-xl-2 d-none d-md-block">
                    <div class="h-100 rounded-20 overflow-hidden">
                        <iframe class="m-0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13260.628432027534!2d151.01220619999998!3d-33.80825850000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1712878687714!5m2!1sen!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center justify-content-xl-between pt-5 pb-2 py-md-5">
                <div class="col-9 d-none d-xl-block">
                    <div class="row align-items-center justify-content-between">
                        <?php if (!empty(get_field('footer_logo', 'options')['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= home_url() ?>" class="">
                                    <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= get_field('footer_logo', 'options')['alt'] ?>">
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="col-auto d-flex align-items-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/lib/high-quality.png" alt="">

                            <p class="text-white fw-500">Great Attention to Detail</p>
                        </div>

                        <div class="col-auto d-flex align-items-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/lib/years-experience.png" alt="">

                            <p class="text-white fw-500">15 Years Building Experience</p>
                        </div>

                        <div class="col-auto d-flex align-items-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/lib/australian_business.png" alt="">

                            <p class="text-white fw-500">A family owned Australian Business</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-auto">
                    <div class="row align-items-center justify-content-center g-2">
                        <?php if (have_rows('socials', 'options')) :
                            while (have_rows('socials', 'options')) : the_row();
                        ?>
                                <div class="col-auto">
                                    <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['target'] ?>">
                                        <img src="<?= get_sub_field('icon_2')['url'] ?>" alt="<?= get_sub_field('icon_2')['alt'] ?>">
                                    </a>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <hr class="border-white opacity-100" />

            <div class="row justify-content-between align-items-center py-3 pt-md-5 pb-md-6">
                <div class="col-8 col-md-auto">
                    <p class="fs-12 fs-md-16 opacity-50 text-white text-uppercase">@<?= date('Y') ?> <?= bloginfo('title') ?>. All rights reserved | <span class="text-secondary">Terms & Conditions</span></p>
                </div>
                <div class="col-3 col-md-auto">
                    <a href="https://aiims.com.au/this-is-us/">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/lib/aiims.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="javascript:" id="return-to-top">
    <div class="d-flex justify-content-center align-items-center h-100 w-100">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </div>
</a>
<?php wp_footer(); ?>

</body>

</html>