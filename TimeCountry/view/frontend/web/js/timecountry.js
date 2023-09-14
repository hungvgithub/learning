define([
    'jquery',
], function ($) {
    'use strict';

    return function (config, element) {
        $('.country').on('change', function () {
            let countrySelected = $("option:selected").val();
            $.ajax({
                url: config['url'],
                type: 'POST',
                dataType: 'json',
                data: {
                    country: countrySelected
                },
                showLoader: false
            }).done(function (result) {
                $('.time-select').val(result);
            });
        });
    }
});
