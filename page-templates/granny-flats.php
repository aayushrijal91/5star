<?php
/*
* Template Name: Granny Flats
* The Granny Flats Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="grannyFlatsPage">
    <div class="py-7">
        <?= get_template_part('parts/section', 'unitType'); ?>
    </div>

    <?php $granny_flat_display = get_field('granny_flat_display'); ?>
    <section class="gallery py-5 py-md-9">
        <div class="container">
            <div class="row align-items-center gx-0 gy-4">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="bg-dark-grey left-container">
                        <div class="px-md-5 py-4 py-md-5 pt-lg-14 pb-lg-7">
                            <?php if (!empty($granny_flat_display['title'])) : ?>
                                <p class="fs-30 fs-md-48 font-poppins fw-600 lh-1 text-white highlight-primary pb-3 pb-md-5"><?= $granny_flat_display['title'] ?></p>
                            <?php endif; ?>

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

                                    <p class="text-poppins fs-18 fs-md-22 text-white pt-2"><?= !empty($granny_flat_display['bedroom']) ? sprintf("%02d", $granny_flat_display['bedroom']) : '0' ?></p>
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

                                    <p class="text-poppins fs-18 fs-md-22 text-white pt-2"><?= !empty($granny_flat_display['bathrooms']) ? sprintf("%02d", $granny_flat_display['bathrooms']) : '0' ?></p>
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

                                    <p class="text-poppins fs-18 fs-md-22 text-white pt-2"><?= !empty($granny_flat_display['areas']) ? number_format($granny_flat_display['areas']) : "0" ?> Sqm</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-black p-3 px-md-4 d-none d-md-block">
                            <div class="grannyFlatGalleryNav">
                                <?php foreach ($granny_flat_display['gallery'] as $image) : ?>
                                    <div>
                                        <img class="w-100 h-100 object-fit-cover" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <div class="position-relative overflow-hidden rounded-20 right-container">
                        <div class="grannyFlatGallery h-100">
                            <?php foreach ($granny_flat_display['gallery'] as $image) : ?>
                                <div>
                                    <img class="w-100 h-100 object-fit-cover" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="py-md-5 p-4 w-100 top-0 right-0 position-absolute d-flex align-items-end h-100">
                            <div class="row justify-content-end gx-3 w-100">
                                <div class="col-auto">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn border-2 border-white rounded-11 ps-3 pe-4 fs-18 fw-600 text-white gap-2">
                                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <rect x="0.252441" y="0.626221" width="27.7778" height="27.7778" fill="url(#pattern0_271_5801)" />
                                            <defs>
                                                <pattern id="pattern0_271_5801" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                    <use xlink:href="#image0_271_5801" transform="scale(0.0111111)" />
                                                </pattern>
                                                <image id="image0_271_5801" width="90" height="90" xlink:href="data:image/png;base64,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" />
                                            </defs>
                                        </svg>

                                        Call</a>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= home_url() ?>/contact/" class="btn btn-primary rounded-11 px-4 fs-18 fw-500">Enquire</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-black p-3 px-md-4 mt-3 d-md-none">
                        <div class="grannyFlatGalleryNav">
                            <?php foreach ($granny_flat_display['gallery'] as $image) : ?>
                                <div>
                                    <img class="w-100 h-100 object-fit-cover" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="designs bg-dark-grey py-5">
        <div class="container">
            <p class="text-uppercase text-white fs-30 fs-md-40 fw-500 font-poppins">Granny flat designs</p>
            <p class="fs-14 fs-md-18 text-light-grey pt-2">Check out our granny Flat Designs</p>

            <div id="grannyFlatDesignsSlider" class="pt-4 pt-md-5">
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
                            'terms'    => 'granny-flat-designs',
                        ),
                    ),
                ));

                if ($project->have_posts()) :
                    $index = 1; ?>
                    <?php while ($project->have_posts()) :
                        $project->the_post();
                    ?>
                        <div>
                            <div class="row gy-4">
                                <div class="col-12 col-lg-8">
                                    <div class="bg-primary rounded-10 p-3 p-md-4 h-100">
                                        <div class="row g-3">
                                            <div class="col-md-8">
                                                <div class="rounded-10 overflow-hidden <?= get_the_post_thumbnail_url($post->ID, 'full') ? '' : 'bg-light-grey d-flex justify-content-center align-items-center' ?>" style="height: 250px">
                                                    <?php if (get_the_post_thumbnail_url($post->ID, 'full')) : ?>
                                                        <img class="w-100 h-100 object-fit-cover" src="<?= get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="">
                                                    <?php else : ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#696969" class="bi bi-card-image" viewBox="0 0 16 16">
                                                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                                        </svg>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <?php if (get_field('floorplan_gallery') && count(get_field('floorplan_gallery')) > 0) : ?>
                                                    <div class="rounded-10 overflow-hidden" style="height: 250px">
                                                        <img class="w-100 h-100 object-fit-cover" src="<?= get_field('floorplan_gallery')[0]['url'] ?>" alt="<?= get_field('floorplan_gallery')[0]['alt'] ?>">
                                                    </div>
                                                <?php else : ?>
                                                    <div class="rounded-10 overflow-hidden" style="height: 250px">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <p class="fs-18 fs-md-28 fw-500 text-white pt-3 pb-4"><?= get_the_title() ?></p>

                                        <hr class="border-2 border-tertiary opacity-50" />

                                        <div class="row gx-xl-6">
                                            <div class="col-4">
                                                <p class="text-tertiary fw-300 fs-12 fs-md-18">
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

                                                <p class="text-poppins fs-14 fs-md-22 text-white pt-2"><?= !empty(get_field('bedrooms')) ? sprintf("%02d", get_field('bedrooms')) : '0' ?></p>
                                            </div>

                                            <div class="col-4 border-start border-white">
                                                <p class="text-tertiary fw-300 fs-12 fs-md-18">
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

                                                <p class="text-poppins fs-14 fs-md-22 text-white pt-2"><?= !empty(get_field('bedrooms')) ? sprintf("%02d", get_field('bedrooms')) : '0' ?></p>
                                            </div>

                                            <div class="col-4 border-start border-white">
                                                <p class="text-tertiary fw-300 fs-12 fs-md-18">
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

                                                <p class="text-poppins fs-14 fs-md-22 text-white pt-2"><?= !empty(get_field('area')) ? number_format(get_field('area')) : "0" ?> Sqm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="bg-black rounded-10 p-3 p-md-4 h-100">
                                        <div class="rounded-10 overflow-hidden <?= get_the_post_thumbnail_url($post->ID, 'full') ? '' : 'bg-light-grey d-flex justify-content-center align-items-center' ?>" style="height: 186px">
                                            <?php if (get_the_post_thumbnail_url($post->ID, 'full')) : ?>
                                                <img class="w-100 h-100 object-fit-cover" src="<?= get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="">
                                            <?php else : ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#696969" class="bi bi-card-image" viewBox="0 0 16 16">
                                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                                </svg>
                                            <?php endif; ?>
                                        </div>

                                        <p class="my-4 text-white bg-light-black fs-18 px-3 py-2 rounded-pill border border-dark-grey d-inline-flex"><?= !empty(get_field('bedrooms')) ? get_field('bedrooms') : '0' ?> Bedroom<?= (!empty(get_field('bedrooms')) && get_field('bedrooms') > 1) ? 's' : '' ?></p>

                                        <p class="text-white fs-20 font-poppins fw-600"><?= get_the_title() ?></p>

                                        <?php
                                        $content = get_the_content();
                                        $content = strlen($content) > 100 ? substr($content, 0, 100) . '...' : $content;
                                        ?>

                                        <article class="fs-14 fs-md-18 text-light-grey pt-1 pb-4 lh-1_67"><?= $content ?></article>

                                        <a href="" class="text-white btn btn-primary rounded-8 fs-14 fs-md-18">View Property Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>

            <hr class="border-grey mt-5" />

            <div class="row justify-content-end gx-2">
                <div class="col-auto">
                    <button id="grannyFlatDesignsSliderPrev" class="border-0 bg-transparent">
                        <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.688559" y="0.872031" width="46.6956" height="46.6956" rx="6.37264" stroke="white" stroke-width="1.37614" />
                            <path d="M17.5259 25.6628L20.869 29.0049L20.869 29.0049C21.081 29.2169 21.2001 29.5045 21.2001 29.8043C21.2001 30.1041 21.081 30.3916 20.869 30.6036C20.657 30.8156 20.3695 30.9347 20.0697 30.9347C19.7699 30.9347 19.4824 30.8156 19.2704 30.6036L13.9997 25.333L17.5259 25.6628ZM17.5259 25.6628H31.9295C32.2291 25.6628 32.5164 25.5438 32.7282 25.332C32.9401 25.1202 33.0591 24.8328 33.0591 24.5332C33.0591 24.2337 32.9401 23.9463 32.7282 23.7345C32.5164 23.5227 32.2291 23.4037 31.9295 23.4037H17.5259M17.5259 25.6628V23.4037M17.5259 23.4037L20.869 20.0616L20.869 20.0616C21.081 19.8496 21.2001 19.562 21.2001 19.2622C21.2001 18.9624 21.081 18.6749 20.869 18.4629C20.657 18.2509 20.3695 18.1318 20.0697 18.1318C19.7699 18.1318 19.4824 18.2509 19.2704 18.4629L13.9997 23.7335L17.5259 23.4037ZM13.7541 24.1003C13.811 23.9633 13.8943 23.8388 13.9993 23.7339V25.3326C13.8943 25.2277 13.811 25.1032 13.7542 24.9662C13.6972 24.829 13.6679 24.6818 13.6679 24.5332C13.6679 24.3847 13.6972 24.2375 13.7541 24.1003Z" fill="white" stroke="white" stroke-width="0.941427" />
                        </svg>
                    </button>
                </div>

                <div class="col-auto">
                    <button id="grannyFlatDesignsSliderNext" class="border-0 bg-transparent">
                        <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.428223" y="0.18396" width="48.0718" height="48.0718" rx="7.06071" fill="#0061E0" />
                            <path d="M30.3023 26.1912L26.9592 29.5333L26.9591 29.5333C26.7471 29.7453 26.628 30.0329 26.628 30.3327C26.628 30.6325 26.7471 30.92 26.9591 31.132C27.1711 31.344 27.4586 31.4631 27.7584 31.4631C28.0582 31.4631 28.3458 31.344 28.5578 31.132L33.8284 25.8614L30.3023 26.1912ZM30.3023 26.1912H15.8986C15.599 26.1912 15.3117 26.0722 15.0999 25.8604C14.888 25.6485 14.769 25.3612 14.769 25.0616C14.769 24.762 14.888 24.4747 15.0999 24.2629C15.3117 24.051 15.599 23.932 15.8986 23.932H30.3023M30.3023 26.1912V23.932M30.3023 23.932L26.9592 20.59L26.9591 20.5899C26.7471 20.3779 26.628 20.0904 26.628 19.7906C26.628 19.4908 26.7471 19.2033 26.9591 18.9913C27.1711 18.7793 27.4586 18.6602 27.7584 18.6602C28.0582 18.6602 28.3458 18.7793 28.5578 18.9913L33.8284 24.2619L30.3023 23.932ZM34.074 24.6287C34.0171 24.4916 33.9338 24.3671 33.8288 24.2623V25.861C33.9338 25.7561 34.0171 25.6316 34.074 25.4946C34.1309 25.3573 34.1602 25.2102 34.1602 25.0616C34.1602 24.9131 34.1309 24.7659 34.074 24.6287Z" fill="white" stroke="white" stroke-width="0.941427" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php $introduction = get_field('introduction'); ?>
    <section class="introduction bg-primary py-6 py-md-9">
        <div class="container">
            <div class="row align-items-center gx-xl-5 gy-4 gy-md-7">
                <?php if ($introduction['image_1']) : ?>
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="position-relative heroImage1">
                            <img class="rounded-4 rounded-md-20" src="<?= $introduction['image_1']['url'] ?>" alt="<?= $introduction['image_1']['alt'] ?>">
                            <img class="position-absolute absolute-img d-none d-md-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/build-zoom-in.png" alt="">
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($introduction['title_1'])) : ?>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <p class="text-capitalize fs-24 fs-md-38 fw-700 text-white lh-1"><?= $introduction['title_1'] ?></p>

                        <?php if (!empty($introduction['description_1'])) : ?>
                            <article class="description fs-18 lh-1_67 text-white pt-4">
                                <?= $introduction['description_1'] ?>
                            </article>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="col-12">
                    <?php if ($introduction['image_2']) : ?>
                        <div class="heroImage2 rounded-10 overflow-hidden">
                            <img class="w-100 h-100 object-fit-cover" src="<?= $introduction['image_2']['url'] ?>" alt="<?= $introduction['image_2']['alt'] ?>">
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($introduction['title_2'])) : ?>
                        <div class="pt-5">
                            <p class="fs-24 fs-md-48 fw-600 text-white text-capitalize text-md-center font-poppins"><?= $introduction['title_2'] ?></p>

                            <?php if (!empty($introduction['description_2'])) : ?>
                                <article class="description pt-4 fs-18 lh-1_67 text-md-center text-white col-xl-10 mx-auto">
                                    <?= $introduction['description_2'] ?>
                                </article>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-tertiary py-5 py-md-9 service">
        <div class="container">
            <p class="fs-30 fs-md-48 fw-600 text-center text-lg-start">Our Granny Flat Services In Sydney</p>

            <?php if (have_rows('services')) :
                $serviceCount = 0;
            ?>
                <div class="row gy-4 mt-4 d-md-none">
                    <?php while (have_rows('services')) : the_row(); ?>
                        <div class="col-12">
                            <img class="w-100 rounded-6" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">

                            <p class="fs-24 fw-600 font-poppins py-3"><?= get_sub_field('title') ?></p>

                            <article class="fs-14 fw-500 lh-1_67">
                                <?= get_sub_field('description') ?>
                            </article>
                        </div>
                    <?php
                        $serviceCount++;
                    endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('services')) :
                $serviceCount = 0;
            ?>
                <div class="row g-4 mt-5 d-none d-md-flex">
                    <?php while (have_rows('services')) : the_row(); ?>
                        <div class="<?= $serviceCount == 0 ? 'col-12' : 'col-xl-6' ?>">
                            <div class="serviceCard rounded-11 position-relative overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover position-absolute top-0" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">

                                <div class="overlay position-relative h-100 p-5 text-white d-flex align-items-end">
                                    <div class="<?= $serviceCount == 0 ? 'col-xl-9' : '' ?>">
                                        <p class="fs-30 fw-600 font-poppins"><?= get_sub_field('title') ?></p>
                                        <article class="fs-18 fw-500 pt-3 lh-1_67">
                                            <?= get_sub_field('description') ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $serviceCount++;
                    endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="container mt-5 mt-md-10">
            <div class="bg-dark-grey rounded-17 overflow-hidden">
                <?php if (have_rows('why_us')) :
                    $counter = 0; ?>
                    <?php while (have_rows('why_us')) : the_row(); ?>
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center <?= $counter % 2 ? 'order-2' : 'order-2 order-lg-1' ?>">
                                <div class="text-white px-3 py-5 col-xl-9 mx-auto">
                                    <p class="fs-30 fs-md-38 fs-lg-48 fw-600 lh-1"><?= get_sub_field('title'); ?></p>
                                    <article class="fs-md-16 fs-lg-18 fw-500 lh-1_67 mt-5 description">
                                        <?= get_sub_field('description'); ?>
                                    </article>
                                </div>
                            </div>

                            <div class="col-lg-6 <?= $counter % 2 ? 'order-1' : 'order-1 order-lg-2' ?>">
                                <div class="h-100">
                                    <img class="w-100 h-100 object-cover-fit" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                                </div>
                            </div>
                        </div>
                    <?php
                        $counter++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php $faqs = get_field('faqs'); ?>
    <section class="faq mt-5 mt-md-7 mt-lg-9">
        <div class="container">
            <?php if (!empty($faqs['title'])) : ?>
                <p class="fs-30 fs-md-45 font-poppins fw-700 text-primary"><?= $faqs['title'] ?></p>
            <?php endif; ?>

            <div class="row justify-content-between pt-3">
                <?php if (!empty($faqs['description'])) : ?>
                    <div class="col-12 col-md-9">
                        <article class="text-light-grey fs-14 fs-md-16 fs-lg-18 lh-1_67">
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
                        <div id="grannyFlatFaqSlider" class="my-5 mt-lg-7 mb-lg-6">
                            <?php while (have_rows('faqs_list')) : the_row(); ?>
                                <div>
                                    <p class="fs-18 fs-lg-20 fw-700 text-white"><?= get_sub_field('question') ?></p>

                                    <article class="text-light-grey fs-14 fs-md-16 fs-lg-18 lh-1_67 pt-4">
                                        <?= get_sub_field('answer') ?>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                        </div>
            <?php endif;
                endwhile;
            endif; ?>

            <hr class="border-black border-1 opacity-100" />

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

    <div class="mt-5 mt-md-7">
        <?= get_template_part('parts/section', 'followus'); ?>
    </div>

    <div class="mt-6 mt-md-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>