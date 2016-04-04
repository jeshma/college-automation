<!DOCTYPE html>
<html>
<head>
	<title>MARK ENTRY</title>
</head>
<body>
		Exam : <select name="examtypes" id="examtypes">
		<?php foreach ($examtypes as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		}
		?>
		</select>
		NAME:<input type="text" name="student">
		EXAM:<input type="text" name="type">
		SEMESTER : <select name="semester" id="semester">
		<?php foreach ($semester as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		}
		?>
		</select>



</body>
</html>