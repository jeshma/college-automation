<!DOCTYPE html>
<html>
<head>
	<title>staff</title>
</head>
<body>
<?php echo form_open('Staff_Controller/add',['name' => 'addform', 'id' => 'addform']);
		echo validation_errors();
	 ?>
	 <br>
	name:<input type="text" name="name" id="name"><br/>
	address : <input type="text" name="address" id="address"><br>
	departments:<select name="departments" id="departments">

		<?php foreach ($departments as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
			
		}?>
	</select><br>
	<button>submit</button>
</form>

<?php if (isset($error)) {
	echo $error;
}
if (isset($message)) {
	echo $message;
}

 ?>
 </div>

</body>
</html>