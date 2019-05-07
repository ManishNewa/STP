$('#components').on("click",function(){
	$('#components').addClass('active');
});

$('#calendar').on("click",function(){
	$('#calendar').addClass('active');
	$('#components').addClass('active');
	$('#dash').removeClass('active');
});