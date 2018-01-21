$(window).load(function () {
    $('a.forgot-password-customer').click(function (event) {
        event.preventDefault();
        $('div.login-as-customer').hide();
        $('div.email-form').show();
    });

    $('input.send-email').click(function () {
        var data = {
            email: $('#tx_felogin_pi1-forgot-email').val()
        };

        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (regex.test(data['email'])){
            $.ajax({
                method: 'post',
                url: 'index.php?eID=send_mail',
                dataType: 'json',
                data: data['email'],
                success: function () {
                    $('div.email-form').hide();
                    $('div.send-success').show();
                }
            });
        }
    });
});
