<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view semester</title>
</head>
<body>
	<?php if (isset($result)): ?>
		<?php foreach ($result as $key => $value): ?>
			<h3><?php echo $value->name ?></h3> 
		<?php endforeach ?>
	<?php endif ?>
	<form action="<?php echo base_url('Semester_Subject_Controller/add') ?>" name="addform" id="addform" method="post">
		<select name="subjects" id="subjects" required="">
		<option value="" disabled="" selected="">subjects</option>
		<?php foreach ($subjects as $key => $value): ?>
			<option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
		<?php endforeach ?>
		</select>
		<?php echo form_hidden('semester_id', $id); ?>
		<button name="addsubject" id="addsubject">Add subjects</button>
	</form>
	<?php if ($current_subject != false): ?>
		<?php foreach ($current_subject as $key => $value): ?>
					<div><?php echo $value->subject_name ?></div>
				<?php endforeach ?>		
	<?php endif ?>
	<?php if (isset($message)): ?>
		<?php echo $message; ?>
	<?php endif ?>
</body>
</html>