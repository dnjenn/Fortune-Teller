$(document).ready(function() {
	$('#list_fortunes').click(function(e) {
		e.preventDefault();
		$.post('/api/select_fortunes', function(data) {
			$('#fortune_holder').html('<ul></ul>');
			for(i in data.fortunes)
			{
				var flagged = '';
				if(data.fortunes[i].flagged)
				{
					flagged = 'not flagged';
				}
				else
				{
					flagged = 'flagged';
				}
				$('#fortune_holder ul').append('<li>'+data.fortunes[i].description+"   "+flagged+"</li>");
			}
		}, "json");
	});
});
