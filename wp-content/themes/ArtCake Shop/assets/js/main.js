jQuery(document).ready(function() {
    jQuery('.owl-carousel.testimonial-carousel').owlCarousel({
        items: 2,
        loop: true,
        smartSpeed: 1500,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoWidth: false,
        dots: false,
        margin:30,
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            }
        }
    }); 
    jQuery('.owl-carousel.popular-carousel').owlCarousel({
        items: 4,
        loop: true,
        smartSpeed: 1500,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoWidth: false,
        dots: false,
        margin:30,
        responsive: {
            0: {
                items: 1,
                center: true
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    }); 
    jQuery('.grid-product.index .grid#one-block').addClass('active');
    jQuery('.categories .wrapper-categories .item a').click( function() {
        var elementID = jQuery(this).attr('id');
        var element = jQuery('.grid-product.index .row');
        var name = "#" + elementID;
        element = element.children(name);
        if (!element.hasClass('active')) {
            elementOut = jQuery('.grid-product.index .grid.active');
            elementOut.removeClass('active');
            elementOut.removeClass('animate__fadeInRight');
            elementOut.addClass('animate__fadeOutLeft');
            element.addClass('active');
            element.removeClass('animate__fadeOutLeft');
            element.addClass('animate__fadeInRight');
        }
        return false;
    });
    jQuery('.mobile-menu-button').click( function() {
        jQuery('.mobile-menu-button').toggleClass('active');
        jQuery('.mobile-menu').toggleClass('disable');
        jQuery('.header .menu').toggleClass('mobile');
    });
    jQuery('select').niceSelect();
    jQuery('.tel-js').each( function() {
        var tempNumber = jQuery(this).html();
        var newNumber = "";
        for (var i = 0; i < 12; i++) {
            switch(i) {
                case 2:
                    newNumber = newNumber + " (" + tempNumber[i];
                    break;
                case 4:
                    newNumber = newNumber + tempNumber[i] + ") ";
                    break;
                case 7:
                    newNumber = newNumber + tempNumber[i] + "-";
                    break;
                case 9:
                    newNumber = newNumber + tempNumber[i] + "-";
                    break;
                default:
                    newNumber = newNumber + tempNumber[i];
            }
        }
        jQuery(this).html(newNumber);

    });
});