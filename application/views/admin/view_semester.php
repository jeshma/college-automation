<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view semester</title>
</head>
<body>
	<?php if (isset($current_subject)): ?>
			<h3><?php echo $current_subject[0]->semester_name ?></h3> 
	<?php endif ?>
	<form action="<?php echo base_url('Semester_Subject_Controller/add') ?>" name="addform" id="addform" method="post">
		<select name="subjects" id="subjects">
		<?php foreach ($subjects as $key => $value): ?>
			<option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
		<?php endforeach ?>
		</select>
		<?php echo form_hidden('semester_id', $id); ?>
		<button name="addsubject" id="addsubject">Add subjects</button>
	</form>
	<?php if (isset($current_subject)): ?>
		<?php foreach ($current_subject as $key => $value): ?>
					<div><?php echo $value->subject_name ?></div>
				<?php endforeach ?>		
	<?php endif ?>
	<?php if (isset($message)): ?>
		<?php echo $message; ?>
	<?php endif ?>
</body>
</html>