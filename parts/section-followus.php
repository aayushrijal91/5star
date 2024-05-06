<div class="container px-0 px-md-3">
    <section class="rounded-md-20 bg-primary overflow-hidden position-relative">
        <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover d-md-none" src="<?= get_template_directory_uri() ?>/assets/images/background/follow-us-sm.jpg" alt="">

        <div class="row position-relative">
            <div class="col-12 col-lg-6">
                <div class="col-xl-9 px-3 py-5 py-xl-9 mx-auto">
                    <p class="text-capitalize lh-1 fs-38 fs-md-58 fw-600">Follow Us On</p>
                    <p class="text-capitalize lh-1 text-white fs-38 fs-md-58 fw-600 d-none d-md-block">Social Media</p>
                    <p class="text-capitalize lh-1 text-primary fs-38 fs-md-58 fw-600 d-md-none">Social Media</p>

                    <div class="text-center py-4 d-md-none">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/lib/mobile-phone-instagram.png" alt="">
                    </div>

                    <div class="row justify-content-center justify-content-md-start g-3 pt-md-4">
                        <?php if (have_rows('socials', 'options')) :
                            while (have_rows('socials', 'options')) : the_row();
                        ?>
                                <div class="col-2 col-md-auto">
                                    <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['target'] ?>">
                                        <img class="d-none d-md-block" src="<?= get_sub_field('icon_1')['url'] ?>" alt="<?= get_sub_field('icon_1')['alt'] ?>">
                                        <img class="d-md-none" src="<?= get_sub_field('icon_2')['url'] ?>" alt="<?= get_sub_field('icon_2')['alt'] ?>">
                                    </a>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <?php if (!empty(get_field('social_image', 'options')['url'])) : ?>
                <div class="col-12 col-lg-6 d-none d-md-block">
                    <img src="<?= get_field('social_image', 'options')['url'] ?>" alt="<?= get_field('social_image', 'options')['alt'] ?>">
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>