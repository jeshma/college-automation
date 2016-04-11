<!doctype html>
<html lang="en">
<head>
		<title>login</title>
		 <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
    <style>

        .btn-home {
            border: 2px solid transparent;
            background: #3498DB;
            color: #ffffff;
            font-size: 16px;
            line-height: 25px;
            padding: 5px 10px;
            text-decoration: none;
            text-shadow: none;
            border-radius: 3px;
            box-shadow: none;
            transition: 0.25s;
            width: 30px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
 <section class="container">
    <div class="login">
        <a href="<?php echo base_url()?>" class="btn-home">home</a>
      <h1>Login to admin</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open(base_url('User_Controller/verify_login'),['id' => 'loginform', 'name' => 'loginform']) ?>
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