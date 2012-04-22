# How To Select Stuff From the Database with Ajax #

This should help you with selecting/deleting/insterting/etc stuff in the database

## Adding A New Fortune ##

	var input = {fortune : Fortune_to_Add};
	$.post('/api/insert_fortune', {'input' : input}, function(data) {
		//what_you_want_to_do_after_goes_here
		//Will return data.success = true on success, false on failure
	});

## Deleting A Fortune ##

	var input = {fortune : id_of_fortune_to_delete};
	$.post('/api/delete_fortune', {'input' : input}, function(data) {
		//what_you_want_to_do_after_goes_here
		//Will return data.success = true on success, false on failure
	});

## Flagging A Fortune ##

	var input = {fortune : id_of_fortune_to_delete};
	$.post('/api/flag_fortune', {'input' : input}, function(data) {
		//what_you_want_to_do_after_goes_here	
		//Will return data.success = true on success, false on failure
	});

## Select All Fortunes ##

	$.post('/api/select_fortunes', function(data) {
		//what_you_want_to_do_after_goes_here	
		//Will return data.success = true on success, false on failure. Also data.fortunes will be an array of fortunes
	});

## Select Items for Step 1 ##

	$.post('/api/select_step_one', function(data) {
		//what_you_want_to_do_after_goes_here	
		//Will return data.success = true on success, false on failure. Also data.options will be an array of options for step 1.
	});

## Select Items for Step 2 ##

	$.post('/api/select_step_two', function(data) {
		//what_you_want_to_do_after_goes_here	
		//Will return data.success = true on success, false on failure. Also data.options will be an array of options for step 2.
	});

## Select Items for Step 3 ##

	$.post('/api/select_step_three', function(data) {
		//what_you_want_to_do_after_goes_here	
		//Will return data.success = true on success, false on failure. Also data.options will be an array of options for step 3.
	});

## Select Items for Step 4 ##

	$.post('/api/select_step_four', function(data) {
		//what_you_want_to_do_after_goes_here	
		//Will return data.success = true on success, false on failure. Also data.options will be an array of options for step 4.
	});