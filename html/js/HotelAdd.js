jQuery(function($){
$("#submit").click(function(){
		$("#tip").text("");
		var roomnumber = $("#pproomnumber").val();
		var type = $("#pptype").val();
		var price = $("#ppprice").val();
		
		if(roomnumber != "" && type != "" && price != ""){
			$.ajax({
				type:"Post",
				url:"../interface/account/RoomAdd.php",
				data:{
					'roomnumber':roomnumber,
					'type':type,
					'price':price,
				},
				dataType:'json',
				success:function(data){
					if(data['statue'] == 1){
						alert("添加房间成功！！！");
						window.location.href = "HotelAdd.php";
					}else if(data['statue'] == -1){
						alert("登录超时！请重新登录！");
						window.location.href = "LoginFrame.php";
					}
				}
			});
		}else{
			$("#tip").text("请您补全上面的信息！！！");			
		}
	});
});

