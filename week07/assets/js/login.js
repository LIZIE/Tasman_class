/**
author:Jimin Lee
date: 2016.08.07
param: none;
return: none;
desc: When the login button has been clicked, the alert is opend
*/
/*var login = {
    req: function(param, value){
        val value = value;
        $.post(config.url+param, {})
        .done(function(){

        })
    },
    doSignup: function() {
       login.req("signup",param)
    },
    doLogin: function() { //로그인 시작
        login.req("signin",param)
    },
    setEvent: function() { //이벤트 초기화
        $('#doLogin').click(logoin.doLogin);
        $('#doSignup').click(logoin.doSignup);
    },
    init: function() { //객체 초기화
        login.setEvent();
    }
}
*/

function login() {
    var url = "http://128.199.188.157:7000/api/signin";
    //1. find email/password node
    //2. get node value
    //3. define var
    //4.assign value
    var email = $('#exampleInputEmail1').val();
    var password = $('#exampleInputPassword1').val();
    // get email pasword var
    //1. call alert window
    //updated by ddd 2016.08.07
    //alert(email + " : " + password);
    console.log(email + " : " + password);

    //jquery in-built method //제이쿼리가 미리 가지고 있는 함수
    $.post(url, { email: email, password: password })
        .done(function() {
            //success, status code 200
            reset();
            $('.confirmed-form').css('display', 'block');
        }).fail(function() {
            reset();
            //fail, status code 404(user not found), 500(internal server error)
            //1. find failed_form
            $('.failed-form').css('display', 'block');
            //2. form need to be shown css display block (none=>block)
        });
}

function reset() {
    $('.failed-form').css('display', 'none');
    $('.confirmed-form').css('display', 'none');
}

function init() {
    reset();
}
