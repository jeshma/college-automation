<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>courses</title>
	<link rel="stylesheet" href="../../../css/style.css">
</head>
<body>	
<!-- 	<form action="<?php //echo base_url('Course_Controller/add') ?>" name="addform" id="addform" method="post"> -->	
 		<?php echo form_open(base_url('Course_Controller/add'),['name' => 'addform', 'id' => 'addform']); ?>
		<h2>Course Description</h2>
 		<?php echo validation_errors(); ?>
 		<div class="left">
	 		<div class="group">
				<label for="course">Add Course</label>
				<input type="text" name="course" id="course"><br>
	 		</div>
 		</div>
 		<div class="right">
	 		<div class="group">
				<label for="description">Description</label>
				<input type="text" name="description" id="description"><br>
	 		</div>
 		</div>
		<?php echo form_hidden('id', $id);?>
 		<div class="group">
			<button class="btn-bg">Add</button>
 		</div>
	</form>
	<table id="course">
		<caption><?php //echo $result[0]->name ?></caption>
		<?php 
		if(isset($result) and $result != FALSE){?>
		<?php 
		}?>
		<thead>
			<tr>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
		<?php 

		if(isset($course) and $course != FALSE)
		{
		foreach ($course as $key => $value){
		 ?>
			<tr>
				<td class="width-80">
					<a href="<?php echo base_url('Course_Controller/view/'.$value->id) ?>"><?php echo $value->name ?></a>
				</td>
				<td class="width-20">
					<a class="remove" href="<?php echo base_url('Course_Controller/delete/'.$value->id) ?>">remove</a>
				</td>
			</tr>

		<?php } } ?>
		</tbody>
	</table>
	<?php if (isset($error)) {
	echo $error;
}
if (isset($message)) {
	echo $message;
}
?>
</body>
</html>