<!DOCTYPE html>
<html>
<head>
	<title>subject</title>
</head>
<body>
	<form action="<?php echo base_url('Subject_Controller/add') ?>" name="addform" id="addform" method="post">
	<label for="name"></label>	
	name : <input type="text" name="name" id="name">
	<input type="submit" name="submit" value="add">
	<input type="hidden" name="id" value="">
	</form>
</body>
</html>