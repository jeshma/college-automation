<<!DOCTYPE html>
<html>
<head>
	
	<title>department</title>
	
</head>
<body>
<form action="<?php echo base_url('Department_Controller/add') ?>" name="addform" id="addform" method="post">
	name:<input type="text"name="name"id="name"><br/>
	description:<input type="text"name="description"id="description"><br/>
	<button name="submit">submit</button>
	</form>>
	<?php if (isset($error)) {
	echo $error;
}
if (isset($message)) {
	echo $message;
}

 ?>
</body>
</html>>