<!DOCTYPE html>
<html>
<head>
	
	<title></title>
<style type="text/css">
body{
    text-align: center;
     
}
</style>
	
</head>
<body>
	<div id="show"></div>

	<script type="text/javascript" src="includes/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('all_users.php')
			}, 100);
		}); 
	</script>
</body>
</html>