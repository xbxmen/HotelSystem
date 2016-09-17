jQuery(function($){
	
	$("#checkin").click(function(){
		var name = $("#cname").val();
		var sex  = $("#csex").val();
		var idCard = $("#idcard").val();
		var telphone = $("#zsphone").val();
		var rtype = $("#room_type").val();
		var rid  = $("#zsrid").val();
		var deposit = $("#deposit").val();
		var money = $("#money").val();
		
		if(name != "" && telphone != "" && sex != "" && rid != "" 
			&& idCard != "" && rtype != "" && deposit != "" && money != ""){
			$.ajax({
				type:"Post",
				url:"../interface/account/CheckIn.php",
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

