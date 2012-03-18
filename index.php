<? 
if(file_exists("config/config.php"))
{
	require_once("config/config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?=$title;?></title>
<link rel="stylesheet" href="assets/css/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="assets/js/scripts.js"></script>
</head>
<body>

<?php
	if($_GET['page'])
	{
		$page = $_GET['page'];
		if(file_exists('pages/'.$page.".php"))
		{
			require_once('pages/'.$page.".php");
		}
		else
		{
			echo "There doesn't seem to be a file named that.";
		}
	}
?>
</body>
</html>

<?php } else { ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?=$title;?></title>
<link rel="stylesheet" href="assets/css/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="assets/js/scripts.js"></script>
</head>
<body>
	Please make the config file and run setup.
</body>
</html>
<?php } ?>