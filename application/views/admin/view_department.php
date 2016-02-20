<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		

	if (isset($result)) 
	{
		foreach ($result as $key => $value) {?>
			<span>name  : <?php echo $value->name?></span>
	<?php }
	}
	?><br>
	<form action="<?php echo base_url('Course_Controller/add') ?>" name="addform" id="addform" method="post">
		<label for="course">add Course</label>
		<input type="text" name="course" id="course"><br>
		<label for="description">Description</label>
		<input type="text" name="description" id="description"><br>
		<button>add</button>
	</form>
</body>
</html>