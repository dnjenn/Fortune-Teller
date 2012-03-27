<?php
	$fortune = $ifilter['fortune'];
	$date = time();

	if(!preg_match('/(shit|piss|fuck|cunt|cock|fuck|damn)/', $fortune))
	{
		if($pdo->prepare("INSERT INTO information (level, description, flagged, time) VALUES (4, '$fortune', 0, $date)")->execute())
		{
			echo json_encode(array('success' => true));
		}
		else
		{
			echo json_encode(array('success' => false));
		}
	}
	else
	{
		echo json_encode(array('success' => false, 'error' => 'cuss word'));
	}