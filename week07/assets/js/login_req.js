/**
author:Jimin Lee
date: 2016.08.07
param: none;
return: none;
desc: When the login button has been clicked, the alert is opend
*/
var login = {
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

