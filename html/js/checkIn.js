function getRoomNumber(){
	$("#tip").text("");	
	var type = $("#room_type").val();
	var selDom = $("#room_number");
	selDom.empty();
	console.log(type);
	$.ajax({
		type:"post",
		url:"../interface/account/AvaListAccordingType.php",
		async:true,
		dataType:"json",
		data:{"type":type},
		success: function(data){
			console.log(data);
			if(data['statue']  == -1){
				window.location.href = "LoginFrame.php";
			}else if(data['statue'] == -3){
				var str = "<option value=''></option>";
				selDom.append(str);
				$("#tip").text(type+"已经没有房间了！！");	
				return;
			}else{
				var length = data.length;
				if(length == undefined){
					var str = "<option value='"+data.roomnumber+"'>"+data.roomnumber+"</option>";
					selDom.append(str);
				}else{
					for(var i=0;i<length;i++){
						var str = "<option value='"+data[i].roomnumber+"'>"+data[i].roomnumber+"</option>";
						selDom.append(str);
					}
				}
			}
		}
	});
}

jQuery(function($){
	/*
	 显示 可用的房间号 根据 类型    	默认是单人间
	 * */
	$("#room_type").change(getRoomNumber());
	
	$("#checkin").click(function(){
		$("#tip").text("");			
		var name = $("#cname").val();
		var sex  = $("#csex").val();
		var idCard = $("#idcard").val();
		var telphone = $("#zsphone").val();
		var rid  = $("#room_number").val();
		var deposit = $("#deposit").val();
		var money = $("#money").val();
		
		if(idCard.length < 18){
			$("#tip").text("身份证格式不正确！！");	
			return;
		}else if(telphone.length < 13){
			$("#tip").text("手机号格式不正确！");	
			return;
		}
		if(name != "" && telphone != "" && sex != "" && rid != "" 
			&& idCard != "" && deposit != "" && money != ""){
			$.ajax({
				type:"Post",
				url:"../interface/account/CheckInController.php",
				data:{
					'phone':telphone,
					'roomnumber':rid,
					'cardnumber':idCard,
					'name':name,
					'sex':sex,
					'deposit':deposit,
					'money':money
				},
				dataType:'json',
				success:function(data){
					console.log(data);
					if(data['statue'] == 1){
						alert("用户入住成功！！");
						$("#ciForm")[0].reset();
					}else{
						alert("用户入住失败！！请检查信息！！");
					}
				}
			});
		}else{
			$("#tip").text("请您补全上面的信息好不好了啦！！！");
			return;
		}
	});
});

