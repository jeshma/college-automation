<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if (isset($result)) 
	{
		foreach ($result as $key => $value) {?>
			<span>name  : <?php echo $value->name?></span>
	<?php }
	}
	?><br>
	<form action="">
		<label for="addcource">add Cource</label>
		<input type="text" name="addcource" id="addcource"><br>
		<button>add</button>
	</form>
</body>
</html>