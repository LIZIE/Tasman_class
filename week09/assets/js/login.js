var login = {

    doLogin: function() {
        config.req.post("signin", 
			        	getParam('#form_login'), //param
			            login.successCallback,
			            login.failCallback);
    },
    successCallback: function(data) {
        //success
       /* $('.custom_form').css('display', 'none');
        $('.login_info p.name').text(data.name);
        $('.login_info p.email').text(data.email);
        $('.login_info p.password').text(data.password);

        $('#confirmed_form').css('display', 'block');
        $('#login_input_form').css('display', 'none');*/

        //oject data to text data
        var strData = JSON.stringify(data);
        //string data to base64 hashcode
        var baseObject = btoa(strData);
        window.location = config.baseUrl + "/main.html#"+baseObject;
    },
    failCallback: function(data) {
        //fail
        $('.custom_form').css('display', 'none');
        $('#failed_form').css('display', 'block');
    },



    doSignup: function() {
        config.req.post("signup", 
			        	getParam('#form_signup'),
			            login.signupSuccessCallback
        )

    },
    signupSuccessCallback: function(data) {

        clearForm($('#form_signup'));
        $('.alert-success').fadeIn("slow", function() {
            setTimeout(function() { $('.alert-success').fadeOut() }, 2000);
        })
    },

    setEvent: function() {
        $('#doLogin').click(login.doLogin);
        $('#doSignup').click(login.doSignup);
    },
    init: function() {
        login.setEvent();
    }

}
