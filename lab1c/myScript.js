$(document).ready(function(){
	$("#suggest").keyup(function(){
		$.get("Suggest_M.php", {movie: $(this).val()}, function(data){
			$("datalist").empty();
			$("datalist").html(data);
		});
	});
});