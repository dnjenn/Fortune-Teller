<?php
	$fortune = $ifilter['id'];
	$date = time();

	if($database->query("DELETE FROM information WHERE id=$id"))
	{
		echo json_encode(array('success' => true));
	}
	else
	{
		echo json_encode(array('success' => false));
	}

