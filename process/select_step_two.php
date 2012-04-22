<?php
	if($prepare = $database->find("SELECT * FROM information WHERE level=2"))
	{
		echo json_encode(array('success' => true, 'options' => $prepare));
	}
	else
	{
		echo json_encode(array('success' => false));
	}