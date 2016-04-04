<!DOCTYPE html>
<html>
<head>
	<title>staff</title>
</head>
<body>

<?php echo form_open('Staff_controller/add',['name' => 'addform', 'id' => 'addform']);
		echo validation_errors();
	 ?>
	name:<input type="text" name="name" id="name"><br/>
	address : <input type="text" name="address" id="address"><br>
	departments:<select name="departments" id="departments">
		<?php foreach ($depatments as $value) {
			echo '<option value="'.$value->$id.'">'.$value->name.'</option>';
		}?>
	</select><br>
	<button name="submit">submit</button>
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