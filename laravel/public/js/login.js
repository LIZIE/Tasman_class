new Vue({
	el:'.container',
	data:{
		username:'',
		password:''
	},
	methods:{
		login:function(){
			//$data는 로그인쪽에서 파라메타쪽으로 엘리먼트값을 가져온다.
			axios.post('/login',this.$data)
				.then(response =>{
					console.log(response);
			});
		}
	}
});

