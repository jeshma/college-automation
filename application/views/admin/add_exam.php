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
		departments : <select name="departments" id="departments">
		<?php foreach ($departments as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		}
		?>
		</select><br>
		date : <input type="text" name="date"><br>
		time : <input type="text" name="time"><br>
		<button type="submit">add</button>
		</form>
		<?php if (isset($error)) {
	echo $error;
}
if (isset($message)) {
	echo $message;
}

 ?>
</body>
</html>