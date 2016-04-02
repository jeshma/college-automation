<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add exam</title>
</head>
<body>
	<?php echo form_open('Exam_controller/add',['name' => 'addform', 'id' => 'addform']);
		echo validation_errors();
	 ?>
		name : <input type="text" name="name" id="name"><br>
		departments : <select name="department" id="department">
			<option value="dep1">dep1</option>
			<option value="dep2">dep2</option>
			<option value="dep3">dep3</option>
		</select><br>
		date : <input type="text" name="date"><br>
		time : <input type="text" name="time"><br>
		<button type="submit">Add</button>
	</form>
</body>
</html>