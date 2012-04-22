<?php
	$fortune = $ifilter['fortune'];
	$date = time();

	if(!preg_match('/(shit|piss|fuck|cunt|cock|fuck|damn)/', $fortune))
	{
		if($database->query("INSERT INTO information (level, description, flagged, time) VALUES (4, '$fortune', 0, $date)"))
		{
			echo json_encode(array('success' => true));
		}
		else
		{
			echo json_encode(array('success' => false, 'query' => "INSERT INTO information (level, description, flagged, time) VALUES (4, '$fortune', 0, $date)"));
		}
	}
	else
	{
		echo json_encode(array('success' => false, 'error' => 'cuss word'));
	}