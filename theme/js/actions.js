jQuery(document).ready(function ($) {

    $(document).on('change', '.formFilter', function(){

        let ids = $('.form-filter').serialize();

        $.ajax({

            url: globals.url,
            data: ids,
            success: function (data) {

                $('.ajax-post').html(data);

            }
        });
    })
});