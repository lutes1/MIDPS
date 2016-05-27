<!DOCTYPE HTML>
<html>
<title>Hi</title> 
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Pete" />
</head>
<style type="text/css">
.block{
    
margin: auto;
 
text-align:center;
width:25%;
   
}
</style>
<body>
<div class="block">
<form method="post" action="delete_user.php">
<input type="hidden" name="submitted" value="true"/>
<fieldset>
<legend>Delete User</legend>
        ID        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><input type="text" name="user_id" /></label><br/> <br/>
        Password  <label><input type="password" name="user_pass" /></label><br/> <br/>
</fieldset><br />
<input type="submit" value="Delete User" />
<input type="hidden" name="submit1" value="aaa"/>
</form>
</div>
<?php
header('');


?>
</body>
</html>