jQuery(document).ready(function () {
    let scroll_section = document.getElementsByClassName("scroll-section");
    scroll_section[0].className += " active";
});

let scroll_section = document.getElementsByClassName("scroll-section");
scroll_section[0].className += " active";

jQuery(".scroll-section").on('click', function (event) {
    jQuery('.active').removeClass('active');
    jQuery(this).addClass("active");
});

jQuery(function () {

    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();

        if (scroll < jQuery("#timeline-1").offset().top) {
            jQuery('.active').removeClass('active');
            jQuery('.scroll-section').eq(0).addClass("active");
        } else if (scroll < jQuery("#about-content").offset().top - 10) {
            jQuery('.active').removeClass('active');
            jQuery('.scroll-section').eq(1).addClass("active");
        } else {
            jQuery('.active').removeClass('active');
            jQuery('.scroll-section').eq(2).addClass("active");
        }
    });
});


(function (jQuery) {
    jQuery.fn.timeline = function () {
        var selectors = {
            id: jQuery(this),
            item: jQuery(this).find(".timeline-item"),
            activeClass: "timeline-item--active",
            img: ".timeline__img"
        };
        selectors.item.eq(0).addClass(selectors.activeClass);
        // selectors.id.css(
        //     "background-image",
        //     "url(" +
        //     selectors.item
        //     .first()
        //     .find(selectors.img)
        //     .attr("src") +
        //     ")"
        // );
        var itemLength = selectors.item.length;
        jQuery(window).scroll(function () {
            var max, min;
            var pos = jQuery(this).scrollTop();
            selectors.item.each(function (i) {
                min = jQuery(this).offset().top;
                max = jQuery(this).height() + jQuery(this).offset().top;
                var that = jQuery(this);
                if (i == itemLength - 2 && pos > min + jQuery(this).height() / 2) {
                    selectors.item.removeClass(selectors.activeClass);
                    // selectors.id.css(
                    //     "background-image",
                    //     "url(" +
                    //     selectors.item
                    //     .last()
                    //     .find(selectors.img)
                    //     .attr("src") +
                    //     ")"
                    // );
                    selectors.item.last().addClass(selectors.activeClass);
                } else if (pos <= max - 40 && pos + 150 >= min) {
                    // selectors.id.css(
                    //     "background-image",
                    //     "url(" +
                    //     jQuery(this)
                    //     .find(selectors.img)
                    //     .attr("src") +
                    //     ")"
                    // );
                    selectors.item.removeClass(selectors.activeClass);
                    jQuery(this).addClass(selectors.activeClass);
                }
            });
        });
    };
})(jQuery);

jQuery("#timeline-1").timeline();