<!DOCTYPE HTML>
<html>
<title>MIDPS LAB4</title>
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
<form method="post" action="sign_up.php">
<input type="hidden" name="submitted" value="true"/>
<fieldset>
<legend >Sign Up</legend>
        <label>First name<input type="text" name="user_fname"  /></label><br /><br />
        <label>Last name <input type="text" name="user_lname" /></label> <br/><br/>
        <label>Login&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     <input type="text" name="user_id" /></label><br/> <br/>
        <label>Password  <input type="password" name="user_pass" /></label><br/> <br/>
</fieldset><br />
<input type="submit" value="Sign Up" />
</form>
</div>

</body>
</html>