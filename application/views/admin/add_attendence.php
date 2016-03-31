<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>attendence register</title>
</head>
<body>
<!-- <form name="attendance" action="add_attendence" method="post" accept-charset="utf-8"> -->
	<h3>add attendence</h3>
	<!-- select department : <select name="department" id="department">
		<option value="1">dep1</option>
		<option value="2">dep2</option>
		<option value="3">dep3</option>
	</select><br> -->
	<?php echo form_open(base_url('Attendence_Controller/add_attendence'),['id' => 'attendence','name' => 'attendence' ]) ?>
<!-- 	<?php //echo validation_error(); ?>
	 -->	<label for="staff">Select Staff :</label> 
	<select name="staff" id="staff">
		<?php foreach ($staff as $value) {
			echo '<option value="1'.$value->id.'">'.$value->name.'</option>';
		} ?>
	</select><br>
	<label for="attendence">Attendence :</label>	
	<input type="text" id="attendence" name="attendence">
	<input type="submit" value="submit" id="submit">
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