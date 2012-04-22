<?php
	require_once('config/config.php');
	
	if(isset($_POST['input']))
	{
		foreach($_POST['input'] as $key=>$value)
		{
			$ifilter[$key] = $value;
		}
	}
	
	$page = $_GET['page'];
	$file = 'process/'.$page.'.php';
	if(file_exists($file)) 
	{ 
		require_once($file);
	} 
	else 
	{ 
		header("HTTP/1.0 404 Not Found");
	}