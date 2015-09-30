(function ($) {
    $.Tocheckout = {
        checkout_url: null,
        init: function () {
            $(document).ajaxSuccess(function(e,xhr,settings){
                if (xhr.responseJSON && xhr.responseJSON.data && xhr.responseJSON.data.discount_coupon) {
                    location.href = $.Tocheckout.checkout_url;
                }
            });
        }
    }
})(jQuery);