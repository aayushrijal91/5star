<?php
/*
* Template Name: Granny Flat Designs
* The Granny Flat Designs Page
*/
get_header();
get_template_part('parts/section', 'banner');
global $post;
$post_slug = "";

if ($post) {
    $post_slug = $post->post_name;
}
?>

<main class="grannyFlatDesignsPage">
    <section class="list">
        <div class="container px-0 px-md-3">
            <?php
            $project = new WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $post_slug,
                    ),
                ),
            ));

            if ($project->have_posts()) :
                $index = 1; ?>
                <?php while ($project->have_posts()) :
                    $project->the_post(); ?>
                    <?= get_template_part('parts/section', 'grannyFlatList'); ?>
            <?php
                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </section>

    <?php $introduction = get_field('introduction'); ?>
    <?php if (!empty($introduction['title'])) : ?>
        <section class="introduction bg-dark-grey py-5 py-md-9 mt-md-8">
            <div class="container">
                <div class="row align-items-center gx-0">
                    <?php if (!empty($introduction['image']['url'])) : ?>
                        <div class="col-lg-6">
                            <div class="heroImage overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-lg-6">
                        <div class="content bg-primary py-4 py-md-6 py-xl-9 px-3 px-xl-8 text-white">
                            <p class="fs-30 fs-md-48 font-poppins fw-600 lh-1"><?= $introduction['title'] ?></p>

                            <?php if (!empty($introduction['description'])) : ?>
                                <article class="description fs-18 lh-1_67 pt-4 pt-md-5">
                                    <?= $introduction['description'] ?>
                                </article>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('tailoring')) :
        $index = 1;
    ?>
        <section class="tailoring bg-dark-grey">
            <div class="container">
                <p class="text-white highlight-primary text-center fs-30 fs-md-48 fw-600 lh-1 pb-9">Tailored to <span>Your Lifestyle</span></p>

                <?php while (have_rows('tailoring')) : the_row(); ?>
                    <div class="row">
                        <div class="col-5 col-md-6">
                            <p class="fs-18 fs-md-30 text-white text-capitalize fw-500"><?= get_sub_field('title') ?></p>
                            <p class="fs-18 fs-md-30 text-primary text-capitalize fw-500"><?= get_sub_field('subtitle') ?></p>
                        </div>
                        <div class="col-7 col-md-6">
                            <article class="description fs-18 text-grey lh-1_67 fw-500">
                                <?= get_sub_field('description') ?>
                            </article>
                        </div>
                    </div>
                    <?php if ($index != count(get_field('tailoring'))) : ?>
                        <hr class="border-grey mb-5">
                    <?php
                        $index++;
                    endif; ?>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty(get_field('gallery'))) : ?>
        <section class="grannyFlatDesignGallery bg-dark-grey pt-7" id="grannyFlatDesignGallery">
            <?php foreach (get_field('gallery') as $gallery) : ?>
                <div>
                    <img src="<?= $gallery['url'] ?>" alt="">
                </div>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>

    <?php if (have_rows('why_us')) : ?>
        <section class="why_us bg-dark-grey py-6 py-md-9">
            <div class="container">
                <?php if (have_rows('why_us')) :
                    $counter = 0;
                ?>
                    <div class="bg-dark-grey rounded-17 overflow-hidden">
                        <?php while (have_rows('why_us')) : the_row(); ?>
                            <div class="row g-0">
                                <div class="col-lg-6 d-flex align-items-center <?= $counter % 2 ? 'order-2' : 'order-2 order-lg-1' ?>">
                                    <div class="text-white px-3 py-5 py-xl-8 col-xl-10 <?= $counter % 2 ? 'ms-auto' : 'me-auto' ?>">
                                        <p class="fs-30 fs-md-48 fw-600 lh-1"><?= get_sub_field('title'); ?></p>
                                        <article class="fs-18 fw-500 lh-1_67 mt-4 description">
                                            <?= get_sub_field('description'); ?>
                                        </article>
                                    </div>
                                </div>

                                <div class="col-lg-6 <?= $counter % 2 ? 'order-1' : 'order-1 order-lg-2' ?>">
                                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px">
                                        <img class="w-100 h-100 position-absolute top-0 left-0 object-fit-cover" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter++;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php $faqs = get_field('faqs');
    if (!empty($faqs['title'])) : ?>
        <section class="faq mt-5 mt-md-9 s">
            <div class="container">
                <p class="fs-30 fs-md-45 font-poppins fw-700 text-primary"><?= $faqs['title'] ?></p>

                <div class="row justify-content-between pt-3">
                    <?php if (!empty($faqs['description'])) : ?>
                        <div class="col-12 col-md-9">
                            <article class="text-light-grey fs-14 fs-md-18 lh-1_67">
                                <?= $faqs['description'] ?>
                            </article>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($faqs['link'])) : ?>
                        <div class="col-auto d-none d-md-block">
                            <a href="<?= $faqs['link'] ?>" class="btn btn-black rounded-10 text-white px-4">View All FAQ's</a>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (have_rows('faqs')) :
                    while (have_rows('faqs')) : the_row();
                        if (have_rows('faqs_list')) : ?>
                            <div id="grannyFlatFaqSlider" class="my-5 mt-md-7 mb-md-6">
                                <?php while (have_rows('faqs_list')) : the_row(); ?>
                                    <div>
                                        <p class="fs-20 fw-700 text-white"><?= get_sub_field('question') ?></p>

                                        <article class="text-light-grey fs-14 fs-md-18 lh-1_67 pt-4">
                                            <?= get_sub_field('answer') ?>
                                        </article>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <hr class="border-black border-1 opacity-100" />
                <?php endif;
                    endwhile;
                endif; ?>

                <div class="row align-items-center justify-content-between gx-2">
                    <?php if (!empty($faqs['link'])) : ?>
                        <div class="col-auto d-md-none">
                            <a href="<?= $faqs['link'] ?>" class="btn btn-black rounded-10 text-white px-4">View All FAQ's</a>
                        </div>
                    <?php endif; ?>

                    <div class="col-auto d-none d-md-block">
                        <span id="current-slide">1</span> of <?= get_field('faqs')['faqs_list'] ? count(get_field('faqs')['faqs_list']) : 0; ?>
                    </div>

                    <?php if (have_rows('faqs')) :
                        while (have_rows('faqs')) : the_row();
                            if (have_rows('faqs_list')) : ?>
                                <div class="col-auto">
                                    <div class="row gx-2">
                                        <div class="col-auto">
                                            <button id="grannyflatFaqPrev" class="border-0 bg-transparent">
                                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.47619" y="0.47619" width="54.2857" height="54.2857" rx="9.52381" stroke="#262626" stroke-width="0.952381" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M37.6187 27.6188C37.6187 28.2105 37.139 28.6902 36.5472 28.6902L21.3502 28.6902L27.2898 34.3465C27.7164 34.7566 27.7297 35.4349 27.3195 35.8614C26.9094 36.288 26.2311 36.3012 25.8046 35.8911L17.9475 28.3911C17.7374 28.1891 17.6187 27.9102 17.6187 27.6188C17.6187 27.3273 17.7374 27.0485 17.9475 26.8465L25.8046 19.3465C26.2311 18.9363 26.9094 18.9496 27.3195 19.3762C27.7297 19.8027 27.7164 20.481 27.2898 20.8911L21.3502 26.5474L36.5472 26.5474C37.139 26.5474 37.6187 27.0271 37.6187 27.6188Z" fill="#666666" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="col-auto">
                                            <button id="grannyflatFaqNext" class="border-0 bg-transparent">
                                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.761719" width="55.2381" height="55.2381" rx="10" fill="#0061E0" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3804 27.619C18.3804 27.0273 18.8601 26.5476 19.4518 26.5476L34.6488 26.5476L28.7092 20.8913C28.2826 20.4812 28.2693 19.8029 28.6795 19.3764C29.0896 18.9498 29.7679 18.9365 30.1944 19.3467L38.0516 26.8467C38.2616 27.0487 38.3804 27.3276 38.3804 27.619C38.3804 27.9104 38.2616 28.1893 38.0516 28.3913L30.1944 35.8913C29.7679 36.3015 29.0896 36.2882 28.6795 35.8616C28.2693 35.4351 28.2826 34.7568 28.7092 34.3467L34.6488 28.6904L19.4518 28.6904C18.8601 28.6904 18.3804 28.2107 18.3804 27.619Z" fill="white" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                    <?php endif;
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <div class="mt-5 mt-md-13">
        <?= get_template_part('parts/section', 'followus'); ?>
    </div>

    <div class="mt-5 mt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>