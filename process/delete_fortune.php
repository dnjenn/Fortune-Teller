<?php
	$fortune = $ifilter['id'];
	$date = time();

	if($pdo->prepare("DELETE FROM information WHERE id=$id")->execute())
	{
		echo json_encode(array('success' => true));
	}
	else
	{
		echo json_encode(array('success' => false));
	}

