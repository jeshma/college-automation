<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>	
	<table>
		<caption><?php echo $result[0]->name ?></caption>
		<thead>
			<tr>
				<th>cource</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($course as $key => $value){ ?>
			<tr>
				<td><?php echo $value->name ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<!-- 	<form action="<?php //echo base_url('Course_Controller/add') ?>" name="addform" id="addform" method="post">
 -->	<?php echo form_open(base_url('Course_Controller/add'),['name' => 'addform', 'id' => 'addform']); ?>
		<label for="course">add Course</label>
		<input type="text" name="course" id="course"><br>
		<label for="description">Description</label>
		<input type="text" name="description" id="description"><br>
		<?php echo form_hidden('id', $id);?>
		<button>add</button>
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