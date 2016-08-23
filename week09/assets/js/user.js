var user = {
    auth: {
        info: {}
    },
    onLoadEvent() {
        //1. hash
        var hashData = window.location.hash;
        //2. remove hash protocol
        var strBase64 = hashData.substr(1);
        //3. hash to decode (base64 to data)
        var decodedData = atob(strBase64);
        //4. convert string to object
        var objData = $.parseJSON(decodedData);

        user.auth._id = objData._id;
        user.auth.email = objData.email;
        user.auth.name = objData.name;
        user.auth.password = objData.password;

        //set name data to loggedin element.
        $('.loggedin').text(objData.name);
        //사용자 전체 로딩
        user.findUserAll();

    },
    findUserAll: function() {
        //search
        config.req.get("search", {},
            user.successCallback,
            user.failCallback
        );
    },
    findUserByEmail: function() {
        config.req.post("search", { email: $('.keyword').val() },
            user.successCallback,
            user.failCallback
        );
    },
    successCallback: function(res) {
    	$('.search-alert').css('display', 'none');
        //1. node table
        var tbody = $('.table tbody');
        tbody.children().not('.tr-temp').remove();
        //easch 1st param data : real data
        //      2nd param : function 데이터 가공할 함수 
        $.each(res.result, function(index, value) {
            var objTr = $('.tr-temp').clone();

            objTr.find('#id').text(value._id);
            objTr.find('#email').text(value.email);
            objTr.find('#name').text(value.name);
            objTr.find('#password').text(value.password);

            objTr.removeClass('tr-temp');

            tbody.append(objTr);
        });
        //console.log(res);
    },

    failCallback: function(res) {
        $('.search-alert').css("display", "block");
    },
    //update data function
    doChange: function() {
        //console.log(getParam('.modal-body'));
        config.req.post("update" //uri
            , getParam('.modal-body') //param
            , user.successUpdateCallback //success
            , user.failUpdateCallback //fail
        );
    },
    //update success
    successUpdateCallback: function(res) {
        //console.log(res);
        //성공했을 경우는 display:none; 로 기본 설정
        $('#failed_form').css('display', 'none');
        //updage user info of top
        $('.loggedin').text(res.name);
        //updata data in modal div
        user.auth._id = res._id;
        user.auth.email = res.email;
        user.auth.name = res.name;
        user.auth.password = res.password;
        //update table data
        var updateData = $('.table tr:has(td:contains(' + res._id + '))');
        updateData.find('#name').text(res.name);
        updateData.find('#password').text(res.password);
        /*//search and then update
		user.findUserAll();
        $('.table tbody').find('#name').text(res.name);
		$('.table tbody').find('#password').text(res.password);*/
        //close the modal div
        $('#myModal').modal('hide');

    },
    //update fail
    failUpdateCallback: function(res) {
        $('#failed_form').css('display', 'block');
    },

    setEvent: function() {
        $('#btn_srch').click(user.findUserByEmail);
        $('#myModal').on('show.bs.modal', function(e) {
            $('.modal-body').find("#email").val(user.auth.email);
            $('.modal-body').find("#name").val(user.auth.name);
            $('.modal-body').find("#password").val(user.auth.password);
        });

        //when the dochange button was clikced,
        $('#doChange').click(user.doChange);
        //total search button
        $('#btn_Totalsrch').click(user.findUserAll);
    },
    init: function() {
        user.setEvent(); //event up event to elements
        user.onLoadEvent(); //when page onload, triggered.
    }
}
