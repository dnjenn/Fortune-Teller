<?php require_once("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?=$title;?></title>
<link rel="stylesheet" href="assets/css/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script>
	$(document).ready(function() {
		$('button').click(function() {
			var value = $('input').val(); 
			var input = {fortune : value};
			$.ajax({
				url: '/api/newFortune', 
				data: {'input' : input}, 
				type: 'POST',
				dataType: 'json',
				success: function(data) {
					$('#result').html('It came back '+data.toString());
				},
			});
		});
	});

</script>
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
<input type="text" />
<button>Press</button>
<p>This will return true on success and false on failure</p>
<p>So do data.success to see it.</p>

<p id="result"></p>
</body>
</html>
