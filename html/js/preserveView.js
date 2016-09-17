/*
 完成 订单
 * 
 * */
function checkin(obj){
	var pid = $(obj).attr("pid");
	$.ajax({
		type:"Post",
		url:"../interface/account/OrderComplete.php",
		data:{
			'pid':pid
		},
		dataType:"json",
		success: function(data){
			console.log()
			if(data['statue'] == -1){
				window.location.href="HomePage.php";
			}else if(data['statue'] == 1){
				alert("用户入住成功!!!");
				$("#pid"+pid).html("已入住");
			}else if(data['statue'] == -3){
				alert("不可重复提交!!!");
			}
		},
		error: function(data){
			console.log(data);	
		}
	});
}

/*
 取消订单 
 * */
function cancel(obj){
	var pid = $(obj).attr("pid");
	var rid = $(obj).attr("rid");
	console.log(pid);
	console.log(rid);
	$.ajax({
		type:"Post",
		url:"../interface/account/OrderCancel.php",
		data:{
			'rid':rid,
			'pid':pid
		},
		dataType:"json",
		success: function(data){
			console.log(data)
			if(data['statue'] == -1){
				window.location.href="HomePage.php";
			}else if(data['statue'] == 1){
				alert("成功取消订单!!!");
				$("#pid"+pid).html("已取消");
			}else if(data['statue'] == -3){
				alert("不可重复提交!!!");
			}
		},
		error: function(data){
			console.log(data);	
		}
	});
}



jQuery(function($){
	/*
	显示 订单列表
	 * */
	$.ajax({
		type:"post",
		url:"../interface/account/OrderInfo.php",
		async:true,
		dataType:"json",
		success: function(data){
			if(data['statue']  == -1){
				window.location.href = "LoginFrame.php";
			}else{
				console.log(data);
				var tabDom = $("#pvBody");
				tabDom.empty();
				var length = data.length;
				/*
				 向表格里面添加数据
				 * */
				if(length == undefined){
					var sta = reState(data.state);
					var price = "￥"+data.price;
					var str = $("#tableItem").html().format(
						data.id,
						data.cname,
						data.phone,
						data.rid,
						data.type,
						price,
						data.date,
						sta
					);
					tabDom.append(str);
				}else{
					
					for(var i=0;i < length;i++){
						var sta = reState(data[i].state);
						var price = "￥"+data[i].price;
						var str = $("#tableItem").html().format(
							data[i].id,
							data[i].cname,
							data[i].phone,
							data[i].rid,
							data[i].type,
							price,
							data[i].date,
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
				str = "已取消";
				break;
			case "2":
				str = "已入住";
				break;
			case "3":
				str = "预订中";
				break;
		}
		return str;
	}
	
});