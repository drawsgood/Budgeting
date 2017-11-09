$.getJSON("test.json", function(obj) {

	var finalNum = 50;

  $(document).ready(function() {
	$.each(obj, function(key, value) {
		finalNum -= Number(value.amount);
		$('#list').append("<tr><td>$"+value.amount+"</td><td>"+value.category+"</td>");
	});

	$('#total').append("<h1 class='bg-primary text-center'>$"+finalNum.toFixed(2)+"</h1>");
});
	});