<? if(file_exists("config/config.php"))
{
	require_once("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, target-densityDpi=160dpi, initial-scale=1, user-scalable=1">

		<title>Origami Fortune Teller</title>
		<link rel="icon" href="img/logo_mini.png" type="image/png" />
		<script type="text/javascript" src= "http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
		<script type="text/javascript" src="assets/js/scripts.js"></script>

		<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
		<link href='http://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>

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