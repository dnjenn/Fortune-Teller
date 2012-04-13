<?php
	$fortune = $ifilter['id'];
	$date = time();

	if($database->query("UPDATE information SET flagged=1 WHERE id=$id"))
	{
		echo json_encode(array('success' => true));
	}
	else
	{
		echo json_encode(array('success' => false));
	}
