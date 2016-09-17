jQuery(function($){
	/*
	 显示房间列表
	 * */
	$.ajax({
		type:"post",
		url:"../interface/account/RoomInfo.php",
		async:true,
		dataType:"json",
		success: function(data){
			if(data['statue']  == -1){
				window.location.href = "LoginFrame.php";
			}else{
				console.log(data);
				var tabDom = $("#hvBody");
				tabDom.empty();
				var length = data.length;
				/*
				 向表格里面添加数据
				 * */
				if(length == undefined){
					var str = $("#tableItem").html().format(
						data.roomnumber,
						data.type,
						data.price
					);
					tabDom.append(str);
				}else{
					for(var i=0;i < length;i++){
						var str = $("#tableItem").html().format(
							data[i].roomnumber,
							data[i].type,
							data[i].price
						);
						tabDom.append(str);
					}
				}
			}
		}
	});
	
});