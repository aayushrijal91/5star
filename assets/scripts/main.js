// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                $('#slideDownMenuBtn').on('click', function (e) {
                    e.preventDefault();

                    $('#slide-down-nav').slideToggle();
                });

                $('#topbarSlider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    arrows: false,
                    autoplay: true,
                    infinite: true
                });

                $('#awardsSlider').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    arrows: false,
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                autoplay: true,
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                autoplay: true,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });

                $('#partnersSlider').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    arrows: false,
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                centerMode: true,
                                autoplay: true,
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                centerMode: true,
                                autoplay: true,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                autoplay: true,
                            }
                        }
                    ]
                });

                $('.unitTypeNavBtn').on('click', function () {
                    $('.unitTypeNavBtn').removeClass('active');
                    $(this).addClass('active');

                    $('.unitsDisplay').hide();
                    let target = $(this).data('target');
                    $(target).fadeIn();
                });

                $('.testimonial-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: $("#prevTestimonial"),
                    nextArrow: $("#nextTestimonial"),
                });

                $("#grannyFlatFaqSlider").slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: $("#grannyflatFaqPrev"),
                    nextArrow: $("#grannyflatFaqNext"),
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });

                $('.grannyFlatGallery').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    asNavFor: $('.grannyFlatGalleryNav')
                });

                $('.grannyFlatGalleryNav').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    focusOnSelect: true,
                    asNavFor: $('.grannyFlatGallery')
                });

                $('#grannyFlatDesignsSlider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: $("#grannyFlatDesignsSliderPrev"),
                    nextArrow: $("#grannyFlatDesignsSliderNext"),
                });

                $('.gallerySlider').each(function (index, element) {
                    $(element).slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: true,
                        arrows: true,
                        prevArrow: $(this).parents('.gallery_list').find('.gallerySliderPrev'),
                        nextArrow: $(this).parents('.gallery_list').find(".gallerySliderNext"),
                        responsive: [
                            {
                                breakpoint: 540,
                                settings: {
                                    variableWidth: false
                                }
                            }
                        ]
                    });
                });

                // Initialize all navigation and image sliders
                $('.projectGalleryNavSlider').each(function (index) {
                    var navSlider = $(this);
                    var imageSlider = $('.projectGalleryImageSlider').eq(index);

                    navSlider.slick({
                        slidesToShow: 9,
                        slidesToScroll: 1,
                        arrows: false,
                        asNavFor: imageSlider,
                        focusOnSelect: true,
                        responsive: [
                            { breakpoint: 900, settings: { slidesToShow: 5, slidesToScroll: 1 } },
                            { breakpoint: 540, settings: { slidesToShow: 3, slidesToScroll: 1 } }
                        ]
                    });

                    imageSlider.slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        asNavFor: navSlider,
                        prevArrow: navSlider.parents('.galleryWrapper').find('.gallerySliderPrev'),
                        nextArrow: navSlider.parents('.galleryWrapper').find('.gallerySliderNext')
                    });
                });

                $('.projectfilter').on('click', function () {
                    var filter = $(this).data('filter');
                    var galleryWrapper = $(this).closest('.galleryWrapper');
                    var slideNav = galleryWrapper.find(".projectGalleryNavSlider");
                    var slideImage = galleryWrapper.find('.projectGalleryImageSlider');

                    slideNav.slick('slickUnfilter');
                    slideImage.slick('slickUnfilter');

                    if (filter === 'all') {
                    } else {
                        var filterClass = '.project-' + filter;
                        slideNav.slick('slickFilter', filterClass);
                        slideImage.slick('slickFilter', filterClass);
                    }
                });

                $('.testimonialSlider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    prevArrow: $('#testimonialSliderPrev'),
                    nextArrow: $('#testimonialSliderNext'),
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

jQuery(document).ready(function ($) {
    $(document).on('click', '.accordion-card', function () {
        $(".accordion-card").removeClass("active");
        $(this).addClass('active');

        if ($('.accordion-body').is(':visible')) {
            $(".accordion-body").slideUp(300);
        }
        if ($(this).find(".accordion-body").is(':visible')) {
            $(this).find(".accordion-body").slideUp(300);
        } else {
            $(this).find(".accordion-body").slideDown(300);
        }
    });
});

jQuery(document).ready(function ($) {
    // var URL = "http://localhost:3000/5star/wp-admin/admin-ajax.php";
    var URL = window.location.origin + "/wp-admin/admin-ajax.php";

    $('button.faqTypeNavBtn').on('click', function (e) {
        e.preventDefault();
        let selectedCategory = $(this).data('target');
        $('button.faqTypeNavBtn').removeClass('active');
        $(this).addClass('active');

        $.ajax({
            url: URL,
            type: 'POST',
            data: {
                action: 'filter_faqs',
                category: selectedCategory
            },
            success: function (response) {
                $('#faq-results').html(response);
            }
        });
    });

    $('input.faqSearch').on('change keyup', function (e) {
        e.preventDefault();
        let searchQuery = $(this).val().toLowerCase();
        console.log(searchQuery);

        // AJAX request to load filtered FAQs
        $.ajax({
            url: URL,
            type: 'POST',
            data: {
                action: 'filter_faqs',
                search: searchQuery
            },
            success: function (response) {
                $('#faq-results').html(response);
            }
        });
    });

    $('#suburbSearch').on('input', function () {
        var searchKeyword = $(this).val();
        var ajaxurl = URL;

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                action: 'filter_suburbs',
                search_keyword: searchKeyword
            },
            success: function (response) {
                $('#suburbList').html(response);
            }
        });
    });
});