jQuery(function($){
$("#submit").click(function(){
		$("#tip").text("");
		var name = $("#ppname").val();
		var room_id = $("#pproom_rid").val();
		var money = $("#ppmoney").val();
		
		if(account != "" && password != "" && rpassword != "" && password == rpassword){
			$.ajax({
				type:"Post",
				url:"../interface/account/EmployeeAddController.php",
				data:{
					'account':account,
					'password':password,
				},
				dataType:'json',
				success:function(data){
					if(data['statue'] == 1){
						alert("添加员工成功！！！");
						window.location.href = "EmployeeAdd.php";
					}else if(data['statue'] == -1){
						alert("登录超时！请重新登录！");
						window.location.href = "LoginFrame.php";
					}
				}
			});
		}else if(password != rpassword){
			$("#tip").text("两次输入的密码不匹配！！请重新输入！");	
		}else{
			$("#tip").text("请您补全上面的信息！！！");			
		}
	});
});

