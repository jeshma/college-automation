<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>student attendence</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php echo form_open(base_url('Attendence_Controller/add_attendence'),['id' => 'attendence','name' => 'attendence' ]) ?>

	 	<label for="staff">Select Student:</label> 
	<select name="student" id="student">
		<?php foreach ($student as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		} ?>
	</select><br>
	<label for="attendence">Attendence :</label>	
	<input type="text" id="attendence" name="attendence">
	<input type="submit" value="submit" id="submit">
	</form>
</body>
</html>