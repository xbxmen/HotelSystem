jQuery(function($){
	/*
	 显示可用的房间号
	 * */
	$.ajax({
		type:"post",
		url:"../interface/account/AvailableList.php",
		async:true,
		dataType:"json",
		success: function(data){
			if(data['statue']  == -1){
				window.location.href = "LoginFrame.php";
			}else{
				/*先清空  表格*/
				var tabDom = $("#paBody");
				var selDom = $("#zsrid");
				tabDom.empty();
				selDom.empty();
				var length = data.length;
				if(length == undefined){
					/*
					 添加  房间 号
					 * */
					var str = "<option value='"+data.roomnumber+"'>"+data.roomnumber+"</option>";
					selDom.append(str);
					/*
					 添加 表格信息
					 * */
					var sta = reState(data.state);
					var str = $("#tableItem").html().format(
						data.roomnumber,
						data.type,
						data.price,
						sta
					);
					tabDom.append(str);
				}else{
					for(var i=0;i<length;i++){
						var str = "<option value='"+data[i].roomnumber+"'>"+data[i].roomnumber+"</option>";
						selDom.append(str);
					}
					for(var i=0;i < length;i++){
						var sta = reState(data[i].state);
						var str = $("#tableItem").html().format(
							data[i].roomnumber,
							data[i].type,
							data[i].price,
							sta
						);
						tabDom.append(str);
					}
				}
			}
		}
	});
	
	/*
	 返回状态信息
	 * */
		
	function reState(state){
		var str;
		switch(state){
			case "1":
				str = "未入住";
				break;
			case "2":
				str = "已入住";
				break;
			case "3":
				str = "已预订";
				break;
		}
		return str;
	}
	/*
	 提交  订单
	 * 
	 * */
	$("#submit").click(function(){
		$("#tip").text("");
		var name = $("#zsname").val();
		var telphone = $("#zsphone").val();
		var time = $("#zstime").val();
		var rid  = $("#zsrid").val();
		
		if(name != "" && telphone != "" && time != "" && rid != ""){
			$.ajax({
				type:"Post",
				url:"../interface/account/OrderAdd.php",
				data:{
					'phone':telphone,
					'roomnumber':rid,
					'date':time,
					'cname':name
				},
				dataType:'json',
				success:function(data){
					if(data['statue'] == 1){
						alert("添加订单成功！！！");
						window.location.href = "PreserveAdd.php";
					}else if(data['statue'] == -1){
						alert("登录超时！请重新登录！");
						window.location.href = "LoginFrame.php";
					}
				}
			});
		}else{
			$("#tip").text("请您补全上面的信息好不好了啦！！！");			
		}
	});
});

