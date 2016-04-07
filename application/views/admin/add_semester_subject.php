<!DOCTYPE html>
<html>
<head>
	<title>semester_subject</title>
</head>
<body>
<form action="<?php echo base_url('Semester_Subject_Controller/add')?>" method="get" name="addform">
	<label for="semester"></label>
	<select name="semester" id="semester">
		<?php foreach ($semester as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		}
		?>
	</select><br><br>
	<label for="subject"></label>
		<select name="subject" id="subject">
		<?php foreach ($subject as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		}
        ?>
		</select>

		 <td class="width-20">
          <a class="remove" href="<?php echo base_url('Semester_Subject_Controller/delete/'.$value->id) ?>">remove</a>
        </td>
</form>
</body>
</html>