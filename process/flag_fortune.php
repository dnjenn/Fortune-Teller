<?php
	$fortune = $ifilter['id'];
	$date = time();

	if($pdo->prepare("UPDATE information SET flagged=1 WHERE id=$id")->execute())
	{
		echo json_encode(array('success' => true));
	}
	else
	{
		echo json_encode(array('success' => false));
	}
