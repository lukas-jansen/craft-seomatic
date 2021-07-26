/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

import SchemaTypeList from "@/vue/SchemaTypeList.vue";

/**
 * @author    nystudio107
 * @package   SEOmatic
 * @since     3.0.0
 */

    if (window.schemaSelectClass !== undefined) {
        // Create our vue instance(s)
        for (const el of document.querySelectorAll('.' + window.schemaSelectClass)) {
            let elementId = 'vue-' + Math.round(Math.random() * 1000);
            el.setAttribute('id', elementId);

            new Vue({
                el: '#' + elementId,
                components: {
                    'schema-type-list': SchemaTypeList,
                },
                data: {},
                methods: {},
                mounted() {
                },
            });
        }
    }

// Accept HMR as per: https://webpack.js.org/api/hot-module-replacement#accept
if (module.hot) {
    module.hot.accept();
}

function seomaticTabChangeHandler() {
    // Tab handler
    $('.seomatic-tab-links').on('click', function(e) {
        e.preventDefault();
        $('.seomatic-tab-links').removeClass('sel');
        $(this).addClass('sel');
        $('.seomatic-tab-content').addClass('hidden');
        var selector = $(this).attr('href');
        $(selector).removeClass('hidden');
    });
}

window.seomaticTabChangeHandler = seomaticTabChangeHandler;
window.seomaticTabChangeHandler();

function initFieldSettings() {

    const disableInputs = ($obj) => $obj.find('input, select, button').prop('disabled', true);
    const enableInputs = ($obj) => $obj.find('input, select, button').prop('disabled', false);

    disableInputs($('.inheritable-field .inherited'));

    $('.inheritable-field .lightswitch').on('change', function (ev) {
        if ($(this).hasClass('on')) {
            $(this).parents('.inheritable-field').addClass('defined-settings').removeClass('inherited-settings');
            enableInputs($(this).parents('.inheritable-field').find('.field-settings'));
        } else {
            $(this).parents('.inheritable-field').removeClass('defined-settings').addClass('inherited-settings');
            disableInputs($(this).parents('.inheritable-field').find('.field-settings'));
        }
    });

    // Show/hide the script settings containers
    var selector = $('.seomatic-script-lightswitch').find('.lightswitch');
    $(selector).each(function(index, value) {
        var value = $(this).find('input').first().val();
        if (value) {
            $(this).closest('.seomatic-script-wrapper').find('.seomatic-script-container').show();
        } else {
            $(this).closest('.seomatic-script-wrapper').find('.seomatic-script-container').hide();
        }
    });
    $(selector).on('click', function(e) {
        var value = $(this).find('input').first().val();
        if (value) {
            $(this).closest('.seomatic-script-wrapper').find('.seomatic-script-container').slideDown();
        } else {
            $(this).closest('.seomatic-script-wrapper').find('.seomatic-script-container').slideUp();
        }
    });

    // Show/hide the image source fields initially
    $('.seomatic-imageSourceSelect > select').each(function(index, value) {
        var popupValue = $(this).val();
        switch (popupValue) {
            case 'sameAsSeo':
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceNotFromUrl').show();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromField').hide();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromAsset').hide();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromUrl').hide();
                break;

            case 'fromField':
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceNotFromUrl').show();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromField').show();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromAsset').hide();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromUrl').hide();
                break;

            case 'fromAsset':
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceNotFromUrl').show();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromField').hide();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromAsset').show();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromUrl').hide();
                break;

            case 'fromUrl':
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceNotFromUrl').hide();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromField').hide();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromAsset').hide();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromUrl').show();
                break;
        }
    });
    // Handle hiding/showing the image source fields based on the selection
    $('.seomatic-imageSourceSelect > select').on('change', function(e) {
        switch (this.value) {
            case 'sameAsSeo':
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceNotFromUrl').slideDown();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromField').slideUp();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromAsset').slideUp();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromUrl').slideUp();
                break;

            case 'fromField':
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceNotFromUrl').slideDown();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromField').slideDown();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromAsset').slideUp();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromUrl').slideUp();
                break;

            case 'fromAsset':
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceNotFromUrl').slideDown();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromField').slideUp();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromAsset').slideDown();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromUrl').slideUp();
                break;

            case 'fromUrl':
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceNotFromUrl').slideUp();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromField').slideUp();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromAsset').slideUp();
                $(this).closest('.seomatic-imageSourceWrapper').children('.seomatic-imageSourceFromUrl').slideDown();
                break;
        }
    });

    // Show/hide the text source fields initially
    $('.seomatic-textSourceSelect select').each(function(index, value) {
        var popupValue = $(this).val();
        switch (popupValue) {
            case 'sameAsSeo':
            case 'sameAsGlobal':
            case 'sameAsSiteTwitter':
                $(this).closest('.value-wrapper').children('.seomatic-textSourceFromField').hide();
                $(this).closest('.value-wrapper').children('.seomatic-textSourceFromUrl').hide();
                break;

            case 'fromField':
            case 'summaryFromField':
            case 'keywordsFromField':
            case 'fromUserField':
                $(this).closest('.value-wrapper').children('.seomatic-textSourceFromField').show();
                $(this).closest('.value-wrapper').children('.seomatic-textSourceFromUrl').hide();
                break;

            case 'fromCustom':
                $(this).closest('.value-wrapper').children('.seomatic-textSourceFromField').hide();
                $(this).closest('.value-wrapper').children('.seomatic-textSourceFromUrl').show();
                break;
        }
    });
    // Handle hiding/showing the image source fields based on the selection
    $('.field-settings .seomatic-textSourceSelect select').on('change', function(e) {
        switch (this.value) {
            case 'sameAsSeo':
            case 'sameAsGlobal':
            case 'sameAsSiteTwitter':
                $(this).closest('.field-settings').children('.seomatic-textSourceFromField').hide();
                $(this).closest('.field-settings').children('.seomatic-textSourceFromUrl').hide();
                break;

            case 'fromField':
            case 'summaryFromField':
            case 'keywordsFromField':
            case 'fromUserField':
                $(this).closest('.field-settings').children('.seomatic-textSourceFromField').show();
                $(this).closest('.field-settings').children('.seomatic-textSourceFromUrl').hide();
                break;

            case 'fromCustom':
                $(this).closest('.field-settings').children('.seomatic-textSourceFromField').hide();
                $(this).closest('.field-settings').children('.seomatic-textSourceFromUrl').show();
                break;
        }
    });
}

if (typeof Craft.EntryTypeSwitcher !== 'undefined') {
    Garnish.on(Craft.EntryTypeSwitcher, 'typeChange', () => {
        initFieldSettings();
    });
}

$(function() {
    initFieldSettings();
});
