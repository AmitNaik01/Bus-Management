function selectBrand() {
	// body...
	var x = document.getElementById("busNo").value;

	$.ajax({
		url:"showRoute.php",
		method: "POST",
		data:{
			id : x
		},
		success:function(data){
			$("#ans").html(data);

		}

	})
}