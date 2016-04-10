<!doctype html>
<html lang="en">
<head>
		<title>login</title>
		 <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
</head>
<body>
 <section class="container">
    <div class="login">
      <h1>Login to admin</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open(base_url('User_controller/verify_login'),['id' => 'loginform', 'name' => 'loginform']) ?>
		<p><input type="text"name="username" id="username" placeholder="username" ><br/></p>
		<p><input type="password"name="password" id="password"  placeholder="password"><br/></p>
		<input type="submit" name="submit" id="submit" value="login">
	</form>
	</div>
</section>

<?php if (isset($message))
echo $message;
 ?>
	
</body>
</html>