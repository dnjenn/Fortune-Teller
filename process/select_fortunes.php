<?php
	if($prepare = $database->find("SELECT * FROM information WHERE level=4"))
	{
		echo json_encode(array('success' => true, 'fortunes' => $prepare));
	}
	else
	{
		echo json_encode(array('success' => false));
	}