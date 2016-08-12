/**
author:Jimin Lee
date: 2016.08.07
param: none;
return: none;
desc: When the login button has been clicked, the alert is opend
*/
var login = {

    doLogin: function() { //making to object of login
        // define var of email,  password
        var email = $('#exampleInputEmail1').val();
        var password = $('#exampleInputPassword1').val();

        $.post(config.url + "signin", { email: email, password: password })
            //success
            .done(function(data) {
                $('.custom_form').css('display', 'none');
                $('.login_info p.name').text(data.name);
                $('.login_info p.email').text(data.email);
                $('.login_info p.password').text(data.password);

                $('#confirmed_form').css('display', 'block');
                $('#login_input_form').css('display', 'none');
                //fail
            }).fail(function(data) {
                $('.custom_form').css('display', 'none');
                $('#failed_form').css('display', 'block');
            });
    },
    //setEvent Login
    setEvent: function() {
        $('#doLogin').click(login.doLogin);
    },
    //initialization login event
    init: function() {
        login.setEvent();
    }

}
