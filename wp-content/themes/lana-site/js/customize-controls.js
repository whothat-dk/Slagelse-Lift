/**
 * @typedef {(object)} lanaL10n
 */
jQuery(function () {

    var customize_theme_controls = jQuery('#customize-theme-controls');

    var sections = [
        customize_theme_controls.find('#accordion-section-lana_site_display'),
        customize_theme_controls.find('#accordion-section-lana_site_header'),
        customize_theme_controls.find('#accordion-section-background_image'),
        customize_theme_controls.find('#accordion-section-lana_site_footer')
    ];

    jQuery.each(sections, function (id, section) {
        section.find('.accordion-section-title').append(
            jQuery('<span>').addClass('pull-right').addClass('label').addClass('label-primary').text(lanaL10n['lanaSiteLabel'])
        );
    });

    /**
     * When change footer type
     * show or hide footer text
     */
    customize_theme_controls.find('#sub-accordion-section-lana_site_footer').find('#customize-control-lana_site_footer_type_select').find('select').on('change', function () {

        var control_footer_text = jQuery(this).closest('#sub-accordion-section-lana_site_footer').find('#customize-control-lana_site_footer_text_text');

        if (jQuery(this).val() == 'text') {
            control_footer_text.show();
        } else {
            control_footer_text.hide();
        }

    }).trigger('change');

});