## Adding A New Fortune ##

var input = {fortune : Fortune_to_Add};
$.post('/api/insert_fortune', {'input' : input}, function(data) {
	console.log(data);
});

## Deleting A Fortune ##

var input = {fortune : id_of_fortune_to_delete};
$.post('/api/delete_fortune', {'input' : input}, function(data) {
	console.log(data);
});

## Flagging A Fortune ##

var input = {fortune : id_of_fortune_to_delete};
$.post('/api/flag_fortune', {'input' : input}, function(data) {
	console.log(data);
});

## Select All Fortunes ##

$.post('/api/select_fortunes', function(data) {
	console.log(data);
});

## Select Items for Step 1 ##

$.post('/api/select\_step\_one', function(data) {
	console.log(data);
});

## Select Items for Step 2 ##

$.post('/api/select\_step\_two', function(data) {
	console.log(data);
});

## Select Items for Step 3 ##

$.post('/api/select\_step\_three', function(data) {
	console.log(data);
});

## Select Items for Step 4 ##

$.post('/api/select\_step\_four', function(data) {
	console.log(data);
});