<?php
get_header();
get_template_part('parts/section', 'banner');
?>
<main class="blogsPage">
    <section class="bg-tertiary py-5 py-md-8">
        <div class="container">
            <p class="fs-30 fw-600">Recent blog posts</p>

            <div class="row">
                <?php
                $args = array(
                    'posts_per_page' => 4,
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'DESC',
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    $index = 1;

                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                        $post_date = get_the_date(); // Get the post's publish date in 'Y-m-d' format
                        $formatted_date = date('l, j M Y', strtotime($post_date));
                ?>
                        <?php if ($index == 1) : ?>
                            <div class="col-12 col-lg-6">
                                <div class="blogCard rounded-9 bg-lighter py-4 h-100">
                                    <div class="mainImage w-100 overflow-hidden">
                                        <?php if (!empty(get_the_post_thumbnail_url($post->ID, 'full'))) : ?>
                                            <img class="h-100 w-100 object-fit-cover object-position-top" src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?= bloginfo('name') ?>">
                                        <?php else : ?>
                                            <div class="text-primary bg-secondary w-100 h-100 d-flex justify-content-center align-items-center overflow-hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                                </svg>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <p class="text-primary fs-14 fw-600 pt-4 pb-2"><?= $formatted_date ?></p>
                                    <p class="text-dark-grey fw-600 fs-20 fs-md-30"><?= get_the_title(); ?></p>

                                    <p class="text-grey lh-1_67 pt-2 pb-4 fs-14 fs-md-16">
                                        <?php
                                        $short_description = get_field('short_description');
                                        if (strlen($short_description) > 100) {
                                            $short_description = substr($short_description, 0, 100) . '...';
                                        }
                                        echo $short_description;
                                        ?>
                                    </p>
                                    <a href="<?= get_the_permalink() ?>" class="text-primary fs-14 fs-md-18 text-decoration-underline">Read More</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                <?php elseif ($index == 2) : ?>
                                    <div class="col-12">
                                        <div class="blogCard rounded-9 bg-lighter py-4 h-100">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md-6">
                                                    <div class="mainImage w-100 overflow-hidden">
                                                        <?php if (!empty(get_the_post_thumbnail_url($post->ID, 'full'))) : ?>
                                                            <img class="h-100 w-100 object-fit-cover object-position-top" src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?= bloginfo('name') ?>">
                                                        <?php else : ?>
                                                            <div class="text-primary bg-secondary w-100 h-100 d-flex justify-content-center align-items-center overflow-hidden">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                                                </svg>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <p class="text-primary fs-14 fw-600 pt-4 pb-2"><?= $formatted_date ?></p>
                                                    <p class="text-dark-grey fw-600 fs-20"><?= get_the_title(); ?></p>

                                                    <p class="text-grey lh-1_67 pt-2 pb-4 fs-14 fs-md-16">
                                                        <?php
                                                        $short_description = get_field('short_description');
                                                        if (strlen($short_description) > 100) {
                                                            $short_description = substr($short_description, 0, 100) . '...';
                                                        }
                                                        echo $short_description;
                                                        ?>
                                                    </p>
                                                    <a href="<?= get_the_permalink() ?>" class="text-primary fs-14 fs-md-18 text-decoration-underline">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php elseif ($index == 3) : ?>
                                    <div class="col-12">
                                        <div class="blogCard rounded-9 bg-lighter py-4 h-100">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md-6">
                                                    <div class="mainImage w-100 overflow-hidden">
                                                        <?php if (!empty(get_the_post_thumbnail_url($post->ID, 'full'))) : ?>
                                                            <img class="h-100 w-100 object-fit-cover object-position-top" src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?= bloginfo('name') ?>">
                                                        <?php else : ?>
                                                            <div class="text-primary bg-secondary w-100 h-100 d-flex justify-content-center align-items-center overflow-hidden">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                                                </svg>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <p class="text-primary fs-14 fw-600 pt-4 pb-2"><?= $formatted_date ?></p>
                                                    <p class="text-dark-grey fw-600 fs-20"><?= get_the_title(); ?></p>

                                                    <p class="text-grey lh-1_67 pt-2 pb-4 fs-14 fs-md-16">
                                                        <?php
                                                        $short_description = get_field('short_description');
                                                        if (strlen($short_description) > 100) {
                                                            $short_description = substr($short_description, 0, 100) . '...';
                                                        }
                                                        echo $short_description;
                                                        ?>
                                                    </p>
                                                    <a href="<?= get_the_permalink() ?>" class="text-primary fs-14 fs-md-18 text-decoration-underline">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($index == 4) : ?>
                            <div class="col-12">
                                <div class="blogCard rounded-9 bg-lighter py-4 h-100">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-6">
                                            <div class="mainImage w-100 overflow-hidden">
                                                <?php if (!empty(get_the_post_thumbnail_url($post->ID, 'full'))) : ?>
                                                    <img class="h-100 w-100 object-fit-cover object-position-top" src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?= bloginfo('name') ?>">
                                                <?php else : ?>
                                                    <div class="text-primary bg-secondary w-100 h-100 d-flex justify-content-center align-items-center overflow-hidden">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                                        </svg>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <p class="text-primary fs-14 fw-600 pt-4 pb-2"><?= $formatted_date ?></p>
                                            <p class="text-dark-grey fw-600 fs-20 fs-md-30"><?= get_the_title(); ?></p>

                                            <p class="text-grey lh-1_67 pt-2 pb-4 fs-14 fs-md-16">
                                                <?php
                                                $short_description = get_field('short_description');
                                                if (strlen($short_description) > 100) {
                                                    $short_description = substr($short_description, 0, 100) . '...';
                                                }
                                                echo $short_description;
                                                ?>
                                            </p>
                                            <a href="<?= get_the_permalink() ?>" class="text-primary fs-14 fs-md-18 text-decoration-underline">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                <?php
                        $index++;
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>

            <p class="fs-30 fw-600 mt-8">All blog posts</p>

            <div class="row">
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'ASC',
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                        $post_date = get_the_date(); // Get the post's publish date in 'Y-m-d' format
                        $formatted_date = date('l, j M Y', strtotime($post_date));
                ?>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="blogCard rounded-9 bg-lighter py-4 h-100">
                                <div class="mainImage w-100 overflow-hidden">
                                    <?php if (!empty(get_the_post_thumbnail_url($post->ID, 'full'))) : ?>
                                        <img class="h-100 w-100 object-fit-cover object-position-top" src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?= bloginfo('name') ?>">
                                    <?php else : ?>
                                        <div class="text-primary bg-secondary w-100 h-100 d-flex justify-content-center align-items-center overflow-hidden">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <p class="text-primary fs-14 fw-600 pt-4 pb-2"><?= $formatted_date ?></p>
                                <p class="text-dark-grey fw-600 fs-20 fs-md-30"><?= get_the_title(); ?></p>

                                <p class="text-grey lh-1_67 pt-2 pb-4 fs-14 fs-md-16">
                                    <?php
                                    $short_description = get_field('short_description');
                                    if (strlen($short_description) > 100) {
                                        $short_description = substr($short_description, 0, 100) . '...';
                                    }
                                    echo $short_description;
                                    ?>
                                </p>
                                <a href="<?= get_the_permalink() ?>" class="text-primary fs-14 fs-md-18 text-decoration-underline">Read More</a>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>

    <div class="mt-8">
        <?= get_template_part('parts/section', 'followus'); ?>
    </div>

    <div class="mt-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>
<?php get_footer(); ?>