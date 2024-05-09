<?php

/**
 * The template for displaying the header
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('name') ?> | Your trusted plumbing partner in Sydney">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <!-- <div class="bg-primary py-2 text-white" id="topbarSlider">
            <?php for ($i = 0; $i < 2; $i++) : ?>
                <div>
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-white">CALL OUR TEAM TODAY TO DISCUSS YOUR UNIQUE REQUIREMENTS</a>
                </div>

                <div>
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-white">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.4503 17.3505C22.2056 17.0899 21.3417 16.3192 19.7536 15.2997C18.1537 14.2713 16.9739 13.63 16.6354 13.4805C16.6056 13.4673 16.5727 13.4624 16.5404 13.4665C16.508 13.4705 16.4773 13.4833 16.4517 13.5035C15.9065 13.9286 14.9887 14.7096 14.9395 14.7517C14.6217 15.0241 14.6217 15.0241 14.3615 14.9392C13.904 14.7892 12.4828 14.0346 11.2443 12.7933C10.0059 11.5521 9.21231 10.0957 9.06231 9.63862C8.97653 9.378 8.97653 9.378 9.24981 9.06019C9.292 9.01097 10.0734 8.09315 10.4986 7.54847C10.5187 7.52282 10.5315 7.49216 10.5356 7.45978C10.5396 7.42741 10.5348 7.39454 10.5215 7.36472C10.372 7.02581 9.73075 5.84644 8.70231 4.24659C7.68137 2.65894 6.91168 1.79503 6.65106 1.55034C6.62714 1.52777 6.59758 1.51207 6.56549 1.5049C6.5334 1.49772 6.49997 1.49933 6.46872 1.50956C5.55769 1.82263 4.67869 2.22211 3.84372 2.70253C3.03766 3.1711 2.27455 3.70991 1.56325 4.31269C1.53842 4.33379 1.5198 4.36126 1.5094 4.39215C1.49899 4.42303 1.49719 4.45617 1.50418 4.488C1.60215 4.94456 2.07043 6.8505 3.52356 9.4905C5.00622 12.1849 6.03372 13.5653 8.21106 15.7352C10.3884 17.905 11.8125 18.9944 14.5097 20.4771C17.1497 21.9302 19.0565 22.3989 19.5122 22.496C19.5441 22.5029 19.5772 22.5011 19.6082 22.4907C19.6391 22.4803 19.6667 22.4617 19.6879 22.4369C20.2906 21.7256 20.8293 20.9625 21.2976 20.1564C21.778 19.3214 22.1774 18.4424 22.4906 17.5314C22.5006 17.5004 22.5022 17.4673 22.4951 17.4355C22.488 17.4037 22.4725 17.3743 22.4503 17.3505Z" fill="white" />
                        </svg>
                        <?= get_field('phone_number', 'options') ?>
                    </a>
                </div>

                <div>
                    <a href="" class="text-white">CLICK HERE TO VIEW 5 STAR BUILDER</a>
                </div>

                <div>
                    <a href="" class="text-white">
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.6305 2.25L18.2283 1.5L16.8262 2.25L15.424 1.5L14.0218 2.25L12.6197 1.5L11.2175 2.25L9.8153 1.5L8.41313 2.25L6.30987 1.5V13.5023H16.1251V19.875C16.1251 21.3248 17.5741 22.5 18.9294 22.5H19.4552C20.8105 22.5 21.7338 21.3248 21.7338 19.875V1.5L19.6305 2.25ZM11.9405 11.25L11.9186 9.75H18.9075L18.9294 11.25H11.9405ZM9.13612 7.5L9.11422 6H18.9075L18.9294 7.5H9.13612Z" fill="white" />
                            <path d="M14.7229 19.875V15H0.701172V16.5C0.701172 18.8695 0.954439 19.8572 1.33478 20.6077C1.98022 21.8813 3.14884 22.5 4.90769 22.5H16.1251C16.1251 22.5 14.7229 21.5625 14.7229 19.875Z" fill="white" />
                        </svg>
                        ENQUIRE TODAY
                    </a>
                </div>
            <?php endfor; ?>
        </div> -->

        <div class="bg-primary">
            <marquee direction="left" behavior="scroll" scrollamount="10">
            <div class="d-flex align-items-center justify-content-between py-2 gap-5">
                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-white">CALL OUR TEAM TODAY TO DISCUSS YOUR UNIQUE REQUIREMENTS</a>
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-white d-flex align-items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.4503 17.3505C22.2056 17.0899 21.3417 16.3192 19.7536 15.2997C18.1537 14.2713 16.9739 13.63 16.6354 13.4805C16.6056 13.4673 16.5727 13.4624 16.5404 13.4665C16.508 13.4705 16.4773 13.4833 16.4517 13.5035C15.9065 13.9286 14.9887 14.7096 14.9395 14.7517C14.6217 15.0241 14.6217 15.0241 14.3615 14.9392C13.904 14.7892 12.4828 14.0346 11.2443 12.7933C10.0059 11.5521 9.21231 10.0957 9.06231 9.63862C8.97653 9.378 8.97653 9.378 9.24981 9.06019C9.292 9.01097 10.0734 8.09315 10.4986 7.54847C10.5187 7.52282 10.5315 7.49216 10.5356 7.45978C10.5396 7.42741 10.5348 7.39454 10.5215 7.36472C10.372 7.02581 9.73075 5.84644 8.70231 4.24659C7.68137 2.65894 6.91168 1.79503 6.65106 1.55034C6.62714 1.52777 6.59758 1.51207 6.56549 1.5049C6.5334 1.49772 6.49997 1.49933 6.46872 1.50956C5.55769 1.82263 4.67869 2.22211 3.84372 2.70253C3.03766 3.1711 2.27455 3.70991 1.56325 4.31269C1.53842 4.33379 1.5198 4.36126 1.5094 4.39215C1.49899 4.42303 1.49719 4.45617 1.50418 4.488C1.60215 4.94456 2.07043 6.8505 3.52356 9.4905C5.00622 12.1849 6.03372 13.5653 8.21106 15.7352C10.3884 17.905 11.8125 18.9944 14.5097 20.4771C17.1497 21.9302 19.0565 22.3989 19.5122 22.496C19.5441 22.5029 19.5772 22.5011 19.6082 22.4907C19.6391 22.4803 19.6667 22.4617 19.6879 22.4369C20.2906 21.7256 20.8293 20.9625 21.2976 20.1564C21.778 19.3214 22.1774 18.4424 22.4906 17.5314C22.5006 17.5004 22.5022 17.4673 22.4951 17.4355C22.488 17.4037 22.4725 17.3743 22.4503 17.3505Z" fill="white" />
                        </svg>
                        <?= get_field('phone_number', 'options') ?>
                    </a>
                    <a href="<?= home_url() ?>/granny-flats/" class="text-white">CLICK HERE TO VIEW 5 STAR BUILDER</a>
                    <a href="<?= home_url() ?>/contact/" class="text-white d-flex align-items-center gap-2">
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.6305 2.25L18.2283 1.5L16.8262 2.25L15.424 1.5L14.0218 2.25L12.6197 1.5L11.2175 2.25L9.8153 1.5L8.41313 2.25L6.30987 1.5V13.5023H16.1251V19.875C16.1251 21.3248 17.5741 22.5 18.9294 22.5H19.4552C20.8105 22.5 21.7338 21.3248 21.7338 19.875V1.5L19.6305 2.25ZM11.9405 11.25L11.9186 9.75H18.9075L18.9294 11.25H11.9405ZM9.13612 7.5L9.11422 6H18.9075L18.9294 7.5H9.13612Z" fill="white" />
                            <path d="M14.7229 19.875V15H0.701172V16.5C0.701172 18.8695 0.954439 19.8572 1.33478 20.6077C1.98022 21.8813 3.14884 22.5 4.90769 22.5H16.1251C16.1251 22.5 14.7229 21.5625 14.7229 19.875Z" fill="white" />
                        </svg>
                        ENQUIRE TODAY
                    </a>
                <?php endfor; ?>
            </div>
            </marquee>
        </div>

        <nav class="py-3">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-3 col-md-2 col-xl-1">
                        <a href="<?= home_url() ?>" class="heroLogo">
                            <img src="<?= get_field('logo', 'options')['url'] ?>" alt="<?= get_field('logo', 'options')['alt'] ?>">
                        </a>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <?php wp_nav_menu(array(
                            'menu' => 'Primary Menu',
                            'item_class' => 'nav-item py-3',
                            'link_class' => 'text-capitalize text-dark-grey fs-16',
                            'menu_class' => 'd-flex flex-wrap gap-5 ps-0'
                        )); ?>
                    </div>

                    <div class="col-auto">
                        <button class="btn p-0" id="slideDownMenuBtn">
                            <svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.84613 1.07692C0.84613 0.482155 1.32829 0 1.92305 0H25.6154C26.2101 0 26.6923 0.482155 26.6923 1.07692C26.6923 1.67169 26.2101 2.15385 25.6154 2.15385H1.92305C1.32829 2.15385 0.84613 1.67169 0.84613 1.07692ZM0.84613 8.61539C0.84613 8.02062 1.32829 7.53846 1.92305 7.53846H25.6154C26.2101 7.53846 26.6923 8.02062 26.6923 8.61539C26.6923 9.21015 26.2101 9.69231 25.6154 9.69231H1.92305C1.32829 9.69231 0.84613 9.21015 0.84613 8.61539ZM12.6923 16.1538C12.6923 15.5591 13.1744 15.0769 13.7692 15.0769H25.6154C26.2101 15.0769 26.6923 15.5591 26.6923 16.1538C26.6923 16.7486 26.2101 17.2308 25.6154 17.2308H13.7692C13.1744 17.2308 12.6923 16.7486 12.6923 16.1538Z" fill="#202020" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <div id="slide-down-nav" class="slide-down-nav bg-white">
            <div class="container py-4">
                <?php wp_nav_menu(array(
                    'menu' => 'Primary Menu',
                    'item_class' => 'nav-item',
                    'link_class' => 'text-capitalize text-dark-grey fs-14 fw-600',
                    'menu_class' => 'd-flex flex-column flex-wrap gap-2 ps-0 d-lg-none'
                )); ?>

                <div class="row justify-content-center pt-5 pt-lg-0 gx-3">
                    <div class="col-6 col-md-5 col-lg-4 col-xl-3">
                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-primary text-white rounded-pill fs-14 fs-md-18 fw-700 px-md-5">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.4503 17.3505C22.2056 17.0899 21.3417 16.3192 19.7536 15.2997C18.1537 14.2713 16.9739 13.63 16.6354 13.4805C16.6056 13.4673 16.5727 13.4624 16.5404 13.4665C16.508 13.4705 16.4773 13.4833 16.4517 13.5035C15.9065 13.9286 14.9887 14.7096 14.9395 14.7517C14.6217 15.0241 14.6217 15.0241 14.3615 14.9392C13.904 14.7892 12.4828 14.0346 11.2443 12.7933C10.0059 11.5521 9.21231 10.0957 9.06231 9.63862C8.97653 9.378 8.97653 9.378 9.24981 9.06019C9.292 9.01097 10.0734 8.09315 10.4986 7.54847C10.5187 7.52282 10.5315 7.49216 10.5356 7.45978C10.5396 7.42741 10.5348 7.39454 10.5215 7.36472C10.372 7.02581 9.73075 5.84644 8.70231 4.24659C7.68137 2.65894 6.91168 1.79503 6.65106 1.55034C6.62714 1.52777 6.59758 1.51207 6.56549 1.5049C6.5334 1.49772 6.49997 1.49933 6.46872 1.50956C5.55769 1.82263 4.67869 2.22211 3.84372 2.70253C3.03766 3.1711 2.27455 3.70991 1.56325 4.31269C1.53842 4.33379 1.5198 4.36126 1.5094 4.39215C1.49899 4.42303 1.49719 4.45617 1.50418 4.488C1.60215 4.94456 2.07043 6.8505 3.52356 9.4905C5.00622 12.1849 6.03372 13.5653 8.21106 15.7352C10.3884 17.905 11.8125 18.9944 14.5097 20.4771C17.1497 21.9302 19.0565 22.3989 19.5122 22.496C19.5441 22.5029 19.5772 22.5011 19.6082 22.4907C19.6391 22.4803 19.6667 22.4617 19.6879 22.4369C20.2906 21.7256 20.8293 20.9625 21.2976 20.1564C21.778 19.3214 22.1774 18.4424 22.4906 17.5314C22.5006 17.5004 22.5022 17.4673 22.4951 17.4355C22.488 17.4037 22.4725 17.3743 22.4503 17.3505Z" fill="currentColor" />
                            </svg>

                            <span class="ps-2">Call Us</span>
                        </a>
                    </div>

                    <div class="col-6 col-md-5 col-lg-4 col-xl-3">
                        <a href="<?= home_url() . '/contact/' ?>" class="btn btn-black text-white rounded-pill fs-14 fs-md-18 fw-500 px-md-5">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="23" height="23" fill="url(#pattern0_167_2207)" />
                                <defs>
                                    <pattern id="pattern0_167_2207" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_167_2207" transform="scale(0.0111111)" />
                                    </pattern>
                                    <image id="image0_167_2207" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACW0lEQVR4nO3cu27UQBSH8RMRLTRIWwdEBQV0pOERAg200FFRcSlp6RIegQop8AKh4glIaAgVDRUINiWXSChSEB9ysNASnKx313NmPPP/lSvvxZ8s20ezspmIiIiIjAFOAY+BEbADrFWvjW8jcwKWgC3+9wY4N+/nix1Evgx84GifgSuKNd+RfBP4wWR7wG3FnhJwoj4HT+sJsDjt9xUJOA1sMLuXwDD2fiQNOA+8Y37vgYux9ydJwArwhe58B67H3q+kAHeAfbr3E3hopePPELJOeOuThhtgMDYQHb59rC7MA+vxEPIaP9V3LR3zeybd5axZhkNIKKOjhpuGI/mwHesT4FbLISSUxuGmzRst8yEklH+GmzZvsJ4MIS9Iz9/hps3GljLgQkdDSCgHw02bDS1VwDXgK+lrNShZioAH9cCQDUsJcBJ4SoasByshWbAUAMvARzJmsSUwhLiIGTi1ISSoWJGH9Q1/SYbekVMfQkION5e8Il/teCWkb6qVmxuhI2c3hMzoF/AIWOg6cLX68HzWX5WxZ52uvACrsfcoYatdhq7WzaTZSKF9fOoydDFDSexTx6COrVNIjL8hUBiLhcKYQvtQaCcK7UShnSh0gxAXdoVuoNBOFNqJQjtRaCcK7UShnSi0E4V2otBOFNqJQjtRaCcK7UShnSi0E4V2otBOFNqJQjtRaCcK7UShnSh0j+l/HU4UuoDQu5TjW8zQng8IjG0zZuj7lONu7Mf6vCV/29GfTQqczTz2NnDGUlAf2feq81gmF8hd4FV1uoh+JIuIiIiIiIiIWHp+AyQbWTgpWw5yAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>

                            <span class="ps-3">Contact Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>