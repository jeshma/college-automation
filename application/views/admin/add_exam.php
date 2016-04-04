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
<<<<<<< HEAD
		<button type="submit">add</button>
		</form>
		<?php if (isset($error)) {
	echo $error;
}
if (isset($message)) {
	echo $message;
}

 ?>
=======
		<button type="submit">Add</button>
	</form>
>>>>>>> aa74633954a2f7a586d2a59b5974ac839c8f9512
</body>
</html>