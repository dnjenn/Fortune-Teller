<?php
	if($prepare = $pdo->prepare("SELECT * FROM information WHERE level=1"))
	{
		$prepare->execute();
		$return = array();
		while($result = $prepare->fetch())
		{
			$return[] = $result;
		}
		echo json_encode(array('success' => true, 'options' => $return));
	}
	else
	{
		echo json_encode(array('success' => false));
	}