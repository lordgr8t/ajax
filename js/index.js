$('.btn').click(function () {
	let like = $('.btn').attr("like");
	$(this).addClass('btn_pressed');
	
	$.ajax({
		url: "vendor/like.php",
		type: "POST",
		data: ({like: like}),
		dataType: "text",
		beforeSend: funcB,
		success: funcS
	});
});

function funcB(){
	// alert("data proces");
};
function funcS(data) {
	$('.btn').text(data);
	$('.btn').attr("like", data);
}