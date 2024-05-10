<?php
/*
* Template Name: Home
* The Home Page
*/
get_header();
?>

<main class="homepage">
    <?php $banner = get_field('banner'); ?>
    <section class="homebanner d-flex align-items-md-center">
        <video class="d-none d-md-block position-absolute object-fit-cover" width="100%" height="100%" autoplay muted playsinline loop>
            <source src="<?= get_template_directory_uri() ?>/assets/video/homebanner.mp4" type="video/mp4">
        </video>

        <video class="d-md-none position-absolute object-fit-cover" width="100%" height="100%" autoplay muted playsinline loop>
            <source src="<?= get_template_directory_uri() ?>/assets/video/homebanner-mobile.mp4" type="video/mp4">
        </video>

        <div class="container position-relative">
            <div class="h-100 d-flex flex-column justify-content-between justify-content-md-center align-items-center text-md-center py-4">
                <div>
                    <div class="d-none d-md-inline-flex bg-secondary bg-opacity-50 rounded-pill text-center text-white fs-18 fw-700 py-2 px-3">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 2.71875C10.9964 2.71875 8.15625 5.55894 8.15625 9.0625C8.15625 12.5661 10.9964 15.4062 14.5 15.4062C18.0036 15.4062 20.8438 12.5661 20.8438 9.0625C20.8438 5.55894 18.0036 2.71875 14.5 2.71875ZM6.34375 9.0625C6.34375 4.55793 9.99543 0.90625 14.5 0.90625C19.0046 0.90625 22.6562 4.55793 22.6562 9.0625C22.6562 13.5671 19.0046 17.2187 14.5 17.2187C9.99543 17.2187 6.34375 13.5671 6.34375 9.0625Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.57652 12.1117C9.01405 12.3547 9.1717 12.9064 8.92864 13.344L4.26305 21.7425L7.63397 21.7262C7.94917 21.7247 8.25952 21.8053 8.53401 21.9603C8.80857 22.1152 9.03795 22.3391 9.19952 22.6098L10.7664 25.2364L15.0531 15.8061C15.2602 15.3504 15.7974 15.149 16.2531 15.3561C16.7087 15.5632 16.9102 16.1005 16.7031 16.5561L11.7 27.5625C11.5605 27.8695 11.262 28.0736 10.9254 28.0923C10.5887 28.1111 10.2695 27.9414 10.0967 27.6518L7.64314 23.5387L2.72313 23.5625C2.40126 23.564 2.10271 23.3948 1.9388 23.1177C1.77489 22.8407 1.77022 22.4975 1.92653 22.2162L7.34421 12.4638C7.58727 12.0262 8.13899 11.8686 8.57652 12.1117Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.322 11.8947C20.7599 11.6522 21.3114 11.8106 21.5539 12.2485L27.0741 22.2172C27.2299 22.4986 27.2249 22.8415 27.0609 23.1183C26.8969 23.395 26.5985 23.564 26.2769 23.5625L21.3569 23.5387L18.9033 27.6518C18.7305 27.9414 18.4113 28.1111 18.0746 28.0923C17.7379 28.0736 17.4395 27.8695 17.3 27.5625L13.675 19.5875C13.4679 19.1319 13.6693 18.5946 14.125 18.3875C14.5806 18.1804 15.1179 18.3818 15.325 18.8375L18.2336 25.2364L19.8004 22.61C19.9619 22.3393 20.1914 22.1152 20.466 21.9603C20.7405 21.8053 21.0506 21.7247 21.3658 21.7262L24.7394 21.7425L19.9682 13.1265C19.7258 12.6887 19.8842 12.1372 20.322 11.8947Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 6.34375C12.9985 6.34375 11.7812 7.56098 11.7812 9.0625C11.7812 10.564 12.9985 11.7812 14.5 11.7812C16.0015 11.7812 17.2188 10.564 17.2188 9.0625C17.2188 7.56098 16.0015 6.34375 14.5 6.34375ZM9.96875 9.0625C9.96875 6.55996 11.9975 4.53125 14.5 4.53125C17.0025 4.53125 19.0312 6.55996 19.0312 9.0625C19.0312 11.565 17.0025 13.5937 14.5 13.5937C11.9975 13.5937 9.96875 11.565 9.96875 9.0625Z" fill="white" />
                        </svg>
                        Trust 5 Star for award-winning excellence in granny flats
                    </div>

                    <h1 class="text-white highlight-primary fw-700 font-poppins fs-48 fs-md-64 fs-lg-85 py-3"><?= !empty($banner['title']) ? $banner['title'] : "Granny Flats Sydney" ?></h1>

                    <?php if (!empty($banner['description'])) : ?>
                        <p class="fs-20 text-white"><?= $banner['description'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="row mt-5 gy-3">
                    <div class="col-md-auto order-2 order-md-1">
                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white text-primary rounded-pill fs-18 fw-500 px-5">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.4503 17.3505C22.2056 17.0899 21.3417 16.3192 19.7536 15.2997C18.1537 14.2713 16.9739 13.63 16.6354 13.4805C16.6056 13.4673 16.5727 13.4624 16.5404 13.4665C16.508 13.4705 16.4773 13.4833 16.4517 13.5035C15.9065 13.9286 14.9887 14.7096 14.9395 14.7517C14.6217 15.0241 14.6217 15.0241 14.3615 14.9392C13.904 14.7892 12.4828 14.0346 11.2443 12.7933C10.0059 11.5521 9.21231 10.0957 9.06231 9.63862C8.97653 9.378 8.97653 9.378 9.24981 9.06019C9.292 9.01097 10.0734 8.09315 10.4986 7.54847C10.5187 7.52282 10.5315 7.49216 10.5356 7.45978C10.5396 7.42741 10.5348 7.39454 10.5215 7.36472C10.372 7.02581 9.73075 5.84644 8.70231 4.24659C7.68137 2.65894 6.91168 1.79503 6.65106 1.55034C6.62714 1.52777 6.59758 1.51207 6.56549 1.5049C6.5334 1.49772 6.49997 1.49933 6.46872 1.50956C5.55769 1.82263 4.67869 2.22211 3.84372 2.70253C3.03766 3.1711 2.27455 3.70991 1.56325 4.31269C1.53842 4.33379 1.5198 4.36126 1.5094 4.39215C1.49899 4.42303 1.49719 4.45617 1.50418 4.488C1.60215 4.94456 2.07043 6.8505 3.52356 9.4905C5.00622 12.1849 6.03372 13.5653 8.21106 15.7352C10.3884 17.905 11.8125 18.9944 14.5097 20.4771C17.1497 21.9302 19.0565 22.3989 19.5122 22.496C19.5441 22.5029 19.5772 22.5011 19.6082 22.4907C19.6391 22.4803 19.6667 22.4617 19.6879 22.4369C20.2906 21.7256 20.8293 20.9625 21.2976 20.1564C21.778 19.3214 22.1774 18.4424 22.4906 17.5314C22.5006 17.5004 22.5022 17.4673 22.4951 17.4355C22.488 17.4037 22.4725 17.3743 22.4503 17.3505Z" fill="currentColor" />
                            </svg>

                            <span class="ps-3"><?= get_field('phone_number', 'options') ?></span>
                        </a>
                    </div>

                    <div class="col-md-auto order-1 order-md-2">
                        <a href="<?= !empty($banner['button']['url']) ? $banner['button']['url'] : home_url() . '/granny-flats/' ?>" class="btn btn-primary text-white rounded-pill fs-18 fw-500 px-5">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="23" height="23" fill="url(#pattern0_167_2207)" />
                                <defs>
                                    <pattern id="pattern0_167_2207" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_167_2207" transform="scale(0.0111111)" />
                                    </pattern>
                                    <image id="image0_167_2207" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACW0lEQVR4nO3cu27UQBSH8RMRLTRIWwdEBQV0pOERAg200FFRcSlp6RIegQop8AKh4glIaAgVDRUINiWXSChSEB9ysNASnKx313NmPPP/lSvvxZ8s20ezspmIiIiIjAFOAY+BEbADrFWvjW8jcwKWgC3+9wY4N+/nix1Evgx84GifgSuKNd+RfBP4wWR7wG3FnhJwoj4HT+sJsDjt9xUJOA1sMLuXwDD2fiQNOA+8Y37vgYux9ydJwArwhe58B67H3q+kAHeAfbr3E3hopePPELJOeOuThhtgMDYQHb59rC7MA+vxEPIaP9V3LR3zeybd5axZhkNIKKOjhpuGI/mwHesT4FbLISSUxuGmzRst8yEklH+GmzZvsJ4MIS9Iz9/hps3GljLgQkdDSCgHw02bDS1VwDXgK+lrNShZioAH9cCQDUsJcBJ4SoasByshWbAUAMvARzJmsSUwhLiIGTi1ISSoWJGH9Q1/SYbekVMfQkION5e8Il/teCWkb6qVmxuhI2c3hMzoF/AIWOg6cLX68HzWX5WxZ52uvACrsfcoYatdhq7WzaTZSKF9fOoydDFDSexTx6COrVNIjL8hUBiLhcKYQvtQaCcK7UShnSh0gxAXdoVuoNBOFNqJQjtRaCcK7UShnSi0E4V2otBOFNqJQjtRaCcK7UShnSi0E4V2otBOFNqJQjtRaCcK7UShnSh0j+l/HU4UuoDQu5TjW8zQng8IjG0zZuj7lONu7Mf6vCV/29GfTQqczTz2NnDGUlAf2feq81gmF8hd4FV1uoh+JIuIiIiIiIiIWHp+AyQbWTgpWw5yAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>

                            <span class="ps-3"><?= !empty($banner['button']['title']) ? $banner['button']['title'] : 'View Granny Flat Types' ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awards py-4 border-bottom border-light-grey">
        <div class="container">
            <div class="row align-items-center gy-5 justify-content-xl-end">
                <div class="col-12 col-md-3 col-xl-auto">
                    <p class="fs-18 fw-700 text-primary text-center text-md-start">We're award winning builders</p>
                </div>

                <div class="col-12 col-md-9">
                    <?php if (!empty(get_field('awards', 'options'))) : ?>
                        <div class="logoSlider" id="awardsSlider">
                            <?php foreach (get_field('awards', 'options') as $award) : ?>
                                <div><img src="<?= $award['url'] ?>" alt="<?= $award['alt'] ?>"></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="py-7">
        <?= get_template_part('parts/section', 'unitType'); ?>
    </div>

    <section class="partners py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2 d-none d-md-block">
                    <p class="fs-18 fs-lg-25 fw-700 text-primary">Our Partners</p>
                </div>

                <div class="col-12 col-md-10">
                    <?php if (!empty(get_field('partners', 'options'))) : ?>
                        <div class="logoSlider" id="partnersSlider">
                            <?php foreach (get_field('partners', 'options') as $award) : ?>
                                <div><img src="<?= $award['url'] ?>" alt="<?= $award['alt'] ?>"></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php $about = get_field('about');
    if (!empty($about['title'])) :
    ?>
        <section class="about py-6 pt-md-9 pb-md-7">
            <div class="container">
                <div class="row justify-content-between align-items-center gy-5 gy-md-7">
                    <?php if (!empty($about['image'])) : ?>
                        <div class="col-12 col-lg-6">
                            <div class="heroImage1 position-relative">
                                <div class="rounded-20 overflow-hidden">
                                    <img class="w-100 h-100 object-fit-cover" src="<?= $about['image']['url'] ?>" alt="<?= $about['image']['alt'] ?>">
                                </div>

                                <img class="position-absolute absolute-img d-none d-md-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/build-zoom-in.png" alt="">
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-lg-6 col-xxl-5">
                        <p class="text-uppercase text-primary fs-16 fs-md-18 fs-lg-20">About us</p>
                        <p class="highlight-primary text-dark fs-38 fs-md-48 fw-700 text-capitalize lh-1 py-3"><?= $about['title'] ?></p>

                        <?php if (!empty($about['description'])) : ?>
                            <article class="fs-18 description lh-1_67 text-grey pt-3">
                                <?= $about['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php $inclusions = get_field('inclusions');
    if (!empty($inclusions['title'])) :
    ?>
        <section class="inclusions pb-7">
            <div class="container">
                <div class="row justify-content-end gy-4">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <p class="highlight-primary text-dark fs-30 fs-md-48 fw-700 text-capitalize lh-1 py-3"><?= $inclusions['title'] ?></p>

                        <?php if (!empty($inclusions['description'])) : ?>
                            <article class="description fs-18 lh-1_67 text-grey pt-3">
                                <?= $inclusions['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($inclusions['image'])) : ?>
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class="rounded-md-10 overflow-hidden h-100">
                                <img class="w-100 h-100 object-fit-cover" src="<?= $inclusions['image']['url'] ?>" alt="<?= $inclusions['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?= get_template_part('parts/section', 'serviceCta'); ?>

    <section class="process bg-tertiary pt-5 pb-12 overflow-hidden">
        <div class="container position-relative">
            <img class="position-absolute w-100 dotted-vector d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/dotted-vector.png" alt="<?= bloginfo('title') ?>">
            <img class="position-absolute dotted-vector d-md-none" src="<?= get_template_directory_uri() ?>/assets/images/lib/dotted-vector-sm.png" alt="<?= bloginfo('title') ?>">

            <?php if (!empty(get_field('process_title'))) : ?>
                <p class="text-center fs-30 fs-md-48 highlight-primary text-capitalize fw-700"><?= get_field('process_title'); ?></p>
            <?php endif; ?>

            <?php if (have_rows('process')) :
                $index = 0; ?>
                <div class="col-xl-10 mt-5 mt-lg-9 mx-auto position-relative">
                    <div class="row gy-5 gx-xl-5">
                        <?php while (have_rows('process')) : the_row(); ?>
                            <div class="col-6 col-lg-4 <?= $index % 2 ? 'pt-7 pt-md-0' : '' ?>">
                                <div class="processCard <?= ($index == 0) ? "bg-primary text-white" : "bg-white" ?> rounded-20 px-2 px-md-4 py-4 py-md-5 text-center">
                                    <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['url'] ?>">

                                    <p class="fs-18 fs-md-24 fw-600 py-3 py-md-4"><?= get_sub_field('title') ?></p>

                                    <article class="description fs-18 fw-300 lh-1_67">
                                        <?= get_sub_field('description') ?>
                                    </article>
                                </div>
                            </div>
                        <?php $index++;
                        endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty(get_field('process_description'))) : ?>
                <article class="text-center description fs-18 lh-1_67 pt-7 col-lg-10 col-xl-9 mx-auto">
                    <?= get_field('process_description'); ?>
                </article>
            <?php endif; ?>
        </div>
    </section>

    <div class="mt-n6">
        <?= get_template_part('parts/section', 'quoteForm'); ?>
    </div>

    <?php $introduction = get_field('introduction'); ?>
    <?php if (!empty($introduction['title'])) : ?>
        <section class="introduction py-5 py-md-7 py-xl-13">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-5">
                    <div class="col-12 col-lg-6 col-xxl-5 order-2 order-lg-1">
                        <p class="text-dark highlight-primary fs-30 fs-md-48 fw-600 lh-1 text-capitalize"><?= $introduction['title'] ?></p>

                        <?php if (!empty($introduction['description'])) : ?>
                            <article class="description lh-1_87 fs-18 text-dark pt-4">
                                <?= $introduction['description'] ?>
                            </article>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($introduction['image']['url'])) : ?>
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class="rounded-10 overflow-hidden">
                                <img src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?= get_template_part('parts/section', 'promises'); ?>

    <section class="py-5 py-md-9">
        <?= get_template_part('parts/section', 'about'); ?>
    </section>

    <?php $our_approach = get_field('our_approach');
    if (!empty($our_approach['title'])) : ?>
        <section class="our_approach bg-primary py-6 py-md-8">
            <div class="container">
                <div class="row gx-xl-5 gy-4 gy-md-5">
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="position-relative d-flex justify-content-center align-items-center overflow-hidden">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/lib/macbook.png" alt="">

                            <?php if (!empty($our_approach['video'])) : ?>
                                <iframe class="heroVideo" src="<?= $our_approach['video'] ?>" title="Granny Flat Builder | Granny Flats Sydney | Anthony Mundine&#39;s Granny Flat Sydney | By 5 Star Granny" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-5">
                        <p class="text-white fs-30 fs-md-48 fw-600 lh-1"><?= $our_approach['title'] ?></p>

                        <article class="pt-4 pt-md-5 description text-white lh-1_67 fs-18">
                            <?= $our_approach['description'] ?>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="testimonials">
        <div class="bg-dark-grey py-6 py-md-8">
            <div class="container">
                <div class="row gy-4">
                    <?php if (!empty(get_field('testimonials_title'))) : ?>
                        <div class="col-12 col-lg-5">
                            <p class="text-white highlight-primary fs-38 fs-md-64 fs-lg-94 fw-700 lh-1"><?= get_field('testimonials_title') ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-lg-7">
                        <div class="position-relative">
                            <?php if (!empty(get_field('testimonials_image')['url'])) : ?>
                                <img class="rounded-10 shadow" src="<?= get_field('testimonials_image')['url'] ?>" alt="<?= get_field('testimonials_image')['alt'] ?>">
                            <?php endif; ?>

                            <div class="arrows position-absolute bottom-0 end-0 text-white p-5">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <button class="bg-transparent rounded-10 border-0 p-0" type="button" id="prevTestimonial">
                                            <svg width="37" height="25" viewBox="0 0 37 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99553 14.2748L13.6604 20.9376L13.6605 20.9376C14.0095 21.2866 14.2055 21.76 14.2055 22.2535C14.2055 22.7471 14.0095 23.2204 13.6605 23.5694C13.3115 23.9184 12.8381 24.1145 12.3446 24.1145C11.851 24.1145 11.3777 23.9184 11.0287 23.5694L1.19109 13.7318C1.01793 13.5591 0.880547 13.3539 0.786808 13.128C0.693073 12.9021 0.644821 12.66 0.644821 12.4154C0.644821 12.1708 0.693073 11.9286 0.786808 11.7027C0.880547 11.4768 1.01793 11.2716 1.19109 11.0989L11.0287 1.26133C11.3777 0.912327 11.851 0.716263 12.3446 0.716263C12.8381 0.716263 13.3115 0.912327 13.6605 1.26133C14.0095 1.61033 14.2055 2.08367 14.2055 2.57723C14.2055 3.07079 14.0095 3.54413 13.6605 3.89313L13.6604 3.8932L6.99553 10.556L34.4804 10.556C34.9736 10.556 35.4465 10.7519 35.7952 11.1006C36.1439 11.4493 36.3398 11.9222 36.3398 12.4154C36.3398 12.9085 36.1439 13.3815 35.7952 13.7302C35.4465 14.0789 34.9736 14.2748 34.4804 14.2748L6.99553 14.2748Z" fill="white" stroke="white" stroke-width="1.25928" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button class="bg-transparent rounded-10 border-0 p-0" type="button" id="nextTestimonial">
                                            <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.262939" y="0.259277" width="89.724" height="89.724" rx="9.44463" fill="#0061E0" />
                                                <path d="M56.6226 48.5526L49.9577 55.2154L49.9577 55.2155C49.6087 55.5645 49.4126 56.0378 49.4126 56.5314C49.4126 57.0249 49.6087 57.4983 49.9577 57.8473C50.3067 58.1963 50.78 58.3923 51.2736 58.3923C51.7671 58.3923 52.2405 58.1963 52.5895 57.8473L62.4271 48.0097C62.6002 47.837 62.7376 47.6318 62.8314 47.4059C62.9251 47.18 62.9733 46.9378 62.9733 46.6932C62.9733 46.4486 62.9251 46.2065 62.8314 45.9806C62.7376 45.7547 62.6002 45.5495 62.4271 45.3768L52.5895 35.5392C52.2405 35.1902 51.7671 34.9941 51.2736 34.9941C50.78 34.9941 50.3067 35.1902 49.9577 35.5392C49.6087 35.8882 49.4126 36.3615 49.4126 36.8551C49.4126 37.3486 49.6087 37.822 49.9577 38.171L49.9577 38.171L56.6226 44.8338H29.1377C28.6446 44.8338 28.1716 45.0297 27.8229 45.3784C27.4742 45.7271 27.2783 46.2001 27.2783 46.6932C27.2783 47.1864 27.4742 47.6593 27.8229 48.008C28.1716 48.3567 28.6446 48.5526 29.1377 48.5526H56.6226Z" fill="white" stroke="white" stroke-width="1.25928" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-md-9 col-lg-5 mx-auto">
                <div class="testimonial-slider">
                    <?php
                    if (have_rows('testimonials')) :
                        while (have_rows('testimonials')) : the_row();
                    ?>
                            <div class="testimonial-card">
                                <div class="initial">
                                    G
                                </div>
                                <div class="d-flex justify-content-end">
                                    <svg width="142" height="29" viewBox="0 0 142 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.503 3.88746C13.8322 2.8741 15.2659 2.8741 15.5951 3.88746L17.463 9.63618C17.6102 10.0894 18.0326 10.3962 18.5091 10.3962H24.5536C25.6191 10.3962 26.0622 11.7597 25.2001 12.386L20.31 15.9389C19.9245 16.2189 19.7632 16.7154 19.9104 17.1686L21.7783 22.9173C22.1076 23.9307 20.9477 24.7733 20.0857 24.1471L15.1956 20.5941C14.81 20.3141 14.288 20.3141 13.9025 20.5941L9.01238 24.1471C8.15036 24.7733 6.99053 23.9307 7.31979 22.9173L9.18766 17.1686C9.33491 16.7154 9.1736 16.2189 8.7881 15.9389L3.89794 12.3859C3.03593 11.7597 3.47894 10.3962 4.54445 10.3962H10.589C11.0655 10.3962 11.4878 10.0894 11.6351 9.63618L13.503 3.88746Z" fill="#FFCB2B" />
                                        <path d="M41.6607 3.88746C41.9899 2.8741 43.4236 2.8741 43.7528 3.88746L45.6207 9.63618C45.768 10.0894 46.1903 10.3962 46.6668 10.3962H52.7113C53.7769 10.3962 54.2199 11.7597 53.3579 12.386L48.4677 15.9389C48.0822 16.2189 47.9209 16.7154 48.0681 17.1686L49.936 22.9173C50.2653 23.9307 49.1054 24.7733 48.2434 24.1471L43.3533 20.5941C42.9678 20.3141 42.4458 20.3141 42.0602 20.5941L37.1701 24.1471C36.3081 24.7733 35.1482 23.9307 35.4775 22.9173L37.3454 17.1686C37.4926 16.7154 37.3313 16.2189 36.9458 15.9389L32.0557 12.3859C31.1936 11.7597 31.6367 10.3962 32.7022 10.3962H38.7467C39.2232 10.3962 39.6456 10.0894 39.7928 9.63618L41.6607 3.88746Z" fill="#FFCB2B" />
                                        <path d="M69.8184 3.88746C70.1477 2.8741 71.5813 2.8741 71.9105 3.88746L73.7784 9.63618C73.9257 10.0894 74.348 10.3962 74.8245 10.3962H80.8691C81.9346 10.3962 82.3776 11.7597 81.5156 12.386L76.6254 15.9389C76.2399 16.2189 76.0786 16.7154 76.2258 17.1686L78.0937 22.9173C78.423 23.9307 77.2632 24.7733 76.4011 24.1471L71.511 20.5941C71.1255 20.3141 70.6035 20.3141 70.218 20.5941L65.3278 24.1471C64.4658 24.7733 63.306 23.9307 63.6352 22.9173L65.5031 17.1686C65.6503 16.7154 65.489 16.2189 65.1035 15.9389L60.2134 12.3859C59.3514 11.7597 59.7944 10.3962 60.8599 10.3962H66.9044C67.381 10.3962 67.8033 10.0894 67.9505 9.63618L69.8184 3.88746Z" fill="#FFCB2B" />
                                        <path d="M97.9756 3.88746C98.3049 2.8741 99.7385 2.8741 100.068 3.88746L101.936 9.63618C102.083 10.0894 102.505 10.3962 102.982 10.3962H109.026C110.092 10.3962 110.535 11.7597 109.673 12.386L104.783 15.9389C104.397 16.2189 104.236 16.7154 104.383 17.1686L106.251 22.9173C106.58 23.9307 105.42 24.7733 104.558 24.1471L99.6682 20.5941C99.2827 20.3141 98.7607 20.3141 98.3752 20.5941L93.485 24.1471C92.623 24.7733 91.4632 23.9307 91.7924 22.9173L93.6603 17.1686C93.8076 16.7154 93.6463 16.2189 93.2608 15.9389L88.3706 12.3859C87.5086 11.7597 87.9516 10.3962 89.0171 10.3962H95.0617C95.5382 10.3962 95.9605 10.0894 96.1077 9.63618L97.9756 3.88746Z" fill="#FFCB2B" />
                                        <path d="M126.133 3.88746C126.463 2.8741 127.896 2.8741 128.225 3.88746L130.093 9.63618C130.241 10.0894 130.663 10.3962 131.139 10.3962H137.184C138.25 10.3962 138.693 11.7597 137.831 12.386L132.94 15.9389C132.555 16.2189 132.394 16.7154 132.541 17.1686L134.409 22.9173C134.738 23.9307 133.578 24.7733 132.716 24.1471L127.826 20.5941C127.44 20.3141 126.918 20.3141 126.533 20.5941L121.643 24.1471C120.781 24.7733 119.621 23.9307 119.95 22.9173L121.818 17.1686C121.965 16.7154 121.804 16.2189 121.418 15.9389L116.528 12.3859C115.666 11.7597 116.109 10.3962 117.175 10.3962H123.219C123.696 10.3962 124.118 10.0894 124.265 9.63618L126.133 3.88746Z" fill="#FFCB2B" />
                                    </svg>
                                </div>

                                <article class="fs-14 fs-md-20 lh-1_67 py-4">
                                    <?= get_sub_field('description') ?>
                                </article>

                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="fs-25 fw-700"><?= get_sub_field('name') ?></p>
                                    </div>

                                    <div class="col-auto">
                                        <p class="fs-12 fw-700">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.60739 0.40918C4.54683 0.40918 0.444824 4.51196 0.444824 9.57174C0.444824 14.6323 4.54683 18.7343 9.60739 18.7343C14.6672 18.7343 18.77 14.6315 18.77 9.57174C18.77 4.51196 14.6672 0.40918 9.60739 0.40918ZM7.36273 12.0322C7.36273 12.5274 6.96146 12.9279 6.46705 12.9279C5.97186 12.9279 5.57136 12.5274 5.57136 12.0322V8.21346C5.57136 7.71827 5.97186 7.317 6.46705 7.317C6.96146 7.317 7.36273 7.71827 7.36273 8.21346V12.0322ZM13.69 11.9677C13.69 12.6678 13.281 12.9185 12.5809 12.9185H9.35979C8.6597 12.9185 8.09232 12.3512 8.09232 11.6511V8.48279C8.09232 8.48279 8.02946 7.95578 8.61313 7.46059C8.94299 7.1804 9.43275 6.64562 9.77504 5.99675C10.455 4.70755 10.8617 4.33189 11.1713 4.43279C12.3185 4.80457 11.7449 6.50514 11.3747 7.21532H12.4225C13.1218 7.21532 13.69 7.7827 13.69 8.48279V11.9677Z" fill="#0061E0" />
                                            </svg>
                                            Testimonial
                                        </p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-md-13">
        <?= get_template_part('parts/section', 'followus'); ?>
    </div>

    <div class="mt-8">
        <?= get_template_part('parts/section', 'help'); ?>
    </div>
</main>

<?php get_footer(); ?>