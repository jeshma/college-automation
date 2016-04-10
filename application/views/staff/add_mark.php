<!DOCTYPE html>
<html>
<head>
	<title>MARK ENTRY</title>
</head>
<body>
		
		Name Of Student : <select name="student" id="student">
		<?php foreach ($student as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		}
		?>
		</select><br>
		Exam : <select name="examtypes" id="examtypes">
		<?php foreach ($examtypes as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		}
		?>
		</select><br>
		Semester : <select name="semester" id="semester">
		<?php foreach ($semester as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		}
		?>
		</select>



</body>
</html>