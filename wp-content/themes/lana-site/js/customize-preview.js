(function ($) {

    wp.customize('blogname', function (value) {
        value.bind(function (blogname) {
            $('.header').find('.site-title').find('a').html(blogname);
        });
    });

    wp.customize('blogdescription', function (value) {
        value.bind(function (blogdescription) {
            $('.header').find('.site-description').html(blogdescription);
        });
    });

    wp.customize('background_color', function (value) {
        value.bind(function (background_color) {
            $('body').css('background-color', background_color);
        });
    });

    wp.customize('lana_site_tagline_color', function (value) {
        value.bind(function (tagline_color) {
            $('.header').find('.site-description').css('color', tagline_color);
        });
    });

    wp.customize('lana_site_footer_text', function (value) {
        value.bind(function (footer_text) {
            $('.footer').find('.footer-text').text(footer_text);
        });
    });

})(jQuery);