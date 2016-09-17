jQuery(function($){
	/*
	验证session
	 * */
	$.ajax({
		type:"post",
		url:"../interface/account/Session.php",
		async:true,
		dataType:"json",
		success: function(data){
			if(data == -1){
				window.location.href = "LoginFrame.php";
			}else if(data == 1){
				$("#admin").hide();
			}else if(data == 2){
				$("#admin").show();
			}
		}
	});
});