<!DOCTYPE html>
<html>
<head>
	<title>staff</title>
</head>
<body>

<form action="<?php echo base_url('Staff_Controller/add') ?>" name="addform" id="addform" method="post">
	name:<input type="text" name="name" id="name"><br/>
	address : <input type="text" name="address" id="address"><br>
	department:<select name="department" id="department">
		<option value="dep1">dep 1</option>
		<option value="dep2">dep 2</option>
		<option value="dep3">dep 3</option>
		<option value="dep4">dep 4</option>
	</select><br>
	<button name="submit">submit</button>
</form>

<?php if (isset($error)) {
	echo $error;
}
 ?>

</body>
</html>