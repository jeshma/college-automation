<!DOCTYPE html>
<html>
<head>
	<title>semester</title>
</head>
<body>
<h2>semesters</h2>
<table border="1px">
	<thead>
		<th>name</th>
		<th>subjects</th>
	</thead>
	<tbody>
		<?php if (isset($semester) and $semester != FALSE): ?>
			<?php foreach ($semester as $key => $value): ?>
				<tr>
					<td><?php echo $value->name; ?></td>
					<td></td>
				</tr>
			<?php endforeach ?>
		<?php endif ?>
	</tbody>
</table>
<form action="<?php echo base_url('Semester_Controller/add')?>" name="addform" id="addform" method="post">
	<h3>ADDING SEMESTER</h3>
	name:<input type="text" name="name" id="name">
	<?php if (isset($id)): ?>
		<input type="hidden" name="id" value="<?php echo $id;?>">
	<?php endif ?>
	<input type="submit" name="submit" value="add">
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
