<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function doLogin(Request $request){
    	//try catch 로 해야함
    	try{
    		//배열 생성
	    	$credentials = [
	    	//name 값이 넘어온다
	    	'username' => $request->username,
	    	'password' => $request->password
	    	];

	    	//유효성 검사
	    	$validator = \Validator::make($credentials,[
	    		//or |
	    		'username' => 'required',
	    		'password' => 'required'
	    	]);

	    	if($validator->fails()){
	    		return $validator->errors();
	    	}

	    	// attempt 함수는 로그인 체킹(체크 후 인증이 맞으면 세션 정보를 만들어 준다)을 한다.
	    	//\Auth::check(); 는 맞냐 안맞냐만 체크
	    	//\Auth::user()->name; 유저정보 호출 가능
	    	if(! \Auth::attempt($credentials)){
	    		return "login fail";
	    	}

	    	return "login success";
	    } catch(\Exeption $e){
	    	return $e->getLine().":".$e->getMessage();
	    }
	}
}

