$.getJSON("test.json", function(obj) {

	var finalNum = 50;

    
	$.each(obj, function(key, value) {
		finalNum -= Number(value.amount);
		$('#list').append("<li>"+value.category+" $"+value.amount+"</li>");
	});

	$('#total').append("<li>$"+finalNum.toFixed(2)+"</li>");

});