jQuery(document).ready(function($) {
    const darkBg = $('.dark-bg')
    
    $('.cb-btn').on('click', function() {
        darkBg.addClass('active')
        $('.cb-form').addClass('active')
    })

    $('.cb-form__close').on('click', function() {
        darkBg.removeClass('active')
        $('.cb-form').removeClass('active')
    })

    darkBg.on('click', function() {
        $('.active').removeClass('active')
    })

    /*** FRONT PAGE SLIDER ***/
    if($('.front-page__slider-wrapper').length) {
        $('.front-page__slider-wrapper .img-slider').slick({
            arrows: true,
            dots: true,
            prevArrow: '<button class="prev-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="next-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
            asNavFor: $('.front-page__slider-wrapper .txt-slider'),
            autoplay: true,
            autoplaySpeed: 2000,
        })

        $('.front-page__slider-wrapper .txt-slider').slick({
            asNavFor: $('.front-page__slider-wrapper .img-slider'),
            arrows: false,
            fade: true,
        })
    }

    /*** PRODUCT PAGE INTRO SLIDER  ***/
    if($('.product-intro .slider').length) {
        const slider = $('.product-intro .slider')

        slider.slick({
            arrows: false,
            dots: false,
            fade: true,
            infinite: false,
            slidesToShow: 1,
        })

        const navSlider = $('.product-intro .nav-slider')

        navSlider.on('click', function(e) {
            if($(e.target).hasClass('nav-slider-item') || $(e.target).hasClass('nav-slider-item__img')) {
                const target = $(e.target).hasClass('nav-slider-item') ? $(e.target) : $(e.target).parents('.nav-slider-item')
                const navFor = target.attr('data-for')

                $('.nav-slider-item.active').removeClass('active')
                target.addClass('active')
                slider.slick('slickGoTo', navFor)
            }
        })
    }

    /*** ABOUT BLOCK READ MORE ***/
    if($('.about-block__more').length)
    {
        $('.about-block__more').on('click', function(e) {
            const contentBlock = $('.about-block__content')

            if (contentBlock.css('height') === "290px") 
            {
                contentBlock.css('height', `${ contentBlock.prop("scrollHeight") }px`)
            } 
            else 
            {
                contentBlock.css('height', 290);
            }
            if($('.about-block__more').hasClass('active')) {
                $('.about-block__more span').text('Показать полностью')
            } else {
                $('.about-block__more span').text('Скрыть')
            }
            $('.about-block__more').toggleClass('active')
            contentBlock.toggleClass('active')
        })
    }

    /*** PRODUCT PAGE NAV TAB ***/
    if($('.product-nav').length)
    {
        const nav = $('.product-nav')
        nav.on('click', function(e) {
            if($(e.target).hasClass('product-nav__btn')) {
                const dataFor = $(e.target).attr('data-for')
                
                $('div[data-tab]').removeClass('active')
                $('div[data-tab="' + dataFor + '"]').addClass('active')

                $('button[data-tab-btn="product-tab-btn"]').removeClass('active')
                $(e.target).addClass('active')

            }
        })
    }

    // NAV MOBILE MENU
    const overlay = $('.dark-bg')

    function addActive(node)
    {
        node.addClass('active-el')
        overlay.addClass('active-el')
    }
    const hamburgerBtn = $('.header-bottom__menu-btn')
    const menu = $('.mobile-menu')
    hamburgerBtn.on('click', function() {
        addActive(menu)
    })

   
      const menuWrapper = $('.mobile-menu');
      hamburgerBtn.on('click', function() {
          menuWrapper.addClass('active');
            overlay.addClass('active');
      })

        $('.menu-item-has-children').on('click', function(e) {
            $(e.currentTarget).children('.sub-menu').addClass('active')
            $('.mobile-menu__back-btn').addClass('active')
      })
    
        $('.mobile-menu__back-btn').on('click', function() {
            if($('.sub-menu.active .sub-menu.active').length) {
               $('.sub-menu.active .sub-menu.active').removeClass('active')
            } else {
               $('.menu-item-has-children > .sub-menu').removeClass('active')
               $('.mobile-menu__back-btn').removeClass('active')
            }
      })

      $('.mobile-menu__close-svg').on('click', function() {
        $('.active-el').removeClass('active-el');
        $('.active').removeClass('active')
        overlay.removeClass('active-el')
    })

    overlay.on('click', function() {
        $('.active').removeClass('active-el')
        $('.active-el').removeClass('active-el')
    })


    if(window.screen.availWidth < 600) {
        $('.bottom-header__cb-btn').click(function() {
            $('.mobile-menu').removeClass('active')
            $('.mobile-menu').removeClass('active-el')
        })
    }

})