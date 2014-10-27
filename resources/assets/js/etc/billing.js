(function() {

    var StripeBilling = {
        init: function(){
            this.form = $('#billing-form');
            this.submitButton = this.form.find('button[type=submit]');
            this.submitButtonValue = this.submitButton.html();
            var stripeKey = $('meta[name="stripe-publishable-key"]').attr('content');
            Stripe.setPublishableKey(stripeKey);

            this.bindEvents();
        },
        bindEvents: function() {
            this.form.on('submit', $.proxy(this.sendToken, this));
        },
        sendToken: function(event) {
            this.submitButton.html('<i class="fa fa-spinner fa-spin"></i> &nbsp; Processing').prop('disabled', true);

            Stripe.createToken(this.form, $.proxy(this.stripeResponseHandler, this));
            event.preventDefault();
        },
        stripeResponseHandler: function(status, response) {

            if(response.error) {
                this.form.find('div.alert').show().text(response.error.message);
                return this.submitButton.html(this.submitButtonValue).prop('disabled', false);
            }

            // token => response.id
            $('<input>', {
                type: 'hidden',
                name: 'stripe-token',
                value: response.id
            }).appendTo(this.form);

            this.form[0].submit();
        }
    };

    StripeBilling.init();
})();