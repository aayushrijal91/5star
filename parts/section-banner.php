<?php $banner = get_field('banner'); ?>
<section class="banner py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <h1 class="fs-30 fs-md-64 fs-lg-80 fw-800 text-black highlight-white lh-1 font-poppins">
                    <?php if (is_home()) : ?>
                        <span>Our</span> Blogs
                    <?php elseif (is_page_template('page-templates/suburb.php')) : ?>
                        <span>Granny Flat Builders</span> <?= get_the_title() ?>
                    <?php else : ?>
                        <?= !empty($banner['title']) ? $banner['title'] : the_title() ?>
                    <?php endif; ?>
                </h1>
                <?php if (!empty($banner['description'])) : ?>
                    <p class="description fs-20 text-white mt-4 col-xl-9"><?= $banner['description'] ?></p>
                <?php endif; ?>

                <div class="d-flex justify-content-end">
                    <div class="col-9 col-md-12">
                        <div class="row mt-5 gy-3">
                            <div class="col-12 col-md-auto">
                                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-white text-black rounded-pill fs-14 fs-md-18 fw-700 px-md-5">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.4503 17.3505C22.2056 17.0899 21.3417 16.3192 19.7536 15.2997C18.1537 14.2713 16.9739 13.63 16.6354 13.4805C16.6056 13.4673 16.5727 13.4624 16.5404 13.4665C16.508 13.4705 16.4773 13.4833 16.4517 13.5035C15.9065 13.9286 14.9887 14.7096 14.9395 14.7517C14.6217 15.0241 14.6217 15.0241 14.3615 14.9392C13.904 14.7892 12.4828 14.0346 11.2443 12.7933C10.0059 11.5521 9.21231 10.0957 9.06231 9.63862C8.97653 9.378 8.97653 9.378 9.24981 9.06019C9.292 9.01097 10.0734 8.09315 10.4986 7.54847C10.5187 7.52282 10.5315 7.49216 10.5356 7.45978C10.5396 7.42741 10.5348 7.39454 10.5215 7.36472C10.372 7.02581 9.73075 5.84644 8.70231 4.24659C7.68137 2.65894 6.91168 1.79503 6.65106 1.55034C6.62714 1.52777 6.59758 1.51207 6.56549 1.5049C6.5334 1.49772 6.49997 1.49933 6.46872 1.50956C5.55769 1.82263 4.67869 2.22211 3.84372 2.70253C3.03766 3.1711 2.27455 3.70991 1.56325 4.31269C1.53842 4.33379 1.5198 4.36126 1.5094 4.39215C1.49899 4.42303 1.49719 4.45617 1.50418 4.488C1.60215 4.94456 2.07043 6.8505 3.52356 9.4905C5.00622 12.1849 6.03372 13.5653 8.21106 15.7352C10.3884 17.905 11.8125 18.9944 14.5097 20.4771C17.1497 21.9302 19.0565 22.3989 19.5122 22.496C19.5441 22.5029 19.5772 22.5011 19.6082 22.4907C19.6391 22.4803 19.6667 22.4617 19.6879 22.4369C20.2906 21.7256 20.8293 20.9625 21.2976 20.1564C21.778 19.3214 22.1774 18.4424 22.4906 17.5314C22.5006 17.5004 22.5022 17.4673 22.4951 17.4355C22.488 17.4037 22.4725 17.3743 22.4503 17.3505Z" fill="currentColor" />
                                    </svg>
        
                                    <span class="ps-3"><?= get_field('phone_number', 'options') ?></span>
                                </a>
                            </div>
        
                            <div class="col-12 col-md-auto">
                                <a href="<?= !empty($banner['button']['url']) ? $banner['button']['url'] : home_url() . '/granny-flats/' ?>" target="<?= !empty($banner['button']['url']) ? $banner['button']['url'] : '' ?>" class="btn btn-black text-white rounded-pill fs-14 fs-md-18 fw-500 px-md-5">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/icons/home-icon.png" alt="">
        
                                    <span class="ps-3"><?= !empty($banner['button']['title']) ? $banner['button']['title'] : 'View Granny Flat Types' ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>