<?php
/*
* Template Name: Project
* The project Page
*/
get_header();
get_template_part('parts/section', 'banner');
global $post;
$post_slug = "";

if ($post) {
    $post_slug = $post->post_name;
}
?>

<main class="projectPage">
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
                    <div class="bg-dark-grey text-white rounded-md-11 px-3 px-md-4 px-xl-5 py-5 py-md-7 py-md-4 mt-md-9">
                        <?php if (!empty(get_field('photo_gallery'))) : ?>
                            <div class="bg-black p-2 p-md-3 rounded-4 rounded-md-11">
                                <div class="projectGalleryNavSlider">
                                    <?php foreach (get_field('photo_gallery') as $photo) : ?>
                                        <div>
                                            <img src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="projectGalleryImageSlider mt-2">
                                <?php foreach (get_field('photo_gallery') as $photo) : ?>
                                    <div>
                                        <img src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="row mt-0 mt-md-4 gx-xl-6 gy-5">
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="text-uppercase fs-20 fs-md-24 font-poppins fw-600"><?= get_the_title() ?></p>
                                    </div>
                                    <?php if (!empty(get_field('price'))) : ?>
                                        <div class="col-auto">
                                            <p class="fs-20 fs-md-22"><span class="fs-14 fs-md-18 fw-600 text-grey">Price</span> $<?= number_format(get_field('price')) ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <article class="description lh-1_67 pt-4">
                                    <?= get_the_content(); ?>
                                </article>

                                <hr class="border-2 border-tertiary opacity-50" />

                                <div class="row gx-xl-6">
                                    <div class="col-4">
                                        <p class="text-tertiary fw-300 fs-14 fs-md-18">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 21 17" fill="none">
                                                <g clip-path="url(#clip0_330_361)">
                                                    <path d="M10.5007 14.8965C7.64527 14.8965 4.79059 14.8965 1.93515 14.8965C1.64645 14.8965 1.51298 15.0287 1.51298 15.3137C1.51298 15.3875 1.51673 15.4613 1.51223 15.5344C1.50623 15.623 1.49723 15.7116 1.48074 15.798C1.41925 16.1132 1.11706 16.3657 0.755629 16.362C0.3927 16.3583 0.0920095 16.0889 0.0372703 15.7426C0.0245228 15.6614 0.0177741 15.578 0.0177741 15.496C0.0170243 13.8186 0.00577647 12.1405 0.0215234 10.4632C0.0305216 9.48568 0.391951 8.63519 1.08481 7.92718C1.50548 7.4975 2.00563 7.19185 2.57777 6.99694C3.02768 6.84412 3.49259 6.79761 3.9665 6.79761C8.35838 6.79908 12.7503 6.79539 17.1422 6.80056C18.4289 6.80204 19.4712 7.31293 20.2435 8.3288C20.623 8.82861 20.8494 9.39635 20.9267 10.0165C20.9529 10.2254 20.9642 10.4381 20.9649 10.6492C20.9679 12.2779 20.9672 13.9065 20.9664 15.5351C20.9664 15.7899 20.9027 16.0217 20.6897 16.19C20.4648 16.3679 20.2136 16.4144 19.9459 16.3059C19.6894 16.2011 19.5274 16.0084 19.4907 15.733C19.4719 15.5942 19.4742 15.4517 19.4704 15.3114C19.4645 15.0848 19.3692 14.9482 19.1788 14.9061C19.1368 14.8965 19.0925 14.8973 19.049 14.8973C16.2003 14.8973 13.3517 14.8973 10.5022 14.8973L10.5007 14.8965Z" fill="#D0D0D0" />
                                                    <path d="M10.3966 0.172974C12.2487 0.172974 14.1001 0.172974 15.9515 0.172974C16.5716 0.172974 17.1512 0.309555 17.6514 0.686816C18.2948 1.17187 18.6704 1.81048 18.7019 2.61225C18.7289 3.29221 18.7169 3.97364 18.7199 4.65433C18.7222 5.09287 18.7199 5.53141 18.7199 5.96995C18.7199 6.00907 18.7177 6.05042 18.7072 6.08807C18.6749 6.20693 18.6097 6.25418 18.4867 6.2313C18.3525 6.2062 18.2228 6.1523 18.0885 6.13754C17.7729 6.10357 17.4564 6.07995 17.1392 6.06371C16.9278 6.05263 16.8625 6.01498 16.8325 5.81048C16.7366 5.16227 16.1269 4.57903 15.3471 4.58789C14.4773 4.59748 13.6074 4.5901 12.7384 4.5901C12.0912 4.5901 11.5386 4.96958 11.3189 5.56758C11.2874 5.65322 11.2754 5.74625 11.2589 5.83632C11.2281 5.998 11.1674 6.05854 11.0039 6.06075C10.6613 6.06445 10.3178 6.06445 9.97515 6.06075C9.81768 6.05928 9.75544 5.998 9.72694 5.8186C9.6872 5.56685 9.58822 5.34241 9.42625 5.14529C9.13306 4.78796 8.75364 4.59379 8.28573 4.59158C7.38815 4.58715 6.49058 4.58936 5.59226 4.59084C4.83791 4.59158 4.24777 5.17187 4.15179 5.809C4.12105 6.01498 4.05881 6.05116 3.84735 6.06445C3.49717 6.08733 3.14699 6.11982 2.79756 6.15673C2.69033 6.16781 2.5876 6.21358 2.48112 6.2313C2.36639 6.24975 2.31315 6.21136 2.28091 6.10062C2.26816 6.05706 2.26216 6.01055 2.26216 5.96478C2.26141 4.91273 2.24717 3.86068 2.26516 2.80863C2.28391 1.70786 2.80056 0.898703 3.81136 0.409223C4.21178 0.216532 4.64594 0.172974 5.08536 0.172974C6.85576 0.172974 8.62616 0.172974 10.3966 0.172974Z" fill="#D0D0D0" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_330_361">
                                                        <rect width="20.9524" height="16.1905" fill="white" transform="translate(0.0131836 0.172485)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Bedrooms
                                        </p>

                                        <p class="text-poppins fs-16 fs-md-22 text-white pt-2"><?= sprintf("%02d", get_field('bedrooms')) ?></p>
                                    </div>

                                    <div class="col-4 border-start border-white">
                                        <p class="text-tertiary fw-300 fs-14 fs-md-18">
                                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_330_369)">
                                                    <path d="M2.22222 15.374H11.5942V17.096H17.4527V15.3778H19.7802C19.931 17.4257 19.9429 19.249 17.8424 20.6389C17.8168 20.6558 17.7961 20.679 17.7392 20.7296C17.9975 20.9442 18.2521 21.1562 18.5042 21.3658C18.1639 21.691 17.8906 21.9525 17.5772 22.2527C17.3007 21.9675 17.0017 21.6366 16.6758 21.3351C16.5801 21.2463 16.4106 21.21 16.2718 21.2013C16.0447 21.1875 15.8145 21.2244 15.5856 21.225C12.5425 21.2269 9.49939 21.2263 6.45566 21.2263C6.30992 21.2263 6.15417 21.2544 6.01968 21.2138C5.61373 21.0918 5.35602 21.2801 5.11457 21.5709C4.90878 21.8186 4.67422 22.0419 4.45967 22.2684C4.17006 21.9638 3.90797 21.6885 3.61773 21.3827C3.81227 21.2106 4.05934 20.9917 4.33707 20.7453C4.14566 20.6083 4.00242 20.5132 3.86668 20.4081C2.84961 19.6244 2.29979 18.5848 2.22785 17.3081C2.1922 16.6757 2.2216 16.0396 2.2216 15.374H2.22222Z" fill="#D0D0D0" />
                                                    <path d="M2.22792 10.6364C2.22291 10.5231 2.21416 10.4212 2.21416 10.3192C2.21353 8.66162 2.21165 7.00465 2.21416 5.34706C2.21666 3.52558 3.48081 2.25454 5.29979 2.26768C5.91028 2.27206 6.53955 2.25955 7.12627 2.39778C8.16712 2.64361 8.82265 3.36545 9.13916 4.38252C9.20046 4.58018 9.2799 4.67589 9.49695 4.73468C10.7217 5.06683 11.5811 6.21151 11.5968 7.4888C11.5993 7.69459 11.5968 7.90038 11.5968 8.12369H5.79957C5.52309 6.66187 6.31749 5.15315 7.97821 4.68214C7.82809 4.02974 7.18569 3.47929 6.5114 3.45552C6.00161 3.43738 5.48994 3.4355 4.98015 3.45552C4.10131 3.48992 3.39449 4.29683 3.39074 5.26449C3.38448 6.93209 3.38886 8.60032 3.38886 10.2679C3.38886 10.3818 3.38886 10.4956 3.38886 10.6357H2.22667L2.22792 10.6364Z" fill="#D0D0D0" />
                                                    <path d="M11.578 14.2036C11.4554 14.2036 11.3635 14.2036 11.2715 14.2036C8.29284 14.2036 5.31354 14.2043 2.33487 14.203C1.69372 14.203 1.23272 13.8996 1.07072 13.3817C0.826769 12.6023 1.37909 11.8517 2.22103 11.8405C3.11675 11.8286 4.01248 11.8373 4.90821 11.8373C7.01242 11.8373 9.116 11.8373 11.2202 11.8373C11.3328 11.8373 11.4454 11.8373 11.578 11.8373V14.203V14.2036Z" fill="#D0D0D0" />
                                                    <path d="M16.2736 15.9545H12.7877C12.782 15.8444 12.7727 15.7443 12.7727 15.6442C12.7714 14.4364 12.7714 13.2279 12.7727 12.02C12.7733 11.1462 13.2506 10.6658 14.1206 10.662C14.4434 10.6608 14.7662 10.6539 15.0889 10.6639C15.8139 10.6871 16.2874 11.1743 16.2893 11.9012C16.293 13.1616 16.2905 14.4213 16.2893 15.6817C16.2893 15.7637 16.2805 15.845 16.2736 15.9545Z" fill="#D0D0D0" />
                                                    <path d="M17.4734 14.1927V11.8377C18.0401 11.8377 18.5987 11.8358 19.1566 11.8383C19.4475 11.8396 19.7446 11.8158 20.0292 11.8627C20.6503 11.9653 21.0544 12.4738 21.0288 13.0674C21.0038 13.6498 20.574 14.1496 19.9642 14.1815C19.146 14.2246 18.3241 14.1921 17.474 14.1921L17.4734 14.1927Z" fill="#D0D0D0" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_330_369">
                                                        <rect width="20.0163" height="20" fill="white" transform="translate(1.01318 2.2677)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                            Bathrooms
                                        </p>

                                        <p class="text-poppins fs-16 fs-md-22 text-white pt-2"><?= sprintf("%02d", get_field('bathrooms')) ?></p>
                                    </div>

                                    <div class="col-4 border-start border-white">
                                        <p class="text-tertiary fw-300 fs-14 fs-md-18">
                                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_330_381)">
                                                    <path d="M2.76347 5.37804C2.54953 5.62963 2.33496 5.88059 2.12604 6.1259C1.71572 5.71182 1.35811 5.35169 1.01367 5.00475C1.887 4.13016 2.7779 3.23864 3.6575 2.35841C4.53773 3.24052 5.428 4.13204 6.30008 5.006C5.9594 5.34668 5.59928 5.70617 5.20779 6.09766C4.9813 5.84482 4.73787 5.57316 4.43296 5.23374V8.84313C6.0761 7.19748 7.75876 5.51356 9.43139 3.83842C8.99033 3.83842 8.49093 3.80768 7.9978 3.84784C7.57055 3.88234 7.27191 3.74181 6.99334 3.42686C6.65518 3.04477 6.27059 2.70347 5.854 2.29379C6.01148 2.28187 6.09743 2.26995 6.18401 2.26995C10.3675 2.26932 14.5509 2.26744 18.7344 2.26995C20.0694 2.27057 21.0212 3.20099 21.0231 4.52793C21.03 8.73334 21.0256 12.9381 21.0256 17.1435C21.0256 17.2019 21.0193 17.2608 20.9384 17.375C20.5594 16.9785 20.1974 16.5638 19.7946 16.193C19.533 15.9521 19.4276 15.7012 19.449 15.3473C19.4791 14.8523 19.4565 14.3541 19.4565 13.8623C17.7763 15.5443 16.1131 17.2088 14.4537 18.8701H18.0699C17.7318 18.5941 17.4532 18.3669 17.1797 18.1436C17.6283 17.7119 17.9934 17.3606 18.3485 17.018C19.1886 17.8675 20.0757 18.7641 20.9566 19.6543C20.1033 20.5013 19.2087 21.3897 18.3234 22.2681C17.9909 21.9293 17.637 21.5691 17.26 21.1852C17.472 20.9982 17.7136 20.7849 17.9551 20.5716C17.9401 20.5346 17.925 20.4976 17.9093 20.4612H17.5636C13.4429 20.4612 9.32222 20.4624 5.20151 20.4605C4.07346 20.4605 3.26036 19.9135 2.9498 18.9184C2.86448 18.6449 2.84001 18.3437 2.83938 18.0545C2.83248 13.9539 2.83499 9.85323 2.83499 5.7526C2.83499 5.64218 2.83499 5.53113 2.83499 5.42071C2.81052 5.40628 2.78605 5.39247 2.76159 5.37804H2.76347ZM4.40661 17.6799C9.02296 13.063 13.6318 8.45289 18.2456 3.83842C17.5881 3.83842 16.9124 3.83278 16.2367 3.84533C16.1501 3.84721 16.0497 3.92626 15.9807 3.99527C12.1725 7.79978 8.36608 11.6068 4.5622 15.4163C4.49381 15.4853 4.41476 15.5857 4.41288 15.6723C4.40033 16.3474 4.40598 17.0224 4.40598 17.6793L4.40661 17.6799ZM19.4565 5.08443C14.8514 9.68823 10.247 14.292 5.64884 18.8889C6.27624 18.8889 6.9419 18.8946 7.60756 18.882C7.69414 18.8801 7.79327 18.798 7.86228 18.7283C11.6768 14.9175 15.4895 11.1043 19.299 7.28908C19.368 7.22007 19.4477 7.11968 19.449 7.0331C19.4615 6.36807 19.4559 5.70241 19.4559 5.08443H19.4565ZM19.4565 9.49374C16.3239 12.6238 13.1882 15.757 10.0531 18.8889C10.6887 18.8889 11.3537 18.8946 12.0194 18.882C12.1053 18.8801 12.2032 18.7942 12.2728 18.7246C14.618 16.3838 16.9607 14.0404 19.3009 11.6946C19.3693 11.6256 19.4477 11.5246 19.4496 11.4374C19.4621 10.7717 19.4565 10.1061 19.4565 9.49311V9.49374ZM4.40661 13.2418C7.54796 10.1017 10.6768 6.9735 13.8125 3.83842C13.1844 3.83842 12.5401 3.83278 11.8958 3.8447C11.808 3.84658 11.7057 3.91999 11.6373 3.98774C9.27642 6.3436 6.91868 8.70197 4.56346 11.0628C4.49507 11.1319 4.41539 11.2316 4.41351 11.3188C4.40096 11.9644 4.40661 12.61 4.40661 13.2418Z" fill="#D0D0D0" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_330_381">
                                                        <rect width="20.0138" height="20" fill="white" transform="translate(1.01367 2.2677)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                            Area
                                        </p>

                                        <p class="text-poppins fs-16 fs-md-22 text-white pt-2"><?= !empty(get_field('area')) ? number_format(get_field('area')) : "0" ?> Sqm</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <p class="font-poppins fs-14 fs-md-22 fw-500 pb-3 pb-md-4">Key Features and Amenities</p>

                                <?php if (have_rows('key_features')) :
                                    while (have_rows('key_features')) : the_row();
                                ?>
                                        <p class="p-2 py-md-3 px-md-4 bg-primary text-white mt-2 mt-md-3 fs-12 fs-md-16">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5339 2.4275C14.8182 2.58598 14.9577 2.91791 14.8721 3.23191L12.9926 10.1234H19.8514C20.1332 10.1234 20.3882 10.2906 20.5005 10.549C20.6129 10.8075 20.5611 11.108 20.3688 11.314L10.4601 21.9305C10.238 22.1685 9.8823 22.2243 9.59803 22.0658C9.31375 21.9073 9.17421 21.5754 9.25984 21.2614L11.1393 14.37H4.28054C3.99871 14.37 3.74373 14.2027 3.63141 13.9443C3.51909 13.6858 3.57082 13.3853 3.76312 13.1793L13.6719 2.56276C13.8939 2.32482 14.2496 2.26901 14.5339 2.4275Z" fill="white" />
                                            </svg>
                                            <?= get_sub_field('text') ?>
                                        </p>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </section>

    <?php $introduction = get_field('introduction'); ?>
    <?php if (!empty($introduction['title'])) : ?>
        <section class="introduction py-5 py-md-9 mt-md-8">
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

    <section class="services bg-tertiary py-6 py-md-9">
        <div class="container">
            <?php if (have_rows('services')) : ?>
                <div class="row gy-4 mb-5 d-md-none">
                    <?php while (have_rows('services')) : the_row(); ?>
                        <div class="col-12">
                            <img class="w-100 rounded-6" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">

                            <p class="fs-24 fw-600 font-poppins py-3"><?= get_sub_field('title') ?></p>

                            <article class="fs-14 fw-500 lh-1_67">
                                <?= get_sub_field('description') ?>
                            </article>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('services')) :
                $counter = 0; ?>
                <div class="row g-4 mb-10 d-none d-md-flex">
                    <?php while (have_rows('services')) : the_row(); ?>
                        <div class="<?= $counter == 0 ? 'col-12' : 'col-md-6' ?>">
                            <div class="serviceCard rounded-11 position-relative overflow-hidden">
                                <img class="h-100 w-100 position-absolute top-0" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">

                                <div class="overlay position-relative h-100 p-5 text-white d-flex align-items-end">
                                    <div class="<?= $counter == 0 ? 'col-xl-9' : '' ?>">
                                        <p class="fs-30 fw-600 font-poppins"><?= get_sub_field('title') ?></p>
                                        <article class="fs-18 fw-500 pt-3 lh-1_67">
                                            <?= get_sub_field('description') ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $counter++;
                    endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('why_us')) :
                $counter = 0;
            ?>
                <div class="bg-dark-grey rounded-17 overflow-hidden">
                    <?php while (have_rows('why_us')) : the_row(); ?>
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center <?= $counter % 2 ? 'order-2' : 'order-2 order-md-1' ?>">
                                <div class="text-white px-3 py-5 col-lg-9 mx-auto">
                                    <p class="fs-30 fs-md-48 fw-600 lh-1"><?= get_sub_field('title'); ?></p>
                                    <article class="fs-18 fw-500 lh-1_67 mt-5 description">
                                        <?= get_sub_field('description'); ?>
                                    </article>
                                </div>
                            </div>

                            <div class="col-lg-6 <?= $counter % 2 ? 'order-1' : 'order-1 order-md-2' ?>">
                                <div class="h-100">
                                    <img class="w-100 h-100 object-cover-fit" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
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

    <?php $faqs = get_field('faqs'); ?>
    <section class="faq mt-5 mt-md-9 s">
        <div class="container">
            <?php if (!empty($faqs['title'])) : ?>
                <p class="fs-30 fs-md-45 font-poppins fw-700 text-primary"><?= $faqs['title'] ?></p>
            <?php endif; ?>

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

            <div class="row align-items-center justify-content-between justify-content-md-end gx-2">
                <?php if (!empty($faqs['link'])) : ?>
                    <div class="col-auto d-md-none">
                        <a href="<?= $faqs['link'] ?>" class="btn btn-black rounded-10 text-white px-4">View All FAQ's</a>
                    </div>
                <?php endif; ?>

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

    <div class="mt-5 mt-md-13">
        <?= get_template_part('parts/section', 'followus'); ?>
    </div>

    <div class="mt-5 mt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>