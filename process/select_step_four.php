<?php
	if($prepare = $pdo->prepare("SELECT * FROM information WHERE level=4 ORDER BY time DESC LIMIT 4"))
	{
		$prepare->execute();
		$return = array();
		while($result = $prepare->fetch())
		{
			$return[] = $result;
		}
		echo json_encode(array('success' => true, 'fortunes' => $return));
	}
	else
	{
		echo json_encode(array('success' => false));
	}
