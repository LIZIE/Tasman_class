//단발성 메소드
var config = {
    //메모리 처리하면 용량을 많이 먹기 때문에
    //가능하면 변수처리하는 것이 좋다
    baseUrl:window.location.origin + "/sunday/week9",
    url: "http://128.199.188.157:7000/api/",
    req: {
        post: function(uri, param, success, fail) {
            //url 은 일반 웹주소,
            //uri는 인터넷에서 사용되는 리소스를 지칭할때 쓰는말
            //param : 예를 들어 이메일, 패스워드 등.

            $.post(config.url + uri, param)
                //? : 이 문은 삼항 연산자이며 if문과 역할이 똑같다
                //타입 - 숫자, 문자, null, undefied, boolean, object
                //null : 값이 없다. undefied : 지정이 안되어 있다.
                //java script는 undefied를 써서 작성한다
                //성공하면 config.success를 실패하면 success가 적용
                .done(success == undefined ? config.req.success : success)
                .fail(fail == undefined ? config.req.fail : fail)
        },
        get: function(uri, param, success, fail) {
            $.get(config.url + uri, param)
            //done, fail 은 콜백 메소드
                .done(success == undefined ? config.req.success : success)
                .fail(fail == undefined ? config.req.fail : fail)
        },
        success: function(res) {
            console.log(res);
        },
        fail: function(res) {
            console.log(res);
        }
    }
}


$(config.init);
