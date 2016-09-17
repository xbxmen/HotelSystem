jQuery(function($){
	/*
	 显示职工 列表
	 * */
	$.ajax({
		type:"post",
		url:"../interface/account/EmployeeInfo.php",
		async:true,
		dataType:"json",
		success: function(data){
			if(data['statue']  == -1){
				window.location.href = "LoginFrame.php";
			}else{
				console.log(data);
				var tabDom = $("#evBody");
				tabDom.empty();
				var length = data.length;
				/*
				 向表格里面添加数据
				 * */
				if(length == undefined){
					var str = $("#tableItem").html().format(
						data.account,
						data.manager
					);
					tabDom.append(str);
				}else{
					for(var i=0;i < length;i++){
						var str = $("#tableItem").html().format(
							data[i].account,
							data[i].manager
						);
						tabDom.append(str);
					}
				}
			}
		}
	});
});