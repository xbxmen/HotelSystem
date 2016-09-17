$("#submit").click(function(){
	$("#tip").text("");	
	var roomnumber = $("#room_number").val();
	if(roomnumber != ""){
		$.ajax({
			type:"Post",
			url:"../interface/account/CheckOutController.php",
			data:{
				'roomnumber':roomnumber
			},
			dataType:"json",
			success: function(data){
				if(data['statue'] == -1){
					window.location.href="HomePage.php";
				}else if(data['statue'] == 1){
					alert("退房成功!!!");
					$("#room_number").val(" ");
				}else{
					$("#tip").text("哇哦，房间信息有误！！");	
					return;
				}
			},
			error: function(data){
				console.log(data);	
			}
		});
	}else{
		$("#tip").text("请您输入房间号~~~~");	
		return;
	}
});