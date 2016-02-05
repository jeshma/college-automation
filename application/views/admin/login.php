<!DOCTYPE html>
<html>
<head>
		<title>login</title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open(base_url('User_controller/verify_login'),['id' => 'loginform', 'name' => 'loginform']) ?>
	NAME:<input type="text"name="username" id="username" ><br/>
	PASSWORD:<input type="password"name="password" id="password"><br/>
	<input type="submit" name="submit" id="submit">
</form>

<?php if (isset($message))
echo $message;
 ?>
	
</body>
</html>