$(function(){
	var data;

	$sexy=$("#sexy");

	function callback(img,selection){
		data={
			idx: $("input[name=idx]").val(),
			ori_width: $sexy.width(),
			ori_height: $sexy.height(),
		};
		for(var key in selection){
			data["sel_"+key.toString()]=selection[key];
		}
	}

	$("#sexy").imgAreaSelect({ aspectRatio: '304:180', handles: true, onSelectEnd: callback});


	$("#submit").click(function(){
		$.ajax({
			url: "/submit.json",
			type: "post",
			dataType: "json",
			data: data,
			success: function(response){
				location.reload();
			}
		});
	});
});
