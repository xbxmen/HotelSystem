$("#logOut").click(function(){
	$.ajax({
		type:"Post",
		url:"../interface/account/LogOut.php",
		dataType:"json",
		success: function(data){
			window.location.href="LoginFrame.php";
		},
		error: function(data){
			
		}
	});
	
});
