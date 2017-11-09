$.getJSON("test.json", function(obj) {

	var finalNum = 50;

    
	$.each(obj, function(key, value) {
		finalNum -= Number(value.amount);
		$('#list').append("<li class="+"list-group-item"+"> $"+value.amount+" "+value.category+"</li>");
	});

	$('#total').append("<h1 class='bg-primary text-center'>$"+finalNum.toFixed(2)+"</h1>");

});