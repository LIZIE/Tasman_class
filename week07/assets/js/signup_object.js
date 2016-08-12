/**
author:Jimin Lee
date: 2016.08.07
param: none;
return: none;
desc: When the login button has been clicked, the alert is opend
*/
var signup = {

    doSignup: function() { //making to object of signup
        // define var of email, name, password
        var email = $('#exampleInputEmail1').val();
        var name = $('#exampleInputName1').val();
        var password = $('#exampleInputPassword1').val();
        //connect signup api, each name <- var name
        $.post(config.url + "signup", { email: email, name: name, password: password })
            .done(function(data) {
                //if it is succeed of signup
                $('.custom_form').css('display', 'none');
                $('#confirmed_form').css('display', 'block');
                $('#login_input_form').css('display', 'none');
                //if it is failed of signup
            }).fail(function(data) {
                $('.custom_form').css('display', 'none');
                $('#failed_form').css('display', 'block');
            });
    },
    //setEvent signup
    setEvent: function() {
        $('#doSignup').click(signup.doSignup);
    },
    //initialization signup event
    init: function() {
        signup.setEvent();
    }

}
