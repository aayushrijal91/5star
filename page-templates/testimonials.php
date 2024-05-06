<?php
/*
* Template Name: Testimonials
* The Testimonials Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="testimonialsPage">
    <section class="testimonials bg-dark-grey py-7 py-lg-13">
        <?php $introduction = get_field('introduction'); ?>
        <div class="container-fluid px-xl-0">
            <div class="row align-items-center gy-4">
                <div class="col-12 col-xl-7">
                    <div class="position-relative">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/lib/macbook-m1.png" alt="">

                        <iframe class="heroVideo" src="https://www.youtube.com/embed/y69fQGJ2gZU" title="Granny Flat Builder | Granny Flats Sydney | Anthony Mundine&#39;s Granny Flat Sydney | By 5 Star Granny" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-12 col-xl-5">
                    <?php if (!empty($introduction['title'])) : ?>
                        <p class="text-white highlight-primary fs-30 fs-md-48 lh-1 fw-600">
                            <?= $introduction['title'] ?>
                        </p>
                    <?php endif; ?>

                    <?php if (!empty($introduction['description'])) : ?>
                        <article class="fs-14 fs-md-18 py-4 text-white lh-1_67">
                            <?= $introduction['title'] ?>
                        </article>
                    <?php endif; ?>

                    <div class="testimonialSlider">
                        <?php if (have_rows('video')) :
                            while (have_rows('video')) : the_row(); ?>
                                <div>
                                    <?= get_sub_field('link') ?>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>

                    <div class="col-md-11 col-xl-8 mt-4 mt-md-5">
                        <div class="row justify-content-end gx-2">
                            <div class="col-auto">
                                <button id="testimonialSliderPrev" class="border-0 bg-transparent">
                                    <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.688559" y="0.872031" width="46.6956" height="46.6956" rx="6.37264" stroke="white" stroke-width="1.37614" />
                                        <path d="M17.5259 25.6628L20.869 29.0049L20.869 29.0049C21.081 29.2169 21.2001 29.5045 21.2001 29.8043C21.2001 30.1041 21.081 30.3916 20.869 30.6036C20.657 30.8156 20.3695 30.9347 20.0697 30.9347C19.7699 30.9347 19.4824 30.8156 19.2704 30.6036L13.9997 25.333L17.5259 25.6628ZM17.5259 25.6628H31.9295C32.2291 25.6628 32.5164 25.5438 32.7282 25.332C32.9401 25.1202 33.0591 24.8328 33.0591 24.5332C33.0591 24.2337 32.9401 23.9463 32.7282 23.7345C32.5164 23.5227 32.2291 23.4037 31.9295 23.4037H17.5259M17.5259 25.6628V23.4037M17.5259 23.4037L20.869 20.0616L20.869 20.0616C21.081 19.8496 21.2001 19.562 21.2001 19.2622C21.2001 18.9624 21.081 18.6749 20.869 18.4629C20.657 18.2509 20.3695 18.1318 20.0697 18.1318C19.7699 18.1318 19.4824 18.2509 19.2704 18.4629L13.9997 23.7335L17.5259 23.4037ZM13.7541 24.1003C13.811 23.9633 13.8943 23.8388 13.9993 23.7339V25.3326C13.8943 25.2277 13.811 25.1032 13.7542 24.9662C13.6972 24.829 13.6679 24.6818 13.6679 24.5332C13.6679 24.3847 13.6972 24.2375 13.7541 24.1003Z" fill="white" stroke="white" stroke-width="0.941427" />
                                    </svg>
                                </button>
                            </div>

                            <div class="col-auto">
                                <button id="testimonialSliderNext" class="border-0 bg-transparent">
                                    <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.428223" y="0.18396" width="48.0718" height="48.0718" rx="7.06071" fill="#0061E0" />
                                        <path d="M30.3023 26.1912L26.9592 29.5333L26.9591 29.5333C26.7471 29.7453 26.628 30.0329 26.628 30.3327C26.628 30.6325 26.7471 30.92 26.9591 31.132C27.1711 31.344 27.4586 31.4631 27.7584 31.4631C28.0582 31.4631 28.3458 31.344 28.5578 31.132L33.8284 25.8614L30.3023 26.1912ZM30.3023 26.1912H15.8986C15.599 26.1912 15.3117 26.0722 15.0999 25.8604C14.888 25.6485 14.769 25.3612 14.769 25.0616C14.769 24.762 14.888 24.4747 15.0999 24.2629C15.3117 24.051 15.599 23.932 15.8986 23.932H30.3023M30.3023 26.1912V23.932M30.3023 23.932L26.9592 20.59L26.9591 20.5899C26.7471 20.3779 26.628 20.0904 26.628 19.7906C26.628 19.4908 26.7471 19.2033 26.9591 18.9913C27.1711 18.7793 27.4586 18.6602 27.7584 18.6602C28.0582 18.6602 28.3458 18.7793 28.5578 18.9913L33.8284 24.2619L30.3023 23.932ZM34.074 24.6287C34.0171 24.4916 33.9338 24.3671 33.8288 24.2623V25.861C33.9338 25.7561 34.0171 25.6316 34.074 25.4946C34.1309 25.3573 34.1602 25.2102 34.1602 25.0616C34.1602 24.9131 34.1309 24.7659 34.074 24.6287Z" fill="white" stroke="white" stroke-width="0.941427" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-6 mt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>