$(document).ready( function() {
done();
});

function done() {
  setTimeout( function() { 
  updates(); 
  done();
  }, 200);
}

function updates()  {

	$.getJSON("fetch.php", function(data) {
		$("ul").empty();


		$.each(data.result, function() {
		$("ul").append("<table><tbody><tr><th>Id: "+this['ID']+"</th><td>Temp: "+this['temp']+"</td><td>Hum: "+this['hum']+"</td><td>Date: "+this['date']+"</td></tr></tbody></table>");
		});
	});
}