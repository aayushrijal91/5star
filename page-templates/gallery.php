<?php
/*
* Template Name: Gallery
* The Gallery Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="galleryPage">
    <?php if (have_rows('gallery')) :
        $index = 0;
        while (have_rows('gallery')) : the_row();
    ?>
            <section class="gallery_list <?= $index % 2 ? 'bg-white' : 'bg-dark-grey' ?> py-5 py-md-7 py-lg-10">
                <div class="container-fluid">
                    <div class="row gy-5">
                        <div class="col-12 col-lg-6">
                            <div class="col-xl-10 col-xxl-8 mx-auto">
                                <p class="<?= $index % 2 ? 'text-dark-grey' : 'text-white' ?> fs-28 fs-md-48 fs-lg-64 font-poppins lh-1 fw-600 highlight-primary"><?= get_sub_field('title') ?></p>

                                <article class="<?= $index % 2 ? 'text-dark-grey' : 'text-white' ?> description lh-1_67 fs-18 mt-4">
                                    <?= get_sub_field('description') ?>
                                    <a href="" class="fs-16 fs-md-20 fw-600"><i>See More</i></a>
                                </article>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="gallerySlider">
                                <?php foreach (get_sub_field('images') as $image) : ?>
                                    <div>
                                        <div class="image">
                                            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row justify-content-end gx-2">
                        <div class="col-auto">
                            <a href="javascript:void(0)" class="gallerySliderPrev">
                                <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.688071" y="0.688071" width="65.7006" height="65.7006" rx="6.37264" stroke="#939393" stroke-width="1.37614" />
                                    <path d="M24.0039 32.5857H44.5513C44.92 32.5857 45.2736 32.7322 45.5343 32.9929C45.795 33.2536 45.9414 33.6071 45.9414 33.9758C45.9414 34.3445 45.795 34.698 45.5343 34.9587C45.2736 35.2194 44.92 35.3659 44.5513 35.3659H24.0039L28.9865 40.3469L28.9866 40.3469C29.2475 40.6079 29.394 40.9617 29.394 41.3307C29.394 41.6997 29.2475 42.0535 28.9866 42.3144L28.6537 41.9816L28.9866 42.3145C28.7257 42.5754 28.3718 42.7219 28.0028 42.7219C27.6338 42.7219 27.28 42.5754 27.0191 42.3145L27.3519 41.9816L27.0191 42.3145L19.6646 34.96C19.6645 34.9599 19.6644 34.9598 19.6644 34.9598L19.6642 34.9595L19.997 34.6267C19.9114 34.5413 19.8435 34.4398 19.7971 34.3282C19.7508 34.2165 19.7269 34.0967 19.7269 33.9758C19.7269 33.8549 19.7508 33.7351 19.7971 33.6234C19.8435 33.5117 19.9114 33.4103 19.997 33.3249M24.0039 32.5857L19.6642 32.992L19.997 33.3249M24.0039 32.5857H23.3381L28.6537 27.2718C28.8264 27.0992 28.9233 26.865 28.9233 26.6209C28.9233 26.3768 28.8264 26.1426 28.6537 25.97C28.4811 25.7973 28.247 25.7004 28.0028 25.7004C27.7587 25.7004 27.5245 25.7973 27.3519 25.97L19.997 33.3249M24.0039 32.5857L28.9865 27.6047L28.9866 27.6046C29.2475 27.3437 29.394 26.9899 29.394 26.6209C29.394 26.2519 29.2475 25.898 28.9866 25.6371C28.7257 25.3762 28.3718 25.2297 28.0028 25.2297C27.6338 25.2297 27.28 25.3762 27.0191 25.6371L19.6646 32.9916L19.997 33.3249" fill="#939393" stroke="#939393" stroke-width="0.941427" />
                                </svg>
                            </a>
                        </div>

                        <div class="col-auto">
                            <a href="javascript:void(0)" class="gallerySliderNext">
                                <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.921875" width="67.0767" height="67.0767" rx="7.06071" fill="#0061E0" />
                                    <path d="M43.0566 33.323H22.5092C22.1405 33.323 21.787 33.4695 21.5263 33.7302C21.2656 33.9909 21.1191 34.3444 21.1191 34.7131C21.1191 35.0818 21.2656 35.4353 21.5263 35.696C21.787 35.9567 22.1405 36.1032 22.5092 36.1032H43.0566L38.074 41.0842L38.074 41.0842C37.8131 41.3452 37.6665 41.699 37.6665 42.068C37.6665 42.437 37.8131 42.7908 38.074 43.0518L38.4068 42.7189L38.074 43.0518C38.3349 43.3127 38.6888 43.4592 39.0577 43.4592C39.4267 43.4592 39.7806 43.3127 40.0415 43.0518L39.7086 42.7189L40.0415 43.0518L47.396 35.6973C47.396 35.6972 47.3961 35.6971 47.3962 35.6971L47.3964 35.6969L47.0635 35.364C47.1492 35.2786 47.2171 35.1772 47.2634 35.0655C47.3098 34.9538 47.3336 34.834 47.3336 34.7131C47.3336 34.5922 47.3098 34.4724 47.2634 34.3607C47.2171 34.249 47.1492 34.1476 47.0635 34.0622M43.0566 33.323L47.3964 33.7293L47.0635 34.0622M43.0566 33.323H43.7224L38.4068 28.0091C38.2342 27.8365 38.1372 27.6023 38.1372 27.3582C38.1372 27.1141 38.2342 26.8799 38.4068 26.7073C38.5795 26.5347 38.8136 26.4377 39.0577 26.4377C39.3019 26.4377 39.536 26.5347 39.7086 26.7073L47.0635 34.0622M43.0566 33.323L38.074 28.342L38.074 28.3419C37.8131 28.081 37.6665 27.7272 37.6665 27.3582C37.6665 26.9892 37.8131 26.6353 38.074 26.3744C38.3349 26.1135 38.6888 25.967 39.0577 25.967C39.4267 25.967 39.7806 26.1135 40.0415 26.3744L47.396 33.7289L47.0635 34.0622" fill="white" stroke="white" stroke-width="0.941427" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    <?php
            $index++;
        endwhile;
    endif; ?>

    <div class="mt-6 mt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>