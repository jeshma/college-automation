<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sallary</title>
</head>
<body>
<table>
	<caption><?php 
		if(isset($result)){
		echo $result[0]->name ?></caption>
		<?php 
		}?>
		<thead>
			<tr>
				<h2>PAYROLL</h2></h2>
			</tr>
		</thead>
		<tbody>
		<?php 
		if(isset($payroll))
		{
		foreach($payroll as $key => $value){ 
		
			}?>

			<tr>
				<td><?php echo $value->name ?></td>
			</tr>
		<?php } ?>
		</tbody>
		<?php echo form_open(base_url('Payroll_Controller/add'),['name' => 'addform', 'id' => 'addform']); ?>
		<label for="staffs">staffs:</label>
		<input type="text" name="name" id="name"><br>
		<label for="date">date:</label>
		<input type="text" name="date" id="date"><br>
		<?php echo form_hidden('id', $id);?>
		<button>add</button>
</table>
	
</body>
</html>