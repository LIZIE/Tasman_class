function getParam(id) {
    var values = {} // data 담는 json object
        //넘겨준 id로부터 file type이 아닌 모든 input 받아오기 
    var elements = $(id + " input:not([type='file'])").get(); // 우리가 받을 데이타
    //받아온 elements 전체 갯수
    var len = elements.length
    for (var i = 0; i < len; i++) {

        //elements에서 값을 받아올 수 있는 type만 처리
        switch (elements[i].type) {
            case "email":
            case "text":
            case "password":
                values[elements[i].name] = elements[i].value;
                break;
        }
    }
    //만들어진 값 리턴
    return values;
}
