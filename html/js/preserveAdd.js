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
				var tabDom = $("#paBody");
				var selDom = $("#zsrid");
				var length = data.length;
				if(length == undefined){
					
				}else{
					tabDom.empty();
					selDom.empty();
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
					alert("添加订单成功！！！");
					window.location.href = "PreserveAdd.php";
				}
			});
		}else{
			$("#tip").text("请您补全上面的信息好不好了啦！！！");			
		}
	});
});

