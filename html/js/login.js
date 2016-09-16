$("#login").click(function(){
	var account = $("#account").val();
	var password = $("#pwd").val();
	if(account != "" && password != ""){
		$.ajax({
			type:"Post",
			url:"../interface/account/Login.php",
			data:{
				'account':account,
				'password':password
			},
			dataType:"json",
			success: function(data){
				
				if(data['statue'] == 1){
					window.location.href="HomePage.php";
				}else{
					alert("账号或者密码不正确!!!");
				}
			},
			error: function(data){
				console.log(data);	
			}
		});
	}else{
		alert("请您补全信息!!!");
	}
	
	
});
